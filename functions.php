<?php

// Activer les fonctionnalités du thème
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

// Enqueue styles et scripts
function she_safe_enqueue_scripts()
{
    // Styles
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_style('she-safe-style', get_template_directory_uri() . '/css/style.css', [], '1.0');

    // Scripts
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], null, true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/script/safe-place.js', ['jquery', 'bootstrap-js'], '1.0', true);

    // Passer l'URL AJAX à JavaScript
    wp_localize_script('app-js', 'ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'she_safe_enqueue_scripts');

// Enregistrer le menu principal
register_nav_menus([
    'header' => 'Menu principal',
]);

// Ajouter des classes Bootstrap pour les menus WordPress
function she_safe_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}
function she_safe_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}
add_filter('nav_menu_css_class', 'she_safe_menu_class');
add_filter('nav_menu_link_attributes', 'she_safe_menu_link_class');

// Enregistrer le Custom Post Type pour les sondages
function register_sondage_cpt()
{
    register_post_type('sondage', [
        'labels' => [
            'name' => 'Sondages',
            'singular_name' => 'Sondage',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor'],
    ]);
}
add_action('init', 'register_sondage_cpt');

// Ajouter une métabox pour les options des sondages
function add_sondage_options_metabox()
{
    add_meta_box(
        'sondage_options',
        'Options de vote',
        'render_sondage_options_box',
        'sondage',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_sondage_options_metabox');

function render_sondage_options_box($post)
{
    $options = get_post_meta($post->ID, 'sondage_options', true) ?: [];
    wp_nonce_field('save_sondage_options', 'sondage_options_nonce');
    ?>
    <div id="sondage-options">
        <p>Ajoutez des options de vote (une par ligne) :</p>
        <div id="options-container">
            <?php foreach ($options as $option): ?>
                <div class="option-row">
                    <input type="text" name="sondage_options[]" value="<?php echo esc_attr($option); ?>"
                        placeholder="Entrez une option...">
                </div>
            <?php endforeach; ?>
        </div>
        <button type="button" id="add-option">Ajouter une option</button>
    </div>
    <?php
}

function save_sondage_options($post_id)
{
    if (!isset($_POST['sondage_options_nonce']) || !wp_verify_nonce($_POST['sondage_options_nonce'], 'save_sondage_options')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    $options = isset($_POST['sondage_options']) ? array_map('sanitize_text_field', $_POST['sondage_options']) : [];
    update_post_meta($post_id, 'sondage_options', $options);
}
add_action('save_post', 'save_sondage_options');

// AJAX pour les votes
function save_vote()
{
    if (!isset($_POST['parc'], $_POST['post_id'])) {
        wp_send_json_error(['message' => 'Paramètres manquants.']);
    }
    $parc = sanitize_text_field($_POST['parc']);
    $post_id = intval($_POST['post_id']);
    $votes = get_post_meta($post_id, 'sondage_votes', true) ?: [];
    $votes[$parc] = ($votes[$parc] ?? 0) + 1;
    update_post_meta($post_id, 'sondage_votes', $votes);
    wp_send_json_success(['votes' => $votes]);
}
add_action('wp_ajax_save_vote', 'save_vote');
add_action('wp_ajax_nopriv_save_vote', 'save_vote');

// Enregistrement des votes avec restriction d'IP
function she_safe_save_vote()
{
    if (isset($_POST['park_name'])) {
        global $wpdb;
        $park_name = sanitize_text_field($_POST['park_name']);
        $ip_address = $_SERVER['REMOTE_ADDR'];
        if ($wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM wp_safeplace_votes WHERE ip_address = %s", $ip_address))) {
            wp_send_json_error('Vous avez déjà voté.');
        }
        $wpdb->insert('wp_safeplace_votes', [
            'park_name' => $park_name,
            'ip_address' => $ip_address,
            'vote_date' => current_time('mysql')
        ]);
        wp_send_json_success('Vote enregistré avec succès.');
    }
}
add_action('wp_ajax_nopriv_she_safe_save_vote', 'she_safe_save_vote');
add_action('wp_ajax_she_safe_save_vote', 'she_safe_save_vote');

functions php
<?php

// Activer les fonctionnalités du thème
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

// Enqueue Bootstrap et les styles personnalisés
function she_safe_enqueue_scripts()
{
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
    );

    // Bootstrap Icons
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css'
    );

    // Votre fichier CSS personnalisé
    wp_enqueue_style(
        'style-css',
        get_template_directory_uri() . '/css/style.css'
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        null,
        true
    );

    // Votre fichier JS personnalisé
    wp_enqueue_script(
        'app-js',
        get_template_directory_uri() . '/script/safe-place.js',
        ['jquery', 'bootstrap-js'],
        1,
        true
    );

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
    $classes[] = 'nav-item'; // Ajoute 'nav-item' aux <li>
    return $classes;
}

function she_safe_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link'; // Ajoute 'nav-link' aux <a>
    return $attrs;
}

add_filter('nav_menu_css_class', 'she_safe_menu_class');
add_filter('nav_menu_link_attributes', 'she_safe_menu_link_class');

// Enregistrer le custom post type pour les sondages
function register_sondage_cpt()
{
    $args = array(
        'labels' => array(
            'name' => 'Sondages',
            'singular_name' => 'Sondage',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
    );
    register_post_type('sondage', $args);
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
    $options = get_post_meta($post->ID, 'sondage_options', true);
    if (!is_array($options)) {
        $options = [];
    }

    wp_nonce_field('save_sondage_options', 'sondage_options_nonce');
    ?>
    <div id="sondage-options">
        <p>Ajoutez des options de vote (une par ligne) :</p>
        <div id="options-container">
            <?php foreach ($options as $option): ?>
                <div class="option-row">
                    <input type="text" name="sondage_options[]" value="<?php echo esc_attr($option); ?>"
                        placeholder="Entrez une option...">
                    <button type="button" class="remove-option">Supprimer</button>
                </div>
            <?php endforeach; ?>
        </div>
        <button type="button" id="add-option">Ajouter une option</button>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('#add-option').addEventListener('click', function () {
                const container = document.querySelector('#options-container');
                const row = document.createElement('div');
                row.classList.add('option-row');
                row.innerHTML = `<input type="text" name="sondage_options[]" value="" placeholder="Entrez une option...">
                                            <button type="button" class="remove-option">Supprimer</button>`;
                container.appendChild(row);
            });
            document.querySelector('#options-container').addEventListener('click', function (e) {
                if (e.target.classList.contains('remove-option')) {
                    e.target.parentElement.remove();
                }
            });
        });
    </script>
    <?php
}

// Sauvegarder les options de sondage
/*
function save_sondage_options($post_id)
{
    if (!isset($_POST['sondage_options_nonce']) || !wp_verify_nonce($_POST['sondage_options_nonce'], 'save_sondage_options')) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['sondage_options'])) {
        $options = array_map('sanitize_text_field', $_POST['sondage_options']);
        update_post_meta($post_id, 'sondage_options', $options);
    } else {
        delete_post_meta($post_id, 'sondage_options');
    }
}
add_action('save_post', 'save_sondage_options');

// Ajouter un endpoint AJAX pour les votes
add_action('wp_ajax_save_vote', 'save_vote');
add_action('wp_ajax_nopriv_save_vote', 'save_vote');

function save_vote()
{
    if (!isset($_POST['parc']) || !isset($_POST['post_id'])) {
        wp_send_json_error(['message' => 'Paramètres manquants.']);
    }

    $parc = sanitize_text_field($_POST['parc']);
    $post_id = intval($_POST['post_id']);

    $votes = get_post_meta($post_id, 'sondage_votes', true);
    if (!is_array($votes)) {
        $votes = [];
    }

    if (!isset($votes[$parc])) {
        $votes[$parc] = 0;
    }
    $votes[$parc]++;

    update_post_meta($post_id, 'sondage_votes', $votes);

    wp_send_json_success(['votes' => $votes]);
}

*/


// Enregistrer le vote
function she_safe_save_vote()
{
    if (isset($_POST['park_name'])) {
        global $wpdb;
        $park_name = sanitize_text_field($_POST['park_name']);
        $ip_address = $_SERVER['REMOTE_ADDR'];

        // Vérifier si l'utilisateur a déjà voté
        $vote_check = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM wp_safeplace_votes WHERE ip_address = %s",
            $ip_address
        ));

        if ($vote_check > 0) {
            wp_send_json_error('Vous avez déjà voté.');
            wp_die();
        }

        // Insérer le vote
        $wpdb->insert('wp_safeplace_votes', [
            'park_name' => $park_name,
            'ip_address' => $ip_address,
            'vote_date' => current_time('mysql')
        ]);

        wp_send_json_success('Vote enregistré avec succès.');
        wp_die();
    }
}
add_action('wp_ajax_nopriv_she_safe_save_vote', 'she_safe_save_vote');
add_action('wp_ajax_she_safe_save_vote', 'she_safe_save_vote');

function mon_formulaire_simple()
{
    // Sauvegarde des données
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = htmlspecialchars($_POST['data']);
        file_put_contents('data.txt', $data . PHP_EOL, FILE_APPEND);
    }

    // Récupération des données
    $dataList = file_exists('data.txt') ? file('data.txt', FILE_IGNORE_NEW_LINES) : [];

    // HTML pour le formulaire
    ob_start(); ?>
    <div class="container">
        <h1>Soumettre une donnée</h1>
        <form method="POST">
            <input type="text" name="data" placeholder="Entrez une donnée..." required>
            <button type="submit">Envoyer</button>
        </form>

        <h2>Liste des données :</h2>
        <ul>
            <?php foreach ($dataList as $data): ?>
                <li><?= htmlspecialchars($data) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('formulaire_simple', 'mon_formulaire_simple');





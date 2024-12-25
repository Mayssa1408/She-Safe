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

    wp_enqueue_script('sondage-js', get_template_directory_uri() . '/script/sondage.js', ['jquery'], '1.0', true); // Ajout de sondage.js

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

// PHP to handle form submissions
add_action('wp_ajax_add_testimonial', 'add_testimonial');
add_action('wp_ajax_nopriv_add_testimonial', 'add_testimonial');

function add_testimonial()
{
    $place = sanitize_text_field($_POST['place']);
    $name = sanitize_text_field($_POST['name']);
    $comment = sanitize_textarea_field($_POST['comment']);

    $testimonials = get_option('safe_place_testimonials', []);
    $testimonials[] = [
        'place' => $place,
        'name' => $name,
        'comment' => $comment
    ];

    update_option('safe_place_testimonials', $testimonials);

    wp_send_json_success();
}

/**Zeyneb */

// Gestion de la création d'un compte utilisateur
function create_account()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_account_nonce'])) {
        if (wp_verify_nonce($_POST['create_account_nonce'], 'create_account_action')) {
            // Récupération et validation des données du formulaire
            $user = isset($_POST['uname']) ? sanitize_user($_POST['uname']) : '';
            $email = isset($_POST['uemail']) ? sanitize_email($_POST['uemail']) : '';
            $pass = isset($_POST['upass']) ? sanitize_text_field($_POST['upass']) : '';
            $repass = isset($_POST['repass']) ? sanitize_text_field($_POST['repass']) : '';

            // Vérifications des champs
            if (empty($user) || empty($email) || empty($pass) || empty($repass)) {
                wp_die('Tous les champs sont requis.');
            }

            if ($pass !== $repass) {
                wp_die('Les mots de passe ne correspondent pas.');
            }

            if (username_exists($user) || email_exists($email)) {
                wp_die('Le nom d’utilisateur ou l’adresse e-mail est déjà enregistré.');
            }

            // Création de l'utilisateur
            $userdata = [
                'user_login' => wp_slash($user),
                'user_email' => wp_slash($email),
                'user_pass' => $pass,
            ];

            $user_id = wp_insert_user($userdata);

            if (!is_wp_error($user_id)) {
                // Rediriger après création réussie
                wp_redirect(esc_url(home_url('/')));
                exit;
            } else {
                wp_die('Une erreur est survenue lors de la création du compte.');
            }
        } else {
            wp_die('Nonce de sécurité invalide.');
        }
    }
}
add_action('init', 'create_account');

// Enregistrement du style de la page index
function she_safe_enqueue_styles()
{
    wp_enqueue_style(
        'she-safe-main-style',
        get_template_directory_uri() . '/css/index.css',
        array(),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'she_safe_enqueue_styles');
//function pour css lier a la page d'acceuil // 
function mon_theme_enqueue_styles()
{
    wp_enqueue_style('mon-style', get_stylesheet_uri()); // Charge le fichier style.css
    // Ou un fichier CSS spécifique
    wp_enqueue_style('mon-style-personnalise', get_template_directory_uri() . '/css/index.css');
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_styles');

//////////////connexion page /////////////////
// Rediriger l'utilisateur connecté vers une page spécifique après la connexion
function redirect_after_login($redirect_to, $request, $user)
{
    // Vérifiez si l'utilisateur a un rôle spécifique
    if (in_array('subscriber', (array) $user->roles)) {
        // Si l'utilisateur est un abonné, rediriger vers la page d'accueil
        return home_url();
    }
    // Par défaut, rediriger vers le tableau de bord
    return $redirect_to;
}
add_filter('login_redirect', 'redirect_after_login', 10, 3);






function she_safe_forum_form()
{
    ob_start();  // Commencer la capture du contenu dans une variable
    ?>
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
        <label for="user_testimony">Partagez votre témoignage :</label>
        <textarea name="user_testimony" id="user_testimony" rows="5" class="form-control"
            placeholder="Racontez votre expérience ici..." required></textarea>
        <input type="submit" name="submit_testimony" value="Envoyer" class="btn btn-primary mt-3">
    </form>
    <?php

    // Si le formulaire est soumis, traitons le témoignage
    if (isset($_POST['submit_testimony'])) {
        $testimony = sanitize_text_field($_POST['user_testimony']);

        // Vous pouvez enregistrer ce témoignage dans la base de données ou l'envoyer par e-mail
        // Exemple : enregistrer le témoignage en tant que publication
        $post_data = array(
            'post_title' => 'Témoignage soumis le ' . date('d-m-Y'),
            'post_content' => $testimony,
            'post_status' => 'publish',
            'post_author' => 1,  // Changez selon l'ID de l'utilisateur
            'post_type' => 'post',  // Ou utilisez un type personnalisé comme "témoignages"
        );

        wp_insert_post($post_data);

        // Message de confirmation
        echo '<p>Merci pour votre témoignage ! Il a été soumis avec succès.</p>';
    }

    return ob_get_clean();  // Retourner le contenu capturé
}

// Enregistrer le shortcode
add_shortcode('forum_form', 'she_safe_forum_form');


/// faq function et js lien  ////
/*function she_safe_enqueue_scripts()
{
    if (is_page_template('faq-page.php')) {
        wp_enqueue_style('faq-styles', get_template_directory_uri() . '/faq-style.css', [], '1.0');
        wp_enqueue_script('faq-script', get_template_directory_uri() . '/faq-script.js', [], '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'she_safe_enqueue_scripts');
*/
function she_safe_handle_contact_form()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'], $_POST['subject'], $_POST['message'])) {
        $name = sanitize_text_field($_POST['name']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        // Envoi d'email
        $admin_email = get_option('admin_email');
        $email_subject = "Contact: " . $subject;
        $email_message = "Nom: $name\n\nMessage:\n$message";

        wp_mail($admin_email, $email_subject, $email_message);

        // Redirection avec succès
        wp_redirect(add_query_arg('success', '1', wp_get_referer()));
        exit;
    }
}
add_action('admin_post_nopriv_she_safe_contact', 'she_safe_handle_contact_form');
add_action('admin_post_she_safe_contact', 'she_safe_handle_contact_form');

/****************************account */
function enqueue_account_dropdown_script() {
  wp_enqueue_script('account-dropdown', get_template_directory_uri() . '/js/account-dropdown.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_account_dropdown_script');
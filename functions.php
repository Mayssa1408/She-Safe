<?php
// Activer les fonctionnalités de base du thème
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

// Enregistrement des styles et scripts
function styles_scripts() {
    // Intégration de Bootstrap
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
    );

    // Enregistrement du style principal
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/css/index.css'
    );

    // Scripts JavaScript nécessaires
    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'styles_scripts');

// Gestion de la création d'un compte utilisateur
function create_account() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_account_nonce'])) {
        if (wp_verify_nonce($_POST['create_account_nonce'], 'create_account_action')) {
            // Récupération et validation des données du formulaire
            $user   = isset($_POST['uname']) ? sanitize_user($_POST['uname']) : '';
            $email  = isset($_POST['uemail']) ? sanitize_email($_POST['uemail']) : '';
            $pass   = isset($_POST['upass']) ? sanitize_text_field($_POST['upass']) : '';
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
                'user_pass'  => $pass,
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
function she_safe_enqueue_styles() {
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
function mon_theme_enqueue_styles() {
  wp_enqueue_style('mon-style', get_stylesheet_uri()); // Charge le fichier style.css
  // Ou un fichier CSS spécifique
  wp_enqueue_style('mon-style-personnalise', get_template_directory_uri() . '/css/index.css');
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_styles');

//////////////connexion page /////////////////
// Rediriger l'utilisateur connecté vers une page spécifique après la connexion
function redirect_after_login($redirect_to, $request, $user) {
  // Vérifiez si l'utilisateur a un rôle spécifique
  if (in_array('subscriber', (array) $user->roles)) {
      // Si l'utilisateur est un abonné, rediriger vers la page d'accueil
      return home_url();
  }
  // Par défaut, rediriger vers le tableau de bord
  return $redirect_to;
}
add_filter('login_redirect', 'redirect_after_login', 10, 3);






function she_safe_forum_form() {
    ob_start();  // Commencer la capture du contenu dans une variable
    ?>
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
        <label for="user_testimony">Partagez votre témoignage :</label>
        <textarea name="user_testimony" id="user_testimony" rows="5" class="form-control" placeholder="Racontez votre expérience ici..." required></textarea>
        <input type="submit" name="submit_testimony" value="Envoyer" class="btn btn-primary mt-3">
    </form>
    <?php

    // Si le formulaire est soumis, traitons le témoignage
    if (isset($_POST['submit_testimony'])) {
        $testimony = sanitize_text_field($_POST['user_testimony']);

        // Vous pouvez enregistrer ce témoignage dans la base de données ou l'envoyer par e-mail
        // Exemple : enregistrer le témoignage en tant que publication
        $post_data = array(
            'post_title'   => 'Témoignage soumis le ' . date('d-m-Y'),
            'post_content' => $testimony,
            'post_status'  => 'publish',
            'post_author'  => 1,  // Changez selon l'ID de l'utilisateur
            'post_type'    => 'post',  // Ou utilisez un type personnalisé comme "témoignages"
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
function she_safe_enqueue_scripts() {
    if (is_page_template('faq-page.php')) {
        wp_enqueue_style('faq-styles', get_template_directory_uri() . '/faq-style.css', [], '1.0');
        wp_enqueue_script('faq-script', get_template_directory_uri() . '/faq-script.js', [], '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'she_safe_enqueue_scripts');

function she_safe_handle_contact_form() {
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



/////pour forummmmm obligatoire pour generer les témoiganges //// 

// Enregistrement du type de post personnalisé "experience"
function create_experience_post_type() {
    $labels = array(
        'name'               => 'Expériences',
        'singular_name'      => 'Expérience',
        'menu_name'          => 'Expériences',
        'add_new'           => 'Ajouter nouvelle',
        'add_new_item'      => 'Ajouter nouvelle expérience',
        'edit_item'         => 'Modifier l\'expérience',
        'new_item'          => 'Nouvelle expérience',
        'view_item'         => 'Voir l\'expérience',
        'search_items'      => 'Rechercher des expériences',
        'not_found'         => 'Aucune expérience trouvée',
        'not_found_in_trash'=> 'Aucune expérience trouvée dans la corbeille'
    );

    $args = array(
        'labels'            => $labels,
        'public'           => true,
        'show_ui'          => true,
        'show_in_menu'     => true,
        'show_in_nav_menus'=> true,
        'show_in_admin_bar'=> true,
        'menu_position'    => 5,
        'menu_icon'        => 'dashicons-heart',
        'capability_type'  => 'post',
        'hierarchical'     => false,
        'supports'         => array('title', 'editor', 'custom-fields'),
        'has_archive'      => true,
        'rewrite'          => array('slug' => 'experiences'),
        'show_in_rest'     => true
    );

    register_post_type('experience', $args);
}
add_action('init', 'create_experience_post_type');

// Ajout des meta boxes pour les champs personnalisés
function add_experience_meta_boxes() {
    add_meta_box(
        'experience_details',
        'Détails de l\'expérience',
        'display_experience_meta_box',
        'experience',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_experience_meta_boxes');

// Affichage des champs personnalisés dans l'admin
function display_experience_meta_box($post) {
    $age = get_post_meta($post->ID, 'age', true);
    $lieu = get_post_meta($post->ID, 'lieu', true);
    $date = get_post_meta($post->ID, 'date', true);
    
    wp_nonce_field('save_experience_meta', 'experience_meta_nonce');
    ?>
    <div style="margin: 20px 0;">
        <label for="age" style="display: block; margin-bottom: 5px;">Âge :</label>
        <input type="number" id="age" name="age" value="<?php echo esc_attr($age); ?>" min="13" max="100">
    </div>
    <div style="margin: 20px 0;">
        <label for="lieu" style="display: block; margin-bottom: 5px;">Lieu :</label>
        <input type="text" id="lieu" name="lieu" value="<?php echo esc_attr($lieu); ?>" style="width: 100%;">
    </div>
    <div style="margin: 20px 0;">
        <label for="date" style="display: block; margin-bottom: 5px;">Date de l'événement :</label>
        <input type="date" id="date" name="date" value="<?php echo esc_attr($date); ?>">
    </div>
    <?php
}

// Sauvegarde des champs personnalisés
function save_experience_meta($post_id) {
    // Vérifications de sécurité
    if (!isset($_POST['experience_meta_nonce']) || 
        !wp_verify_nonce($_POST['experience_meta_nonce'], 'save_experience_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Sauvegarde des champs
    if (isset($_POST['age'])) {
        update_post_meta($post_id, 'age', sanitize_text_field($_POST['age']));
    }
    if (isset($_POST['lieu'])) {
        update_post_meta($post_id, 'lieu', sanitize_text_field($_POST['lieu']));
    }
    if (isset($_POST['date'])) {
        update_post_meta($post_id, 'date', sanitize_text_field($_POST['date']));
    }
}
add_action('save_post_experience', 'save_experience_meta');

// Flush rewrite rules quand nécessaire
function my_rewrite_flush() {
    create_experience_post_type();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'my_rewrite_flush');
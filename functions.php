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

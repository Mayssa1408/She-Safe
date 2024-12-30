<?php
/*
 * Template Name: Page Se Connecter
 */

get_header(); ?>
<style>
    /* Corps principal */
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #FEF6E9;
        margin: 0;
        padding: 0;
    }

    /* Titre de la page de connexion */
    h1 {
        font-weight: bold;
        color: #B7536C;
        text-align: center;
        margin-bottom: 30px;
        font-size: 36px;
    }

    /* Conteneur principal du formulaire */
    .container {
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
        text-align: center;
        /* Centrer le contenu horizontalement */
    }

    /* Formulaire de connexion */
    form {
        text-align: left;
        /* Garde le texte aligné à gauche dans le formulaire */
    }

    form label {
        font-weight: bold;
        color: #B7536C;
        display: block;
        margin-top: 15px;
    }

    form input {
        width: 100%;
        padding: 12px;
        border: 1px solid #B7536C;
        /* Bordure autour des champs de saisie */
        border-radius: 5px;
        margin-top: 8px;
        font-size: 16px;
        color: #B7536C;
        background-color: #FFF1F0;
        /* Couleur de fond claire pour les champs de saisie */
        transition: box-shadow 0.3s ease;
    }

    form input:focus {
        box-shadow: 0 0 5px rgba(217, 79, 120, 0.7);
        outline: none;
    }

    /* Bouton de connexion */
    button {
        background-color: #B7536C;
        color: white;
        border: none;
        /* Retire la bordure du bouton */
        padding: 12px 40px;
        /* Padding ajusté pour l'air autour du texte */
        border-radius: 50px;
        /* Coins arrondis à 50px */
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        width: auto;
        /* Permet au bouton de s'adapter à la largeur du texte */
        transition: background-color 0.3s ease, transform 0.2s ease;
        display: block;
        /* Le bouton devient un élément de bloc pour pouvoir le centrer */
        margin-left: auto;
        margin-right: auto;
        /* Centrer le bouton */
        text-align: center;
        /* Centre le texte à l'intérieur du bouton */
    }

    button:hover {
        background-color: #D94F78;
        transform: scale(1.05);
    }

    /* Lien de création de compte */
    p {
        text-align: center;
        margin-top: 20px;
        font-size: 16px;
    }

    p a {
        color: #B7536C;
        text-decoration: none;
    }

    p a:hover {
        text-decoration: underline;
    }

    /* Espacement entre les éléments */
    .row {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Responsivité */
    @media screen and (max-width: 768px) {
        .container {
            padding: 15px;
        }

        form label {
            font-size: 14px;
        }

        form input {
            font-size: 14px;
        }

        button {
            font-size: 16px;
            padding: 10px 18px;
        }
    }
</style>

<main class="content">

    <div class="container" style="background-color: none; max-width: 1200px; margin-top: 100px; padding: 50px;">
        <!-- Formulaire de connexion -->
        <div class="row">
            <div class="col-lg-6 col-12">
                <h1 class="titreseconnecter">Se connecter</h1>

                <?php
                // Si l'utilisateur est déjà connecté, le rediriger
                if (is_user_logged_in()) {
                    echo '<p style="color: green;">Vous êtes déjà connecté. <a href="' . esc_url(home_url('/')) . '">Retour à l\'accueil</a></p>';
                } else {
                    // Si le formulaire est soumis
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_nonce'])) {
                        if (wp_verify_nonce($_POST['login_nonce'], 'login_action')) {
                            $username = sanitize_user($_POST['uname']);
                            $password = sanitize_text_field($_POST['upass']);

                            // Tentative de connexion
                            $creds = array(
                                'user_login' => $username,
                                'user_password' => $password,
                                'remember' => true
                            );

                            $user = wp_signon($creds, false);

                            if (is_wp_error($user)) {
                                echo '<p style="color: red;">Erreur de connexion : ' . $user->get_error_message() . '</p>';
                            } else {
                                wp_redirect(home_url()); // Redirige vers la page d'accueil après une connexion réussie
                                exit;
                            }
                        } else {
                            echo '<p style="color: red;">Nonce de sécurité invalide.</p>';
                        }
                    }
                }
                ?>

                <form method="POST">
                    <label for="uname">Nom d'utilisateur</label>
                    <input type="text" id="uname" name="uname" required />

                    <label for="upass">Mot de passe</label>
                    <input type="password" id="upass" name="upass" required />

                    <input type="hidden" name="login_nonce" value="<?php echo wp_create_nonce('login_action'); ?>">
                    <button type="submit" class="btn-inscrire">Se connecter</button>
                </form>

                <p>Pas encore inscrit ? <a href="<?php echo esc_url(home_url('/inscription')); ?>">Créer un compte</a>
                </p>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
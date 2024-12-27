<?php
/*
Template Name: Page Inscription
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

/* Titre de la page */
h1 {
    font-weight: bold;
    color: #B7536C;
    text-align: center;
    margin-bottom: 30px;
    font-size: 36px;
}

/* Conteneur principal */
.container {
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
    text-align: center; /* Centre le contenu horizontalement */
}

/* Formulaire */
form {
    text-align: center;
}

form label {
    font-weight: bold;
    color: #B7536C;
    display: block;
    margin: 15px auto 8px auto; /* Espacement entre les labels et les champs */
    text-align: left; /* Aligne le texte à gauche */
    max-width: 300px; /* Alignement en fonction de la taille des champs */
}

form input {
    width: 100%;
    max-width: 300px; /* Réduit la largeur des champs */
    padding: 12px;
    border: 1px solid #B7536C; /* Bordure autour des champs de saisie */
    border-radius: 5px;
    margin: 0 auto 15px auto; /* Centre les champs et ajoute une marge inférieure */
    font-size: 16px;
    color: #B7536C;
    background-color: #FFF1F0; /* Couleur de fond claire */
    transition: box-shadow 0.3s ease;
    display: block;
}

form input:focus {
    box-shadow: 0 0 5px rgba(217, 79, 120, 0.7);
    outline: none;
}

/* Bouton */
button {
    background-color: #B7536C;
    color: white;
    border: none;
    padding: 12px 40px;
    border-radius: 50px;
    margin-top: 20px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

button:hover {
    background-color: #D94F78;
    transform: scale(1.05);
}

/* Lien */
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

    <div class="container" style="background-color: none; margin-top: 100px; padding: 50px;">
        <!-- Formulaire d'inscription -->
        <h1 class="titreseconnecter">S'inscrire</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_account_nonce'])) {
            if (wp_verify_nonce($_POST['create_account_nonce'], 'create_account_action')) {
                $fname  = sanitize_text_field($_POST['fname']);
                $lname  = sanitize_text_field($_POST['lname']);
                $user   = sanitize_user($_POST['uname']);
                $email  = sanitize_email($_POST['uemail']);
                $pass   = sanitize_text_field($_POST['upass']);
                $repass = sanitize_text_field($_POST['repass']);

                if ($pass !== $repass) {
                    echo '<p style="color: red;">Les mots de passe ne correspondent pas.</p>';
                } elseif (username_exists($user) || email_exists($email)) {
                    echo '<p style="color: red;">Le nom d’utilisateur ou l’adresse e-mail est déjà enregistré.</p>';
                } else {
                    $userdata = [
                        'user_login' => $user,
                        'user_email' => $email,
                        'user_pass'  => $pass,
                        'first_name' => $fname,
                        'last_name'  => $lname,
                    ];

                    $user_id = wp_insert_user($userdata);

                    if (!is_wp_error($user_id)) {
                        echo '<p style="color: green;">Inscription réussie ! Vous pouvez maintenant vous connecter.</p>';
                        wp_redirect(esc_url(home_url('/connexion-page'))); // Redirige vers la page de connexion
                        exit;
                    } else {
                        echo '<p style="color: red;">Une erreur est survenue lors de la création du compte.</p>';
                    }
                }
            } else {
                echo '<p style="color: red;">Nonce de sécurité invalide.</p>';
            }
        }
        ?>

        <form method="POST">
            <label for="fname">Prénom</label>
            <input type="text" id="fname" name="fname" required />

            <label for="lname">Nom</label>
            <input type="text" id="lname" name="lname" required />

            <label for="uname">Nom d'utilisateur</label>
            <input type="text" id="uname" name="uname" required />

            <label for="uemail">Adresse mail</label>
            <input type="email" id="uemail" name="uemail" required />

            <label for="upass">Mot de passe</label>
            <input type="password" id="upass" name="upass" required />

            <label for="repass">Confirmer le mot de passe</label>
            <input type="password" id="repass" name="repass" required />

            <input type="hidden" name="create_account_nonce" value="<?php echo wp_create_nonce('create_account_action'); ?>">
            <button type="submit" class="btn-inscrire">S'inscrire</button>
        </form>

        <p>Déjà membre ? <a href="<?php echo esc_url(home_url('/login')); ?>">Se connecter</a></p>
    </div>

</main>

<?php get_footer(); ?>

<?php get_header(); ?>
<main class="content">

<style>
/* Corps principal */
body {
    font-family: 'Montserrat', sans-serif;
    background-color: #FEF6E9;
    margin: 0;
    padding: 0;
}

/* Titre de la page d'inscription */
h1 {
    font-weight: bold;
    color: #B7536C;
    text-align: center;
    margin-bottom: 30px;
    font-size: 36px;
}

/* Conteneur principal du formulaire */
.container {
    background: white;
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

/* Formulaire d'inscription */
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
    border-radius: 5px;
    margin-top: 8px;
    font-size: 16px;
    color: #B7536C;
    background-color: #FFF1F0;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

form input:focus {
    border-color: #D94F78;
    box-shadow: 0 0 5px rgba(217, 79, 120, 0.7);
    outline: none;
}

/* Bouton d'inscription */
button {
    background-color: #B7536C;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    margin-top: 20px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

button:hover {
    background-color: #D94F78;
    transform: scale(1.05);
}

/* Lien de connexion */
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
<?php

// Gestion de l'inscription
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
                wp_redirect(esc_url(home_url('/login')));
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
<div class="container" style="background-color: #FEF6E9; max-width: 1200px; margin-top: 100px; padding: 50px;">
    <!-- Formulaire d'inscription -->
    <div class="row">
        <div class="col-lg-6 col-12">
            <h1 class="titreseconnecter">S'inscrire</h1>
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
    </div>
</div>

<?php get_footer(); ?>

<?php
/*
Template Name: Profile
*/
get_header();

// Assurez-vous que l'utilisateur est connecté avant de pouvoir accéder à cette page
if (!is_user_logged_in()) {
    wp_redirect(wp_login_url());
    exit;
}

// Obtenez l'ID de l'utilisateur actuel
$current_user = wp_get_current_user();
$user_id = $current_user->ID;

// Connexion à la base de données de WordPress
global $wpdb;

// Récupérer les données de l'utilisateur depuis la base de données
$user = $wpdb->get_row(
    $wpdb->prepare("SELECT * FROM $wpdb->users WHERE ID = %d", $user_id)
);

// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $current_username = $_POST['current_username'];
    $new_username = $_POST['new_username'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérifier que le nom d'utilisateur actuel est correct (si modifié)
    if ($current_username !== $user->user_login) {
        $_SESSION['error'] = 'Le nom d\'utilisateur actuel est incorrect.';
        wp_redirect($_SERVER['PHP_SELF']);
        exit;
    }

    // Vérifier que le mot de passe actuel est correct
    if (!empty($current_password) && !wp_check_password($current_password, $user->user_pass, $user_id)) {
        $_SESSION['error'] = 'Le mot de passe actuel est incorrect.';
        wp_redirect($_SERVER['PHP_SELF']);
        exit;
    }

    // Vérifier que le nouveau mot de passe et la confirmation correspondent
    if ($new_password !== $confirm_password) {
        $_SESSION['error'] = 'Les mots de passe ne correspondent pas.';
        wp_redirect($_SERVER['PHP_SELF']);
        exit;
    }

    // Mise à jour du nom d'utilisateur si nécessaire
    if ($new_username !== $user->user_login) {
        // Mettre à jour le nom d'utilisateur
        wp_update_user([
            'ID' => $user_id,
            'user_login' => $new_username
        ]);
    }

    // Mise à jour du mot de passe si nécessaire
    if (!empty($new_password)) {
        // Mettre à jour le mot de passe
        wp_set_password($new_password, $user_id);
    }

    // Message de confirmation
    $_SESSION['message'] = 'Votre profil a été mis à jour avec succès.';
    wp_redirect($_SERVER['PHP_SELF']);
    exit;
}
?>

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
    }

    /* Formulaire */
    form {
        display: flex;
        flex-direction: column; /* Organise les éléments en colonne */
        align-items: center; /* Centre les éléments horizontalement */
    }

    form label {
        font-weight: bold;
        color: #B7536C;
        display: block;
        margin-top: 15px;
        text-align: left; /* Aligné à gauche */
        width: 80%; /* Limite la largeur des labels à 80% */
        margin-left: 0; /* Assure que le label commence à partir du bord gauche */
    }

    form input {
        width: 80%; /* Réduit à 80% pour correspondre à la taille des champs de saisie sur la page d'inscription */
        padding: 12px;
        font-size: 16px;
        color: #B7536C;
        background-color: #FFF1F0;
        border: 1px solid #B7536C;
        border-radius: 5px;
        margin-top: 8px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        display: block; /* Assurer que les champs sont des blocs et s'étendent horizontalement */
        margin-left: auto;
        margin-right: auto; /* Centrer les champs */
    }

    form input:focus {
        border-color: #D94F78;
        box-shadow: 0 0 5px rgba(217, 79, 120, 0.7);
        outline: none;
    }

    /* Bouton arrondi et centré */
    button {
        background-color: #B7536C;
        color: white;
        border: none;
        padding: 10px 30px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        display: block;
        text-align: center;
        margin: 20px auto;
        transition: background-color 0.3s ease, transform 0.2s ease;
        width: fit-content;
    }

    button:hover {
        background-color: #D94F78;
        transform: scale(1.05);
    }

    /* Message de succès */
    .success-message {
        color: green;
        text-align: center;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Message d'erreur */
    .error-message {
        color: red;
        text-align: center;
        font-weight: bold;
        margin-bottom: 20px;
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

<div class="container">
    <h1>Mon Profil</h1>

    <!-- Affichage du message de succès -->
    <?php if (!empty($_SESSION['message'])): ?>
        <p class="success-message"><?= $_SESSION['message'] ?></p>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <!-- Affichage du message d'erreur -->
    <?php if (!empty($_SESSION['error'])): ?>
        <p class="error-message"><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <!-- Formulaire de mise à jour du profil -->
    <form method="post">
        <label for="current_username">Nom d'utilisateur actuel</label>
        <input type="text" id="current_username" name="current_username" value="" required>

        <label for="new_username">Nouveau nom d'utilisateur</label>
        <input type="text" id="new_username" name="new_username" value="" required>

        <label for="current_password">Mot de passe actuel</label>
        <input type="password" id="current_password" name="current_password" required>

        <label for="new_password">Nouveau mot de passe</label>
        <input type="password" id="new_password" name="new_password" required>

        <label for="confirm_password">Confirmer le nouveau mot de passe</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Mettre à jour le profil</button>
    </form>
</div>

<?php get_footer(); ?>

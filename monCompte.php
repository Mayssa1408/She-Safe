<?php
/** 
 * Template Name: monCompte  - Page 
 */
get_header();


// Simuler une session utilisateur
session_start();

// Exemple de données utilisateur simulées (à remplacer par une récupération depuis la base de données)
$user = [
    'username' => 'nom_utilisateur',
    'email' => 'email@example.com',
    'bio' => 'Je suis passionnée par la sécurité et la communauté.'
];

// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $user['username'] = htmlspecialchars($_POST['username']);
    $user['email'] = htmlspecialchars($_POST['email']);
    $user['bio'] = htmlspecialchars($_POST['bio']);

    // Message de confirmation (remplacer par une requête SQL réelle pour mettre à jour les données utilisateur)
    $_SESSION['message'] = 'Profil mis à jour avec succès.';
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
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
            background: white;
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Formulaire */
        form label {
            font-weight: bold;
            color: #B7536C;
            display: block;
            margin-top: 15px;
        }

        form input,
        form textarea {
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

        form input:focus,
        form textarea:focus {
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
            /* Ajuste l'espace autour du texte */
            border-radius: 50px;
            /* Arrondi complet */
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            display: block;
            /* Rend le bouton centré */
            text-align: center;
            margin: 20px auto;
            /* Centrage horizontal */
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: fit-content;
            /* Ajuste la largeur selon le contenu */
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

        /* Responsivité */
        @media screen and (max-width: 768px) {
            .container {
                padding: 15px;
            }

            form label {
                font-size: 14px;
            }

            form input,
            form textarea {
                font-size: 14px;
            }

            button {
                font-size: 16px;
                padding: 10px 18px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Mon Profil</h1>

        <!-- Affichage du message de succès -->
        <?php if (!empty($_SESSION['message'])): ?>
            <p class="success-message"><?= $_SESSION['message'] ?></p>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <!-- Formulaire de mise à jour du profil -->
        <form method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>"
                required>

            <label for="email">Adresse email</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

            <label for="bio">Biographie</label>
            <textarea id="bio" name="bio" rows="4"
                placeholder="Parlez un peu de vous..."><?= htmlspecialchars($user['bio']) ?></textarea>

            <button type="submit">Mettre à jour</button>
        </form>
    </div>
</body>

</html>

<?php get_footer(); ?>
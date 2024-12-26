<!DOCTYPE html>
<html lang="fr">

<?php
/** 
 * Template Name: forum - Page 
 */
get_header();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    /* Forum - Section principale */
    .forum-section {
        background-color: #FEF6E9;
        height: 600px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        padding: 50px;
    }

    .forum-text h1,
    .forum-text h2,
    .forum-text p {
        color: #B7536C;
        font-family: 'Montserrat', sans-serif;
    }

    .forum-text h1 {
        font-family: 'Lora', serif;
        font-weight: bold;
        font-size: 32px;
        margin-bottom: 20px;
    }

    .forum-text h2 {
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .forum-text p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    /* Image dans la section Forum */
    .forum-image img {
        width: 50%;
        max-width: 300px;
        height: auto;
        object-fit: cover;
    }

    /* Profil Utilisateur */
    .second-section {
        background-color: #F4C7C2;
        padding: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .profile-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 800px;
        margin-bottom: 30px;
    }

    .user-bubble {
        width: 120px;
        height: 120px;
        background-color: #B7536C;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modern-user {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .user-head {
        width: 40px;
        height: 40px;
        background-color: white;
        border-radius: 50%;
    }

    .user-shoulders {
        width: 60px;
        height: 30px;
        background-color: white;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        margin-top: 5px;
    }

    .user-details {
        margin-left: 20px;
        display: flex;
        flex-direction: column;
    }

    .user-details h2 {
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 24px;
        color: #B7536C;
    }

    .user-details p {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        color: #B7536C;
    }

    .cta-button {
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        background-color: #B7536C;
        color: white;
        width: 250px;
        height: 50px;
        border-radius: 15px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: auto;
    }

    .cta-button:hover {
        background-color: #D94F78;
    }

    /* Formulaire pour soumettre un témoignage */
    .write-box {
        width: 600px;
        background-color: white;
        border-radius: 30px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 25px;
        /* Espacement entre les champs */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Champs de saisie */
    .write-input,
    .form-input {
        width: 100%;
        padding: 15px;
        border-radius: 15px;
        border: 2px solid #B7536C;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
    }

    .form-input+.form-input {
        margin-top: 20px;
        /* Ajoute de l'espace entre les champs */
    }

    /* Espacement entre le champ "Ton nom" et "Ton vécu" */
    .write-input {
        margin-bottom: 20px;
        /* Ajout d'un espacement sous le champ "Ton nom" */
    }

    /* Bouton envoyer centré */
    .send-button-wrapper {
        display: flex;
        justify-content: center;
        /* Centre horizontalement */
        width: 100%;
    }

    .send-button {
        width: 50px;
        height: 50px;
        background-color: #B7536C;
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .send-button .send-icon {
        color: white;
        font-size: 18px;
    }

    .send-button:hover {
        background-color: #D94F78;
        /* Nouvelle couleur au survol */
    }
</style>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum - She Safe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Montserrat:wght@700;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css">
    <!-- Relier votre fichier CSS personnalisé -->
</head>

<body>
    <!-- Section Forum -->
    <section class="forum-section container-fluid d-flex align-items-center justify-content-center">
        <div class="row align-items-center w-100">
            <div class="col-md-6 forum-text">
                <h1>Un lieu de partage</h1>
                <h2>Partage ton expérience pour améliorer la sécurité des femmes à Bruxelles !</h2>
                <p>Ton témoignage aidera d'autres femmes à éviter ces endroits et à découvrir les lieux les plus
                    sécurisés.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center forum-image mb-4 mb-md-0">
                <img src="https://via.placeholder.com/300x400" alt="Image de partage">
            </div>
        </div>
    </section>

    <!-- Section Profil -->
    <div class="second-section">
        <div class="profile-info">
            <div class="user-bubble">
                <div class="modern-user">
                    <div class="user-head"></div>
                    <div class="user-shoulders"></div>
                </div>
            </div>
            <div class="user-details">
                <h2>Anonyme</h2>
                <p>Âge</p>
            </div>
            <a href="connexion.php" class="cta-button">Se connecter</a>
        </div>

        <!-- Formulaire d'envoi de témoignage -->
        <div class="write-box">
            <form method="POST" action="">
                <textarea name="temoignage" class="write-input" placeholder="J'écris ici mon vécu..."
                    required></textarea>
                <input type="text" name="nom" placeholder="Ton nom (facultatif)" class="form-input" />
                <input type="number" name="age" placeholder="Ton âge" class="form-input" required />
                <button type="submit" class="send-button">
                    <i class="send-icon">▶</i>
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $age = htmlspecialchars($_POST['age']);
    $temoignage = htmlspecialchars($_POST['temoignage']);

    // Vous pouvez ajouter ici une logique pour enregistrer ces informations dans une base de données
    // Exemple avec PDO pour MySQL (Assurez-vous d'avoir une table adéquate dans votre base de données)
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=forum_db', 'root', ''); // Remplacez par vos informations de connexion
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO temoignages (nom, age, temoignage) VALUES (:nom, :age, :temoignage)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':temoignage', $temoignage);

        $stmt->execute();
        echo "Témoignage envoyé avec succès !";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>

<?php get_footer(); // Inclut le pied de page du site WordPress ?>
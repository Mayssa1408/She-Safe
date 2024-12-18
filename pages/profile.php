<?php 
/** Template Name: Profile - Page */
get_header();
include('db_connection.php');  // Connexion à la base de données
?>
<link rel="stylesheet" href="css/style.css">

<?php
// Permettre l'upload de la photo de profil
$profilePhoto = "assets/img/default.png";  // Définir une photo par défaut
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Gérer l'upload de la photo de profil
    if (isset($_FILES['profile_photo'])) {
        $targetDir = "assets/uploads/";
        $fileName = basename($_FILES["profile_photo"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $uploadOk = true;

        // Vérifier si le fichier est une image
        $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["profile_photo"]["tmp_name"]);
        if ($check === false) {
            $uploadOk = false;
            $error = "Le fichier n'est pas une image.";
        }

        // Vérifier la taille
        if ($_FILES["profile_photo"]["size"] > 2 * 1024 * 1024) { // 2MB max
            $uploadOk = false;
            $error = "Le fichier est trop volumineux.";
        }

        // Autoriser certains formats
        if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
            $uploadOk = false;
            $error = "Seuls les formats JPG, JPEG, PNG et GIF sont autorisés.";
        }

        // Déplacer le fichier uploadé
        if ($uploadOk) {
            if (move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $targetFilePath)) {
                $profilePhoto = $targetFilePath;
            } else {
                $error = "Une erreur est survenue lors de l'upload.";
            }
        }
    }

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Sécuriser le mot de passe
    $date_naissance = $_POST['date_naissance'];
    $pays = $_POST['pays'];

    // Insérer les données dans la base de données
    $sql = "INSERT INTO users (nom, email, password, date_naissance, pays, photo_profil) 
            VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssss", $nom, $email, $password, $date_naissance, $pays, $profilePhoto);

        if ($stmt->execute()) {
            echo "Profil créé avec succès!";
        } else {
            echo "Erreur lors de l'enregistrement du profil.";
        }

        $stmt->close();  // Fermer la déclaration
    }
}
?>

<div class="container" style="background-color: #FEF6E9; max-width: 1200px; margin-top: 100px; padding: 50px;">
    <!-- Photo de Profil -->
    <div class="text-center mb-5">
        <form method="POST" enctype="multipart/form-data">
            <label for="profile_photo">
                <img src="<?php echo $profilePhoto; ?>" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover; cursor: pointer;">
            </label>
            <input type="file" id="profile_photo" name="profile_photo" accept="image/*" style="display: none;">
            <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
        </form>
    </div>

    <!-- Titre -->
    <h1 class="text-center" style="font-family: 'Lora', serif; font-weight: bold; font-size: 32px; margin-bottom: 50px;">Mon Profil</h1>

    <!-- Formulaire -->
    <form action="#" method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label" style="font-family: 'Glory', sans-serif; font-size: 24px;">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" style="font-family: 'Glory', sans-serif; font-size: 24px;">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" style="font-family: 'Glory', sans-serif; font-size: 24px;">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
        </div>
        <div class="mb-3">
            <label for="date_naissance" class="form-label" style="font-family: 'Glory', sans-serif; font-size: 24px;">Date de naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance">
        </div>
        <div class="mb-3">
            <label for="pays" class="form-label" style="font-family: 'Glory', sans-serif; font-size: 24px;">Pays</label>
            <input type="text" class="form-control" id="pays" name="pays" placeholder="Votre pays">
        </div>
        <!-- Bouton Enregistrer -->
        <div class="text-center mt-4">
            <button type="submit" class="btn" style="
                background-color: #B7536C;
                color: white;
                font-family: 'Montserrat', sans-serif;
                font-size: 18px;
                border-radius: 15px;
                border-top-left-radius: 5px;
                border-bottom-right-radius: 5px;
                padding: 10px 50px;">
                Enregistrer
            </button>
        </div>
    </form>
</div>

<?php get_footer(); ?>

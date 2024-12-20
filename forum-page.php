<?php
// On peut ajouter des logiques PHP ici si nécessaire pour le traitement des données, mais pour l'instant, on garde un HTML de base.
?>
<style>
/* Styles personnalisés */
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
}

.forum-section {
    background-color: #FEF6E9;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 50px 10px; /* Ajuste les padding pour rendre la section plus compacte sur petits écrans */
}

.forum-text h1 {
    font-family: 'Lora', serif;
    font-weight: bold;
    font-size: 32px;
    color: #B7536C;
    margin-bottom: 50px;
    padding-left: 80px;
}

.forum-text h2 {
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 24px;
    color: #B7536C;
    margin-bottom: 30px;
    padding-left: 80px;
    max-width: 826px;
}

.forum-text p {
    font-family: 'Montserrat', sans-serif;
    font-size: 18px;
    color: #B7536C;
    margin-bottom: 20px;
    padding-left: 80px;
    max-width: 826px;
}

/* Image */
.forum-image img {
    width: 50%;
    max-width: 400px;
    height: auto;
    max-height: 600px;
    object-fit: cover;
}

/* Section Profil */
.second-section {
    background-color: #F4C7C2;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 50px 10px; /* Ajuste le padding pour les écrans plus petits */
}

/* Section de l'utilisateur */
.profile-info {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    max-width: 800px;
    margin-bottom: 50px;
    flex-wrap: wrap; /* Permet l'ajustement de la disposition sur les petits écrans */
}

/* Bulle utilisateur */
.user-bubble {
    width: 120px;
    height: 120px;
    background-color: #B7536C;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

/* Design moderne de l'utilisateur */
.modern-user {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* Tête de l'utilisateur */
.user-head {
    width: 40px;
    height: 40px;
    background-color: white;
    border-radius: 50%;
}

/* Épaules / torse */
.user-shoulders {
    width: 60px;
    height: 30px;
    background-color: white;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    margin-top: 5px;
}

/* Détails utilisateur */
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
    margin: 0;
    margin-bottom: 10px;
}

.user-details p {
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    color: #B7536C;
    margin: 0;
}

/* Bouton "Se connecter" */
.cta-button {
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    font-size: 18px;
    background-color: #B7536C;
    color: white;
    border: none;
    width: 250px;
    height: 50px;
    border-radius: 15px;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: background-color 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: auto;
}

.cta-button:hover {
    background-color: #D94F78;
}

/* Rectangle pour écrire */
.write-box {
    width: 100%;
    max-width: 600px;
    height: 120px;
    background-color: white;
    border-radius: 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    gap: 10px;
    margin-bottom: 20px;
}

/* Champ de texte */
.write-input {
    flex: 1;
    font-family: 'Glory', sans-serif;
    font-size: 18px;
    font-weight: 300;
    color: #000;
    border: none;
    outline: none;
    resize: none;
    background-color: transparent;
}

/* Bouton envoyer */
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
}

.send-button .send-icon {
    color: white;
    font-size: 18px;
    font-weight: bold;
}

.send-button:hover {
    background-color: #D94F78;
}

/* Media Queries pour Responsivité */
@media (max-width: 768px) {
    .forum-text h1 {
        font-size: 28px;
    }
    
    .forum-text h2 {
        font-size: 22px;
    }

    .forum-text p {
        font-size: 16px;
    }

    .forum-image img {
        width: 70%;
    }

    .profile-info {
        flex-direction: column;
        align-items: center;
    }
}
</style>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum - She Safe</title>
    <!-- Lien vers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Montserrat:wght@700;400&display=swap" rel="stylesheet">
    <!-- Lien vers CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Section Forum -->
    <section class="forum-section container-fluid d-flex align-items-center justify-content-center">
        <div class="row align-items-center w-100">
            <!-- Colonne Texte -->
            <div class="col-md-6 forum-text">
                <h1>Un lieu de partage</h1>
                <h2>Partage ton expérience pour améliorer la sécurité des femmes à Bruxelles !</h2>
                <p>
                    Tu as déjà vécu une situation où tu t'es sentie en danger ou mal à l’aise dans un lieu public ?
                    Partage ton histoire sur le forum She Safe ! Ton témoignage aidera d'autres femmes à éviter ces endroits
                    et à découvrir les lieux les plus sécurisés de Bruxelles.
                </p>
            </div>
            <!-- Colonne Image -->
            <div class="col-md-6 d-flex justify-content-center forum-image mb-4 mb-md-0">
                <img src="https://via.placeholder.com/300x400" alt="Image de partage">
            </div>
        </div>
    </section>

    <!-- Section Profil -->
    <div class="second-section">
        <!-- Profil (bulle + texte à gauche, bouton à droite) -->
        <div class="profile-info">
            <!-- Bulle utilisateur -->
            <div class="user-bubble">
                <div class="modern-user">
                    <div class="user-head"></div>
                    <div class="user-shoulders"></div>
                </div>
            </div>
            <!-- Texte utilisateur -->
            <div class="user-details">
                <h2>Anonyme</h2>
                <p>Âge</p>
            </div>
            <!-- Bouton "Se connecter" -->
            <a href="#" class="cta-button">Se connecter</a>
        </div>

        <!-- Rectangle pour écrire -->
        <div class="write-box">
            <textarea class="write-input" placeholder="J'écris ici mon vécu..."></textarea>
        </div>

        <!-- Bouton Envoyer -->
        <button class="send-button">
            <i class="send-icon">▶</i>
        </button>
    </div>

    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

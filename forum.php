
<!DOCTYPE html>
<html lang="fr">

<?php
/** 
 * Template Name: forum - Page 
 */
get_header();


session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = null;
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .experience-card {
            border-left: 4px solid #ff69b4;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }

        .navbar-custom {
            background-color: rgb(184, 173, 30);
        }

        .navbar-custom .navbar-brand {
            color: white;
        }
    </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-custom mb-4">
            <div class="container">
                <a class="navbar-brand">Forum de Soutien</a>
                <div class="ms-auto">
                    <span class="navbar-text text-white" id="userInfo">
                        Connectée en tant que <span id="userName"><?php echo $userName; ?></span>
                    </span>
                </div>
            </div>
        </nav>

        <div class="container">
            <!-- Section des expériences -->
            <div class="experiences-section mb-5">
                <h2 class="mb-4">Expériences Partagées</h2>
                <div id="experiencesList">
                    <!-- Les expériences seront ajoutées ici dynamiquement -->
                </div>
            </div>

            <!-- Section du formulaire -->
            <!-- Remplacer la section du formulaire existante par celle-ci -->
            <div class="form-section">
                <?php if (isset($_SESSION['username'])): ?>
                    <h3 class="mb-4">Partagez votre expérience</h3>
                    <form id="experienceForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Âge</label>
                            <input type="number" class="form-control" id="age" required>
                        </div>
                        <div class="mb-3">
                            <label for="experience" class="form-label">Mon vécu</label>
                            <textarea class="form-control" id="experience" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Partager</button>
                    </form>
                <?php else: ?>
                    <div class="alert alert-warning">
                        Veuillez vous connecter pour partager votre expérience.
                        <a href="login.php" class="alert-link">Se connecter</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Simulation de données
            let experiences = [
                {
                    name: "Sophie",
                    age: 25,
                    text: "Après avoir été confrontée à des remarques dégradantes de la part d'un supérieur, j'ai décidé de parler. J'ai rassemblé mon courage, contacté les RH, et aujourd'hui, je suis fière d'avoir ouvert la voie à un environnement de travail plus respectueux pour mes collègues et moi.",
                    date: "2024-02-15"
                },
                {
                    name: "Laura",
                    age: 30,
                    text: "Un jour, dans les transports en commun, un homme s'est permis de me parler avec insistance malgré mes refus. J'ai finalement décidé de lui répondre à voix haute, ce qui a attiré l'attention des passagers. Cela m'a montré que l'on peut se faire entendre, même dans les situations les plus oppressantes.",
                    date: "2024-02-10"
                },
                {
                    name: "Mélissa",
                    age: 22,
                    text: "Un soir, en rentrant chez moi, j'ai remarqué qu'un homme me suivait. Mon cœur battait la chamade, mais j'ai gardé mon calme. J'ai appelé une amie, changé de direction et fini par rejoindre un groupe de personnes. Cet incident m'a donné la force de m'inscrire à des cours d'autodéfense et de ne plus jamais me sentir vulnérable.",
                    date: "2024-02-20"
                },
                {
                    name: "Chloé",
                    age: 28,
                    text: "Après une soirée, quelqu'un a insisté lourdement pour m'accompagner, malgré mes refus répétés. Je me suis fermement exprimée, et cela a été un moment clé pour moi : réaliser que mon 'non' est une phrase complète. Cette expérience a renforcé ma capacité à poser des limites claires et non négociables.",
                    date: "2024-02-18"
                },
                {
                    name: "Sarah",
                    age: 27,
                    text: "Un matin, en courant dans le parc, un passant a osé faire des commentaires déplacés. J'ai répondu calmement mais avec fermeté, et j'ai continué ma course sans laisser ses mots m'atteindre. Ce jour-là, j'ai compris que le pouvoir de ne pas laisser les autres définir ma journée m'appartient.",
                    date: "2024-02-12"
                },
                {
                    name: "Camille",
                    age: 24,
                    text: "Lors d'un événement professionnel, un collègue a essayé de franchir mes limites. Au lieu de rester silencieuse, j'ai pris la parole devant l'équipe et souligné l'importance du respect mutuel. C'était terrifiant, mais je sais que ma voix a résonné pour celles qui n'osaient pas encore parler.",
                    date: "2024-02-25"
                },
                {
                    name: "Emma",
                    age: 21,
                    text: "Dans une file d'attente, un homme a commencé à me faire des commentaires sur mon apparence. Plutôt que de baisser la tête, je lui ai rappelé que je n'étais pas là pour être évaluée. Les regards des autres m'ont soutenue, et j'ai ressenti une force collective qui m'a fait sourire.",
                    date: "2024-02-14"
                }
            ];


            // Afficher les expériences
            function displayExperiences() {
                const experiencesList = document.getElementById('experiencesList');
                experiencesList.innerHTML = '';

                experiences.forEach(exp => {
                    const card = document.createElement('div');
                    card.className = 'card experience-card p-3 mb-3';
                    card.innerHTML = `
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">${exp.name}, ${exp.age} ans</h5>
                        <small class="text-muted">${new Date(exp.date).toLocaleDateString()}</small>
                    </div>
                    <p class="card-text">${exp.text}</p>
                `;
                    experiencesList.appendChild(card);
                });
            }

            // Gérer la soumission du formulaire
            document.getElementById('experienceForm').addEventListener('submit', function (e) {
                e.preventDefault();

                const newExperience = {
                    name: document.getElementById('name').value,
                    age: parseInt(document.getElementById('age').value),
                    text: document.getElementById('experience').value,
                    date: new Date().toISOString().split('T')[0]
                };

                experiences.unshift(newExperience);
                displayExperiences();
                this.reset();
            });

            // Afficher les expériences au chargement
            displayExperiences();
        </script>

        <?php get_footer(); // Inclut le pied de page du site WordPress ?>
        <style>
<?php
session_start();

//PARCS                                                                                                                                                      Initialisation des votes dans la session si inexistants
if (!isset($_SESSION['votes'])) {
    $_SESSION['votes'] = [
        "parc1" => 0, // 
        "parc2" => 0, // Parc Cinquantenaire
        "parc3" => 0, // Parc Royal
        "parc4" => 0, // Bois de la Cambre
        "parc5" => 0, // Parc Josaphat
        "parc6" => 0  // Parc Morichar
    ];

}
$parcNames = [
    "parc1" => "Parc Botanique",
    "parc2" => "Parc Cinquantenaire",
    "parc3" => "Parc Royal",
    "parc4" => "Bois de la Cambre",
    "parc5" => "Parc Josaphat",
    "parc6" => "Parc Morichar"
];


// Traitement du formulaire de vote
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vote'])) {
    $selectedVote = $_POST['vote'];
    if (isset($_SESSION['votes'][$selectedVote])) {
        $_SESSION['votes'][$selectedVote]++;
    }
}

// Calcul des pourcentages
$totalVotes = array_sum($_SESSION['votes']);

function calculatePercentage($votes, $totalVotes)
{
    return $totalVotes > 0 ? round(($votes / $totalVotes) * 100) : 0;
}

//////////////////////////////////////////////////////////////////////////////////////////////////
//CAFE
if (!isset($_SESSION['votes_cafes'])) {
    $_SESSION['votes_cafes'] = [
        "cafe1" => 0, // Jat Café
        "cafe2" => 0, // Café du Sablon
        "cafe3" => 0, // The Lab
        "cafe4" => 0, // My Little Cup
        "cafe5" => 0, // BarkBoy
        "cafe6" => 0  // Café Léopold
    ];
}

$cafeNames = [
    "cafe1" => "Jat Café",
    "cafe2" => "Café du Sablon",
    "cafe3" => "The Lab",
    "cafe4" => "My Little Cup",
    "cafe5" => "BarkBoy",
    "cafe6" => "Café Léopold"
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vote'])) {
    $selectedVote = $_POST['vote'];
    if (isset($_SESSION['votes'][$selectedVote])) {
        $_SESSION['votes'][$selectedVote]++;
    } elseif (isset($_SESSION['votes_cafes'][$selectedVote])) {
        $_SESSION['votes_cafes'][$selectedVote]++;
    }
}
$totalCafeVotes = array_sum($_SESSION['votes_cafes']);

function calculateCafePercentage($votes, $totalCafeVotes)
{
    return $totalCafeVotes > 0 ? round(($votes / $totalCafeVotes) * 100) : 0;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vote'])) {
    echo '<div class="alert alert-success text-center">Votre vote a été pris en compte. Merci !</div>';
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>She Safe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
get_header();
?>

<!-- Section Safe Place OKKKKKKKKKKKKKKKKKK-->
<section id="safe-place" class="py-5">
    <div class="container-fluid px-3">
        <div class="row align-items-center">
            <!-- Colonne contenant l'icône et le texte -->
            <div class="col-lg-6 col-md-12 text-center text-lg-start px-5">
                <!-- Icône SVG centrée -->
                <div class="icon mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/roadMap.svg" alt="Safe Place Icon"
                        class="safe-icon">
                </div>
                <!-- Titre -->
                <h2 class="fw-bold mb-4" style="color: #BA476D;">Besoin d'une Safe Place ?</h2>
                <!-- Texte -->
                <p class="mb-4" style="color: #333;">
                    Aides la communauté à identifier les lieux où tu te sens en
                    <span class="fw-bold" style="color: #BA476D;">sécurité</span>.
                    Votes pour tes endroits préférés et participes aux classements des Safe Place pour rendre
                    notre ville plus <span class="fw-bold" style="color: #BA476D;">sereine</span> pour toutes.
                </p>
                <!-- Bouton -->
                <a href="#next-section" class="btn btn-primary px-4 py-2"
                    style="background-color: #BA476D; border: none; border-radius: 15px 2px 15px 2px; float: right;">
                    Aides-nous à rendre Bruxelles plus Safe !
                </a>
            </div>
            <!-- Colonne contenant l'image -->
            <div class="col-lg-6 col-md-12 text-center mt-4 mt-lg-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/safePlaceS1.png" alt="Safe Place">
            </div>
        </div>
    </div>
</section>


<!-- Carrousel -->
<section class="poll-container d-flex justify-content-center align-items-center vh-100">
    <div class="col-lg-8 col-md-10 col-sm-12">
        <div id="pollCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Parcs -->
                <div class="carousel-item active">
                    <div class="poll-card p-4">
                        <h2 class="text-center mb-4" style="color: #BA476D;">Parcs</h2>
                        <?php foreach ($_SESSION['votes'] as $key => $votes): ?>
                            <div class="option mb-4">
                                <label for="<?= $key ?>" class="d-block mb-2" style="font-weight: bold; color: #BA476D;">
                                    <input type="radio" id="<?= $key ?>" name="vote" value="<?= $key ?>">
                                    <?= $parcNames[$key] ?>

                                </label>
                                <div class="progress" style="height: 20px; border-radius: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?= calculatePercentage($votes, $totalVotes) ?>%; background-color: #BA476D;"
                                        aria-valuenow="<?= calculatePercentage($votes, $totalVotes) ?>" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <?= calculatePercentage($votes, $totalVotes) ?>%
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #BA476D; border-radius: 15px; padding: 10px 20px; font-weight: bold;">
                                Soumettre mon vote
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cafés -->
                <div class="carousel-item">
                    <div class="poll-card p-4">
                        <h2 class="text-center mb-4" style="color: #BA476D;">Cafés</h2>
                        <?php foreach ($_SESSION['votes_cafes'] as $key => $votes): ?>
                            <div class="option mb-4">
                                <label for="<?= $key ?>" class="d-block mb-2" style="font-weight: bold; color: #BA476D;">
                                    <input type="radio" id="<?= $key ?>" name="vote" value="<?= $key ?>">
                                    <?= $cafeNames[$key] ?>
                                </label>
                                <div class="progress" style="height: 20px; border-radius: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?= calculateCafePercentage($votes, $totalCafeVotes) ?>%; background-color: #BA476D;"
                                        aria-valuenow="<?= calculateCafePercentage($votes, $totalCafeVotes) ?>"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <?= calculateCafePercentage($votes, $totalCafeVotes) ?>%
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #BA476D; border-radius: 15px; padding: 10px 20px; font-weight: bold;">
                                Soumettre mon vote
                            </button>
                        </div>
                    </div>
                </div>


                <!-- Contrôles du carrousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#pollCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#pollCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
</section>




<!--Comment----------------------------------------------------------------->
<?php
// Démarrage de la session pour stocker les témoignages
session_start();

// Si le formulaire est soumis, on ajoute le témoignage à la session
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $place = htmlspecialchars($_POST['place']);
    $comment = htmlspecialchars($_POST['comment']);

    if (!isset($_SESSION['testimonials'])) {
        $_SESSION['testimonials'] = [];
    }

    // Ajouter le nouveau témoignage en haut de la liste
    array_unshift($_SESSION['testimonials'], [
        "name" => $name,
        "place" => $place,
        "comment" => $comment,
    ]);
}

// Récupérer tous les témoignages (ils sont déjà dans $_SESSION)
$testimonials = $_SESSION['testimonials'] ?? [];
?>



<script>document.addEventListener('DOMContentLoaded', function () {
    const commentForm = document.getElementById('commentForm');
    const testimonialsContainer = document.getElementById('testimonials');

    commentForm.addEventListener('submit', async function (event) {
        event.preventDefault(); // Empêche le rechargement de la page

        // Collecte des données du formulaire
        const formData = new FormData(commentForm);

        try {
            // Envoi des données au serveur
            const response = await fetch('', {
                method: 'POST',
                body: formData,
            });

            if (!response.ok) {
                throw new Error('Erreur lors de la soumission du commentaire.');
            }

            const result = await response.json();

            if (result.success) {
                // Ajouter le nouveau commentaire en haut de la liste
                const newComment = document.createElement('div');
                newComment.classList.add('testimonial-card', 'mb-3', 'p-3', 'border', 'rounded');
                newComment.innerHTML = `
                    <h5 class="fw-bold text-primary">${formData.get('place')}</h5>
                    <p><strong>${formData.get('name')}</strong></p>
                    <p>${formData.get('comment')}</p>
                `;
                testimonialsContainer.prepend(newComment);

                // Réinitialiser le formulaire
                commentForm.reset();
            } else {
                alert('Une erreur est survenue : ' + result.message);
            }
        } catch (error) {
            console.error(error);
            alert(error.message);
        }
    });
});
</script>

<section class="container my-5">
    <h2 class="text-center mb-4">Ce que les femmes disent des Safe Places</h2>
    <div class="testimonials" id="testimonials">
        <?php
        // Exemple de données de témoignages (à remplacer par une base de données réelle)
        $testimonials = [
            ["name" => "Marie", "place" => "Parc Royale", "comment" => "J'adore ce parc, toujours des gens autour et bien éclairé !"],
            ["name" => "Sophie", "place" => "Place Flagey", "comment" => "Super endroit, mais un peu bruyant parfois."],
            ["name" => "Jade", "place" => "BarkBoy", "comment" => "C'est cool et c'est dans un quartier calme"],
        ];

        foreach ($testimonials as $testimonial) {
            echo '<div class="testimonial-card">
                    <h5>' . htmlspecialchars($testimonial["place"]) . '</h5>
                    <p><strong>' . htmlspecialchars($testimonial["name"]) . '</strong></p>
                    <p>' . htmlspecialchars($testimonial["comment"]) . '</p>
                </div>';
        }
        ?>
    </div>
</section>

<section class="add-comment container my-5">
    <h2 class="text-center">Partagez votre expérience</h2>
    <form id="commentForm" class="mt-4">
        <div class="mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom" required>
        </div>
        <div class="mb-3">
            <input type="text" name="place" id="place" class="form-control" placeholder="Nom de l'endroit" required>
        </div>
        <div class="mb-3">
            <textarea name="comment" id="comment" class="form-control" rows="4" placeholder="Ajoutez votre commentaire..."
                required></textarea>
        </div>
        <button type="submit" class="submit w-100 btn btn-primary">Soumettre mon commentaire</button>
    </form>
</section>

<section class="container my-5">
    <h2 class="text-center mb-4">Ce que les femmes disent des Safe Places</h2>
    <div class="testimonials" id="testimonials">
        <!-- Les commentaires s'afficheront ici -->
    </div>
</section>



<?php get_footer(); ?>

</html>
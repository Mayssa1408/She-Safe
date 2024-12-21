<?php
session_start();

//                                                                                                                                                           Initialisation des votes dans la session si inexistants
if (!isset($_SESSION['votes'])) {
    $_SESSION['votes'] = [
        "parc1" => 0, // Parc Botanique
        "parc2" => 0, // Parc Cinquantenaire
        "parc3" => 0, // Parc Royal
        "parc4" => 0, // Bois de la Cambre
        "parc5" => 0, // Parc Josaphat
        "parc6" => 0  // Parc Morichar
    ];
}

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

<!--Section Sondages-->
<section class="poll-container py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                <!-- Cadre Blanc -->
                <div class="poll-card p-4" style="background-color: #FEF6E9">
                    <h2 class="text-center mb-4" style="color: #BA476D;">Parcs</h2>
                    <form method="POST" action="">
                        <!-- Parc Botanique -->
                        <div class="option mb-4">
                            <label for="parc1" class="d-block mb-2" style="font-weight: bold; color: #BA476D;">
                                <input type="radio" id="parc1" name="vote" value="parc1"> Parc Botanique
                            </label>
                            <div class="progress" style="height: 20px; border-radius: 10px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: <?= calculatePercentage($_SESSION['votes']['parc1'], $totalVotes); ?>%; background-color: #BA476D;"
                                    aria-valuenow="<?= calculatePercentage($_SESSION['votes']['parc1'], $totalVotes); ?>"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <?= calculatePercentage($_SESSION['votes']['parc1'], $totalVotes); ?>%
                                </div>
                            </div>
                        </div>

                        <!-- Parc du Cinquantenaire -->
                        <div class="option mb-4">
                            <label for="parc2" class="d-block mb-2" style="font-weight: bold; color: #BA476D;">
                                <input type="radio" id="parc2" name="vote" value="parc2"> Parc du Cinquantenaire
                            </label>
                            <div class="progress" style="height: 20px; border-radius: 10px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: <?= calculatePercentage($_SESSION['votes']['parc2'], $totalVotes); ?>%; background-color: #BA476D;"
                                    aria-valuenow="<?= calculatePercentage($_SESSION['votes']['parc2'], $totalVotes); ?>"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <?= calculatePercentage($_SESSION['votes']['parc2'], $totalVotes); ?>%
                                </div>
                            </div>
                        </div>

                        <!-- Parc Royal -->
                        <div class="option mb-4">
                            <label for="parc3" class="d-block mb-2" style="font-weight: bold; color: #BA476D;">
                                <input type="radio" id="parc3" name="vote" value="parc3"> Parc Royal
                            </label>
                            <div class="progress" style="height: 20px; border-radius: 10px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: <?= calculatePercentage($_SESSION['votes']['parc3'], $totalVotes); ?>%; background-color: #BA476D;"
                                    aria-valuenow="<?= calculatePercentage($_SESSION['votes']['parc3'], $totalVotes); ?>"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <?= calculatePercentage($_SESSION['votes']['parc3'], $totalVotes); ?>%
                                </div>
                            </div>
                        </div>

                        <!-- Bois de la Cambre -->
                        <div class="option mb-4">
                            <label for="parc4" class="d-block mb-2" style="font-weight: bold; color: #BA476D;">
                                <input type="radio" id="parc4" name="vote" value="parc4"> Bois de la Cambre
                            </label>
                            <div class="progress" style="height: 20px; border-radius: 10px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: <?= calculatePercentage($_SESSION['votes']['parc4'], $totalVotes); ?>%; background-color: #BA476D;"
                                    aria-valuenow="<?= calculatePercentage($_SESSION['votes']['parc4'], $totalVotes); ?>"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <?= calculatePercentage($_SESSION['votes']['parc4'], $totalVotes); ?>%
                                </div>
                            </div>
                        </div>

                        <!-- Parc Josaphat -->
                        <div class="option mb-4">
                            <label for="parc5" class="d-block mb-2" style="font-weight: bold; color: #BA476D;">
                                <input type="radio" id="parc5" name="vote" value="parc5"> Parc Josaphat
                            </label>
                            <div class="progress" style="height: 20px; border-radius: 10px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: <?= calculatePercentage($_SESSION['votes']['parc5'], $totalVotes); ?>%; background-color: #BA476D;"
                                    aria-valuenow="<?= calculatePercentage($_SESSION['votes']['parc5'], $totalVotes); ?>"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <?= calculatePercentage($_SESSION['votes']['parc5'], $totalVotes); ?>%
                                </div>
                            </div>
                        </div>

                        <!-- Parc Morichar -->
                        <div class="option mb-4">
                            <label for="parc6" class="d-block mb-2" style="font-weight: bold; color: #BA476D;">
                                <input type="radio" id="parc6" name="vote" value="parc6"> Parc Morichar
                            </label>
                            <div class="progress" style="height: 20px; border-radius: 10px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: <?= calculatePercentage($_SESSION['votes']['parc6'], $totalVotes); ?>%; background-color: #BA476D;"
                                    aria-valuenow="<?= calculatePercentage($_SESSION['votes']['parc6'], $totalVotes); ?>"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <?= calculatePercentage($_SESSION['votes']['parc6'], $totalVotes); ?>%
                                </div>
                            </div>
                        </div>

                        <!-- Bouton Soumettre -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #BA476D; border: none; border-radius: 15px; padding: 10px 20px; font-weight: bold;">
                                Soumettre mon vote
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>






<!--Comment-->

<section class="add-comment my-5">
    <h2 class="text-center">Partagez votre expérience</h2>
    <form method="POST" action="" class="text-center">
        <textarea name="comment" id="commentInput" class="form-control my-3" rows="4"
            placeholder="Ajoutez votre commentaire..."></textarea>
        <button type="submit" class="btn btn-warning">Soumettre mon commentaire</button>
    </form>
</section>

<?php get_footer(); ?>

</html>
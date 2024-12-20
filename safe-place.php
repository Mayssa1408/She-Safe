<?php
session_start();

// Initialisation des votes dans la session si inexistants
if (!isset($_SESSION['votes'])) {
    $_SESSION['votes'] = [
        "parc1" => 0,
        "parc2" => 0,
        "parc3" => 0,
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
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<?php

/** Template Name: My FAQ Page */
get_header();
?>

<body>
    <header class="text-center py-4">
        <h1>Besoin d'une Safe Place ?</h1>
        <p>Aidez la communauté à identifier les lieux où les femmes se sentent en sécurité.</p>
        <button class="btn btn-primary">Aidez-nous à rendre Bruxelles plus Safe !</button>
    </header>

    <main class="container">
        <section class="poll my-5">
            <h2>Parcs</h2>
            <form method="POST" action="">
                <div class="option">
                    <label for="parc1">
                        <input type="radio" id="parc1" name="vote" value="parc1"> Parc Botanique
                    </label>
                    <div class="bar-container">
                        <div class="bar" id="bar1"
                            style="width: <?= calculatePercentage($_SESSION['votes']['parc1'], $totalVotes); ?>%;">
                        </div>
                        <span
                            class="percentage"><?= calculatePercentage($_SESSION['votes']['parc1'], $totalVotes); ?>%</span>
                    </div>
                </div>

                <div class="option">
                    <label for="parc2">
                        <input type="radio" id="parc2" name="vote" value="parc2"> Parc Cinquantenaire
                    </label>
                    <div class="bar-container">
                        <div class="bar" id="bar2"
                            style="width: <?= calculatePercentage($_SESSION['votes']['parc2'], $totalVotes); ?>%;">
                        </div>
                        <span
                            class="percentage"><?= calculatePercentage($_SESSION['votes']['parc2'], $totalVotes); ?>%</span>
                    </div>
                </div>

                <div class="option">
                    <label for="parc3">
                        <input type="radio" id="parc3" name="vote" value="parc3"> Parc Royal
                    </label>
                    <div class="bar-container">
                        <div class="bar" id="bar3"
                            style="width: <?= calculatePercentage($_SESSION['votes']['parc3'], $totalVotes); ?>%;">
                        </div>
                        <span
                            class="percentage"><?= calculatePercentage($_SESSION['votes']['parc3'], $totalVotes); ?>%</span>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-3">Soumettre mon vote</button>
            </form>
        </section>

        <section class="add-comment my-5">
            <h2 class="text-center">Partagez votre expérience</h2>
            <form method="POST" action="" class="text-center">
                <textarea name="comment" id="commentInput" class="form-control my-3" rows="4"
                    placeholder="Ajoutez votre commentaire..."></textarea>
                <button type="submit" class="btn btn-warning">Soumettre mon commentaire</button>
            </form>
        </section>
    </main>


    <?php get_footer(); ?>
</body>

</html>
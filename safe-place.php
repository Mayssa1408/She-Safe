<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>She Safe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    $votes = [
        "parc1" => 0,
        "parc2" => 0,
        "parc3" => 0,
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["vote"])) {
            $votes[$_POST["vote"]] += 10;
        }

        if (!empty($_POST["comment"])) {
            $new_comment = htmlspecialchars($_POST["comment"]);
        }
    }

    $totalVotes = array_sum($votes);
    function calculatePercentage($votes, $totalVotes)
    {
        return $totalVotes > 0 ? ($votes / $totalVotes) * 100 : 0;
    }
    ?>

    <header class="text-center py-4">
        <h1>Besoin d'une Safe Place ?</h1>
        <p>Aidez la communauté à identifier les lieux où les femmes se sentent en sécurité.</p>
        <button class="btn btn-primary">Aidez-nous à rendre Bruxelles plus Safe !</button>
    </header>

    <main class="container">
        <section class="poll col-md-3 mx-auto my-5">
            <h2>Parcs</h2>
            <form method="POST" action="">
                <?php foreach ($votes as $key => $value): ?>
                    <div class="option">
                        <label for="<?= $key ?>">
                            <input type="radio" id="<?= $key ?>" name="vote" value="<?= $key ?>">
                            <?= ucfirst(str_replace("parc", "Parc ", $key)) ?>
                        </label>
                        <div class="bar-container">
                            <div class="bar" id="bar<?= $key ?>"
                                style="width: <?= calculatePercentage($value, $totalVotes) ?>%;"></div>
                            <span class="percentage"
                                id="percentage<?= $key ?>"><?= round(calculatePercentage($value, $totalVotes)) ?>%</span>
                        </div>
                    </div>
                <?php endforeach; ?>
                <button class="btn btn-success mt-3" type="submit">Soumettre mon vote</button>
            </form>
        </section>

        <section class="comments-section my-5">
            <h2 class="text-center">Ce que les femmes disent des Safe Places</h2>
            <div class="row">
                <?php if (isset($new_comment)): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nouveau commentaire</h5>
                                <p class="card-text"><?= $new_comment ?></p>
                                <p class="text-muted">— Utilisateur</p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
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

    <footer class="text-center py-3 bg-light">
        <p>&copy; 2024 She Safe - Tous droits réservés</p>
    </footer>

    <script src="sondage.js"></script>
</body>

</html>
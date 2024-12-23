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


<!--SECTION 1------------------------------------------------------------------------------------------------------->
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

            </div>
            <!-- Colonne contenant l'image -->
            <div class="col-lg-6 col-md-12 text-center mt-4 mt-lg-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/safePlaceS1.png" alt="Safe Place">
            </div>
        </div>
    </div>
</section>

<!---------------------------------SONDAGES--------------------------------------------->
<section id="safe-place" class="py-5"></section>
<div class="container-fluid px-3">
    <section class="poll my-5">
        <h2>Parcs</h2>

        <div class="option">
            <label for="parc1">
                <input type="radio" id="parc1" name="vote" value="parc1"> Parc Botanique
            </label>
            <div class="bar-container">
                <div class="bar" id="bar1"></div>
                <span class="percentage" id="percentage1">0%</span>
            </div>
        </div>

        <div class="option">
            <label for="parc2">
                <input type="radio" id="parc2" name="vote" value="parc2"> Parc Cinquantenaire
            </label>
            <div class="bar-container">
                <div class="bar" id="bar2"></div>
                <span class="percentage" id="percentage2">0%</span>
            </div>
        </div>

        <div class="option">
            <label for="parc3">
                <input type="radio" id="parc3" name="vote" value="parc3"> Parc Royaleee
            </label>
            <div class="bar-container">
                <div class="bar" id="bar3"></div>
                <span class="percentage" id="percentage3">0%</span>
            </div>
        </div>
        <button class="btn btn-success mt-3" onclick="submitVote()">Soumettre mon vote</button>
    </section>
</div>

<script src="sondage.js"></script>

<!--Temoignages ------------------------------------------>

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

<!--Ajouter un temoignage------------------------------------------------------------------------------------------------->
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
            <textarea name="comment" id="comment" class="form-control" rows="4"
                placeholder="Ajoutez votre commentaire..." required></textarea>
        </div>
        <button type="submit" class="submit w-100 btn btn-primary">Soumettre mon commentaire</button>
    </form>
</section>

<?php get_footer(); ?>
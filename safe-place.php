<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>She Safe</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
get_header();
?>


<!--SECTION 1------------------------------------------------------------------------------------------------------->

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
<section id="poll-carousel" class="py-5">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">

            <!-- Slide 1: Parcs -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 poll-card">
                            <h2>Parcs</h2>

                            <div class="option">
                                <label for="parc1">
                                    <input type="radio" id="parc1" name="vote-parcs" value="parc1"> Parc Botanique
                                </label>
                            </div>
                            <div class="option">
                                <label for="parc2">
                                    <input type="radio" id="parc2" name="vote-parcs" value="parc2"> Parc Cinquantenaire
                                </label>
                            </div>
                            <div class="option">
                                <label for="parc3">
                                    <input type="radio" id="parc3" name="vote-parcs" value="parc3"> Parc Royal
                                </label>
                            </div>
                            <div class="option">
                                <label for="parc4">
                                    <input type="radio" id="parc4" name="vote-parcs" value="parc4"> Bois de la Cambre
                                </label>
                            </div>
                            <div class="option">
                                <label for="parc5">
                                    <input type="radio" id="parc5" name="vote-parcs" value="parc5"> Parc Josaphat
                                </label>
                            </div>
                            <div class="option">
                                <label for="parc6">
                                    <input type="radio" id="parc6" name="vote-parcs" value="parc6"> Parc Astrid
                                </label>
                            </div>

                            <button class="btn btn-success mt-3" onclick="submitVote('parcs')">Soumettre mon
                                vote</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Cafés -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 poll-card">
                            <h2>Cafés</h2>

                            <div class="option">
                                <label for="cafe1">
                                    <input type="radio" id="cafe1" name="vote-cafes" value="cafe1"> Café Belga
                                </label>
                            </div>
                            <div class="option">
                                <label for="cafe2">
                                    <input type="radio" id="cafe2" name="vote-cafes" value="cafe2"> Café de la Presse
                                </label>
                            </div>
                            <div class="option">
                                <label for="cafe3">
                                    <input type="radio" id="cafe3" name="vote-cafes" value="cafe3"> Le Pain Quotidien
                                </label>
                            </div>
                            <div class="option">
                                <label for="cafe4">
                                    <input type="radio" id="cafe4" name="vote-cafes" value="cafe4"> Aksum Coffee House
                                </label>
                            </div>
                            <div class="option">
                                <label for="cafe5">
                                    <input type="radio" id="cafe5" name="vote-cafes" value="cafe5"> OR Coffee
                                </label>
                            </div>
                            <div class="option">
                                <label for="cafe6">
                                    <input type="radio" id="cafe6" name="vote-cafes" value="cafe6"> La Fabrique en Ville
                                </label>
                            </div>

                            <button class="btn btn-success mt-3" onclick="submitVote('cafes')">Soumettre mon
                                vote</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Arrêts de transport en commun -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 poll-card">
                            <h2>Arrêts de transport en commun</h2>

                            <div class="option">
                                <label for="arret1">
                                    <input type="radio" id="arret1" name="vote-arrets" value="arret1"> Gare Centrale
                                </label>
                            </div>
                            <div class="option">
                                <label for="arret2">
                                    <input type="radio" id="arret2" name="vote-arrets" value="arret2"> De Brouckère
                                </label>
                            </div>
                            <div class="option">
                                <label for="arret3">
                                    <input type="radio" id="arret3" name="vote-arrets" value="arret3"> Louise
                                </label>
                            </div>
                            <div class="option">
                                <label for="arret4">
                                    <input type="radio" id="arret4" name="vote-arrets" value="arret4"> Arts-Loi
                                </label>
                            </div>
                            <div class="option">
                                <label for="arret5">
                                    <input type="radio" id="arret5" name="vote-arrets" value="arret5"> Trône
                                </label>
                            </div>
                            <div class="option">
                                <label for="arret6">
                                    <input type="radio" id="arret6" name="vote-arrets" value="arret6"> Porte de Namur
                                </label>
                            </div>

                            <button class="btn btn-success mt-3" onclick="submitVote('arrets')">Soumettre mon
                                vote</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Bars -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 poll-card">
                            <h2>Bars</h2>

                            <div class="option">
                                <label for="bar1">
                                    <input type="radio" id="bar1" name="vote-bars" value="bar1"> Delirium Café
                                </label>
                            </div>
                            <div class="option">
                                <label for="bar2">
                                    <input type="radio" id="bar2" name="vote-bars" value="bar2"> Moeder Lambic
                                </label>
                            </div>
                            <div class="option">
                                <label for="bar3">
                                    <input type="radio" id="bar3" name="vote-bars" value="bar3"> Café Belga
                                </label>
                            </div>
                            <div class="option">
                                <label for="bar4">
                                    <input type="radio" id="bar4" name="vote-bars" value="bar4"> À La Mort Subite
                                </label>
                            </div>
                            <div class="option">
                                <label for="bar5">
                                    <input type="radio" id="bar5" name="vote-bars" value="bar5"> Bar Du Matin
                                </label>
                            </div>
                            <div class="option">
                                <label for="bar6">
                                    <input type="radio" id="bar6" name="vote-bars" value="bar6"> Floris Bar
                                </label>
                            </div>

                            <button class="btn btn-success mt-3" onclick="submitVote('bars')">Soumettre mon
                                vote</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>



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

<!-- Section HTML -->
<section id="safe-place-section" class="py-5" style="background-color: #f8d7da;">
    <div class="container">
        <h2 class="text-center mb-5">Ce que les femmes disent des safes places</h2>

        <!-- Testimonials Grid -->
        <div class="row" id="testimonials-container">
            <!-- Testimonials will be dynamically loaded here -->
            <?php
            $testimonials = get_option('safe_place_testimonials', []);
            if (!empty($testimonials)) {
                foreach ($testimonials as $testimonial) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . esc_html($testimonial['place']) . '</h5>';
                    echo '<h6 class="card-subtitle text-muted">' . esc_html($testimonial['name']) . '</h6>';
                    echo '<p class="card-text">' . esc_html($testimonial['comment']) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>

        <!-- Testimonial Form -->
        <div class="card p-4 mt-5 bg-white">
            <form id="testimonial-form">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                </div>
                <div class="mb-3">
                    <label for="place" class="form-label">Lieu</label>
                    <input type="text" class="form-control" id="place" name="place" placeholder="Lieu" required>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Commentaire</label>
                    <textarea class="form-control" id="comment" name="comment" placeholder="Commentaire" rows="4"
                        required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
</section>

<!-- JavaScript to handle form submission dynamically -->
<script>
    document.getElementById('testimonial-form').addEventListener('submit', function (event) {
        event.preventDefault();

        const place = document.getElementById('place').value;
        const name = document.getElementById('name').value;
        const comment = document.getElementById('comment').value;

        // AJAX request to add testimonial
        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                action: 'add_testimonial',
                place: place,
                name: name,
                comment: comment
            })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Add new testimonial to the grid
                    const container = document.getElementById('testimonials-container');
                    const newTestimonial = document.createElement('div');
                    newTestimonial.className = 'col-md-4 mb-4';
                    newTestimonial.innerHTML = `
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">${place}</h5>
              <h6 class="card-subtitle text-muted">${name}</h6>
              <p class="card-text">${comment}</p>
            </div>
          </div>`;
                    container.appendChild(newTestimonial);

                    // Clear form fields
                    document.getElementById('place').value = '';
                    document.getElementById('name').value = '';
                    document.getElementById('comment').value = '';
                }
            });
    });

    <!-- JavaScript to handle form submission dynamically -->




    <?php get_footer(); ?>
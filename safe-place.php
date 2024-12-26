<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>She Safe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
<!-- Polls Section -->


<section id="poll-carousel" class="py-5">
    <div id="carouselExample" class="carousel slide" data-bs-interval="false">
        <div class="carousel-inner">
            <!-- Parcs -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 poll-card">
                            <h2 class="text-center mb-4">Parcs</h2>
                            <div id="parcs-results" class="mb-4"></div>
                            <form id="parcs-form">
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-parcs" value="Jardin Botanique"> Jardin
                                        Botanique
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-parcs" value="Parc Josaphat"> Parc Josaphat
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-parcs" value="Bois de la Cambre"> Bois de la
                                        Cambre
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-parcs" value="Parc Morichar"> Parc Morichar
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-parcs" value="Parc Royale"> Parc Royale
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-parcs" value="Parc Cinquentenaire"> Parc
                                        Cinquentenaire
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success mt-3 w-100">Soumettre mon vote</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cafés -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 poll-card">
                            <h2 class="text-center mb-4">Cafés</h2>
                            <div id="cafes-results" class="mb-4"></div>
                            <form id="cafes-form">
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-cafes" value="Seven"> Seven
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-cafes" value="Barkboy"> Barkboy
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-cafes" value="Bisou"> Bisou
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-cafes" value="Bouche"> Bouche
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-cafes" value="Honest"> Honest
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-cafes" value="Frank"> Frank
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success mt-3 w-100">Soumettre mon vote</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arrêts de transport -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 poll-card">
                            <h2 class="text-center mb-4">Arrêts de transport en commun</h2>
                            <div id="transport-results" class="mb-4"></div>
                            <form id="transport-form">
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-transport" value="Gare Centrale"> Gare
                                        Centrale
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-transport" value="De Brouckère"> De Brouckère
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-transport" value="Porte de Namur"> Porte de
                                        Namur
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-transport" value="Louise"> Louise
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-transport" value="Arts-Loi"> Arts-Loi
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-transport" value="Trône"> Trône
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success mt-3 w-100">Soumettre mon vote</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bars -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 poll-card">
                            <h2 class="text-center mb-4">Bars</h2>
                            <div id="bars-results" class="mb-4"></div>
                            <form id="bars-form">
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-bars" value="Delirium Café"> Delirium Café
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-bars" value="Moeder Lambic"> Moeder Lambic
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-bars" value="À la Mort Subite"> À la Mort
                                        Subite
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-bars" value="Le Corbeau"> Le Corbeau
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-bars" value="Le Havana"> Le Havana
                                    </label>
                                </div>
                                <div class="option">
                                    <label class="w-100">
                                        <input type="radio" name="vote-bars" value="Le Belga"> Le Belga
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success mt-3 w-100">Soumettre mon vote</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</section>


<!-- Section Témoignages -->
<section class="container my-5">
    <h2 class="text-center mb-4">Ce que les femmes disent des Safe Places</h2>
    <div id="testimonials" class="d-flex flex-wrap center-content-between">
        <?php
        // Exemple de données de témoignages
        $testimonials = [
            ["name" => "Marie", "place" => "Parc Royale", "comment" => "J'adore ce parc, toujours des gens autour et bien éclairé !"],
            ["name" => "Sophie", "place" => "Place Flagey", "comment" => "Super endroit, mais un peu bruyant parfois."],
            ["name" => "Jade", "place" => "BarkBoy", "comment" => "C'est cool et c'est dans un quartier calme"],
            ["name" => "Sarah", "place" => "Gare du Nord", "comment" => "Il y a souvent la police c'est rassurant"],

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

<!-- Section Ajout de Témoignage -->
<section class="container my-5">
    <div class="card">
        <h2 class="text-center mb-4">Partagez votre expérience</h2>
        <form id="testimonial-form">
            <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
            <input type="text" name="place" class="form-control" placeholder="Nom de l'endroit" required>
            <textarea name="comment" class="form-control" rows="4" placeholder="Ajoutez votre commentaire..."
                required></textarea>
            <button type="submit" class="btn">Soumettre mon commentaire</button>
        </form>
    </div>
</section>

<script>
    document.getElementById('testimonial-form').addEventListener('submit', function (e) {
        e.preventDefault();

        // Récupération des valeurs du formulaire
        const name = this.elements['name'].value;
        const place = this.elements['place'].value;
        const comment = this.elements['comment'].value;

        // Création du nouveau témoignage
        const newTestimonial = document.createElement('div');
        newTestimonial.className = 'testimonial-card';
        newTestimonial.innerHTML = `
                <h5>${place}</h5>
                <p><strong>${name}</strong></p>
                <p>${comment}</p>
            `;

        // Ajout du témoignage au début de la liste
        const testimonialsList = document.getElementById('testimonials');
        testimonialsList.insertBefore(newTestimonial, testimonialsList.firstChild);

        // Réinitialisation du formulaire
        this.reset();
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Initialisation du stockage des votes avec des valeurs par défaut pour chaque lieu
    const votes = JSON.parse(localStorage.getItem('votes')) || {
        parcs: {
            "Jardin Botanique": 0,
            "Parc Josaphat": 0,
            "Bois de la Cambre": 0,
            "Parc Morichar": 0,
            "Parc Royale": 0
        },
        cafes: {
            "Seven": 0,
            "Barkboy": 0,
            "Bisou": 0,
            "Bouche": 0,
            "Honest": 0,
            "Frank": 0
        },
        transport: {
            "Gare Centrale": 0,
            "De Brouckère": 0,
            "Porte de Namur": 0,
            "Louise": 0,
            "Arts-Loi": 0,
            "Trône": 0
        },
        bars: {
            "Delirium Café": 0,
            "Moeder Lambic": 0,
            "À la Mort Subite": 0,
            "Le Corbeau": 0,
            "Le Havana": 0,
            "Le Belga": 0
        }
    };

    // Gestionnaire pour les formulaires de vote
    document.querySelectorAll('form[id$="-form"]').forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const category = e.target.id.split('-')[0]; // Obtient la catégorie (parcs, cafes, etc.)
            const selected = e.target.querySelector('input[type="radio"]:checked');

            if (selected) {
                const value = selected.value;
                votes[category][value] = (votes[category][value] || 0) + 1;
                localStorage.setItem('votes', JSON.stringify(votes));
                updateResults(category);

                // Afficher un message de confirmation
                showConfirmation(category);
            }
        });
    });

    // Fonction pour mettre à jour l'affichage des résultats
    function updateResults(category) {
        const resultsDiv = document.getElementById(`${category}-results`);
        const categoryVotes = votes[category];
        const total = Object.values(categoryVotes).reduce((a, b) => a + b, 0);

        let html = '<div class="results-container mb-4">';

        // Trier les résultats par nombre de votes (du plus haut au plus bas)
        const sortedOptions = Object.entries(categoryVotes)
            .sort(([, a], [, b]) => b - a);

        for (const [option, count] of sortedOptions) {
            const percentage = total === 0 ? 0 : ((count / total) * 100).toFixed(1);
            html += `
            <div class="result-item mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="fw-bold">${option}</span>
                    <span class="badge bg-success">${count} votes (${percentage}%)</span>
                </div>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-success" 
                         role="progressbar" 
                         style="width: ${percentage}%;" 
                         aria-valuenow="${percentage}" 
                         aria-valuemin="0" 
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
        `;
        }
        html += '</div>';
        resultsDiv.innerHTML = html;
    }

    // Fonction pour afficher un message de confirmation
    function showConfirmation(category) {
        const form = document.getElementById(`${category}-form`);
        const existingAlert = form.querySelector('.alert');
        if (existingAlert) {
            existingAlert.remove();
        }

        const alert = document.createElement('div');
        alert.className = 'alert alert-success mt-3';
        alert.role = 'alert';
        alert.textContent = 'Merci pour votre vote !';

        form.appendChild(alert);

        // Faire disparaître l'alerte après 3 secondes
        setTimeout(() => {
            alert.remove();
        }, 3000);
    }

    // Initialiser l'affichage des résultats pour toutes les catégories
    document.addEventListener('DOMContentLoaded', () => {
        ['parcs', 'cafes', 'transport', 'bars'].forEach(updateResults);
    });
</script>



<?php get_footer(); ?>
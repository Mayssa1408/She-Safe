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
/*
Template Name: Safe Place
*/

get_header(); ?>
<style>
#safe-place {
  background-color: #fef6e9;
  padding: 0;
  margin: 0;
  height: auto;
  display: flex;
  align-items: center;
  animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

#safe-place h2 {
  color: #ba476d;
  font-size: 2.5rem;
  text-align: right;
  animation: slideInRight 1s ease-out;
}

@keyframes slideInRight {
  from { opacity: 0; transform: translateX(50px); }
  to { opacity: 1; transform: translateX(0); }
}

#safe-place p {
  color: #333333;
  font-size: 1.2rem;
  line-height: 1.6;
  text-align: right;
  animation: slideInLeft 1s ease-out;
}

@keyframes slideInLeft {
  from { opacity: 0; transform: translateX(-50px); }
  to { opacity: 1; transform: translateX(0); }
}

#safe-place img {
  max-width: 100%;
  max-height: 100%;
  transition: transform 0.3s ease;
}

#safe-place img:hover {
  transform: scale(1.05);
}

#safe-place .container-fluid {
  max-width: 100%;
  margin: 0 auto;
}

#safe-place .icon {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;
}

#safe-place .safe-icon {
  width: 175px;
  height: auto;
  margin: 30px 15px;
}

/* Sondages */
#poll-container {
  background-color:hsl(6, 69.40%, 85.90%)
  padding: 50px 0;
  position: relative;
  overflow: hidden;
}

#poll-container::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(to right, #ba476d, #f7d7d4);
}

.poll-card {
  background-color: #FBD3CE;
  border-radius: 15px 2px 15px 2px;
  box-shadow: 0 10px 30px rgba(186, 71, 109, 0.1);
  padding: 30px;
  text-align: left;
  width: 100%;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.poll-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px #ba476d;
}

.poll-card h2 {
  font-size: 2.5rem;
  color: #ba476d;
  margin-bottom: 30px;
  text-align: center;
}

.option {
  display: flex;
  flex-direction: column;
  align-items: left;
  margin-bottom: 20px;
  padding: 15px;
  border-radius: 50px;
  border: 2px solid transparent;
  transition: all 0.3s ease;
  cursor: pointer;
  background-color: #fff;
}

.option:hover {
  border-color: #ba476d;
  transform: translateX(10px);
  background-color: #FEF6E9;
}

.option input[type="radio"] {
  accent-color: #ba476d;
  margin-right: 10px;
  transform: scale(1.2);
  transition: transform 0.3s ease;
}

.option:hover input[type="radio"] {
  transform: scale(1.4);
}

.bar-container {
  background-color: #d08c9b;
  border-radius: 20px;
  width: 100%;
  height: 20px;
  overflow: hidden;
  margin-top: 10px;
  position: relative;
  box-shadow: inset 0 2px 4px hsla(0, 0.00%, 0.00%, 0.10);
}

.bar {
  background-color: #ba476d;
  background-image: linear-gradient(45deg, rgba(255,255,255,.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,.15) 50%, rgba(255,255,255,.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
  height: 100%;
  width: 0%;
  transition: width 1s ease;
  animation: progress-bar-stripes 1s linear infinite;
}

@keyframes progress-bar-stripes {
  from { background-position: 1rem 0; }
  to { background-position: 0 0; }
}

.percentage {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #ffffff;
  font-size: 0.9rem;
  font-weight: bold;
  text-shadow: 0 1px 2px #000000;
}

.carousel-control-prev,
.carousel-control-next {
  width: 200px;
  height: auto;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background-color: #ba476d;
  color: white;
  border: none;
  border-radius: 50px;
  padding: 15px 30px;
  transition: all 0.3s ease;
  opacity: 1;
  font-weight: bold;
  text-decoration: none;
  overflow: hidden;
}

.carousel-control-prev::after,
.carousel-control-next::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, transparent, rgba(255,255,255,0.2), transparent);
  transform: translateX(-100%);
  transition: transform 0.5s ease;
}

.carousel-control-prev:hover::after,
.carousel-control-next:hover::after {
  transform: translateX(100%);
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
  background-color: #90274f;
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(183, 83, 108, 0.3);
}

#carousel-navigation {
  display: flex;
  justify-content: center;
  gap: 30px;
  margin: 40px auto;
  padding: 0 20px;
  max-width: 800px;
}

/* Section Témoignages */
#testimonials {
  background-color:none
  position: relative;
  border-radius: 50px;
}

.testimonial-card {
  background-color:rgba(247, 215, 219, 0.54);
  border-radius: 15px 2px 15px 2px;
  padding: 30px;
  margin: 20px;
  box-shadow: 0 10px 30px rgba(186, 71, 109, 0.1);
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  animation: fadeInUp 0.8s ease-out;
}

.testimonial-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: linear-gradient(to bottom, #ba476d, #f7d7db);
}

.testimonial-card:hover {
  transform: translateY(-5px) scale(1.02);
  box-shadow: 0 15px 40px rgba(186, 71, 109, 0.2);
}

.testimonial-card h5 {
  color: #ba476d;
  margin-bottom: 15px;
  font-weight: bold;
}

.form-control {
  border: 2px solid #ba476d;
  border-radius: 25px;
  padding: 12px 20px;
  margin-bottom: 15px;
  width: 100%;
  transition: all 0.3s ease;
  background-color: #fef6e9;
}

.form-control:focus {
  outline: none;
  border-color: #ba476d;
  box-shadow: 0 0 0 3px rgba(186, 71, 109, 0.1);
  transform: translateY(-2px);
}

.btn {
  position: relative;
  overflow: hidden;
  background-color: #ba476d;
  color: white;
  border: none;
  border-radius: 50px;
  padding: 15px 30px;
  font-weight: bold;
  transition: all 0.3s ease;
}

.btn::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, transparent, #ffffff, transparent);
  transform: translateX(-100%);
  transition: transform 0.5s ease;
}

.btn:hover::after {
  transform: translateX(100%);
}

.btn:hover {
  background-color: #90274f;
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(183, 83, 108, 0.3);
}

/* Style pour le formulaire sans cadre, fond ou contour */
.card {
  background-color: transparent; /* Pas de fond */
  padding: 0; /* Pas de marges internes */
  box-shadow: none; /* Pas d'ombre */
  border: none; /* Suppression des bordures */
  position: relative;
  overflow: visible; /* Pas de limitation de contenu */
}

/* Suppression de la barre décorative */
.card::before {
  content: none; /* Rien avant la carte */
}

/* Champs de saisie avec bordures */
.form-control {
  border: 2px solid #ba476d; /* Bordure visible pour les champs */
  border-radius: 25px; /* Bordures arrondies */
  padding: 12px 20px; /* Espacement interne */
  margin-bottom: 15px; /* Espacement entre les champs */
  width: 100%;
  transition: all 0.3s ease;
  background-color: #fef6e9; /* Fond léger */
  color: #333; /* Couleur du texte */
}

.form-control:focus {
  outline: none; /* Pas de contour au focus */
  border-color: #ba476d; /* Bordure accentuée */
  box-shadow: 0 0 0 3px rgba(186, 71, 109, 0.1); /* Légère lueur au focus */
}

/* Bouton minimaliste */
.btn {
  background-color: #ba476d; /* Couleur principale */
  color: white;
  border: none; /* Pas de bordure */
  border-radius: 50px; /* Boutons arrondis */
  padding: 15px 30px;
  font-weight: bold;
  transition: all 0.3s ease;
}

.btn:hover {
  background-color: #90274f; /* Changement de couleur au survol */
  transform: translateY(-2px);
  box-shadow: none; /* Pas d'ombre */
}


/* Responsive */
@media (max-width: 768px) {
  #safe-place {
    padding: 40px 20px;
    text-align: center;
  }

  #safe-place h2,
  #safe-place p {
    text-align: center;
  }

  .poll-card {
    margin: 10px;
    padding: 20px;
  }

  .option:hover {
    transform: translateX(5px);
  }

  #carousel-navigation {
    flex-direction: column;
    align-items: center;
    gap: 15px;
  }

  .carousel-control-prev,
  .carousel-control-next {
    width: 100%;
    max-width: 300px;
    margin: 5px 0;
  }

  .testimonial-card {
    margin: 10px;
  }

  .form-control,
  .btn {
    width: 100%;
  }
}


#carousel-navigation {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
  margin: 40px auto;
  padding: 20px;
  width: 100%;
}

.carousel-control-prev,
.carousel-control-next {
  position: static !important;
  width: auto;
  min-width: 150px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #ba476d;
  color: white;
  border: none;
  border-radius: 25px;
  padding: 0 20px;
  transition: all 0.3s ease;
  opacity: 1;
  margin: 0;
  font-weight: bold;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
  background-color: #90274f;
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(183, 83, 108, 0.3);
}

.carousel-control-prev span,
.carousel-control-next span {
  font-size: 1rem;
  color: white;
}

/* Responsive */
@media (max-width: 768px) {
  #carousel-navigation {
    flex-direction: row; /* Force l'alignement horizontal même sur mobile */
    gap: 15px;
    padding: 10px;
  }

  .carousel-control-prev,
  .carousel-control-next {
    min-width: 120px;
    height: 45px;
    padding: 0 15px;
  }
}

/* Pour très petits écrans */
@media (max-width: 480px) {
  .carousel-control-prev,
  .carousel-control-next {
    min-width: 100px;
    font-size: 0.9rem;
  }
}
</style>
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
        <div id="carousel-navigation">
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span>Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span>Suivant</span>
    </button>
</div>
</div>
        </div>
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
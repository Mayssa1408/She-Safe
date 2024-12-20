<?php get_header(); ?>
<main class="content">
  <style>
    /* Global Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Appliquer la police Glory à tout le texte dans le body */
    body {
      font-family: 'Glory', sans-serif; /* Applique la police Glory à tout le texte du body */
      background-color: #FEF6E9; /* Couleur de fond globale */
    }

    /* Style du header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: #FCD6D2;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    /* Conteneur du logo */
    .logo-container {
      display: flex;
      align-items: center;
      margin-left: 20px; /* Ajustement des marges pour la version responsive */
    }

    /* Style du logo */
    .logo {
      width: 40px; /* Taille du logo */
      height: auto;
      margin-right: 10px;
    }

    /* Nom de l'entreprise à côté du logo (garde la police Great Vibes ici) */
    .logo-name {
      font-family: 'Great Vibes', cursive;
      font-size: 24px;
      color: #B7536C;
    }

    /* Style du menu de navigation */
    .navbar ul {
      display: flex;
      list-style: none;
      gap: 20px;
    }

    .navbar ul li a {
      text-decoration: none;
      font-size: 18px;
      color: #B7536C;
    }

    .navbar ul li a:hover {
      color: #D94F78; /* Couleur au survol */
    }

    /* Icônes à droite du header */
    .icons {
      display: flex;
      gap: 15px;
      margin-right: 20px;
    }

    .icon {
      font-size: 24px;
      text-decoration: none;
      color: #333;
    }

    .icon:hover {
      color: #007BFF; /* Couleur au survol des icônes */
    }

    /* Section principale */
    .intro-section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 50px;
      background-color: #FEF6E9;
    }

    .text-container {
      flex: 1;
      max-width: 500px;
      margin-right: 20px;
    }

    .text-container h1 {
      font-family: 'Great Vibes', cursive;
      font-size: 48px;
      color: #B7536C;
      margin-bottom: 20px;
    }

    .text-container h2 {
      font-family: 'Montserrat', sans-serif;
      font-size: 24px;
      font-weight: bold;
      color: #B7536C;
      margin-bottom: 20px;
    }

    .text-container p {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      color: #B7536C;
      margin-bottom: 30px;
    }

    .cta-button {
      background-color: #B7536C;
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #D94F78;
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      border-radius: 15px;
    }

    /* Section Safe Places */
    .second-section {
      background-color: #F4C7C2;
      padding: 50px 20px;
    }

    .rectangle-container {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .rectangle {
      background-color: #FEF6E9;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      width: 300px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .rectangle h2 {
      font-family: 'Montserrat', sans-serif;
      font-size: 20px;
      font-weight: bold;
      color: #B7536C;
      margin-bottom: 20px;
    }

    .rectangle .flower {
      font-size: 30px;
      margin-bottom: 20px;
    }

    .rectangle p {
      font-family: 'Montserrat', sans-serif;
      font-size: 16px;
      color: #B7536C;
      margin-bottom: 20px;
    }

    .rectangle .cta-button {
      display: inline-block;
      background-color: #B7536C;
      color: #fff;
      text-decoration: none;
      font-size: 16px;
      padding: 10px 15px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .rectangle .cta-button:hover {
      background-color: #D94F78;
    }

    /* Section Témoignages */
    .testimonials-section {
      background-color: #E6DFF1;
      padding: 50px 20px;
      text-align: center;
    }

    .section-title {
      font-family: 'Lora', serif;
      font-size: 32px;
      color: #8D8DAF;
      margin-bottom: 40px;
    }

    .testimonial {
      background-color: #8D8DAF;
      color: #fff;
      padding: 20px;
      border-radius: 10px;
      margin: 0 auto 20px auto;
      max-width: 400px;
    }

    .testimonial h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .testimonial p {
      font-size: 16px;
      margin-bottom: 10px;
    }

   /* === Newsletter Section === */
.newsletter-section {
    height: 700px;
    background-color: #D08C9B; /* Couleur de fond de la section */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0 20px;
}

/* Titre de la section */
.newsletter-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 32px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 40px;
}

/* Texte d'information sous le titre */
.newsletter-text {
    font-family: 'Montserrat', sans-serif;
    font-size: 18px;
    color: #fff;
    margin-bottom: 30px;
    max-width: 841px; /* Limiter la largeur du texte */
}

/* Conteneur des champs d'entrée */
.input-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-bottom: 30px;
}

/* Style des champs d'entrée */
.input-field {
    width: 400px;
    height: 50px;
    padding: 10px;
    font-family: 'Glory', sans-serif; /* Police Glory */
    color: #B7536C;
    font-size: 18px;
    border: 0px;
    border-radius: 5px;
    margin: 0 auto;
    outline: none;
}

/* Texte sous les champs d'entrée */
.newsletter-disclaimer {
    font-family: 'Montserrat', sans-serif;
    font-size: 18px;
    color: #fff;
    margin-bottom: 30px;
    max-width: 600px;
}

/* CTA Button Styling */
.cta-button-container {
    margin-top: 20px;
}

.cta-button {
    background-color: #B7536C;
    color: #fff;
    font-size: 18px;
    padding: 15px 30px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #9c3f55;
}

/* Responsive Design */
@media (max-width: 768px) {
    .newsletter-title {
        font-size: 28px;
    }

    .newsletter-text {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .input-field {
        width: 90%; /* Utiliser 90% de la largeur sur les petits écrans */
    }

    .newsletter-disclaimer {
        font-size: 16px;
        margin-bottom: 20px;
    }
}




    /* Responsiveness */
    @media (max-width: 768px) {
      .intro-section {
        flex-direction: column;
        text-align: center;
      }

      .rectangle-container {
        flex-direction: column;
      }

      .testimonial {
        width: 100%;
      }

      .input-container input {
        width: 100%;
      }
    }
  </style>

  <!-- SECTION INTRO -->
  <section class="intro-section container py-5">
    <div class="row align-items-center">
      <div class="col-md-6 text-container">
        <h1>She Safe</h1>
        <h2>Bienvenue dans ta Safe Place !</h2>
        <p>Rejoins une communauté engagée pour la sécurité des femmes. Partage ton expérience, découvre des lieux sûrs et connecte-toi à un réseau solidaire.</p>
        <p>Explore dès maintenant !</p>
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="cta-button btn btn-primary">Découvrez-nous</a>
      </div>
      <div class="col-md-6 image-container text-center">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/your-image.jpg'); ?>" 
             alt="Image représentant She Safe" 
             class="img-fluid rounded">
      </div>
    </div>
  </section>

  <!-- SECTION SAFE PLACE -->
  <section class="second-section py-5">
    <div class="container">
      <div class="row rectangle-container">
        <div class="col-md-6 rectangle">
          <h2>Tu cherches une Safe Place à Bruxelles ?</h2>
          <div class="flower">🌸</div>
          <p>Découvre les lieux les plus sûrs de Bruxelles grâce à nos sondages interactifs.</p>
          <a href="#" class="cta-button">En savoir plus ➡</a>
        </div>
        <div class="col-md-6 rectangle">
          <h2>Tu as vécu une expérience marquante ?</h2>
          <div class="flower">🌸</div>
          <p>Partage-la avec notre communauté et découvre les témoignages inspirants des autres utilisatrices.</p>
          <a href="#" class="cta-button">En savoir plus ➡</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION TÉMOIGNAGES -->
  <section class="testimonials-section py-5">
    <div class="container text-center">
      <h2 class="section-title">Témoignages</h2>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <?php for ($i = 0; $i < 6; $i++): ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
          <?php endfor; ?>
        </div>
        <div class="carousel-inner">
          <?php 
            $testimonials = [
              ["name" => "Marie, 23 ans", "text" => "“She Safe m’a littéralement changé la vie ! ...”", "stars" => 5],
              ["name" => "Camille, 18 ans", "text" => "“Grâce à She Safe, j’ai retrouvé confiance. ...”", "stars" => 4],
              ["name" => "Laura, 29 ans", "text" => "“She Safe m’a permis de trouver des lieux où ...”", "stars" => 5],
            ];
            foreach ($testimonials as $index => $testimonial): 
          ?>
          <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
            <div class="testimonial mx-auto">
              <h3 class="testimonial-name"><?php echo $testimonial['name']; ?></h3>
              <p class="testimonial-text"><?php echo $testimonial['text']; ?></p>
              <div class="stars">
                <?php for ($star = 0; $star < $testimonial['stars']; $star++): ?>
                  <span class="star">★</span>
                <?php endfor; ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION NEWSLETTER -->
  <section class="newsletter-section">
    <h1 class="newsletter-title">Bruxelles en toute sécurité. Participe à notre initiative !</h1>
    
    <p class="newsletter-text">
        Abonne-toi à notre newsletter pour contribuer à la liste des lieux les plus sûrs de Bruxelles. 
        Reçois des infos utiles et reste informée pour te déplacer en toute confiance !
    </p>

    <div class="input-container">
        <!-- Prénom Input -->
        <input type="text" class="input-field" placeholder="Prénom" id="firstName" />

        <!-- E-mail Input -->
        <input type="email" class="input-field" placeholder="E-mail" id="email" />
    </div>

    <p class="newsletter-disclaimer">
        En t’inscrivant, tu seras abonné à la newsletter. Promis, pas de spam et tu pourras te désinscrire à tout moment !
    </p>

    <div class="cta-button-container">
        <a href="#" class="cta-button">Je m'inscris</a>
    </div>
</section>

</main>

<?php get_footer(); ?>

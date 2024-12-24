<?php get_header(); ?>
<main class="content">
  <style>
    /* Global Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Glory', sans-serif;
      background-color: #FEF6E9;
    }

    /* Header Styles */
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

    .logo-container {
      display: flex;
      align-items: center;
      margin-left: 20px;
    }

    .logo {
      width: 40px;
      height: auto;
      margin-right: 10px;
    }

    .logo-name {
      font-family: 'Great Vibes', cursive;
      font-size: 24px;
      color: #B7536C;
    }

    /* Navigation */
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
      color: #D94F78;
    }

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
      color: #007BFF;
    }

    /* Intro Section */
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
      border-radius: 50px;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #D94F78;
    }

    .image-container img {
      width: 428px;
      height: 544px;
      border-radius: 15px;
      object-fit: cover;
    }

    /* Second Section */
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
      width: 500px;
      height: 400px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      border-radius: 2px 50px 2px 50px;
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
      flex-grow: 1;
      display: flex;
      align-items: center;
    }

    /* Testimonials Section */
    .testimonials-section {
      background-color: #E6DFF1;
      padding: 50px 20px;
    }

    .section-title {
      font-family: 'Lora', serif;
      font-size: 32px;
      color: #8D8DAF;
      margin-bottom: 40px;
      text-align: center;
    }

    .testimonials-container {
      display: flex;
      overflow: hidden;
      position: relative;
      width: 100%;
      padding: 20px 0;
    }

    .testimonials-track {
      display: flex;
      transition: transform 0.5s ease;
      gap: 30px;
    }

    .testimonial-card {
      min-width: 300px;
      flex-shrink: 0;
      animation: slide 60s linear infinite;
      background: #8D8DAF;
      color: white;
      padding: 25px;
      border-radius: 15px;
    }

    @keyframes slide {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-100%);
      }
    }

    .testimonials-track:hover {
      animation-play-state: paused;
    }

    .testimonial-header {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .testimonial-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #E6DFF1;
      margin-right: 15px;
    }

    .testimonial-rating {
      color: gold;
      margin-top: 10px;
    }

    /* Newsletter Section */
    .newsletter-section {
      height: 700px;
      background-color: #D08C9B;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
    }

    .newsletter-title {
      font-family: 'Montserrat', sans-serif;
      font-size: 32px;
      font-weight: bold;
      color: #fff;
      margin-bottom: 40px;
    }

    .newsletter-text {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      color: #fff;
      margin-bottom: 30px;
      max-width: 841px;
    }

    .input-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-bottom: 30px;
    }

    .input-field {
      width: 400px;
      height: 50px;
      padding: 10px;
      font-family: 'Glory', sans-serif;
      color: #B7536C;
      font-size: 18px;
      border: 0;
      border-radius: 5px;
      margin: 0 auto;
      outline: none;
    }

    .newsletter-disclaimer {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      color: #fff;
      margin-bottom: 30px;
      max-width: 600px;
    }

    .newsletter-section .cta-button {
      border-radius: 50px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .intro-section {
        flex-direction: column;
        text-align: center;
      }

      .rectangle-container {
        flex-direction: column;
        align-items: center;
      }

      .rectangle {
        width: 100%;
        max-width: 500px;
      }

      .input-field {
        width: 90%;
      }

      .image-container img {
        width: 100%;
        height: auto;
        max-width: 428px;
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
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="cta-button">Découvrez-nous</a>
      </div>
      <div class="col-md-6 image-container">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/your-image.jpg'); ?>" 
             alt="Image représentant She Safe" 
             class="img-fluid">
      </div>
    </div>
  </section>

  <!-- SECTION SAFE PLACE -->
  <section class="second-section py-5">
    <div class="container">
      <div class="rectangle-container">
        <div class="rectangle">
          <h2>Tu cherches une Safe Place à Bruxelles ?</h2>
          <div class="flower">🌸</div>
          <p>Découvre les lieux les plus sûrs de Bruxelles grâce à nos sondages interactifs.</p>
          <a href="#" class="cta-button">En savoir plus ➡</a>
        </div>
        <div class="rectangle">
          <h2>Tu as vécu une expérience marquante ?</h2>
          <div class="flower">🌸</div>
          <p>Partage-la avec notre communauté et découvre les témoignages inspirants des autres utilisatrices.</p>
          <a href="#" class="cta-button">En savoir plus ➡</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION TÉMOIGNAGES -->
  <section class="testimonials-section">
    <div class="container">
      <h2 class="section-title">Témoignages</h2>
      <div class="testimonials-container">
        <div class="testimonials-track">
          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar"></div>
              <h3>Marie, 23 ans</h3>
            </div>
            <p>"She Safe m'a littéralement changé la vie ! Je me sens tellement plus en sécurité maintenant lors de mes sorties nocturnes."</p>
            <div class="testimonial-rating">★★★★★</div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar"></div>
              <h3>Camille, 18 ans</h3>
            </div>
            <p>"Grâce à She Safe, j'ai retrouvé confiance. Les conseils de la communauté sont inestimables."</p>
            <div class="testimonial-rating">★★★★★</div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar"></div>
              <h3>Laura, 29 ans</h3>
            </div>
            <p>"Cette app m'a permis de découvrir des endroits sûrs où je peux travailler ou me détendre en toute tranquillité."</p>
            <div class="testimonial-rating">★★★★★</div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar"></div>
              <h3>Sophie, 25 ans</h3>
            </div>
            <p>"La communauté est vraiment bienveillante. C'est rassurant de savoir qu'on n'est pas seule."</p>
            <div class="testimonial-rating">★★★★★</div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar"></div>
              <h3>Emma, 27 ans</h3>
            </div>
            <p>"J'utilise She Safe tous les jours pour planifier mes trajets. C'est devenu un réflexe indispensable !"</p>
            <div class="testimonial-rating">★★★★★</div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar"></div>
              <h3>Julie, 31 ans</h3>
            </div>
            <p>"Les alertes en temps réel m'ont sauvée plusieurs fois d'endroits peu recommandables. Merci She Safe !"</p>
            <div class="testimonial-rating">★★★★★</div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar"></div>
              <h3>Sarah, 22 ans</h3>
            </div>
            <p>"Une app qui devrait être connue par toutes les femmes. Elle m'a aidée à me sentir plus forte et plus confiante."</p>
            <div class="testimonial-rating">★★★★★</div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <div class="testimonial-avatar"></div>
              <h3>Léa, 24 ans</h3>
            </div>
            <p>"Le système de notation des lieux est génial. Ça aide vraiment à identifier les endroits sûrs rapidement."</p>
            <div class="testimonial-rating">★★★★★</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION NEWSLETTER -->
  <section class="newsletter-section">
    <h1 class="newsletter-title">Bruxelles en toute sécurité. Participe à notre initiative !</h1>
    <p class="newsletter-text">
      Abonne-toi à notre newsletter pour contribuer à la liste des lieux les plus sûrs de Bruxelles. 
      Reçois des infReçois des infos utiles et reste informée pour te déplacer en toute confiance !
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
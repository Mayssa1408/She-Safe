D'accord, je vais vous envoyer le code complet avec toutes les modifications demandées. Voici le code PHP complet pour votre page :

```php
<?php get_header(); ?>

<main class="content">
  <style>
    /* Variables globales */
    :root {
      --primary-color: #B7536C;
      --primary-hover: #D94F78;
      --background-light: #FEF6E9;
      --secondary-light: #F4C7C2;
      --purple-light: #E6DFF1;
      --purple-dark: #8D8DAF;
      --transition: all 0.3s ease;
    }

    /* Styles globaux améliorés */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Glory', sans-serif;
      background-color: var(--background-light);
    }

    /* Section Intro améliorée */
    .intro-section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 80px 50px;
      position: relative;
      overflow: hidden;
    }

    .text-container {
      flex: 1;
      max-width: 600px;
      margin-right: 40px;
      animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .text-container h1 {
      font-family: 'Great Vibes', cursive;
      font-size: 64px;
      color: var(--primary-color);
      margin-bottom: 25px;
      animation: fadeInLeft 1s ease-out;
    }

    .text-container h2 {
      font-family: 'Montserrat', sans-serif;
      font-size: 28px;
      font-weight: bold;
      color: var(--primary-color);
      margin-bottom: 25px;
      animation: fadeInLeft 1.2s ease-out;
    }

    .text-container p {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      color: var(--primary-color);
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .cta-button {
      background-color: var(--primary-color);
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      padding: 15px 30px;
      border-radius: 50px;
      transition: var(--transition);
      display: inline-block;
      box-shadow: 0 4px 15px #b7536c;
    }

    .cta-button:hover {
      background-color: var(--primary-hover);
      transform: translateY(-3px);
      box-shadow: 0 6px 20px #b7536c;
    }

    .image-container {
      flex: 1;
      display: flex;
      justify-content: center;
      animation: fadeInRight 1s ease-out;
    }

    .image-container img {
      width: 428px;
      height: 544px;
      border-radius: 20px;
      object-fit: cover;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: var(--transition);
    }

    .image-container img:hover {
      transform: scale(1.02);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    /* Section Safe Place améliorée */
    .second-section {
      background-color: var(--secondary-light);
      padding: 80px 20px;
      position: relative;
    }

    .rectangle-container {
      display: flex;
      justify-content: center;
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .rectangle {
      background-color: var(--background-light);
      padding: 40px;
      width: 500px;
      height: 400px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      text-align: center;
      border-radius: 2px 50px 2px 50px;
      transition: var(--transition);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .rectangle:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .rectangle h2 {
      font-family: 'Montserrat', sans-serif;
      font-size: 24px;
      font-weight: bold;
      color: var(--primary-color);
      margin-bottom: 25px;
    }

    .rectangle .flower-icon {
      width: 60px;
      height: 60px;
      background-color: var(--primary-color);
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 25px;
      animation: pulse 2s infinite;
    }

    .rectangle .flower-icon::before {
      content: '🌸';
      font-size: 36px;
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }

    .rectangle p {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      color: var(--primary-color);
      line-height: 1.6;
      flex-grow: 1;
      display: flex;
      align-items: center;
      padding: 0 20px;
    }

    .rectangle .cta-button {
      margin-top: 20px;
      position: relative;
      padding-right: 50px;
    }

    .rectangle .cta-button::after {
      content: '→';
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      transition: transform 0.3s ease;
    }

    .rectangle .cta-button:hover::after {
      transform: translate(5px, -50%);
    }

    /* Section Témoignages améliorée */
    .testimonials-section {
      background-color: var(--purple-light);
      padding: 80px 20px;
      overflow: hidden;
    }

    .section-title {
      font-family: 'Lora', serif;
      font-size: 36px;
      color: var(--purple-dark);
      margin-bottom: 50px;
      text-align: center;
      position: relative;
    }

    .section-title::after {
      content: '';
      display: block;
      width: 100px;
      height: 3px;
      background: var(--purple-dark);
      margin: 20px auto;
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
      gap: 30px;
      animation: slideTrack 40s linear infinite;
    }

    .testimonials-track:hover {
      animation-play-state: paused;
    }

    @keyframes slideTrack {
      0% { transform: translateX(0); }
      100% { transform: translateX(-100%); }
    }

    .testimonial-card {
      min-width: 300px;
      background: var(--purple-dark);
      color: white;
      padding: 30px;
      border-radius: 2px 50px 2px 50px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: var(--transition);
    }

    .testimonial-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .testimonial-header {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .testimonial-header h3 {
      font-size: 18px;
      margin: 0;
    }

    /* Nouvelle section de statistiques */
    .stats-section {
      background-color: var(--background-light);
      padding: 80px 20px;
    }

    .stats-container {
      display: flex;
      justify-content: space-around;
      max-width: 1200px;
      margin: 0 auto;
    }

    .stat-card {
      background-color: var(--secondary-light);
      padding: 40px;
      width: 300px;
      height: 300px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      border-radius: 2px 50px 2px 50px;
      transition: var(--transition);
    }

    .stat-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .stat-number {
      font-size: 48px;
      font-weight: bold;
      color: var(--primary-color);
      margin-bottom: 10px;
    }

    .stat-text {
      font-size: 18px;
      color: var(--primary-color);
    }

    @keyframes countUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate-number {
      animation: countUp 2s forwards;
    }

    /* Section Newsletter */
    .newsletter-section {
      min-height: 700px;
      background-color: #D08C9B;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 80px 20px;
      position: relative;
    }

    .newsletter-title {
      font-family: 'Montserrat', sans-serif;
      font-size: 36px;
      font-weight: bold;
      color: #fff;
      margin-bottom: 40px;
      max-width: 800px;
    }

    .newsletter-text {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      color: #fff;
      margin-bottom: 40px;
      max-width: 841px;
      line-height: 1.6;
    }

    .input-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-bottom: 30px;
      width: 100%;
      max-width: 500px;
    }

    .input-field {
      width: 100%;
      height: 50px;
      padding: 15px;
      font-family: 'Glory', sans-serif;
      font-size: 18px;
      border: none;
      border-radius: 10px;
      outline: none;
      transition: var(--transition);
    }

    .input-field:focus {
      box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
    }

    .newsletter-disclaimer {
      font-family: 'Montserrat', sans-serif;
      font-size: 16px;
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 30px;
      max-width: 600px;
    }

    /* Responsive Design amélioré */
    @media (max-width: 768px) {
      .intro-section {
        padding: 40px 20px;
      }

      .text-container {
        margin-right: 0;
        margin-bottom: 40px;
        text-align: center;
      }

      .text-container h1 {
        font-size: 48px;
      }

      .rectangle-container {
        flex-direction: column;
        align-items: center;
      }

      .rectangle {
        width: 100%;
        max-width: 500px;
        height: auto;
        min-height: 400px;
      }

      .input-field {
        width: 100%;
      }

      .image-container img {
        width: 100%;
        height: auto;
        max-width: 428px;
      }

      .newsletter-title {
        font-size: 28px;
      }

      .stats-container {
        flex-direction: column;
        align-items: center;
      }

      .stat-card {
        width: 100%;
        max-width: 300px;
        margin-bottom: 20px;
      }
    }
  </style>

  <!-- Section Intro -->
  <section class="intro-section">
    <div class="text-container">
      <h1>She Safe</h1>
      <h2>Bienvenue dans ta Safe Place !</h2>
      <p>Rejoins une communauté engagée pour la sécurité des femmes. Partage ton expérience, découvre des lieux sûrs et connecte-toi à un réseau solidaire.</p>
      <p>Explore dès maintenant !</p>
      <a href="<?php echo esc_url(home_url('/about')); ?>" class="cta-button">Découvrez-nous</a>
    </div>
    <div class="image-container">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/your-image.jpg')); ?>" 
           alt="Image représentant She Safe" 
           loading="lazy">
    </div>
  </section>

  <!-- Section Safe Place -->
  <section class="second-section">
    <div class="rectangle-container">
      <div class="rectangle">
        <h2>Tu cherches une Safe Place à Bruxelles ?</h2>
        <div class="flower-icon"></div>
        <p>Découvre les lieux les plus sûrs de Bruxelles grâce à nos sondages interactifs.</p>
        <a href="<?php echo esc_url(home_url('/safe-places')); ?>" class="cta-button">En savoir plus</a>
      </div>
      <div class="rectangle">
        <h2>Tu as vécu une expérience marquante ?</h2>
        <div class="flower-icon"></div>
        <p>Partage-la avec notre communauté et découvre les témoignages inspirants des autres utilisatrices.</p>
        <a href="<?php echo esc_url(home_url('/forum')); ?>" class="cta-button">Partager mon expérience</a>
      </div>
    </div>
  </section>

  <!-- SECTION TÉMOIGNAGES -->
  <section class="testimonials-section">
    <div class="container">
    <h2 class="section-title">Vos avis</h2>
      <div class="testimonials-container">
        <div class="testimonials-track">
          <div class="testimonial-card">
            <div class="testimonial-header">
              <h3>Marie, 23 ans</h3>
            </div>
            <p>"She Safe m'a littéralement changé la vie ! Je me sens tellement plus en sécurité maintenant lors de mes sorties nocturnes."</p>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <h3>Camille, 18 ans</h3>
            </div>
            <p>"Grâce à She Safe, j'ai retrouvé confiance. Les conseils de la communauté sont inestimables."</p>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <h3>Laura, 29 ans</h3>
            </div>
            <p>"Cette app m'a permis de découvrir des endroits sûrs où je peux travailler ou me détendre en toute tranquillité."</p>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <h3>Sophie, 25 ans</h3>
            </div>
            <p>"La communauté est vraiment bienveillante. C'est rassurant de savoir qu'on n'est pas seule."</p>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <h3>Emma, 27 ans</h3>
            </div>
            <p>"J'utilise She Safe tous les jours pour planifier mes trajets. C'est devenu un réflexe indispensable !"</p>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <h3>Julie, 31 ans</h3>
            </div>
            <p>"Les alertes en temps réel m'ont sauvée plusieurs fois d'endroits peu recommandables. Merci She Safe !"</p>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <h3>Sarah, 22 ans</h3>
            </div>
            <p>"Une app qui devrait être connue par toutes les femmes. Elle m'a aidée à me sentir plus forte et plus confiante."</p>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-header">
              <h3>Léa, 24 ans</h3>
            </div>
            <p>"Le système de notation des lieux est génial. Ça aide vraiment à identifier les endroits sûrs rapidement."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nouvelle section de statistiques -->
<section class="stats-section">
  <div class="stats-container">
    <div class="stat-card">
      <div class="stat-number" id="satisfactionRate">0%</div>
      <div class="stat-text">Satisfaction</div>
    </div>
    <div class="stat-card">
      <div class="stat-number" id="freeRate">0%</div>
      <div class="stat-text">Gratuit et en ligne</div>
    </div>
    <div class="stat-card">
      <div class="stat-number" id="userCount">0</div>
      <div class="stat-text">Utilisateurs</div>
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
        En t'inscrivant, tu seras abonné à la newsletter. Promis, pas de spam et tu pourras te désinscrire à tout moment !
    </p>

    <div class="cta-button-container">
        <a href="#" class="cta-button">Je m'inscris</a>
    </div>
  </section>

</main>

<script>
  // Animation des nombres
  function animateValue(id, start, end, duration, isPercentage) {
    const obj = document.getElementById(id);
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start) + (isPercentage ? '%' : '');
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }

  // Démarrer les animations lorsque la section est visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateValue("satisfactionRate", 0, 99, 2000, true);
        animateValue("freeRate", 0, 100, 2000, true);
        animateValue("userCount", 0, 789, 2000, false);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  observer.observe(document.querySelector('.stats-section'));
</script>

<?php get_footer(); ?>
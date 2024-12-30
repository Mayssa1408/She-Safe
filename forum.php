<!DOCTYPE html>
<html lang="fr">

<?php
/** 
 * Template Name: forum - Page 
 */
get_header();
?>

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

    /* Styles globaux */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Glory', sans-serif;
      background-color: var(--background-light);
    }

    /* Section Forum Intro */
    .intro-section {
      padding: 80px 50px;
      position: relative;
      overflow: hidden;
      background-color: var(--background-light);
    }

    .intro-container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      max-width: 1200px;
      margin: 5%;
    }

    .image-container {
      flex: 1;
      padding: 20px;
      display: flex;
      justify-content: center;
      animation: fadeInLeft 1s ease-out;

    }

    .image-container img {
      width: 100%;
      max-width: 450px;
      height: auto;

      transition: var(--transition);
    }

    .image-container img:hover {
      transform: translateY(-10px);
      box-shadow: 25px 25px 70px rgba(183, 83, 108, 0.15),
        -25px -25px 70px rgba(255, 255, 255, 0.9);
    }

    .text-container {
      flex: 1;
      max-width: 600px;
      padding: 20px;
      animation: fadeInRight 1s ease-out;
    }

    .text-container h1 {
      font-family: 'Great Vibes', cursive;
      font-size: 48px;
      /* Taille ajustée pour tenir sur une ligne */
      color: var(--primary-color);
      margin-bottom: 25px;
      line-height: 1.3;
    }

    .text-container p {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      color: var(--primary-color);
      margin-bottom: 30px;
      line-height: 1.6;
      max-width: 540px;
    }

    @media (max-width: 768px) {
      .intro-section {
        padding: 10px 2099px;
      }

      .text-container h1 {
        font-size: 42px;
        text-align: center;
      }

      .text-container p {
        text-align: center;
        margin: 0 auto 30px auto;
      }

      .image-container {
        margin-bottom: 30px;
      }
    }

    /* Section Expériences */
    .experiences-section {
      background-color: var(--secondary-light);
      padding: 80px 20px;
      position: relative;
    }

    .experiences-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background-color: var(--primary-color);
      opacity: 0.3;
    }

    .section-title {
      font-family: 'Lora', serif;
      font-size: 36px;
      color: var(--primary-color);
      margin-bottom: 50px;
      text-align: center;
      position: relative;
    }

    .section-title::after {
      content: '';
      display: block;
      width: 100px;
      height: 3px;
      background: var(--primary-color);
      margin: 20px auto;
    }

    .experiences-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Style des cartes d'expérience */
    .experience-card {
      background-color: #FEF6E9;
      border-radius: 2px 50px 2px 50px;
      padding: 30px;
      margin-bottom: 30px;
      box-shadow: 10px 10px 30px rgba(183, 83, 108, 0.1);
      transition: var(--transition);
      animation: fadeInUp 0.8s ease-out;
    }

    .experience-card:hover {
      transform: translateY(-8px);
      box-shadow: 15px 15px 40px rgba(183, 83, 108, 0.15);
    }

    .card-header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      color: var(--primary-color);
    }

    .card-title {
      font-family: 'Montserrat', sans-serif;
      font-size: 20px;
      font-weight: bold;
    }

    .card-date {
      font-size: 14px;
      opacity: 0.8;
    }

    .card-content {
      font-family: 'Montserrat', sans-serif;
      font-size: 16px;
      line-height: 1.6;
      color: #666;
    }

    /* Section formulaire */
    .form-section {
      background: linear-gradient(135deg, var(--background-light), var(--secondary-light));
      padding: 3rem 0;
      animation: fadeIn 1s ease-out;
    }

    .form-container {
      text-align: center;
      max-width: 400px;
      width: 90%;
      margin: 0 auto;
      animation: floatIn 1s ease-out;
      border: none;
      box-shadow: none;
      padding: 0;
      background: none;
    }

    /* Modification du style pour le titre et l'ajout du trait */
    .form-title {
      font-size: 2rem;
      color: var(--primary-color);
      font-weight: bold;
      margin-bottom: 1rem;
      /* Réduit la marge pour le paragraphe */
    }

    /* Style pour le trait séparateur */
    .title-separator {
      width: 100%;
      height: 2px;
      background: linear-gradient(to right, transparent, rgba(183, 83, 108, 0.3), transparent);
      margin: 1.5rem 0;
    }

    /* Style pour le paragraphe descriptif */
    .form-description {
      font-size: 1rem;
      color: var(--primary-color);
      margin-bottom: 2rem;
      line-height: 1.5;
    }

    .form-group {
      position: relative;
      margin-bottom: 1.5rem;
    }

    .form-control {
      width: 100%;
      padding: 1.2rem 1.5rem;
      border: 2px solid rgba(183, 83, 108, 0.3);
      border-radius: 25px;
      font-size: 1rem;
      transition: var(--transition);
      background: var(--background-light);
    }

    .form-control:focus {
      outline: none;
      border-color: var(--primary-color);
      box-shadow: 0 0 15px rgba(183, 83, 108, 0.15);
      transform: translateY(-2px);
    }

    textarea.form-control {
      min-height: 150px;
      resize: vertical;
    }

    .submit-button {
      background: var(--primary-color);
      color: white;
      padding: 0.8rem 1.5rem;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: bold;
      margin: 1.5rem auto 0;
      transition: var(--transition);
      position: relative;
      overflow: hidden;
      display: inline-block;
      box-shadow: 0 4px 15px rgba(183, 83, 108, 0.2);
    }

    .submit-button::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.3), transparent);
      transform: translateX(-100%);
      transition: transform 0.6s ease;
    }

    .submit-button:hover::after {
      transform: translateX(100%);
    }

    .submit-button:hover {
      background-color: var(--primary-hover);
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(183, 83, 108, 0.3);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes floatIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .form-container {
        width: 85%;
      }

      .form-title {
        font-size: 1.8rem;
      }

      .form-control {
        padding: 1rem 1.5rem;
      }

      .submit-button {
        padding: 1rem 2rem;
      }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .intro-section {
        padding: 40px 20px;
      }

      .intro-container {
        flex-direction: column;
      }

      .image-container {
        order: -1;
        margin-bottom: 40px;
        margin-top: 25px;
      }

      .text-container {
        text-align: center;
        padding: 0;
      }

      .text-container h1 {
        font-size: 48px;
      }

      .form-container {
        padding: 20px;
      }

      .submit-button {
        width: 100%;
      }
    }
  </style>

  <!-- Section Intro -->
  <section class="intro-section">
    <div class="intro-container">
      <div class="image-container">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/forumIntro.png')); ?>" alt="Forum She Safe"
          loading="lazy">
      </div>
      <div class="text-container">
        <h1>Un espace bienveillant pour partager</h1>
        <p>Partages tes expériences et aides d'autres femmes à se sentir en <strong>sécurité.</strong> Ton témoignage
          peut faire la
          différence dans la vie de quelqu'un.</p>
      </div>
    </div>
  </section>

  <!-- Section Expériences -->
  <section class="experiences-section">
    <div class="experiences-container">
      <h2 class="section-title" style="font-family : 'Great Vibes'; font-size : 50px;">Expériences partagées</h2>
      <div id="experiencesList">
        <!-- Les expériences seront ajoutées ici dynamiquement -->
      </div>
    </div>
  </section>

  <section class="form-section">
    <div class="form-container">
      <h2 class="form-title" style="font-family : 'Great Vibes'; font-size : 50px;">Partagez votre expérience</h2>
     
      <p class="form-description">
        Votre témoignage est précieux. Il aidera d'autres femmes à se sentir plus en sécurité et soutenues dans leur
        quotidien.
      </p>
      <form id="experienceForm" class="login-form">
        <div class="form-group">
          <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
        </div>

        <div class="form-group">
          <input type="number" class="form-control" id="age" placeholder="Votre âge" required>
        </div>

        <div class="form-group">
          <textarea class="form-control" id="experience" placeholder="Partagez votre expérience..." rows="5"
            required></textarea>
        </div>

        <button type="submit" class="submit-button">Partager mon expérience</button>
      </form>
    </div>
  </section>

  <script>
    // Données des expériences
    let experiences = [
      {
        name: "Sophie",
        age: 25,
        text: "Après avoir été confrontée à des remarques dégradantes de la part d'un supérieur, j'ai décidé de parler. J'ai rassemblé mon courage, contacté les RH, et aujourd'hui, je suis fière d'avoir ouvert la voie à un environnement de travail plus respectueux.",
        date: "2024-02-15"
      },
      {
        name: "Laura",
        age: 30,
        text: "Un jour, dans les transports en commun, un homme s'est permis de me parler avec insistance malgré mes refus. J'ai finalement décidé de lui répondre à voix haute. Cela m'a montré que l'on peut se faire entendre, même dans les situations oppressantes.",
        date: "2024-02-10"
      },
      {
        name: "Mélissa",
        age: 22,
        text: "Un soir, en rentrant chez moi, j'ai remarqué qu'un homme me suivait. J'ai gardé mon calme, appelé une amie et changé de direction. Cet incident m'a donné la force de m'inscrire à des cours d'autodéfense.",
        date: "2024-02-20"
      }
    ];

    // Fonction d'affichage des expériences
    function displayExperiences() {
      const experiencesList = document.getElementById('experiencesList');
      experiencesList.innerHTML = '';

      experiences.forEach((exp, index) => {
        const card = document.createElement('div');
        card.className = 'experience-card';
        card.style.animationDelay = `${index * 0.2}s`;

        card.innerHTML = `
          <div class="card-header">
            <h3 class="card-title">${exp.name}, ${exp.age} ans</h3>
            <span class="card-date">${new Date(exp.date).toLocaleDateString()}</span>
          </div>
          <div class="card-content">
            <p>${exp.text}</p>
          </div>
        `;

        experiencesList.appendChild(card);
      });
    }

    // Gestion du formulaire
    document.getElementById('experienceForm').addEventListener('submit', function (e) {
      e.preventDefault();

      const newExperience = {
        name: document.getElementById('name').value,
        age: parseInt(document.getElementById('age').value),
        text: document.getElementById('experience').value,
        date: new Date().toISOString().split('T')[0]
      };

      experiences.unshift(newExperience);
      displayExperiences();
      this.reset();

      // Animation de scroll vers la nouvelle expérience
      document.querySelector('.experience-card').scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      });
    });

    // Affichage initial
    document.addEventListener('DOMContentLoaded', displayExperiences);
  </script>
</main>

<?php get_footer(); ?>
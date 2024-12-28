<?php
/** 
 * Template Name: myFaq - Page 
 */
get_header();
?>

<style>
    /* Styles globaux */
    .faq-page-wrapper {
        font-family: 'Glory', cursive;
        color: #333;
        line-height: 1.6;
    }

    /* Section d'introduction */
    .faq-intro {
        background-color: #fdf5e6;
        padding: 100px 20px 60px;
        /* Espacement de 100px entre header et premier titre */
        text-align: center;
    }

    .faq-intro .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .faq-intro .text-content {
        max-width: 50%;
        text-align: left;
    }

    .faq-intro .text-content h1 {
        font-family: 'Glory', cursive;
        font-weight: bold;
        font-size: 24px;
        /* Montserrat Bold 24px */
        color: #B7536C;
    }

    .faq-intro .text-content p {
        font-family: 'Glory', cursive;
        font-weight: lighter;
        font-size: 18px;
        /* Montserrat Light 18px */
        color: #555;
        margin-top: 15px;
    }

    .faq-intro .image-content img {
        max-width: 100%;
        border-radius: 10px;
    }

    /* Section FAQ */
    .faq-section {
        padding: 100px 20px 40px;
        /* Espacement de 100px entre les sections */
        background-color: #F4C7C2;
    }

    .faq-section h2 {
        font-family: 'Great Vibes', cursive;
        text-align: center;
        font-size: 32px;
        /* Lora Bold 32px */
        margin-bottom: 30px;
        color: #B7536C;
        font-weight: bold;
    }

    .faq-items {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .faq-item {
        margin-bottom: 15px;
        background-color: #FFF;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .faq-question {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #FEF6E9;
        padding: 15px;
        cursor: pointer;
        font-size: 1rem;
        font-weight: bold;
        transition: background 0.3s ease;
        border-radius: 5px;
    }

    .faq-question:hover {
        background: #D08C9B;
        color: #FFF;
    }

    .faq-question.active {
        background: #B7536C;
        color: #FFF;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        padding: 0 15px;
        background: #FFF;
        font-size: 0.9rem;
        color: #555;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .faq-answer.visible {
        max-height: 200px;
        padding: 15px;
    }

    /* Section Formulaire */
    .contact-section {
        padding: 100px 20px 40px;
        /* Espacement de 100px entre les sections */
        background: #E6DFF1;
    }

    .contact-section h2 {
        font-family: 'Great Vibes', cursive;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
        font-size: 32px;
        /* Montserrat Bold 32px */
        color: #8D8DAF;
    }

    .contact-section p {
        font-family: 'Glory', cursive;
        font-weight: lighter;
        text-align: center;
        margin-bottom: 30px;
        color: #555;
        font-size: 18px;
        /* Montserrat Light 18px */
        max-width: 700px;
        /* Largeur limitée à 700px */
        margin-left: auto;
        margin-right: auto;
    }

    .contact-section textarea {
        width: 100%;
        /* Prendre toute la largeur disponible */
        padding: 15px;
        /* Espace à l'intérieur de la zone de texte */
        font-size: 1rem;
        /* Taille de police ajustée */
        border: 1px solid #8D8DAF;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px #8D8DAF;
        resize: vertical;
        /* Permettre le redimensionnement vertical */
        min-height: 120px;
        /* Hauteur minimale pour que la zone soit visible */
        max-height: 400px;
        /* Hauteur maximale pour ne pas dépasser */
    }


    .contact-section form {
        max-width: 600px;
        margin: 0 auto;
    }

    .contact-section .form-group {
        margin-bottom: 20px;
        position: relative;
    }

    .contact-section input,
    .contact-section textarea {
        width: 100%;
        padding: 15px;
        font-size: 1rem;
        border: 1px solid #8D8DAF;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px #8D8DAF;
        transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-section input:focus,
    .contact-section textarea:focus {
        border-color: #8D8DAF;
        box-shadow: 0 0 5px #8D8DAF;
    }

    .contact-section input::placeholder,
    .contact-section textarea::placeholder {
        color: #aaa;
    }

    .contact-section .btn-submit {
        display: inline-block;
        background: #B7536C;
        color: #fff;
        padding: 15px 30px;
        border: none;
        border-radius: 50px;
        /* Bouton avec arrondis de 50px */
        cursor: pointer;
        font-size: 1rem;
        transition: background 0.3s ease;
        text-align: center;
    }

    .contact-section .btn-submit:hover {
        background: #D94F78;
    }

    .char-count {
        margin-top: 10px;
        font-size: 0.9rem;
        color: #555;
        text-align: right;
    }


    /* Responsive */
    @media (max-width: 768px) {
        .faq-intro .text-content {
            max-width: 100%;
            text-align: center;
        }

        .faq-intro .container {
            flex-direction: column;
            text-align: center;
        }

        .faq-items {
            text-align: left;
        }
    }
</style>

<div class="faq-page-wrapper">
    <!-- Section d'introduction -->
    <section id="faq-intro" class="py-5">
        <div class="container-fluid px-3">
            <div class="row align-items-center">
                <!-- Colonne contenant l'icône et le texte -->
                <div class="col-lg-6 col-md-12 text-center text-lg-start px-5">
                    <!-- Titre -->
                    <h2 class="fw-bold mb-4"
                        style="font-family: 'Great Vibes', cursive; font-size: 36px; color: #B7536C;">
                        Pas de panique, nous t’aidons
                    </h2>
                    <!-- Texte -->
                    <p class="mb-4" style="color: #B0596B;">
                        Consultez notre FAQ pour trouver des réponses rapides ou remplissez le formulaire de contact
                        pour nous faire part de vos besoins. Nous sommes là pour vous accompagner.
                    </p>
                </div>
                <!-- Colonne contenant l'image -->
                <div class="col-lg-6 col-md-12 text-center mt-4 mt-lg-0">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/supportHelp.png"
                        alt="Image d'aide et de support" class="img-fluid">
                </div>
            </div>
        </div>
    </section>



    <!-- Section FAQ -->
    <section class="faq-section">
        <h2>Trouves les réponses dont tu as besoin</h2>
        <div class="faq-items">
            <?php
            $faqs = [
                ["question" => "Qu'est-ce que She Safe ?", "answer" => "She Safe est une plateforme dédiée à la sécurité et au bien-être des femmes."],
                ["question" => "Est-ce que mes données personnelles sont protégées ?", "answer" => "Oui, vos données personnelles sont traitées avec le plus grand soin et protégées par des protocoles de sécurité avancés."],
                ["question" => "Qui peut rejoindre She Safe ?", "answer" => "Toute personne souhaitant contribuer à un environnement sécurisé peut rejoindre notre communauté."],
                ["question" => "Comment faire pour s’inscrire ?", "answer" => "Cliquez sur le bouton ‘S’inscrire’ en haut de la page et suivez les étapes d’inscription."],
                ["question" => "Comment signaler un problème ?", "answer" => "Utilisez le formulaire de contact ci-dessous pour signaler un problème ou poser une question."],
                ["question" => "Quels sont les services proposés par She Safe ?", "answer" => "Nous proposons des outils, des ressources et une communauté pour promouvoir la sécurité et le bien-être."],
                ["question" => "She Safe est-elle accessible sur mobile ?", "answer" => "Oui, notre plateforme est optimisée pour une utilisation mobile."],
                ["question" => "Puis-je modifier mes informations personnelles ?", "answer" => "Oui, connectez-vous à votre compte pour modifier vos informations."],
                ["question" => "Y a-t-il un coût pour utiliser She Safe ?", "answer" => "Certaines fonctionnalités sont gratuites, mais nous proposons également des services premium payants."],
                ["question" => "Comment contacter le support client ?", "answer" => "Vous pouvez nous contacter via le formulaire ci-dessous ou par e-mail."]
            ];
            foreach ($faqs as $faq) {
                echo '<div class="faq-item">';
                echo '<div class="faq-question">' . esc_html($faq['question']) . '<span class="arrow">▼</span></div>';
                echo '<div class="faq-answer">' . esc_html($faq['answer']) . '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <section class="contact-section">
        <h2>Besoin d’assistance ou d’informations ?</h2>
        <p>Complétez ce formulaire et nous vous répondrons dans les plus brefs délais.</p>
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
            <input type="hidden" name="action" value="submit_contact_form">

            <div class="form-group">
                <input type="text" name="name" placeholder="Nom" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea id="message" name="message" rows="6" maxlength="2000" placeholder="Message"
                    required></textarea>
                <div id="charCount" class="char-count">2000 caractères restants</div> <!-- Ajout du compteur -->
            </div>
            <button type="submit" class="btn-submit">Envoyer</button>
        </form>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const faqQuestions = document.querySelectorAll(".faq-question");
        faqQuestions.forEach((question) => {
            question.addEventListener("click", function () {
                const answer = this.nextElementSibling;
                const isActive = this.classList.contains("active");
                document.querySelectorAll(".faq-question").forEach((item) => item.classList.remove("active"));
                document.querySelectorAll(".faq-answer").forEach((item) => item.classList.remove("visible"));

                if (!isActive) {
                    this.classList.add("active");
                    answer.classList.add("visible");
                }
            });
        });
    });

    // JavaScript pour le compteur de caractères
    document.addEventListener("DOMContentLoaded", function () {
        const messageTextarea = document.getElementById('message');
        const charCount = document.getElementById('charCount');

        messageTextarea.addEventListener('input', function () {
            const remaining = 2000 - messageTextarea.value.length;
            charCount.textContent = remaining + ' caractères restants';
        });
    });

</script>

<?php get_footer(); ?>
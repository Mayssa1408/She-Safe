<?php
/* Template Name: My About Page */
get_header();
?>

<!-- Custom About Page -->
<!-- Custom About Page -->
<div class="w-100" style="margin: 0; padding: 0;">
    <!-- Section 1: Hero Banner -->
    <section class="hero-section" style="background-color: #FFF9F0; padding: 50px 0;">
        <div class="row gx-4 justify-content-center align-items-center">
            <!-- Image à gauche -->
            <div class="col-lg-6 position-relative px-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutUs.png" alt="About Us"
                    class="img-fluid" style="position: relative; z-index: 2; width: 100%;" />
                <!-- Décoration étoile -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="Star"
                    style="position: absolute; top: 10%; right: 5%; width: 75px;" />
            </div>
            <!-- Texte à droite -->
            <div class="col-lg-6 text-lg-start text-center" style="padding-right: 100px; padding-left: 20px;">
                <h1 style="color: #B73756; font-weight: bold; font-size: 3rem; margin-bottom: 20px;">
                    Il était une fois, She Safe
                </h1>
                <p style="font-size: 1.2rem; color: #333; line-height: 1.6;">
                    She Safe, c’est la communauté où les femmes de Bruxelles s’unissent pour lutter contre le
                    harcèlement de rue. Partager, échanger et contribuer à construire un avenir plus sûr, ensemble.
                </p>
            </div>
        </div>
    </section>
</div>




<!-- Section 2: Features -->
<section class="features-section py-5" style="background-color: #F8C6C6;">
    <div class="container text-center">
        <h2 class="fw-bold mb-5" style="color: #fffbe8;">
            Chez She Safe, nous croyons en une ville où chaque femme se sent en sécurité. <br>
            Découvrez les principes qui nous animent.
        </h2>

        <div class="row justify-content-center">
            <!-- Bloc 1 -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4" style="background-color: #F2E6F7; border-radius: 50px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/helphand.svg" class="mb-3" width="60"
                        height="60" alt="Icône Communauté">
                    <p class="mb-0 fw-bold" style="color: #9E4A5C;">
                        Chaque opinion compte et est respectée dans la communauté.
                    </p>
                </div>
            </div>

            <!-- Bloc 2 -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4" style="background-color: #F2E6F7; border-radius: 50px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/stat.svg" class="mb-3" width="60"
                        height="60" alt="Icône Données">
                    <p class="mb-0 fw-bold" style="color: #9E4A5C;">
                        Chaque donnée et retour est visible pour toutes.
                    </p>
                </div>
            </div>

            <!-- Bloc 3 -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4" style="background-color: #F2E6F7; border-radius: 50px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/badge.svg" class="mb-3"
                        width="60" height="60" alt="Icône Action Collective">
                    <p class="mb-0 fw-bold" style="color: #9E4A5C;">
                        Encourager l’action collective pour un changement durable.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Section 3: Content Details -->
<section class="content-section py-5" style="background-color: #FDE3E3;">
    <div class="row mb-4">
        <div class="col-md-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/group1.jpg" class="img-fluid rounded-circle"
                alt="Group 1">
        </div>
        <div class="col-md-6">
            <h2>Créer une communauté de confiance</h2>
            <p>
                Nous croyons en la force des femmes pour s'entraider et progresser ensemble dans un environnement
                solidaire.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 order-md-2 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/group2.jpg" class="img-fluid rounded-circle"
                alt="Group 2">
        </div>
        <div class="col-md-6">
            <h2>Donner une voix à chaque femme</h2>
            <p>
                Un espace pour s’exprimer librement, partager des expériences, et renforcer les liens
                communautaires.
            </p>
        </div>
    </div>
</section>

<!-- Section 4: Team -->
<section class="team-section py-5 text-center" style="background-color: #A70054; color: white;">
    <h2 class="mb-4">Notre équipe, <span style="color: #FFC107;">unies pour une cause commune</span></h2>
    <p>Les visages derrière She Safe : un collectif de femmes passionnées pour votre sécurité et votre bien-être.
    </p>
    <div class="row">
        <!-- Team Member 1 -->
        <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/team1.jpg" class="rounded-circle mb-3"
                width="150" alt="Team 1">
            <h5>Alia</h5>
            <p>Co-fondatrice et coordinatrice</p>
        </div>
        <!-- Team Member 2 -->
        <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/team2.jpg" class="rounded-circle mb-3"
                width="150" alt="Team 2">
            <h5>Louisa</h5>
            <p>Responsable Communication</p>
        </div>
        <!-- Team Member 3 -->
        <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/team3.jpg" class="rounded-circle mb-3"
                width="150" alt="Team 3">
            <h5>Stella</h5>
            <p>Designer & Développeuse</p>
        </div>
    </div>
</section>
</div>

<?php get_footer(); ?>
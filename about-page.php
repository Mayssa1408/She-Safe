<?php
/* Template Name: My About Page */
get_header();
?>

<!-- Custom About Page -->
<div class="w-100" style="margin: 0; padding: 0;">
    <!-- Section 1: Hero Banner -->
    <section class="hero-section" style=" padding: 50px 0;">
        <div class="row gx-4 justify-content-center align-items-center">
            <!-- Image à gauche -->
            <div class="col-lg-6 position-relative px-0" style="background-color:none" ;>
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutUs.png" alt="About Us"
                    class="about-us-image" style="position: relative; z-index: 2; width: 100%;" />
                <!-- Décoration étoile -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="Star"
                    style="position: absolute; top: 10%; right: 5%; width: 75px;" />
            </div>
            <!-- Texte à droite -->
            <div class="col-lg-6 text-lg-start text-center" style="padding-right: 100px; padding-left: 20px;">
                <h1 style="color: #9E4A5C; font-weight: bold; font-size: 3rem; margin-bottom: 20px;">
                    Il était une fois, She Safe
                </h1>
                <p style="font-size: 1.2rem; color: #9E4A5C; line-height: 1;"> <strong>
                        She Safe, c’est la communauté où les femmes de Bruxelles s’unissent pour lutter contre le
                        harcèlement de rue. Partager, échanger et contribuer à construire un avenir plus sûr, ensemble.
                    </strong>
                </p>
            </div>
        </div>
    </section>
</div>




<!-- Section 2: Features -->
<section class="features-section py-5" style="background-color: #F8C6C6;">
    <div class="container text-center">
        <div class="values-section">
            <h1 style="color: #9E4A5C; font-size: 36px; font-weight: bold;">Nos valeurs</h1>
            <h3 class="text-center mx-auto text-container">
                Chez She Safe, nous rêvons d'une ville où chaque femme se sent en sécurité, guidées par des principes
                forts
                qui inspirent notre mission.
            </h3>
        </div>


        <div class="row justify-content-center">
            <!-- Bloc 1 -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4" style="background-color: #F2E6F7; border-radius: 15px 2px 15px 2px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/helphand.svg" class="mb-3" width="60"
                        height="60" alt="Icône Communauté">
                    <p class="feature-text mb-0 fw-bold" style="color: #9E4A5C;">
                        Chaque opinion compte et est respectée dans la communauté.
                    </p>
                </div>
            </div>

            <!-- Bloc 2 -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4" style="background-color: #F2E6F7; border-radius: 15px 2px 15px 2px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/stat.svg" class="mb-3" width="60"
                        height="100" alt="Icône Données">
                    <p class="feature-text mb-0 fw-bold" style="color: #9E4A5C;">
                        Chaque donnée et retour est visible pour toutes.
                    </p>
                </div>
            </div>

            <!-- Bloc 3 -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4" style="background-color: #F2E6F7; border-radius:15px 2px 15px 2px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/badge.svg" class="mb-3" width="150"
                        height="60" alt="Icône Action Collective">
                    <p class="feature-text mb-0 fw-bold" style="color: #9E4A5C;">
                        Encourager l’action collective pour un changement durable.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Section 3: MISSIONNNNNNNNNNNNNNNNNNNNNNNNNNN -->
<section class="content-section py-5" style="background-color: #FDE3E3;">
    <!-- Texte d'introduction -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <div class="values-section">
                <h1 style="color: #9E4A5C; font-size: 36px; font-weight: bold;">Nos missions</h1>
                <h3 class="text-center mx-auto text-container">
                    Chez She Safe, nous nous engageons à créer un environnement où <strong>chaque femme </strong>peut
                    s’épanouir,
                    partager, et se sentir protégée. À travers nos actions, nous bâtissons <strong>une communauté
                        solidaire</strong> et
                    unie pour un avenir plus sûr et inclusif.
                </h3>
            </div>
        </div>
    </div>




    <!-- Section des missions -->
    <div class="container">
        <div class="row mb-5">
            <!-- Mission 1 -->
            <div class="col-md-6 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/group1.jpg"
                    class="img-fluid mb-2 mission-img" alt="Group 1">
                <h2 class="mb-2" style="color: #9E4A5C;">Créer une communauté de confiance</h2>
                <h3 class="text-center mx-auto mt-1"
                    style="font-size: 18px; line-height: 1.6; max-width: 400px; color: #6E4C59;">
                    Nous bâtissons un espace de solidarité où les femmes peuvent tisser des liens sincères, s’entraider
                    et se sentir pleinement en sécurité.
                </h3>
            </div>

            <!-- Mission 2 -->
            <div class="col-md-6 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/group2.jpg"
                    class="img-fluid mb-2 mission-img" alt="Group 2">
                <h2 class="mb-2" style="color: #9E4A5C;">Donner une voix à chaque femme</h2>
                <h3 class="text-center mx-auto mt-1"
                    style="font-size: 18px; line-height: 1.6; max-width: 400px; color: #6E4C59;">
                    Nous offrons un espace où les expériences, les idées et les opinions de chacune trouvent leur place,
                    permettant à toutes de s'exprimer librement et de contribuer activement à un changement positif.
                </h3>
            </div>
        </div>
    </div>

</section>



<!-- Section 4: Team -------------------------------------------------------->
<section class="team-section py-5 text-center" style="background-color: #9E4A5C; color: white;">
    <div class="container">
        <!-- Titre principal -->
        <div class="team-header">
            <h2 class="animate-title">
                Notre équipe, unies pour une cause commune
            </h2>
            <p>
                Les visages derrière She Safe : un collectif de femmes passionnées pour votre sécurité et votre
                bien-être.
            </p>
        </div>


        <div class="row g-4">
            <!-- Team Member 1 -->
            <div class="col-md-4">
                <div class="team-card p-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team1.png"
                        class="rounded-circle mb-3 team-img" alt="Team 1">
                    <h5 class="team-title">Alia</h5>
                    <p class="team-description">Co-fondatrice et coordinatrice</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-4">
                <div class="team-card p-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team2.png"
                        class="rounded-circle mb-3 team-img" alt="Team 2">
                    <h5 class="team-title">Louisa</h5>
                    <p class="team-description">Responsable Communication</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-4">
                <div class="team-card p-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/team3.png"
                        class="rounded-circle mb-3 team-img" alt="Team 3">
                    <h5 class="team-title">Stella</h5>
                    <p class="team-description">Designer & Développeuse</p>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<?php get_footer(); ?>
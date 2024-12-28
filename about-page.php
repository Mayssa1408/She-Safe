<?php
/* Template Name: My About Page */
get_header();
?>

<div class="w-100 m-0 p-0">
    <!-- Section 1: Introduction -->
    <section class="hero-section" style="margin-top: 100px;">
        <div class="row gx-2 gy-0 justify-content-center align-items-center">
            <!-- Image à gauche -->
            <div class="col-lg-6 position-relative px-0 mb-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutUs.png" alt="About Us"
                    class="about-us-" />
            </div>
            <!-- Texte à droite -->
            <div class="col-lg-4 col-md-4 col-sm-12 text-lg-start text-center px-4">
                <h1 style="color: #9E4A5C; font-weight: bold; font-size: 3rem; margin-bottom: 5px;">
                    Il était une fois, She Safe
                </h1>
                <p style="font-size: 1.2rem; color: #9E4A5C; line-height: 1; margin-top: 0;">
                    <strong>
                        She Safe, c’est la communauté où les femmes de Bruxelles s’unissent pour lutter contre le
                        harcèlement de rue. Partager, échanger et contribuer à construire un avenir plus sûr, ensemble.
                    </strong>
                </p>
            </div>
        </div>
    </section>


    <!-- Section 2: Valeurs -->
    <section class="features-section py-5" style="background-color: #F4C7C2;">
        <div class="container text-center">
            <div class="values-section">
                <h1 style="color: #9E4A5C; font-size: 36px; font-weight: bold;">Nos valeurs</h1>
                <h3 class="text-center mx-auto text-container">
                    Chez She Safe, nous rêvons d'une ville où chaque femme se sent en sécurité, guidées par des
                    principes
                    forts
                    qui inspirent notre mission.
                </h3>
            </div>
            <div class="row justify-content-center">
                <!-- Bloc 1 -->
                <div class="col-md-4 mb-2">
                    <div class="feature-box p-4" style="background-color: #F2E6F7; border-radius: 15px 2px 15px 2px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/helphand.svg" class="mb-3"
                            width="60" height="60" alt="Icône Communauté">
                        <p class="feature-text mb-0 fw-bold">
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



    <!-- Section 3: Mission -->
    <section class="content-section py-4" style="background-color: #FDE3E3;">
        <!-- Texte d'introduction -->
        <div class="container text-center">
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





            <!-- Section des missions -->
            <div class="container">
                <div class="row mb-5">
                    <!-- Mission 1 -->
                    <div class="col-md-6 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/group2.jpg"
                            class="img-fluid mb-2 mission-img" alt="Group 2">
                        <h2 class="mb-2" style="color: #9E4A5C;">Créer une communauté de confiance</h2>
                        <h3 class="text-center mx-auto mt-1"
                            style="font-size: 18px; line-height: 1.0; max-width: 400px;    ">
                            Nous bâtissons un espace de solidarité où les femmes peuvent tisser des liens sincères,
                            s’entraider
                            et se sentir pleinement en sécurité.
                        </h3>
                    </div>
                    <!-- Mission 2 -->
                    <div class="col-md-6 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/group2.jpg"
                            class="img-fluid mb-2 mission-img" alt="Group 2">
                        <h2 class="mb-2" style="color: #9E4A5C;">Donner une voix à chaque femme</h2>
                        <h3 class="text-center mx-auto mt-1"
                            style="font-size: 18px; line-height: 1.0; max-width: 400px; color: #9E4A5C;">
                            Nous offrons un espace où les expériences, les idées et les opinions de chacune trouvent
                            leur place,
                            permettant à toutes de s'exprimer librement et de contribuer activement à un changement
                            positif.
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
                <h1 style="color: #FEF6E9; font-size: 36px; font-weight: bold;">Notre équipe</h1>
                <p  style="color: #FEF6E9;"> 
                    Les visages derrière She Safe, des femmes passionnées pour votre sécurité et votre
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
                        <p class="team-description">Co-fondatrice & coordinatrice</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-md-4">
                    <div class="team-card p-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team2.png"
                            class="rounded-circle mb-3 team-img" alt="Team 2">
                        <h5 class="team-title">Louisa</h5>
                        <p class="team-description">Responsable communication</p>
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
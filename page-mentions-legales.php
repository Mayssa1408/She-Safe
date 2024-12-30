<?php
/* Template Name: Mentions legales */
get_header();
?>

<section class="features-section py-5" style="background-color:rgb(249, 232, 230);">
    <div class="container text-center">
        <div class="values-section">
            <h1 style="color: #9E4A5C; font-size: 36px; font-weight: bold; margin-top:100px">Mentions Légales</h1>
            <h3 class="text-center mx-auto text-container">
                Retrouvez ici toutes les informations légales concernant She Safe.
            </h3>
        </div>
        <div class="row justify-content-center">
            <!-- Bloc Informations Société -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4 h-100 d-flex flex-column justify-content-between" style="background-color: #F2E6F7; border-radius: 15px 2px 15px 2px; min-height: 300px;">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/company.svg" class="mb-3" width="60"
                            height="60" alt="Icône Société">
                        <h4 style="color: #9E4A5C;" class="fw-bold mb-3">Informations Société</h4>
                        <p class="feature-text mb-2">She shesafe</p>
                        <p class="feature-text mb-2">SPRL</p>
                        <p class="feature-text mb-2">Rue de la Poste 111, Scharbeek </p>
                    </div>
                    <div class="flex-grow-1"></div>
                </div>
            </div>

            <!-- Bloc Contact -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4 h-100 d-flex flex-column justify-content-between" style="background-color: #F2E6F7; border-radius: 15px 2px 15px 2px; min-height: 300px;">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/contact.svg" class="mb-3" width="60"
                            height="60" alt="Icône Contact">
                        <h4 style="color: #9E4A5C;" class="fw-bold mb-3">Contact</h4>
                        <p class="feature-text mb-2">Téléphone : +32 471 64 53 21</p>
                        <p class="feature-text mb-2">Email : shesafe@gmail.com </p>
                        <p class="feature-text mb-2">N° BCE/TVA : BE 0657.134.547</p>
                    </div>
                    <div class="flex-grow-1"></div>
                </div>
            </div>

            <!-- Bloc Informations Professionnelles -->
            <div class="col-md-4 mb-4">
                <div class="feature-box p-4 h-100 d-flex flex-column justify-content-between" style="background-color: #F2E6F7; border-radius: 15px 2px 15px 2px; min-height: 300px;">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/information.svg" class="mb-3"
                            width="60" height="60" alt="Icône Professionnel">
                        <h4 style="color: #9E4A5C;" class="fw-bold mb-3">Informations Professionnelles</h4>
                        <p class="feature-text mb-2">Profession réglementée : Développement et gestion de site web</p>
                        <p class="feature-text mb-2">
                            <a href="https://www.belgium.be/fr/justice/respect_de_la_vie_privee/protection_des_donnees_personnelles"
                                style="color: #9E4A5C;">Règles professionnelles</a>
                        </p>
                    </div>
                    <div class="flex-grow-1"></div>
                </div>
            </div>
        </div>

        <!-- Section complémentaire -->
        <div class="row justify-content-center mt-4">
            <div class="col-12">
                <div class="p-4">
                    <p class="feature-text mb-0">
                        Les informations présentes sur ce site sont données à titre indicatif et sont susceptibles
                        d'être modifiées à tout moment et sans préavis. She Safe ne saurait être tenue responsable de
                        l'utilisation et de l'interprétation de l'information contenue dans ce site.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
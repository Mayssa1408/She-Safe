<?php
/* Template Name: Mentions legales */
get_header();
?>

<style>
:root {
    --primary-color: #B7536C;
    --primary-hover: #D94F78;
    --background-light: #FEF6E9; /* Couleur de fond de la section principale */
    --secondary-light: #F4C7C2;
    --purple-light: #E6DFF1; /* Couleur d'origine pour les cartes */
    --transition: all 0.3s ease;
}

/* Section principale */
.features-section {
    background: linear-gradient(135deg, var(--background-light), rgba(254, 246, 233, 0.8)) !important; /* Éclaircir le fond */
    padding: 80px 20px !important;
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
    width: 100%;
}

/* Style du titre et ligne décorative */
.values-section {
    text-align: center;
    margin-bottom: 50px;
    animation: fadeIn 1s ease-out;
    width: 100%;
}

.values-section h1 {
    color: var(--primary-color) !important;
    font-family: 'Lora', serif;
    font-size: 42px !important;
    margin-bottom: 1rem;
}

/* Ligne décorative sous le titre */
.values-section h1:after {
    content: '';
    display: block;
    width: 100px;
    height: 2px;
    background: linear-gradient(to right, transparent, var(--primary-color), transparent);
    margin: 1.5rem auto;
    opacity: 0.3;
}

.values-section h3 {
    color: var(--primary-color);
    font-family: 'Montserrat', sans-serif;
    font-size: 18px;
    margin: 1.5rem auto 0;
    max-width: 600px;
}

/* Style des cartes conteneur */
.row.justify-content-center {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin: 0 auto;
    width: 100%;
}

/* Style des colonnes */
.col-md-4 {
    flex: 0 0 auto;
    width: 350px;
    margin-bottom: 30px;
}

/* Style des cartes */
.feature-box {
    background-color: var(--purple-light) !important; /* Couleur d'origine pour les cartes */
    border-radius: 2px 50px 2px 50px !important;
    padding: 40px 30px !important;
    height: 300px !important;
    box-shadow: 20px 20px 60px rgba(183, 83, 108, 0.1);
    transition: var(--transition);
    animation: floatIn 1s ease-out;
    display: flex;
    flex-direction: column;
    align-items: center; /* Centre horizontalement */
    justify-content: center; /* Centre verticalement */
}

.feature-box:hover {
    transform: translateY(-5px);
    box-shadow: 25px 25px 70px rgba(183, 83, 108, 0.15);
}

/* Images dans les cartes */
.feature-box img {
    width: 60px;
    height: 60px;
    margin-bottom: 20px;
    display: block; /* Assure que l'image est un bloc */
    margin-left: auto; /* Centre l'image horizontalement */
    margin-right: auto; /* Centre l'image horizontalement */
}

/* Titres des cartes */
.feature-box h4 {
    color: var(--primary-color) !important;
    font-family: 'Montserrat', sans-serif;
    font-size: 22px;
    margin: 15px 0;
    text-align: center;
    font-weight: bold;
}

/* Texte des cartes */
.feature-text {
    color: #666;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    text-align: center;
    margin-bottom: 10px !important;
}

/* Style des liens */
.feature-text a {
    color: var(--primary-color) !important;
    text-decoration: none;
    transition: var(--transition);
}

.feature-text a:hover {
    color: var(--primary-hover) !important;
    text-decoration: underline;
}

/* Section complémentaire */
.row.justify-content-center.mt-4 {
    margin-top: 50px !important;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
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

/* Responsive */
@media (max-width: 1200px) {
    .row.justify-content-center {
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .features-section {
        padding: 40px 15px !important;
    }

    .values-section h1 {
        font-size: 32px !important;
    }

    .values-section h3 {
        font-size: 16px;
        padding: 0 20px;
    }

    .col-md-4 {
        width: 100%;
        max-width: 350px;
        margin-bottom: 20px;
    }

    .feature-box {
        height: auto !important;
        min-height: 280px;
        padding: 30px 20px !important;
    }

    .feature-box h4 {
        font-size: 20px;
    }

    .feature-text {
        font-size: 15px;
    }
}

@media (max-width: 400px) {
    .values-section h1 {
        font-size: 28px !important;
    }

    .col-md-4 {
        width: 100%;
    }

    .feature-box {
        padding: 25px 15px !important;
    }
}
</style>

<section class="features-section">
    <div class="container text-center">
        <div class="values-section">
            <h1>Mentions Légales</h1>
            <h3 class="text-center mx-auto">
                Retrouvez ici toutes les informations légales concernant She Safe.
            </h3>
        </div>
        <div class="row justify-content-center">
            <!-- Bloc Informations Société -->
            <div class="col-md-4 mb-4">
                <div class="feature-box h-100 d-flex flex-column justify-content-between">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/company.svg" class="mb-3" width="60" height="60" alt="Icône Société">
                        <h4 class="fw-bold">Informations Société</h4>
                        <p class="feature-text mb-2">She shesafe</p>
                        <p class="feature-text mb-2">SPRL</p>
                        <p class="feature-text mb-2">Rue de la Poste 111, Scharbeek </p>
                    </div>
                </div>
            </div>

            <!-- Bloc Contact -->
            <div class="col-md-4 mb-4">
                <div class="feature-box h-100 d-flex flex-column justify-content-between">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/contact.svg" class="mb-3" width="60" height="60" alt="Icône Contact">
                        <h4 class="fw-bold">Contact</h4>
                        <p class="feature-text mb-2">Téléphone : +32 471 64 53 21</p>
                        <p class="feature-text mb-2">Email : shesafe@gmail.com </p>
                        <p class="feature-text mb-2">N° BCE/TVA : BE 0657.134.547</p>
                    </div>
                </div>
            </div>

            <!-- Bloc Informations Professionnelles -->
            <div class="col-md-4 mb-4">
                <div class="feature-box h-100 d-flex flex-column justify-content-between">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/information.svg" class="mb-3" width="60" height="60" alt="Icône Professionnel">
                        <h4 class="fw-bold">Informations Professionnelles</h4>
                        <p class="feature-text mb-2">Profession réglementée : Développement et gestion de site web</p>
                        <p class="feature-text mb-2">
                            <a href="https://www.belgium.be/fr/justice/respect_de_la_vie_privee/protection_des_donnees_personnelles">Règles professionnelles</a>
                        </p>
                    </div>
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
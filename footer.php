<style>
 /* === Footer === */
.footer {
    background-color: #B7536C; /* Couleur principale pour le footer */
    color: #fff; /* Texte en blanc */
    font-family: 'Montserrat', sans-serif;
    padding: 50px 20px; /* Padding égal à gauche et à droite */
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

/* Container général */
.footer .container {
    width: 100%;
    max-width: 1200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    box-sizing: border-box;
}

/* Navigation gauche */
.footer-nav {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    gap: 15px;
    margin-right: 30px; /* Équilibre l'espace */
}

.footer-link {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    transition: color 0.3s ease;
}

.footer-link:hover {
    color: #D94F78;
}

/* Logo et Copyright au centre */
.footer-logo-container {
    text-align: center;
    flex: 1;
    margin: 20px 0;
}

.footer-logo {
    width: 180px;
    height: auto;
    margin-bottom: 10px;
}

.footer h1 {
    font-family: 'Great Vibes', cursive;
    font-size: 2.8rem;
    color: #fff;
    margin-bottom: 10px;
    text-align: center;
}

.footer p {
    font-size: 1rem;
    color: #fff;
    margin-top: 5px;
    text-align: center;
}

/* Contact à droite */
.footer-contact-info {
    text-align: right;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-end;
    gap: 15px;
}

.footer-contact {
    color: #fff;
    font-size: 1.1rem;
    text-decoration: none;
    display: inline-block;
    transition: color 0.3s ease;
}

.footer-contact:hover {
    color: #D94F78;
}

.social-media {
    display: flex;
    justify-content: flex-end;
    gap: 20px;
}

.social-icon {
    font-size: 1.7rem;
    color: #fff;
    transition: color 0.3s ease;
}

.social-icon:hover {
    color: #D94F78;
}

/* Responsivité */
@media screen and (max-width: 768px) {
    .footer {
        flex-direction: column;
        padding: 30px 20px; /* Ajustement du padding pour mobile */
    }

    .footer-nav {
        flex-direction: row;
        justify-content: center;
        gap: 20px;
        margin-right: 0;
    }

    .footer-logo-container {
        margin-bottom: 20px;
    }

    .footer-contact-info {
        align-items: center;
    }

    .social-icon {
        font-size: 1.5rem;
    }
}


</style>

<!-- SECTION FOOTER -->

<?php
/**
 * Footer Template for She Safe Theme
 */
?>

<footer class="footer">
    <div class="container">
        <!-- Navigation Links à gauche -->
        <div class="footer-nav">
            <a href="<?php echo home_url('/'); ?>" class="footer-link">Accueil</a>
            <a href="safePlace.php" class="footer-link">Safe Place</a>
            <a href="#" class="footer-link">Forum</a>
            <a href="about-page.php" class="footer-link">À propos</a>
            <a href="#" class="footer-link">Support</a>
        </div>

        <!-- Logo et Copyright au centre -->
        <div class="footer-logo-container">
            <h1>She Safe</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/SheSafeLG.svg" alt="Logo She Safe" class="footer-logo">
            <p>&copy; <?php echo date('Y'); ?>, She Safe. Tous droits réservés.</p>
        </div>

        <!-- Contact Info à droite -->
        <div class="footer-contact-info">
            <a href="mailto:shesafe@gmail.com" class="footer-contact"><i class="bi bi-envelope"></i> shesafe@gmail.com</a>
            <i class="bi bi-geo-alt"></i> Rue de la Poste 111, Schaerbeek
            <i class="bi bi-telephone"></i> +32 471 64 53 21

            <div class="social-media">
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-snapchat"></i></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>


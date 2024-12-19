<?php
/**
 * Footer Template for She Safe Theme
 */
?>

<footer class="footer mt-auto py-5">
    <div class="container" style="max-width: 1440px;">
        <div class="row justify-content-between align-items-center text-center text-md-start">
            <!-- Navigation Links -->
            <div class="col-md-4 mb-3">
                <ul class="list-unstyled">
                    <li><a href="<?php echo home_url('/'); ?>" class="footer-link">Accueil</a></li>
                    <li><a href="safePlace.php" class="footer-link">Safe Place</a></li>
                    <li><a href="#" class="footer-link">Forum</a></li>
                    <li><a href="about-page.php" class="footer-link">À propos</a></li>
                    <li><a href="#" class="footer-link">Support et aide</a></li>
                    <li><a href="#" class="footer-link">Mon profil</a></li>
                </ul>
            </div>
    
            <!-- Logo and Copyright -->
            <div class="col-md-4 mb-3 text-center">
                <h1>She Safe</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/SheSafeLG.svg" alt="Logo She Safe"
                    width="150" height="75" class="footer-logo">
                <p class="mt-5">&copy; <?php echo date('Y'); ?>, She Safe. All rights reserved.</p>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-3 text-md-end">

                <a href="mailto:shesafe@gmail.com" class="text-decoration-none">
                    <i class="bi bi-envelope"></i> shesafe@gmail.com
                </a>

                <br>
                <i class="bi bi-geo-alt"></i> Rue de la Poste 111, Schaerbeek

                <br>
                <i class="bi bi-telephone"></i> +32 471 64 53 21

                <div>
                    <p>
                        <!-- Social Media Icons -->
                        <a href="#" class="social-icon me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-snapchat"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
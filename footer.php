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
                    <li><a href="safe-place.php" class="footer-link">Safe Place</a></li>
                    <li><a href="forum.php" class="footer-link">Forum</a></li>
                    <li><a href="about-page.php" class="footer-link">À propos</a></li>
                    <li><a href="support.php" class="footer-link">Support</a></li>
                    <li><a href="mon-compte-page.php" class="footer-link">Mon compte</a></li>
                </ul>
            </div>

            <!-- Logo and Copyright -->
            <div class="col-md-4 mb-3 text-center">
                <h1 class="ms-2 mb-0 fs-4 " style="color : #B0596A;">She Safe</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/SheSafeLG.svg" alt="Logo She Safe"
                    width="150" height="75" class="footer-logo">
                <p class="copy mt-5">&copy; <?php echo date('Y'); ?> She Safe. <a href="mentionsLegales.php">All rights reserved. </a> </p>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-3 text-md-end">

                <a href="mailto:shesafe@gmail.com" class="text-decoration-none" style="color : #B0596A;">
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
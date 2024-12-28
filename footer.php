<?php
/**
 * Footer Template for She Safe Theme
 */
?>

<footer class="footer mt-auto py-3">
    <div class="container" style="max-width: 1440px;">
        <div class="row justify-content-between align-items-start text-center text-md-start">
            <!-- Navigation Links -->
            <div class="col-md-4 mb-3 py-3">
                <ul class="list-unstyled">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="footer-link">Accueil</a></li>
                    <li><a href="<?php echo esc_url(home_url('/safe-place')); ?>" class="footer-link">Safe Place</a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/reconnexion')); ?>" class="footer-link">Forum</a></li>
                    <li><a href="<?php echo esc_url(home_url('/a-propos')); ?>" class="footer-link">À propos</a></li>
                    <li><a href="<?php echo esc_url(home_url('/myfaq-page')); ?>" class="footer-link">Support</a></li>
                </ul>
            </div>

            <!-- Logo and Copyright -->
            <div class="col-md-4 mb-3 text-center">
                <h1 class="ms-2 mb-0 fs-4" style="color: #B0596A;">She Safe</h1>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/SheSafeLG.svg" alt="Logo She Safe"
                    width="230" height="85" class="footer-logo">
                <p class="copy mt-5">
                    &copy; <?php echo date('Y'); ?> She Safe.
                    <a href="<?php echo esc_url(home_url('/mentions-legales')); ?>"
                        style="color: #B0596A; text-decoration: none;">
                        All rights reserved.
                    </a>

                </p>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-3 mt-4 text-md-end">
                <div class="contact-info">
                    <!-- E-mail -->
                    <a href="mailto:shesafe@gmail.com" class="text-decoration-none" style="color: #B0596A;">
                        <i class="bi bi-envelope"></i> shesafe@gmail.com
                    </a>
                    <br>

                    <!-- Adresse -->
                    <a href="https://maps.app.goo.gl/pBr3hYK6RqNuo1aq5" target="_blank" rel="noopener noreferrer"
                        class="text-decoration-none" style="color: #B0596A;">
                        <i class="bi bi-geo-alt"></i> Rue de la Poste 111, Schaerbeek
                    </a>
                    <br>

                    <!-- Téléphone -->
                    <a href="tel:+32471645321" class="text-decoration-none" style="color: #B0596A;">
                        <i class="bi bi-telephone"></i> +32 471 64 53 21
                    </a>
                </div>



                <br>
                <!-- Ajouter les réseaux sociaux directement ici -->
                <div class="social-icons mt-4">
                    <a href="#" class="social-icon me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon me-2"><i class="bi bi-snapchat"></i></a>
                </div>
            </div>
        </div>

    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>
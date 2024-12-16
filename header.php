<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Glory:wght@400;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column vh-100'); ?>>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">

      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/SheSafeLG.svg" alt="Logo She Safe" width="75"
          height="55">
        <h1 class="ms-2 mb-0 fs-4">She Safe</h1>
      </a>

      <!-- Toggle Button -->
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <!-- Offcanvas Header -->
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Offcanvas Body -->
        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
          <?php
          wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3',
          ]);
          ?>

          <!-- Account Section -->
          <div class="d-flex justify-content-center align-items-center gap-3">
            <a href="#moncompte" class="account-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/accounnt.svg" alt="Mon compte" width="32"
                height="32">
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Fin Navbar -->

  <?php wp_footer(); ?>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Glory:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Great+Vibes&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column vh-100'); ?>>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #F4C7C2;">

    <div class="container-fluid">

      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/SheSafeLG.svg" alt="Logo She Safe"
          width="75" height="55">
        <h1 class="ms-2 mb-0 fs-4 "style="color : #B0596A;">She Safe</h1>
      </a>

      <!-- Toggle Button -->
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <!-- Offcanvas Header -->
        <div class="offcanvas-header border-bottom">

          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Offcanvas Body -->
        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
          <?php
          if (has_nav_menu('header')) {
            wp_nav_menu([
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3',
            ]);
          } else {
            echo '<p class="text-center">Aucun menu n’est assigné à la navigation principale.</p>';
          }
          ?>

          <!-- Account Section -->
          <!-- Account Section -->
          <div class="d-flex justify-content-center align-items-center gap-3">
            <div class="account-dropdown">
              <a href="#" class="account-icon" id="accountDropdown">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/accounnt.svg" alt="Mon compte"
                  width="32" height="32">
              </a>
              <div class="dropdown-menu" id="accountMenu">
                <?php if (is_user_logged_in()): ?>
                  <a href="<?php echo esc_url(get_permalink(get_page_by_path('mon-compte'))); ?>">Mon profil</a>
                  <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Déconnexion</a>
                <?php else: ?>
                  <a href="<?php echo esc_url(get_permalink(get_page_by_path('connexion'))); ?>">Connexion</a>
                  <a href="<?php echo esc_url(get_permalink(get_page_by_path('inscription'))); ?>">Inscription</a>
                <?php endif; ?>
              </div>
            </div>
          </div>
  </nav>
  <!-- Fin Navbar -->
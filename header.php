<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body class="d-flex flex-column vh-100">
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <!--Logo-->
      <a class="navbar-brand fs-4" href="">
        <div class="logo-container d-flex align-items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="logo she safe" width="75" height="55">
          <h1 class="ms-2 mb-0">She Safe</h1> <!-- Espacement entre le logo et le texte -->
        </div>
      </a>
      <!--Toggle Btn-->
      <button class="navbar-toggler btn-white shadow-none border-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--SideBar-->
      <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <!--Sidebar Header-->
        <div class="offcanvas-header text-white border-bottom">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>

        <!--Sidebar body-->
        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
          <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Safe Place</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#forum">Forum</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#supportAide">Support et aide</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#apropos">À propos</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#moncompte">Mon compte</a>
            </li>
          </ul>
          <!--Log in / Sign Up-->
          <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
            <a href="#monCompte" class="text-white">Se connecter</a>
            <a href="#monCompte" class="text-white text-decoration-none px-3 py-1 rounded-4"
              style="background-color: #b7536c">S'inscrire</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
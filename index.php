<?php get_header(); ?>

  <body class="d-flex flex-column vh-100"> john doe
    <!-- Contenu principal -->
    <main class="flex-grow-1">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <!--Logo-->
          <a class="navbar-brand fs-4" href=""><h1>She Safe</h1></a>
          <!--Toggle Btn-->
          <button
            class="navbar-toggler btn-white shadow-none border-0"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!--SideBar-->
          <div
            class="sidebar offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <!--Sidebar Header-->
            <div class="offcanvas-header text-white border-bottom">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button
                type="button"
                class="btn-close btn-close-white shadow-none"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>

            <!--Sidebar body-->
            <div
              class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0"
            >
              <ul
                class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3"
              >
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                    >Acceuil</a
                  >
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="#safePlace">Safe Place</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="#forum">Forum</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="#supportAide">Support et aide</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="#apropos">A propos</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="#moncompte">Mon compte</a>
                </li>
              </ul>
              <!--Log in  / Sing Up-->
              <div
                class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3"
              >
                <a href="#monCompte" class="text-white">Se connecter</a>
                <a
                  href="#monCompte"
                  class="text-white text-decoration-none px-3 py-1 rounded-4"
                  style="background-color: #b7536c"
                  >S'inscrire</a
                >
              </div>
            </div>
          </div>
        </div>
      </nav>
    </main>

    <!-- Footer -->
    <footer class="text-center py-4">
      <div class="container">
        <!-- Logo and Navigation Links -->
        <div class="row">
          <div class="col-12">
            <img
              src="images/logo.png"
              alt="She Safe Logo"
              class="mb-3"
              style="height: 100px"
            />
            <h2 class="mb-3" style="font-family: 'Britannic Bold', sans-serif">
              She Safe
            </h2>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <nav class="mb-3">
              <a href="#" class="mx-3 text-decoration-none text-muted"
                >Accueil</a
              >
              <a href="#" class="mx-3 text-decoration-none text-muted"
                >Safe Place</a
              >
              <a href="#" class="mx-3 text-decoration-none text-muted">Forum</a>
              <a href="#" class="mx-3 text-decoration-none text-muted"
                >À propos</a
              >
              <a href="#" class="mx-3 text-decoration-none text-muted"
                >Mon profil</a
              >
            </nav>
          </div>
        </div>

        <!-- Contact Button -->
        <div class="row">
          <div class="col-12 mb-4">
            <a
              href="#"
              class="btn btn-danger px-5 py-2"
              style="border-radius: 30px"
              >Contact</a
            >
          </div>
        </div>

        <!-- Social Media Icons -->
        <div class="row">
          <div class="col-12">
            <a href="#" class="mx-3"
              ><i class="bi bi-instagram fs-4 text-muted"></i
            ></a>
            <a href="#" class="mx-3"
              ><i class="bi bi-facebook fs-4 text-muted"></i
            ></a>
            <a href="#" class="mx-3"
              ><i class="bi bi-twitter fs-4 text-muted"></i
            ></a>
            <a href="#" class="mx-3"
              ><i class="bi bi-linkedin fs-4 text-muted"></i
            ></a>
          </div>
        </div>

        <!-- Copyright Text -->
        <div class="row">
          <div class="col-12 mt-3">
            <p class="text-muted">&copy; 2024 She Safe, All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>

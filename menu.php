  <!--module la barre de navigation  -->

  <header class="header_area">

    <div class="main-menu">
      <!-- choix couleur barre -->
      <nav class=" navbar-expand-lg fixed-top navbar navbar-light" style="background-color:#1e1f1a; ">
        <!--  choix icone et nom entreprise-->
        <a class="navbar-brand   " href="#">
          <img src="./images/Logo_verger.png" width="30" height="30" class="d-inline-block align-top" alt="">
          verger
        </a>
        <!-- bouton toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon btn-primary"></span>
        </button>
        <!--zone initialisation lien gauche  -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav  mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a id="accueil" class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a id="annonces" class="nav-link" href="p_annonces.php">Annonces</a>
            </li>
            <li class="nav-item">
              <a id="creation" class="nav-link" href="creation.php">Création d'annonce</a>
            </li>
          </ul>
          <!-- zone de lien gauche -->
          <form class="form-inline my-2 my-lg-0">
            <!-- lien de recherche  -->
            <input class="form-control mr-sm-2" type="search" placeholder="Recherche ">
            <button class="btn my-2 my-sm-0 bouton-style" type="submit"><i class="fas fa-search"></i> Chercher </button>
          </form>
          <!-- lien profil -->
          <ul class="navbar-nav ">
            <li class="nav-item ">
              <a class="nav-link" id="profil" href="profil.php"> <i class="fas fa-user-circle"></i>
                Profil <span class="sr-only">(current)</span></a>
            </li>
        </div>

    </div>
  </header>

  <script>
    if (window.location.pathname === '/projet_verger/index.php') {
      document.getElementById("accueil").textContent = "Accueil / Liste"
      document.getElementById("accueil").style.color = " #e2cfa6";
      document.getElementById("accueil").style.borderBottom = "2px solid  #e2cfa6";
    } else if (window.location.pathname === '/projet_verger/creation.php') {
      document.getElementById("creation").style.color = " #e2cfa6";
      document.getElementById("creation").style.borderBottom = "2px solid  #e2cfa6";
    } else if (window.location.pathname === '/projet_verger/profil.php') {
      document.getElementById("profil").style.color = " #e2cfa6";
      document.getElementById("profil").style.borderBottom = "2px solid  #e2cfa6";
    } else if (window.location.pathname === '/projet_verger/carte.php') {
      document.getElementById("accueil").textContent = "Accueil / Carte"
      document.getElementById("accueil").style.color = " #e2cfa6";
      document.getElementById("accueil").style.borderBottom = "2px solid  #e2cfa6";
    } else if (window.location.pathname === '/projet_verger/p_annonces.php') {
      document.getElementById("annonces").style.color = " #e2cfa6";
      document.getElementById("annonces").style.borderBottom = "2px solid  #e2cfa6";
    }
  </script>
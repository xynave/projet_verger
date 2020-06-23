<link rel="stylesheet" href="./css/style.css">
<header class="header_area">
        <div class="main-menu">
            <nav class=" navbar-expand-lg fixed-top navbar navbar-light" style="background-color:#1e1f1a; ">
                <a class="navbar-brand   " href="#">
                    <img src="./images/Logo_verger.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    verger
                  </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon btn-primary"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav  mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                      <a id="accueil" class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a id="creation" class="nav-link" href="creation.php">Création d'annonce</a>
                    </li>
                   
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Recherche">
                    <button class="btn my-2 my-sm-0" style="background-color: #f1cb76;" type="submit">Chercher</button>
                  </form>
                  <ul class="navbar-nav ">
                    <li class="nav-item ">
                      <a class="nav-link" id="profil" href="profil.php"> <!--   <img src="./images/profil.png" width="30" height="30" class="d-inline-block align-top" alt="">  -->
                        Profil <span class="sr-only">(current)</span></a>
                    </li>
                </div>

        </div>
    </header>
 
                          <script>
                          if(window.location.pathname==='/test/index.php')
                          {
                            document.getElementById("accueil").style.color = "#f1cb76";
                            document.getElementById("accueil").style.borderBottom = "2px solid #f1cb76";
                          }else if(window.location.pathname==='/test/creation.php')
                          {
                            document.getElementById("creation").style.color = "#f1cb76";
                            document.getElementById("creation").style.borderBottom = "2px solid #f1cb76";
                          }else if(window.location.pathname==='/test/profil.php')
                          {
                            document.getElementById("profil").style.color = "#f1cb76";
                            document.getElementById("profil").style.borderBottom = "2px solid #f1cb76";
                          }else if(window.location.pathname==='/test/carte.php')
                          {
                            document.getElementById("accueil").style.color = "#f1cb76";
                            document.getElementById("accueil").style.borderBottom = "2px solid #f1cb76";
                          }

                              
                          </script>   
<?php include("m_open_bdd.php"); ?>

<!-- page accueil -->
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>tuto</title>

  <!--boostrap css file-->
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  <!--fonat awesome icons-->
  <link rel="stylesheet" href="./css/all.min.css">

  <!--custom css file-->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>


  <!--==================Start header Area==========================-->
  <?php include("menu.php"); ?>


  <!--==================END header Area==========================-->

  <!-- start banniere -->

  <?php include("imagerecherche.php"); ?>
  <!-- end banniere -->




  <!--partie liste-->

  <Section class="zone">
    </br>
    </br>
    </br>

    <!-- bouton pour passer a la page map -->
    <section class="deplacer pic">
      </br>
      <div class="custom-control custom-switch ">
        <input type="checkbox" class="custom-control-input " id="boutoncarte" onclick="myFunction()">
        <label class="custom-control-label h4" for="boutoncarte">Liste</label>
      </div>

      </br>
      </br>

      <h4> <i class="fas fa-angle-right"></i> Proche de chez vous</h4>


      </br>
      <!-- carroussel d'image -->
      <div class="center">
        <!-- on choisi les nombres de petites cartes quand on reduit la fenetre -->
        <div class="row row-cols-1  row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
         

          <!-- nouvelle carte  -->
          <?php
            while ($donnees = $annonces->fetch()) {
              echo '
          <div class="col lg-4">
            <div class="card shadow-sm mb-4" style="width: 15rem; height:25rem;">

              <div id="carouselExampleIndicators'.htmlspecialchars($donnees['ID_annonce']).'" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators'.htmlspecialchars($donnees['ID_annonce']).'" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators'.htmlspecialchars($donnees['ID_annonce']).'" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


              <div class="card-body ">
                <h5 class="card-title">Distance</h5>
                <p class="card-text">' . $donnees['description_annonce'] . '</p>
              </div>
              <div class="card-footer " style=" background-color:white;">
              <a href="uneannonce.php" class="btn   btn-outline-dark float-right">Voir</a>
              </div>
            </div>
          </div>
          ';
            }
            ?>
          
        </div>

      </div>















      </br>
      </br>

      <!-- nouvelle zone de carte  -->
      <h4> <i class="fas fa-angle-right"></i> 500 m de chez vous</h4>
      </br>

      <!-- nouveau initialisation carrousel-->
      <div class="center">
        <div class="row row-cols-1  row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
          <div class="col lg-4">
            <!-- nouvelle carte  -->
            <div class="card shadow-sm mb-4" style="width: 15rem;">

              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


              <div class="card-body ">
                <h5 class="card-title">Distance</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="uneannonce.php" class="btn   btn-outline-dark float-right">Voir</a>
              </div>
            </div>
          </div>
          <!-- nouvelle carte  -->
          <div class="col lg-4">
            <div class="card shadow-sm mb-4" style="width: 15rem;">

              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


              <div class="card-body ">
                <h5 class="card-title">Distance</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="uneannonce.php" class="btn   btn-outline-dark float-right">Voir</a>
              </div>
            </div>
          </div>
          <!-- nouvelle carte  -->


          <div class="col lg-4">
            <div class="card shadow-sm mb-4" style="width: 15rem;">

              <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


              <div class="card-body ">
                <h5 class="card-title">Distance</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="uneannonce.php" class="btn   btn-outline-dark float-right">Voir</a>
              </div>
            </div>
          </div>
          <!-- nouvelle carte  -->

          <div class="col lg-4">
            <div class="card shadow-sm mb-4" style="width: 15rem;">

              <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


              <div class="card-body ">
                <h5 class="card-title">Distance</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="uneannonce.php" class="btn  btn-outline-dark float-right">Voir</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <br>
  </Section>


  <!--partie liste-->

  <?php include("footer.php"); ?>




  <script src="./js/main.js"></script>

  <!--jquery-->
  <script src="./js/jquery3.4.1.min.js"></script>
  <!--boostrap js file-->
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>
<?php
$annonces->closeCursor(); // Termine le traitement de la requête
?>
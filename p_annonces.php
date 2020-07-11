<?php include("m_open_bdd.php"); ?>
<!-- page connexion -->
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
  <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>

<body>


  <!--==================Start header Area==========================-->
  <?php include("menu.php"); ?>
  <!--==================END header Area============================-->


  <section class="premiere ">
    <div class="picture">
      <div class="block">
        <!-- grosse card qui engroupe tout -->
        <div class="card  border-dark ">
          <div class="card-header  text-center" style="background-color:#1e1f1a;  color: white; ">
            Annonces
          </div>
          <!----====== Annonces ======---->

          <div class="list-group my-2">
            <?php
            while ($donnees = $annonces->fetch()) {
              echo '


<!-- noveau item-->
                  <div class="card mb-3 mr-3 ml-3" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <div id="carouselExampleIndicators'.htmlspecialchars($donnees['ID_annonce']).'" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators'.htmlspecialchars($donnees['ID_annonce']).'" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators'.htmlspecialchars($donnees['ID_annonce']).'" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators'.htmlspecialchars($donnees['ID_annonce']).'" data-slide-to="2"></li>
                            </ol>
                            
                            <div class="carousel-inner">
                            
                              <div class="carousel-item active">
                              
                                <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="50" height="180"class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="./images/Malus-Boskoop_organic[1].jpg" width="50" height="180"class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="./images/Malus-Boskoop_organic[1].jpg" width="50" height="180"class="d-block w-100" alt="...">
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
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">

                          <h5 class="card-title">' . $donnees['titre_annonce'] . '</h5>
                          <p class="card-text">' . $donnees['description_annonce'] . '</p>
                          <br>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>  <a href="uneannonce.php" class="btn  btn-outline-dark float-right">Voir</a></p>

                        </div>
                      </div>
                    </div>
                  </div>
                  ';
            }
            ?>
          </div>

          <!----====== Pagination ======---->

          <div class="card-center ">
            <nav aria-label="Page de navigation ">
              <ul class="pagination " style="margin-left: auto; margin-right: auto; width:15em; ">
                <li class="page-item  ">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>


  </section>

  <section class="plus">

    <div class="supplement">

    </div>

  </Section>


  <!--==================Start footer Area==========================-->
  <?php include("footer.php"); ?>
  <!--==================END footer Area============================-->


  <!--jquery-->
  <script src="./js/jquery3.4.1.min.js"></script>
  <!--boostrap js file-->
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>


<!--- Fin de traitement de la bdd ----->

<?php
$annonces->closeCursor(); // Termine le traitement de la requête
?>
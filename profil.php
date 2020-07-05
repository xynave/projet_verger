<!-- page profil -->
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

  <section class="premiere ">
    <div class="picture">
      <div class="block">
        <!-- on voit ces information -->
        <div class="card  border-dark ">
          <div class="card-header text-center" style="background-color:#1e1f1a;  color: white; ">
            Mes informations
          </div>
          <div class="card-body ">
            <form>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault01">Prénom</label>
                  <span class="input-group-text">Loïc</span>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Nom</label>
                  <span class="input-group-text">Chaligne</span>
                </div>
              </div>

              <label>Date de naissance</label>
              <div class="form-row">

                <div class="col-md-3 mb-3">
                  <div class="form-group">

                    <span class="input-group-text">23</span>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="form-group">
                    <span class="input-group-text">Novembre</span>
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="form-group">

                    <span class="input-group-text">2000</span>
                  </div>
                </div>

              </div>



              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefaultUsername">Mail</label>
                  <span class="input-group-text">test@gmail.com</span>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Ville</label>
                  <span class="input-group-text">Paris</span>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Code postal</label>
                  <span class="input-group-text">01000</span>
                </div>
              </div>

              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Adresse</label>
                  <span class="input-group-text">1 rue des champs</span>
                </div>
              </div>

              <!-- si on veut modifier -->
              <a href="mesdonnees.php" class="btn  btn-outline-dark float-right" type="submit"> <i class="fas fa-user-edit"></i> Modifier</a>
            </form>
          </div>
        </div>

      </div>

    </div>


  </section>
  <!-- end banniere -->


  <!-- nos annonces -->
  <section class="premiere ">
    <div class="picture">
      <div class="block">
        <!-- debut de la carte -->
        <div class="card  border-dark ">
          <div class="card-header text-center" style="background-color:#1e1f1a;  color: white; ">
            Mes annonces
          </div>
          <!-- debut de la carte body-->
          <div class="card-body ">
            <form>
              <!--debut un produit-->
              <div class="card mb-3">
                <!-- carroussel d'image -->
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <!-- les liens -->
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <!--les images -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="./images/Malus-Boskoop_organic[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <!-- les boutons de deplacements-->
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <!-- notification nombre de message ou de vue-->
                      <span class="badge badge-primary badge-pilla float-right">14</span>
                      <h5 class="card-title">Card title</h5>
                      <!-- description-->
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <!--la dernier modif -->
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small> <a href="#" class="btn  btn-outline-dark float-right">Gérer </a></p>
                    </div>
                  </div>
                </div>
              </div>


              <!-- noveau item-->
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                      </ol>

                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="./images/Malus-Boskoop_organic[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
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
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <span class="badge badge-primary badge-pilla float-right">14</span>
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small> <a href="#" class="btn  btn-outline-dark float-right">Gérer</a></p>

                    </div>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


  </section>






  <!-- favoris-->
  <section class="premiere ">
    <div class="picture">
      <div class="block">
        <!--debut carte -->
        <div class="card  border-dark ">
          <div class="card-header text-center" style="background-color:#1e1f1a;  color: white; ">
            Mes favoris
          </div>
          <!-- debut carte body-->
          <div class="card-body ">
            <form>


              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <!-- carroussel image -->
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                      </ol>
                      <!--  image -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="./images/Malus-Boskoop_organic[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <!-- bouton choix images  -->
                      <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <!--  badge favoris -->
                      <span class="badge badge-success badge-pilla float-right"> <i class="fas fa-star"></i> </span>
                      <h5 class="card-title">Card title</h5>
                      <!-- descriptions  -->
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <!--  dates dernieres modifications -->
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small> <a href="#" class="btn  btn-outline-dark float-right">Gérer</a></p>
                    </div>
                  </div>
                </div>
              </div>



              <!-- nouveau favoris  -->
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                      </ol>

                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="./images/Malus-Boskoop_organic[1].jpg" width="50" height="180" class="d-block w-100" alt="...">
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
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <span class="badge badge-warning badge-pilla float-right"><i class="fas fa-star"></i></span>
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small> <a href="#" class="btn  btn-outline-dark float-right">Gérer</a></p>

                    </div>
                  </div>
                </div>
              </div>


            </form>
          </div>
        </div>
      </div>
      <br>
    </div>


  </section>




  <?php include("footer.php"); ?>






  <!--jquery-->
  <script src="./js/jquery3.4.1.min.js"></script>
  <!--boostrap js file-->
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>
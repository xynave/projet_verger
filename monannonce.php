  <?php
  session_start(); // On démarre la session AVANT toute chose
  ?>

  <!-- page une annoce qui nous appartient -->
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
          <!--creation carte  -->
          <div class="card  border-dark ">
            <div class="card-header text-center" style="background-color:#1e1f1a; color: white; ">
              Mon annonce
            </div>
            <!-- debut carte body -->
            <div class="card-body ">
              <form>
                <!-- intégration module categorie -->
                <?php include("categorie.php"); ?>

                <p>Les photos:</p>
                <!-- les photos du produits -->
                <div class="card-deck">
                  <div class="card">
                    <img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                    <div class="card-footer text-center">
                      <small class="text-muted">Première photo</small>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./images/Bramley's_Seedling_Apples[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                    <div class="card-footer text-center">
                      <small class="text-muted">Deuxième photo</small>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="...">
                    <div class="card-footer text-center">
                      <small class="text-muted ">Troisième photo</small>
                    </div>
                  </div>
                </div>
                </br>
                <!--les infos des photo des produits -->
                <div class="form-group">
                  <label for="exampleFormControlFile1">Première photo</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Deuxième photo</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Troisième photo</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                </br>
                <!-- description du produit -->
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description du produit </label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </br>
                <!-- les information general -->
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Information général </label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </br>
                <!-- selection ville -->
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Ville</label>
                    <input type="text" class="form-control border-dark" id="validationDefault03" required>
                  </div>

                  <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Code postal</label>
                    <input type="text" class="form-control border-dark" id="validationDefault05" required>
                  </div>
                </div>
                <!-- selection adresse -->
                <div class="form-row ">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Adresse</label>
                    <input type="text" class="form-control border-dark" id="validationDefault03" required>
                  </div>
                </div>
                <!-- valider modification -->

                <button class="btn btn-success float-right" type="submit">Modifier</button>
              </form>
            </div>
          </div>

          <br>
        </div>

      </div>

    </section>
    <!-- end banniere -->
    <?php include("footer.php"); ?>















    <!--jquery-->
    <script src="./js/jquery3.4.1.min.js"></script>
    <!--boostrap js file-->
    <script src="./js/bootstrap.min.js"></script>
  </body>

  </html>
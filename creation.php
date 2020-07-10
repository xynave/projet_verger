<?php
session_start(); // On démarre la session AVANT toute chose




?>


<!-- page création annonce -->
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
        <div class="card  border-dark ">
          <div class="card-header text-center" style="background-color:#1e1f1a; color: white; ">
            Création d'annonce
          </div>
          <!-- la carte -->
          <!-- la tete de la carte -->
          <div class="card-body ">
            <form>
              <?php include("categorie.php"); ?>
              <!-- on rentre la description du produit -->
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description du produit </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <!-- on rentre les informations produit -->
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Information général </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <!--  on rentre les photos-->
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
              <!-- on rentre la ville -->
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Ville</label>
                  <input type="text" class="form-control border-dark" id="validationDefault03" required>
                </div>
                <!-- on rentre le code postal -->
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Code postal</label>
                  <input type="text" class="form-control border-dark" id="validationDefault05" required>
                </div>
              </div>
              <!-- on rajout adresse -->
              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Adresse</label>
                  <input type="text" class="form-control border-dark" id="validationDefault03" required>
                </div>
              </div>

              <button class="btn bouton-style float-right" type="submit"><i class="fas fa-paper-plane"></i> Poster </button>
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
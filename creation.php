<?php
    // On inclut les fichiers de configuration et d'accès aux données
    include 'm_open_bdd.php';
    include 'm_bdd_annonces.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les agences
    $annonce = new Annonces($db);

    $annonces = $annonce->lire();
?>


<!-- page création annonce -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>tuto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/MarkerCluster.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/MarkerCluster.Default.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/0.4.0/leaflet.markercluster.js"></script>

   
<!--boostrap css file-->
<link rel="stylesheet" href="./css/bootstrap.min.css">

<!--fonat awesome icons-->
<link rel="stylesheet" href="./css/all.min.css">

<!--custom css file-->
<link rel="stylesheet" href="./css/style.css">

</head>
<?php include("addBdd.php"); ?>

<body>


  <!--==================Start header Area==========================-->
  <?php include("menu.php"); ?>


  <!--==================END header Area==========================-->
  <div class="modal fade" tabindex="-1" id="my-modal" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5>ERREUR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo $erreur; ?>
        </div>

      </div>
    </div>
  </div>
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
          <form method="POST" enctype="multipart/form-data" action="creation.php">
      <?php include("categorie.php"); ?>
              <!-- on rentre les informations produit -->
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Titre de l'annonce </label>
                <input name="titre" class="form-control" id="exampleFormControlTextarea1" required rows="3"></textarea>
              </div>
              <!-- on rentre la description du produit -->
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description du produit </label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" required rows="3"></textarea>
              </div>
              <!--  on rentre les photos-->
              <div class="form-group">
                <label for="exampleFormControlFile1">Première photo</label>
                <input type="file" class="form-control-file" name="img1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Deuxième photo</label>
                <input type="file" class="form-control-file" name="img2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Troisième photo</label>
                <input type="file" class="form-control-file" name="img3">
              </div>
              <!-- on rentre la ville -->
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Ville</label>
                  <input name="ville" id="ville" type="text" class="form-control border-dark"  required>
                </div>
                <!-- on rentre le code postal -->
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Code postal</label>
                  <input name="code_postal" id="code_postal" type="number" min="01000" max="99999" class="form-control border-dark" >
                </div>
              </div>
              <!-- on rajout adresse -->
              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Adresse</label>
                  <input name="adresse" id="adresse" type="text" class="form-control border-dark" >
                </div>
              </div>
    
    <!-- Cette DIV affichera la carte -->
    <div id="detailsMap"></div>
    <!-- Les champs ci-dessous afficheront la latitude et la longitude -->
    <br>
    
                  <input  name="lat" id="lat" type="text" class="form-control border-dark"  hidden>
                
                  <input  name="lon" id="lon" type="text" class="form-control border-dark"  hidden>
                
   
              <button class="btn bouton-style float-right"  type="submit"><i class="fas fa-paper-plane"></i> Poster </button>
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
  <script src="./js/main.js"> </script>
  
<script type="text/javascript" src="./js/app.js"></script>
<script src="./js/creation.js"> </script>
  <?php
  if (isset($erreur)) { ?>
    <script>
      $(document).ready(function() {
        $('#my-modal').modal('show');
      });
    </script>

  <?php } ?>

</body>

</html>
<?php
$annonces->closeCursor(); // Termine le traitement de la requête
?>
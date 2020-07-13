<?php include("m_open_bdd.php"); ?>


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
<?php
// On commence par récupérer les champs
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['type']) && $_POST['type'] != "choisis") {
    $type = $_POST['type'];
    if (isset($_POST['variete']) && $_POST['variete'] != "Choisis_ta_variete") {
      $variete = $_POST['variete'];
      if (isset($_POST['titre']) && $_POST['titre'] != "") {
        $titre = $_POST['titre'];
        if (isset($_POST['description']) && $_POST['description'] != "") {
          $description = $_POST['description'];
          if (isset($_POST['ville']) && $_POST['ville'] != "") {
            $ville = $_POST['ville'];
            if (isset($_POST['code_postal']) && $_POST['code_postal'] != "") {
              $code_postal = $_POST['code_postal'];
              if (isset($_POST['adresse']) && $_POST['adresse'] != "") {
                $adresse = $_POST['adresse'];

                if(!empty($_FILES['img1'])){
                  $img= $_FILES['img1'];
                  $ext=strtolower(substr($img['name'],-3));
                  $allow_ext=array("png","jpg","gif");
                  if(in_array($ext,$allow_ext))
                  {
                  $date = date("y.m.d");
                  $dbco = new PDO('mysql:host=localhost;dbname=leveraged;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $sth = $dbco->prepare("INSERT INTO annonces (ID_annonce, titre_annonce, description_annonce, date_annonce,type, variete,Ville,Code_postal,Adresse,image) VALUES (NULL, :titre, :description, :date, :type, :variete,:ville,:code_postal,:adresse,:image)");
                  $sth->bindParam(':titre', $titre);
                  $sth->bindParam(':description', $description);
                  $sth->bindParam(':date', $date);
                  $sth->bindParam(':type', $type);
                  $sth->bindParam(':variete', $variete);
                  $sth->bindParam(':adresse', $adresse);
                  $sth->bindParam(':code_postal', $code_postal);
                  $sth->bindParam(':ville', $ville);
                  $sth->bindParam(':image', $img);
                  $sth->execute();
                  header("Location: creation.php");
                  exit();

                  }
                  else{
                      $erreur ="Votre fichier n'est pas une image.";
                  }
                  
               }

                
              } else {
                $erreur = "Votre adresse est vide.";
              }
            } else {
              $erreur = "Votre code postal est vide.";
            }
          } else {
            $erreur = "Votre ville est vide.";
          }
        } else {
          $erreur = "Votre description est vide.";
        }
      } else {
        $erreur = "Votre titre est vide.";
      }
    } else {
      $erreur = "Veuillez choisir une variété .";
    }
  } else {
    $erreur = "Veuillez choisir un type.";
  }
}

/*

*/




?>

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
                <input name="titre" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <!-- on rentre la description du produit -->
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description du produit </label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                  <input name="ville" type="text" class="form-control border-dark" id="validationDefault03" required>
                </div>
                <!-- on rentre le code postal -->
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Code postal</label>
                  <input name="code_postal" type="number" min="01000" max="99999" class="form-control border-dark" id="validationDefault05" required>
                </div>
              </div>
              <!-- on rajout adresse -->
              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Adresse</label>
                  <input name="adresse" type="text" class="form-control border-dark" id="validationDefault03" required>
                </div>
              </div>

              <button class="btn bouton-style float-right" type="submit"><i class="fas fa-paper-plane"></i> Poster </button>
              <!--$sql = "INSERT INTO `annonces` (`ID_annonce`, `titre_annonce`, `description_annonce`, `date_annonce`, `type`, `variete`) VALUES (NULL, \'radis magnifique\', \'de magnifique radis de mon jardin\', \'2020-07-11\', \'legume\', \'radis\')";-->
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
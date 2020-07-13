<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!-- page création de profil -->
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
        <!-- carte general-->
        <div class="card  border-dark ">
          <div class="card-header text-center" style="background-color:#1e1f1a;  color: white; ">
            Inscription
          </div>
          <!-- carte body -->
          <div class="card-body ">
            <form>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <!-- zone rentre nom et prenom -->
                  <label for="validationDefault01">Prénom</label>
                  <input type="text" class="form-control border-dark" id="validationDefault01" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Nom</label>
                  <input type="text" class="form-control border-dark" id="validationDefault02" required>
                </div>
              </div>
              
              <label for="date">Date de naissance </label>
              <br>
          <input type="date" id="date" min=" " max=" ">
        
              <!-- selection mail -->
              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefaultUsername">Mail</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text border-dark" id="inputGroupPrepend2">@</span>
                    </div>
                    <input type="text" class="form-control border-dark" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                  </div>
                </div>
              </div>
              <!--selection mot de passe  -->
              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Mot de passe</label>
                  <input type="text" class="form-control border-dark" id="validationDefault02" required>
                </div>
              </div>
              <!-- confirmation de mot de passe -->
              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Confirmation du mot de passe</label>
                  <input type="text" class="form-control border-dark" id="validationDefault02" required>
                </div>
              </div>
              <!-- selection ville -->
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Ville</label>
                  <input type="text" class="form-control border-dark" id="validationDefault03" required>
                </div>
                <!--  selection code postal-->
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Code postal</label>
                  <input type="text" class="form-control border-dark" id="validationDefault05" required>
                </div>
              </div>
              <!--  selection adresse-->
              <div class="form-row ">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Adresse</label>
                  <input type="text" class="form-control border-dark" id="validationDefault03" required>
                </div>
              </div>
              <!-- validation des conditions d'utilisation -->
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                  <label class="form-check-label" for="invalidCheck2">
                    J'accepte les termes d'utilisation.
                  </label>
                </div>
              </div>
              <!-- validation de l'inscription -->
              <button class="btn bouton-style float-right" type="submit">Inscription <i class="fas fa-paper-plane"></i></button>
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
  <script>
var today = new Date();
var oldday = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear()-14;
var xxxx = today.getFullYear()-100;
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
oldday =xxxx+'-'+mm+'-'+dd;
document.getElementById("date").setAttribute("max", today); 
document.getElementById("date").setAttribute("min", oldday); </script>
</body>

</html>
  <!-- page changer mes données -->
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
          <!-- debut de la carte -->
          <div class="card  border-dark ">
            <div class="card-header text-center" style="background-color:#1e1f1a;  color: white; ">
              Mes informations
            </div>
            <!-- debut la carte body -->
            <div class="card-body ">
              <form>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <!-- on remplie le prenom -->
                    <label for="validationDefault01">Prénom</label>
                    <input type="text" class="form-control border-dark" id="validationDefault01" required>
                  </div>
                  <!-- on remplie le nom -->
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Nom</label>
                    <input type="text" class="form-control border-dark" id="validationDefault02" required>
                  </div>
                </div>
                <!-- on choix la date de naissance -->
                <label for="date">Date de naissance </label>
              <br>
          <input type="date" id="date" min=" " max=" ">
                <!--  choix mail-->
                <div class="form-row ">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefaultUsername">Mail</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-dark" id="inputGroupPrepend2">@</span>
                      </div>
                      <input type="email" class="form-control border-dark" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                  </div>
                </div>
                <!-- choix ville -->
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Ville</label>
                    <input type="text" class="form-control border-dark" id="validationDefault03" required>
                  </div>
                  <!-- choix code postal -->
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Code postal</label>
                    <input type="number" class="form-control border-dark" id="validationDefault05" required>
                  </div>
                </div>
                <!-- choix adresse -->
                <div class="form-row ">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Adresse</label>
                    <input type="text" class="form-control border-dark" id="validationDefault03" required>
                  </div>
                </div>
                <!--valider les infos  -->
                <button href="profil.php" class="btn btn-success float-right" type="submit"> <i class="fas fa-check"></i> Valider </button>
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
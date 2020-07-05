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
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>


  <!--==================Start header Area==========================-->
  <?php include("menu.php"); ?>

  <!--==================END header Area==========================-->

  <section class="premiere ">
    <div class="picture">
      <div class="block">
        <!-- grosse card qui engroupe tout -->
        <div class="card  border-dark ">
          <div class="card-header text-center" style="background-color:#1e1f1a;  color: white; ">
            Connexion
          </div>

          <div class="card-body ">
            <form>
              <!-- zone ou on rentre son email -->

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"> <i class="far fa-envelope"></i> Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control " id="validationDefault01" required>
                </div>
              </div>
              <!--zone ou on rentre son mot de passe  -->
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label"> <i class="fas fa-lock"></i> Mot de passe</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword">
                </div>
              </div>
              </br>
              <!-- zone pour créer ou reinitialiser son mot de passe -->
              <p>Vous n avez pas de compte? <a href="login.php" class="float-center">Créer un compte </a></p>
              <p>Mot de passe oublié? <a href="#" class="float-center">Réinitialiser le mot de passe </a></p>


              <button class="btn bouton-style float-right" type="submit">Connexion</button>
            </form>
          </div>
        </div>
      </div>

    </div>


  </section>
  <!-- end banniere -->
  <section class="plus">

    <div class="supplement">

    </div>

    <br>
  </Section>




  <?php include("footer.php"); ?>










  <!--jquery-->
  <script src="./js/jquery3.4.1.min.js"></script>
  <!--boostrap js file-->
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html >
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
   <?php include("menu.php");?>


   <!--==================END header Area==========================-->
  
<section class="premiere ">
 <div class="picture">
    <div class="block">

        <div class="card  border-dark ">
            <div class="card-header text-center"  style="background-color:#1e1f1a;  color: white; ">
                Inscription
              </div>
            <div class="card-body ">
                <form>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault01">Prénom</label>
                      <input type="text" class="form-control border-dark" id="validationDefault01"  required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationDefault02">Nom</label>
                      <input type="text" class="form-control border-dark" id="validationDefault02"  required>
                    </div>
                  </div>

                  <label >Date de naissance</label>
                  <div class="form-row">
                    
                    <div class="col-md-3 mb-3">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Jour</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Mois</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Janvier</option>
                          <option>Février</option>
                          <option>Mars</option>
                          <option>Avril</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-3 mb-3">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Année</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>

                  </div>

                    

                    <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Mail</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text border-dark" id="inputGroupPrepend2">@</span>
                              </div>
                              <input type="text" class="form-control border-dark" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                            </div>
                          </div>
                      </div>

                      <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Mot de passe</label>
                            <input type="text" class="form-control border-dark" id="validationDefault02"  required>
                          </div>
                      </div>

                      <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Confirmation du mot de passe</label>
                            <input type="text" class="form-control border-dark" id="validationDefault02"  required>
                          </div>
                      </div>


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

                    <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">Adresse</label>
                            <input type="text" class="form-control border-dark" id="validationDefault03" required>
                          </div>
                      </div>

                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                          Agree to terms and conditions
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-dark float-right" type="submit">Inscription</button>
                  </form>
            </div>
          </div>
        
          <br>
    </div>

 </div>

  
</section>
<!-- end banniere -->




  









<?php include("footer.php");?>

<!--jquery-->
<script src="./js/jquery3.4.1.min.js"></script>
<!--boostrap js file-->
<script src="./js/bootstrap.min.js"></script>
</body>
</html>
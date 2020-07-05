<!--  page d'une annonce -->
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
        <!-- debut de la carte  -->
        <div class="card  border-dark ">
          <div class="card-header text-center" style="background-color:#1e1f1a; color: white; ">
            Une annonce
          </div>
          <!--  debut du body de la carte -->
          <div class="card-body ">
            <form>
              <div class="custom-control custom-switch float-right">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <!-- mettre en favoris ou pas  -->
                <label class="custom-control-label h6" for="customSwitch1">Favoris </label>
              </div>
              <br>
              <br>
              <!-- la distances  -->
              <h4>Distance: 500 m</h4>
              
              </br>
              <div class="form-row">
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <!--  le type -->
                    <label class="input-group-text" for="inputGroupSelect01">Type</label>
                  </div>
                  <input class="form-control" type="text" placeholder="Fruit" readonly>
                </div>
              </div>

              </br>
              <!--  la variété -->
              <div class="form-row">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Variété</label>
                  </div>
                  <input class="form-control" type="text" placeholder="Poire" readonly>
                </div>
              </div>

              <br>
              <!--  produit  -->
              <h5>Le produit:</h5>

              <div class="card-deck">

                <div class="row justify-content-center">
                  <div class="card">
                    <!-- les images  -->
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
              </div>

              </br>
              </br>


              <!--  descriptions du produit -->
              <div class="card">
                <h5 class="card-header">Description du produit</h5>
                <div class="card-body">

                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>

              </div>

              </br>
              <!--  info general -->
              <div class="card">
                <h5 class="card-header ">Information général</h5>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>


              </br>



              <!-- contacter la personne  -->
              <button type="button" class="btn bouton-style float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Contacter</button>
              <!-- le modal pour le contacter qui souvre  -->

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <!-- le header du modal  -->
                      <h5 class="modal-title" id="exampleModalLabel">Nouveau message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!--  le body du modal -->
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <!-- on ecrit le sujet du message  -->
                          <label for="recipient-name" class="col-form-label">Sujet:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <!-- on ecrit le message ici  -->
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <!--  on ferme ou envoi le message -->
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Fermer</button>
                      <button type="button" class="btn btn-primary">Envoyer le message <i class="fas fa-paper-plane"></i></button>
                    </div>
                  </div>
                </div>
              </div>
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
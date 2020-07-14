<?php include("m_open_bdd.php"); ?>
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
  <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>

<body>


  <!--==================Start header Area==========================-->
  <?php include("menu.php"); ?>
  <!--==================END header Area============================-->


  <section class="premiere ">
    <div class="picture">
      <div class="block">
        <!-- grosse card qui engroupe tout -->
        <div class="card  border-dark ">
          <div class="card-header  text-center" style="background-color:#1e1f1a;  color: white; ">
            Annonces
          </div>
          <!----====== Annonces ======---->

          <div class="list-group my-2">
            <?php
            while ($donnees = $annonces->fetch()) {
              echo '


<!-- noveau item-->
                  <div class="card mb-3 mr-3 ml-3" >
                    <div class="row no-gutters">
                      <div class="col-md-4">';
                      if($donnees['img_name']!=""){
                        echo '
                        <div id="carouselExampleIndicators' . htmlspecialchars($donnees['ID_annonce']) . '" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="' . htmlspecialchars($donnees['img_path']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name']) . '">
                        </div>';
                      }
                       //on verifie si l'image 2 existe si oui
                      if($donnees['img_name2']!=""){
                        //on vérifie si la 
                        if($donnees['img_name']=="" && $donnees['img_name3']!=""){
                          echo '
                        <div id="carouselExampleIndicators' . htmlspecialchars($donnees['ID_annonce']) . '" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="' . htmlspecialchars($donnees['img_path2']) . '" height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name2']) . '">
                      </div>';
                        }
                        else if ($donnees['img_name']=="" && $donnees['img_name3']==""){
                        echo '
                        <div >
                          <img src="' . htmlspecialchars($donnees['img_path2']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name2']) . '">
                        </div>
                          ';
                        }
                        else {
                          echo '
                          <div class="carousel-item">
                            <img src="' . htmlspecialchars($donnees['img_path2']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name2']) . '">
                          </div>';
                          }
      
                      }
                      if($donnees['img_name3']!=""){
                        if ($donnees['img_name']!="" || $donnees['img_name2']!="")
                        {
                          echo '<div class="carousel-item">
                          <img src="' . htmlspecialchars($donnees['img_path3']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name3']) . '">
                        </div>';
                        }
                       
                     else{
                        echo '<div >
                        <img src="' . htmlspecialchars($donnees['img_path3']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name3']) . '">
                      </div>';
                      }
                    }
                    else if ($donnees['img_name3']=="" && $donnees['img_name2']=="" && $donnees['img_name']==""){
                      echo '<div >
                      <img src="./images/error.png"  height="160" class="d-block w-100" alt="...">
                    </div>';
                    }
                       if(($donnees['img_name']!="" && $donnees['img_name3']!="") || ($donnees['img_name2']!="" && $donnees['img_name3']!="")|| ($donnees['img_name']!="" && $donnees['img_name2']!=""))
                       { echo' </div>
                      
                      <a class="carousel-control-prev" href="#carouselExampleIndicators' . htmlspecialchars($donnees['ID_annonce']) . '" role="button" data-slide="prev">
                        <span class="carousel" aria-hidden="true"> <i class="  fas fa-angle-left"></i></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators' . htmlspecialchars($donnees['ID_annonce']) . '" role="button" data-slide="next">
                        <span class="carousel" aria-hidden="true"> <i class="  fas fa-angle-right"></i></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>';}
                    echo'
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">

                          <h5 class="card-title">' . $donnees['titre_annonce'] . '</h5>
                          <p class="card-text">' . $donnees['description_annonce'] . '</p>
                          <br>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>  <a href="uneannonce.php" class="btn  btn-outline-dark float-right">Voir</a></p>

                        </div>
                      </div>
                    </div>
                  </div>
                  ';
            }
            ?>
          </div>

          <!----====== Pagination ======---->

          <div class="card-center ">
            <nav aria-label="Page de navigation ">
              <ul class="pagination " style="margin-left: auto; margin-right: auto; width:15em; ">
                <li class="page-item  ">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>


  </section>

  <section class="plus">

    <div class="supplement">

    </div>

  </Section>


  <!--==================Start footer Area==========================-->
  <?php include("footer.php"); ?>
  <!--==================END footer Area============================-->


  <!--jquery-->
  <script src="./js/jquery3.4.1.min.js"></script>
  <!--boostrap js file-->
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>


<!--- Fin de traitement de la bdd ----->

<?php
$annonces->closeCursor(); // Termine le traitement de la requête
?>
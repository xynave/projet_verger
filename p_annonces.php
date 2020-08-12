<?php
// On inclut les fichiers de configuration et d'accès aux données
include 'm_open_bdd.php';
include 'm_bdd_annonces.php';
session_start(); // On démarre la session AVANT toute chose


// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
  $currentPage = (int) strip_tags($_GET['page']);
}else{
  $currentPage = 1;
}
// On se connecte 

// On instancie la base de données
$database = new Database();
$db = $database->getConnection();




// On détermine le nombre total d'annonces
$sql = 'SELECT COUNT(*) AS nb_annonces FROM `annonces`;';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'annonces
$result = $query->fetch();

$nbAnnonces = (int) $result['nb_annonces'];

// On détermine le nombre d'annonces par page
$parPage = 10;

// On calcule le nombre de pages total
$pages = ceil($nbAnnonces / $parPage);

// Calcul du 1ere annonce de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM `annonces` ORDER BY `date_annonce` DESC LIMIT :premier, :parpage;';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);

?>



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
            foreach ($annonces as $donnees) {
              echo '


<!-- nouveau item-->
                  <div class="card mb-3 mr-3 ml-3" >
                    <div class="row no-gutters">
                      <div class="col-md-4">';
              if ($donnees['img_name'] != "" && ($donnees['img_name2'] != "" || $donnees['img_name3'] != "")) {
                echo '
                        <div id="carouselExampleIndicators' . htmlspecialchars($donnees['ID_annonce']) . '" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="' . htmlspecialchars($donnees['img_path']) . '" width="100" height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name']) . '">
                        </div>';
              } else if ($donnees['img_name'] != "") {
                echo '
                        <div>
                        <img src="' . htmlspecialchars($donnees['img_path']) . '" width="100" height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name']) . '">
                        </div>';
              }
              //on verifie si l'image 2 existe si oui
              if ($donnees['img_name2'] != "") {
                //on vérifie si la
                if ($donnees['img_name'] == "" && $donnees['img_name3'] != "") {
                  echo '
                        <div id="carouselExampleIndicators' . htmlspecialchars($donnees['ID_annonce']) . '" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="' . htmlspecialchars($donnees['img_path2']) . '" height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name2']) . '">
                      </div>';
                } else if ($donnees['img_name'] == "" && $donnees['img_name3'] == "") {
                  echo '
                        <div >
                          <img src="' . htmlspecialchars($donnees['img_path2']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name2']) . '">
                        </div>
                          ';
                } else {
                  echo '
                          <div class="carousel-item">
                            <img src="' . htmlspecialchars($donnees['img_path2']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name2']) . '">
                          </div>';
                }
              }
              if ($donnees['img_name3'] != "") {
                if ($donnees['img_name'] != "" || $donnees['img_name2'] != "") {
                  echo '<div class="carousel-item">
                          <img src="' . htmlspecialchars($donnees['img_path3']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name3']) . '">
                        </div>';
                } else {
                  echo '<div >
                        <img src="' . htmlspecialchars($donnees['img_path3']) . '"  height="160" class="d-block w-100" alt="' . htmlspecialchars($donnees['img_name3']) . '">
                      </div>';
                }
              } else if ($donnees['img_name3'] == "" && $donnees['img_name2'] == "" && $donnees['img_name'] == "") {
                echo '<div >
                      <img src="./images/error.png"  height="160" class="d-block w-100" alt="...">
                    </div>';
              }
              if (($donnees['img_name'] != "" && $donnees['img_name3'] != "") || ($donnees['img_name2'] != "" && $donnees['img_name3'] != "") || ($donnees['img_name'] != "" && $donnees['img_name2'] != "")) {
                echo ' </div>

                      <a class="carousel-control-prev" href="#carouselExampleIndicators' . htmlspecialchars($donnees['ID_annonce']) . '" role="button" data-slide="prev">
                        <span class="carousel" aria-hidden="true"> <i class="  fas fa-angle-left"></i></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators' . htmlspecialchars($donnees['ID_annonce']) . '" role="button" data-slide="next">
                        <span class="carousel" aria-hidden="true"> <i class="  fas fa-angle-right"></i></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>';
              }
              echo '
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
          <nav>
            <ul class="pagination" style="margin-left: auto; margin-right: auto; width:15em;">
              <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
              <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                <a href="./p_annonces.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
              </li>
              <?php for ($page = 1; $page <= $pages; $page++) : ?>
                <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                  <a href="./p_annonces.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                </li>
              <?php endfor ?>
              <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
              <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                <a href="./p_annonces.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
              </li>
            </ul>
          </nav>

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
$query->closeCursor(); // Termine le traitement de la requête
?>
<!-- page connexion -->
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
    <!--==================END header Area============================-->


<section class="premiere ">
<div class="picture">
    <div class="block">
<!-- grosse card qui engroupe tout -->
        <div class="card  border-dark ">
            <div class="card-header text-center" style="background-color:#1e1f1a;  color: white; ">
                Annonces
              </div>


    <!----====== Annonces ======---->

    <div class="list-group my-2">
    <?php
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

    foreach($prenoms as $element)
    {
        echo'<a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">' . $element . '</h5>
                    <small>3 days ago</small>
                </div>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              <small>Donec id elit non mi porta.</small>
            </a>'
        ;
    }
    ?>
    </div>

    <!----====== Pagination ======---->

    <div class="card-center ">
    <nav aria-label="Page de navigation ">
      <ul class="pagination " style="margin-left: auto; margin-right: auto; width:15em; " >
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
    <?php include("footer.php");?>
    <!--==================END footer Area============================-->


<!--jquery-->
<script src="./js/jquery3.4.1.min.js"></script>
<!--boostrap js file-->
<script src="./js/bootstrap.min.js"></script>
</body>
</html>

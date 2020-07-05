<!--page carte  -->
<!DOCTYPE html>
<html >
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
<body>
 

   <!--==================Start header Area==========================-->
   <?php include("menu.php");?>


   <!--==================END header Area==========================-->

   <!-- start banniere -->

       <?php include("imagerecherche.php");?>
    <!-- end banniere -->


<!--partie liste-->

<Section class="zone">
</br>
</br>
</br>

<!--bouton pour switch entre la carte et la page liste-->
      <section class="deplacer pic">
        </br>
              <div class="custom-control custom-switch ">
                <input type="checkbox" class="custom-control-input " id="boutoncarte" onclick="myFunction()" checked>
                <label class="custom-control-label h4" for="boutoncarte">Carte</label>
              </div>

        </br>
        </br> 
       
        
<!-- zone de la map -->
          <div class=" mappi">
            <div id="map"></div>
            
          </div>
      
     
        
      
             
        
      </section>


      <br>
          </Section>

        
<!--partie liste-->

<?php include("footer.php");?>



<!--jquery-->
<script src="./js/jquery3.4.1.min.js"></script>

<script src="./js/main.js"></script>
<script type="text/javascript" src="./js/app.js"></script>

<!--boostrap js file-->
<script src="./js/bootstrap.min.js"></script>
</body>
</html>
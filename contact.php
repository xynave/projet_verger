<?php
session_start(); // On démarre la session AVANT toute chose
?>



<!-- page contact -->
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
                        Contact
                    </div>

                    <div class="card-body ">
                        <form action="envoyer.php" method="POST">
                            <div class="form-group">
                                <label>Nom :</label>
                                <input type="text" name="nom" class="form-control" id="inputname" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <label>Prénom :</label>
                                <input type="text" class="form-control" name="firstname" id="inputfirstname" placeholder="Prénom">
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="text" name="email" class="form-control" id="inputemail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Objet :</label>
                                <input type="text" name="objet" class="form-control" id="inputobjet" placeholder="objet">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message :</label>
                                <textarea class="form-control" name="message" id="message" rows="3" placeholder="Saisir votre texte"></textarea>
                            </div>
                            <button class="btn bouton-style float-right" value="Envoyer" type="submit"><i class="fas fa-paper-plane"></i> Envoyer </button>
                            
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>

    </section>






    <!--==================Start footer Area==========================-->
    <?php include("footer.php"); ?>
    <!--==================END footer Area============================-->


    <!--jquery-->
    <script src="./js/jquery3.4.1.min.js"></script>
    <!--boostrap js file-->
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>

<?php
// On commence par récupérer les champs
if(isset($_POST['type']))      $type=$_POST['type'];
else      $type=" ";

if(isset($_POST['variete']))      $variete=$_POST['variete'];
else      $variete=" ";

if(isset($_POST['titre']))      $titre=$_POST['titre'];
else      $titre=" ";

if(isset($_POST['description']))      $description=$_POST['description'];
else      $description=" ";

if(isset($_POST['ville']))      $ville=$_POST['ville'];
else      $ville=" ";

if(isset($_POST['code_postal']))      $code_postal=$_POST['code_postal'];
else      $code_postal=" ";

if(isset($_POST['adresse']))      $adresse=$_POST['adresse'];
else      $adresse=" ";

$date=date("y.m.d");

$dbco = new PDO('mysql:host=localhost;dbname=leveraged;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $dbco->prepare("INSERT INTO annonces (ID_annonce, titre_annonce, description_annonce, date_annonce,type, variete,Ville,Code_postal,Adresse) VALUES (NULL, :titre, :description, :date, :type, :variete,:ville,:code_postal,:adresse)");

                    $sth->bindParam(':titre', $titre);
                    $sth->bindParam(':description',$description);
                    $sth->bindParam(':date',$date);
                    $sth->bindParam(':type',$type);
                    $sth->bindParam(':variete',$variete);
                    $sth->bindParam(':adresse',$adresse);
                    $sth->bindParam(':code_postal',$code_postal);
                    $sth->bindParam(':ville',$ville);
                    $sth->execute();
                    header("Location: creation.php");
                    exit();


    
?>
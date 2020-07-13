<?php
// On commence par récupérer les champs
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//on vérifie si on a bien quelque chose et si pas une valeur initial
    if (isset($_POST['type']) && $_POST['type'] != "choisis") {
        $type = $_POST['type'];
//on vérifie si on a bien quelque chose et si pas une valeur initial
        if (isset($_POST['variete']) && $_POST['variete'] != "Choisis_ta_variete") {
            $variete = $_POST['variete'];
//on vérifie si on a bien quelque chose et si pas une valeur initial
            if (isset($_POST['titre']) && $_POST['titre'] != "") {
                $titre = $_POST['titre'];
//on vérifie si on a bien quelque chose et si pas une valeur initial
                if (isset($_POST['description']) && $_POST['description'] != "") {
                    $description = $_POST['description'];
//on vérifie si on a bien quelque chose et si pas une valeur initial
                    if (isset($_POST['ville']) && $_POST['ville'] != "") {
                        $ville = $_POST['ville'];
//on vérifie si on a bien quelque chose et si pas une valeur initial
                        if (isset($_POST['code_postal']) && $_POST['code_postal'] != "") {
                            $code_postal = $_POST['code_postal'];
//on vérifie si on a bien quelque chose et si pas une valeur initial
                            if (isset($_POST['adresse']) && $_POST['adresse'] != "") {
                                $adresse = $_POST['adresse'];
//on si le fichier 1 n'est pas vide
                                if (!empty($_FILES['img1'])  ) {
//on récupère le fichier 1
                                    $img = $_FILES['img1'];
//on récupère les 3 derniere lettres du fichier pour voir si il s'agit d'un fichier image
                                    $ext = strtolower(substr($img['name'], -3));
//tableau avec diferent type de fichier image
                                    $allow_ext = array("png", "jpg", "gif");
//si le fichier et une image ou vide
                                    if (in_array($ext, $allow_ext) || !isset($_POST['img1']) ) {
//on recommence avec fichier 2          
                                        
                                        if (!empty($_FILES['img2'])) {

                                            $img2 = $_FILES['img2'];
                                            $ext2 = strtolower(substr($img2['name'], -3));

                                            if (in_array($ext2, $allow_ext) || !isset($_POST['img2'])) {
//on recommence avec fichier 3
                                                if (!empty($_FILES['img3'])) {

                                                    $img3 = $_FILES['img3'];
                                                    $ext3 = strtolower(substr($img3['name'], -3));

                                                    if (in_array($ext3, $allow_ext) || !isset($_POST['img3'])) {
//on récupère les info du fichier
                                                        $filenames = $img['name'];
                                                        $filetmp = $img['tmp_name'];
                                                        $fileBase = basename($img['name']);
                                                        $dir = "./images/";
//le futur url
                                                        $final_dir = $dir . $fileBase;
//on deplace le dossier dans le fichier image
                                                        move_uploaded_file($img['tmp_name'], $final_dir);
//on recommence pour fichier 2
                                                        $filenames2 = $img2['name'];
                                                        $filetmp2 = $img2['tmp_name'];
                                                        $fileBase2 = basename($img2['name']);
                                                        $dir2 = "./images/";
                                                        $final_dir2 = $dir2 . $fileBase2;

                                                        move_uploaded_file($img2['tmp_name'], $final_dir2);
//on recommence fichier 3
                                                        $filenames3 = $img3['name'];
                                                        $filetmp3 = $img3['tmp_name'];
                                                        $fileBase3 = basename($img3['name']);
                                                        $dir3 = "./images/";
                                                        $final_dir3 = $dir3 . $fileBase3;

                                                        move_uploaded_file($img3['tmp_name'], $final_dir3);
//on prend la date du jour
                                                        $date = date("y.m.d");
//on lance la base de donnée
                                                        $dbco = new PDO('mysql:host=localhost;dbname=leveraged;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                                        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//on lance requete sql                                  
                                                        if($filenames3!="" || $filenames2!="" || $filenames['img1']!="")
                                                        {
                                                        $sth = $dbco->prepare("INSERT INTO annonces (ID_annonce, titre_annonce, description_annonce, date_annonce,type, variete,Ville,Code_postal,Adresse,img_path,img_name,img_path2,img_name2,img_path3,img_name3) VALUES (NULL, :titre, :description, :date, :type, :variete,:ville,:code_postal,:adresse,:img_path,:img_name,:img_path2,:img_name2,:img_path3,:img_name3)");
//on fait correspondre les variables avec les variable sql
                                                        $sth->bindParam(':titre', $titre);
                                                        $sth->bindParam(':description', $description);
                                                        $sth->bindParam(':date', $date);
                                                        $sth->bindParam(':type', $type);
                                                        $sth->bindParam(':variete', $variete);
                                                        $sth->bindParam(':adresse', $adresse);
                                                        $sth->bindParam(':code_postal', $code_postal);
                                                        $sth->bindParam(':ville', $ville);
                                                        $sth->bindParam(':img_path', $final_dir);
                                                        $sth->bindParam(':img_name', $fileBase);
                                                        $sth->bindParam(':img_path2', $final_dir2);
                                                        $sth->bindParam(':img_name2', $fileBase2);
                                                        $sth->bindParam(':img_path3', $final_dir3);
                                                        $sth->bindParam(':img_name3', $fileBase3);
//on execute
                                                        $sth->execute();
//on reload la page cration.php
                                                        echo '<script language="Javascript">
                                                        <!--
                                                        document.location.replace("creation.php");
                                                        // -->
                                                        </script>';

                                                        exit();
                                                        
                                                        
                                                        
                                                        }
                                                        else{
                                                            $sth = $dbco->prepare("INSERT INTO annonces (ID_annonce, titre_annonce, description_annonce, date_annonce,type, variete,Ville,Code_postal,Adresse,img_path,img_name,img_path2,img_name2,img_path3,img_name3) VALUES (NULL, :titre, :description, :date, :type, :variete,:ville,:code_postal,:adresse,'','','','','','')");
//on fait correspondre les variables avec les variable sql
                                                        $sth->bindParam(':titre', $titre);
                                                        $sth->bindParam(':description', $description);
                                                        $sth->bindParam(':date', $date);
                                                        $sth->bindParam(':type', $type);
                                                        $sth->bindParam(':variete', $variete);
                                                        $sth->bindParam(':adresse', $adresse);
                                                        $sth->bindParam(':code_postal', $code_postal);
                                                        $sth->bindParam(':ville', $ville);
//on execute
                                                        $sth->execute();
//on reload la page cration.php
                                                        echo '<script language="Javascript">
                                                        <!--
                                                        document.location.replace("creation.php");
                                                        // -->
                                                        </script>';
                                                        exit();
                                                        
                                                        }
                                                    } 
//différent message d'erreur
                                                    else {
                                                        $erreur = "Votre fichier 1 n'est pas une image.";
                                                    }
                                                }
                                            } else {
                                                $erreur = "Votre fichier 2 n'est pas une image.";
                                            }
                                        }
                                    } else {
                                        $erreur = "Votre fichier 3 n'est pas une image.";
                                    }
                                }
                            } else {
                                $erreur = "Votre adresse est vide.";
                            }
                        } else {
                            $erreur = "Votre code postal est vide.";
                        }
                    } else {
                        $erreur = "Votre ville est vide.";
                    }
                } else {
                    $erreur = "Votre description est vide.";
                }
            } else {
                $erreur = "Votre titre est vide.";
            }
        } else {
            $erreur = "Veuillez choisir une variété .";
        }
    } else {
        $erreur = "Veuillez choisir un type.";
    }
}

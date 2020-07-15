<?php
class Database{
   private $host = "localhost";
   private $db_name = "leveraged";
   private  $username = "root";
   private $password = "";
   public $connexion;

   public function getConnection(){
       $this->connexion =null;

       try{
           $this->connexion = new PDO("mysql:host=" . $this->host. ";dbname=" .$this->db_name,  $this->username,  $this->password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
           $this->connexion->exec("set names utf8");
   
       }catch(PDOException $exception){
        echo "Erreur de connexion : " . $exception->getMessage();
    }
    return $this->connexion;
   }
}
?>
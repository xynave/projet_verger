<?php 
class Annonces{
    private $connexion;
    private $table="annonces";

    //object properties
    public $id;
    public $lat;
    public $lon;

    /*
    **Constructeur avec $db pour la connexion à la base
    */
    public function __construct($db){
        $this->connexion =$db;
    }
    /**
     * Lecture des annonces
     * @ return void
     */
    public function lire(){
        $sql = "SELECT * FROM " .$this->table;

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();
        //on return le resultat
        return $query;

    }



}?>
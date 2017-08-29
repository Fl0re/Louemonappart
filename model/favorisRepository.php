<?php

class FavorisRepository{
    public $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

     public function favoris($id, $favoris){
      
           $query="INSERT INTO favoris SET id_annonce=:id_annonce, id_inscription=:id_inscription";
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               
               'id_annonce'=>$id,
               'id_inscription'=>$favoris

      
     
           ));
           return $pdo->rowCount();

    }


}
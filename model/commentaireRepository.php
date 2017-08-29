<?php

class CommentaireRepository{
    public $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function insertcommentaire(Commentaire $commentaire, $id){
          
           $query="INSERT INTO commentaire SET annonce_id=:annonce_id, description=:description, datecreate=NOW()";
         
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               
            'description'=>$commentaire->getDescription(),
            'annonce_id'=>$id
         
           ));
           return $pdo->rowCount();
    }
      public function selectcommentairebyannonce($annonce_id){ 
          
           $query="SELECT * FROM commentaire WHERE annonce_id=:annonce_id" ;
           $pdo=$this->connexion->prepare($query);
            $pdo->execute (array(
               'annonce_id'=> $annonce_id
           ));
           $annonces=$pdo->fetchAll(PDO::FETCH_ASSOC);
           $annoncesObj = [];
           foreach($annonces as $annonce){
               $annoncesObj[] = new Annonce($annonce);

           }
           return $annoncesObj;
       }


}
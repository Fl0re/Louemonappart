<?php

class annonceRepository{
    public $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function insertAnnonce(Annonce $annonce){ 
          
           $query="INSERT INTO annonce SET titre=:titre, ville=:ville, tarif=:tarif, propriete=:propriete, statut=:statut, superficie=:superficie, dispo_debut=:dispo_debut, dispo_fin=:dispo_fin, description=:description, photo_1=:photo_1, photo_2=:photo_2, photo_3=:photo_3,id_inscription=:id_inscription";
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               
            'titre'=>$annonce->getTitre(),
            'ville'=>$annonce->getVille(),
            'tarif'=>$annonce->getTarif(),
            'propriete'=>$annonce->getPropriete(),
            'statut'=>$annonce->getStatut(),
            'superficie'=>$annonce->getSuperficie(),
            'dispo_debut'=>$annonce->getDispo_debut(),
            'dispo_fin'=>$annonce->getDispo_fin(),
            'description'=>$annonce->getDescription(),
            'photo_1'=>$annonce->getPhoto_1(),
            'photo_2'=>$annonce->getPhoto_2(),
            'photo_3'=>$annonce->getPhoto_3(),
            'id_inscription'=>$annonce->getId_inscription(),



           ));
           return $pdo->rowCount();
    }

       public function selectAnnonces(){ 
          
           $query="SELECT * FROM annonce";
           $pdo=$this->connexion->prepare($query);
           $pdo->execute ();
        
           $annonces=$pdo->fetchAll(PDO::FETCH_ASSOC);
           $annoncesObj = [];
           foreach($annonces as $annonce){
               $annoncesObj[] = new Annonce($annonce);

           }
           return $annoncesObj;
       }


           public function selectAnnoncesByInscriptionId($id_inscription){ 
          
           $query="SELECT * FROM annonce WHERE id_inscription=:id_inscription";
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               'id_inscription'=> $id_inscription
           ));
        
           $annonces=$pdo->fetchAll(PDO::FETCH_ASSOC);

          if(!empty($annonces)){
                $annoncesObj = [];
                foreach($annonces as $annonce){
                    $annoncesObj[] = new Annonce($annonce);
                }
                // var_dump($annoncesObj);
                // die();
                return $annoncesObj;
            }
            else return [];


    }       
        public function getAnnonceById($id){
    
        
        $pdo = $this->connexion->prepare('SELECT * FROM annonce WHERE id=:id');
        $pdo->execute(array(
            'id'=>$id
        ));
        $annonce = $pdo->fetch(PDO::FETCH_ASSOC);
        if(!empty($annonce)){
                return new Annonce($annonce);
        }
        else return false;
        
    }
   


         public function deleteAnnonce(Annonce $annonce){
      
           $query="DELETE FROM annonce WHERE id=:id";
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               'id' =>$annonce->getId()
     
           ));
           return $pdo->rowCount();
    }
       public function reservation(Annonce $annonce){
      
           $query="UPDATE annonce SET id_locataire=:id_locataire, etat=:etat WHERE id=:id";
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               
               'id_locataire'=>$annonce->getId_locataire(),
               'etat'=>$annonce->getEtat(),
               'id'=>$annonce->getId()
     
           ));
           return $pdo->rowCount();
    }
    public function modifier(Annonce $annonce){
        $connexion = getconnexion();

            $pdo = $connexion->prepare('  UPDATE annonce  WHERE id=:id ');
        $pdo->execute(array(
            'id'=>$annonce->getId(),
            
        ));
        return $pdo->rowCount();
}
       public function selectReservationByLocataireId($id_locataire){ 
          
           $query="SELECT * FROM annonce WHERE id_locataire=:id_locataire";
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               'id_locataire'=>$id_locataire
           ));
        
           $annonces=$pdo->fetchAll(PDO::FETCH_ASSOC);

          if(!empty($annonces)){
                $annoncesObj = [];
                foreach($annonces as $annonce){
                    $annoncesObj[] = new Annonce($annonce);
                }
                // var_dump($annoncesObj);
                // die();
                return $annoncesObj;
            }
            else return [];
  }
 
}
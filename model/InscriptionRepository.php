<?php

class InscriptionRepository{
    public $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function insertinscription(Inscription $inscription){
          
           $query="INSERT INTO inscription SET prenom=:prenom,
           nom=:nom, email=:email,
           mdp=:mdp ";
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               
            'prenom'=>$inscription->getPrenom(),
            'nom' => $inscription->getNom(),
            'email' => $inscription->getEmail(),
            'mdp' => $inscription->getMdp(),
            
           ));
           return $pdo->rowCount();
    }

}
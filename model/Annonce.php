<?php

class Annonce
{
private $id;
private $titre;
private $description;
// private $photo;
private $ville;
private $tarif;
private $statut;
private $propriete;
private $superficie;
private $dispo_debut;
private $dispo_fin;
private $photo_1;
private $photo_2;
private $photo_3;
private $id_inscription;
private $id_locataire;
private $status;


 
    public function __construct($tableau = array())
    {
         $this->hydrate($tableau);
     }


  function getId(){
        return $this->id;
    }
  function setId($id){
        $this->id = $id;
    }
function setTitre($titre) { $this->titre = $titre; }
function getTitre() { return $this->titre; }
function setDescription($description) { $this->description = $description; }
function getDescription() { return $this->description; }
// function setPhoto($photo) { $this->photo = $photo; }
// function getPhoto() { return $this->photo; }
function setVille($ville) { $this->ville = $ville; }
function getVille() { return $this->ville; }
function setTarif($tarif) { $this->tarif = $tarif; }
function getTarif() { return $this->tarif; }
function setStatut($statut) { $this->statut = $statut; }
function getStatut() { return $this->statut; }
function setPropriete($propriete) { $this->propriete = $propriete; }
function getPropriete() { return $this->propriete; }
function setSuperficie($superficie) { $this->superficie = $superficie; }
function getSuperficie() { return $this->superficie; }
function setDispo_debut($dispo_debut) { $this->dispo_debut = $dispo_debut; }
function getDispo_debut() { return $this->dispo_debut; }
function setDispo_fin($dispo_fin) { $this->dispo_fin = $dispo_fin; }
function getDispo_fin() { return $this->dispo_fin; }
function setPhoto_1($photo_1) { $this->photo_1 = $photo_1; }
function getPhoto_1() { return $this->photo_1; }
function setPhoto_2($photo_2) { $this->photo_2 = $photo_2; }
function getPhoto_2() { return $this->photo_2; }
function setPhoto_3($photo_3) { $this->photo_3 = $photo_3; }
function getPhoto_3() { return $this->photo_3; }
function setEtat($etat) { $this->etat = $etat; }
function getEtat() { return $this->etat; }

function setId_inscription($id_inscription) { $this->id_inscription = $id_inscription; }
function getId_inscription() { return $this->id_inscription; }

function setId_locataire($id_locataire) { $this->id_locataire = $id_locataire; }
function getId_locataire() { return $this->id_locataire; }





    public function hydrate($tableau)
     {
         foreach($tableau as $key => $value)
         {
             //ici je rajoute un remplacement des undescore
             //$key = preg_replace("#_#","",$key);
             //donc pour l'index id on met le en majuscule et le
             // prefix avec "set"
             $method = "set".ucfirst($key);
            if(method_exists($this,$method)){
                 $this->$method($value);
             }
         }
     }

}
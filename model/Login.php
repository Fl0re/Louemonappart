<?php

class Login
{
    private $prenom;
    private $nom;
    private $email;
    private $mdp;

 
    public function __construct($tableau = array())
    {
         $this->hydrate($tableau);
     }
 
    function setPrenom($prenom) { $this->prenom = $prenom; }
    function getPrenom() { return $this->prenom; }
    function setNom($nom) { $this->nom = $nom; }
    function getNom() { return $this->nom; }
    function setEmail($email) { $this->email = $email; }
    function getEmail() { return $this->email; }
    function setMdp($mdp) { $this->mdp = $mdp; }
    function getMdp() { return $this->mdp; }

    public function hydrate($tableau)
     {
         foreach($tableau as $key => $value)
         {
             //ici je rajoute un remplacement des undescore
             $key = preg_replace("#_#","",$key);
             //donc pour l'index id on met le en majuscule et le
             // prefix avec "set"
             $method = "set".ucfirst($key);
            if(method_exists($this,$method)){
                 $this->$method($value);
             }
         }
     }

}
<?php
class Massage{

    
private $username;
private $textes;
private $datecreate;

  public function __construct($tableau = array())
    {
         $this->hydrate($tableau);
     }
 
function setUsername($username) { $this->username = $username; }
function getUsername() { return $this->username; }
function setTextes($textes) { $this->textes = $textes; }
function getTextes() { return $this->textes; }
function setDatecreate($datecreate) { $this->datecreate = $datecreate; }
function getDatecreate() { return $this->datecreate; }

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
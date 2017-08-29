<?php


class Commentaire{
        private $id;
private $description;
private $datecreate;
private $annonce_id;

  public function __construct($tableau = array())
    {
         $this->hydrate($tableau);
     }

function setId($id) { $this->id = $id; }
function getId() { return $this->id; }
function setDescription($description) { $this->description = $description; }
function getDescription() { return $this->description; }
function setDatecreate($datecreate) { $this->datecreate = $datecreate; }
function getDatecreate() { return $this->datecreate; }
function setAnnonce_id($annonce_id) { $this->annonce_id = $annonce_id; }
function getAnnonce_id() { return $this->annonce_id; }


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

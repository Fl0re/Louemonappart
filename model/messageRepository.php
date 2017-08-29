<?php

class messageRepository{
    public $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function insertmessage(Message $message){
          
           $query="INSERT INTO message SET username=:username,
           textes=:textes"
           ;
           $pdo=$this->connexion->prepare($query);
           $pdo->execute (array(
               
            'username'=>$inscription->getUsername(),
            'textes' => $inscription->getTextes(),
            
            
           ));
           return $pdo->rowCount();
    }

}
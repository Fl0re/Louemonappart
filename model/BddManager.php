<?php


class BddManager{

private $InscriptionRepository;
private $LoginRepository;
private $annonceRepository;
private $commentaireRepository;

 public function __construct()
    {
        $this->connexion = Connexion::getConnexion();
        $this->setInscriptionRepository(new InscriptionRepository($this->connexion));
        $this->setLoginRepository(new LoginRepository($this->connexion));
        $this->setAnnonceRepository(new annonceRepository($this->connexion));
        $this->setCommentaireRepository(new commentaireRepository($this->connexion));
        $this->setMessageRepository(new messageRepository($this->connexion));
        $this->setFavorisRepository(new favorisRepository($this->connexion));
      
    }

public function setInscriptionRepository($InscriptionRepository){
    $this->InscriptionRepository=$InscriptionRepository;
}

public function getInscriptionRepository(){
    return $this->InscriptionRepository;
}
public function setLoginRepository($LoginRepository){
    $this->LoginRepository=$LoginRepository;
}

public function getLoginRepository(){
    return $this->LoginRepository;
}
public function setAnnonceRepository($annonceRepository){
    $this->annonceRepository=$annonceRepository;
}

public function getAnnonceRepository(){
    return $this->annonceRepository;
}

public function setCommentaireRepository($commentaireRepository){
    $this->commentaireRepository=$commentaireRepository;
}

public function getCommentaireRepository(){
    return $this->commentaireRepository;
}
public function setMessageRepository($messageRepository){
    $this->messageRepository=$messageRepository;
}

public function getMessageRepository(){
    return $this->messageRepository;
}

public function setFavorisRepository($favorisRepository){
    $this->favorisRepository=$favorisRepository;
}

public function getFavorisRepository(){
    return $this->favorisRepository;
}
}
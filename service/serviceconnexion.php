<?php
class serviceconnexion {
    

    private $post;

    function __construct($post) {
        $this->post = $post;
    }

    function login(){

        $email= $this->post["email"];
        $mdp= $this->post["mdp"];

        $login = new Login();
        $bdd = new BddManager();

        $login->setEmail($email);
        $login->setMdp($mdp);
        
        $userRepository = $bdd->getLoginRepository();
        $user = $userRepository -> getLogin($login);

        return $user;

    }

}
 

 
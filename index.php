<?php

session_start();
require "flight/Flight.php";
require "autoloader.php";


Flight::render('header', array('heading' => 'Hello'), 'header');
Flight::render('footer', array('tests' => 'World'), 'footer');


Flight::route('/', function(){
    
    Flight::render('cool');
});

Flight::route('/Accueil', function(){
    Flight::render('Accueil');

});

Flight::route('/serviceInscription', function(){

    include "service/serviceinscription.php";

    
//     $service = new loginService();
//     $service->setParams(Flight::request()->data->getData());
//     $service->launchControls();
//     if($service->getError()){
//         $_SESSION['erreur']=$service->getError();
//         Flight::redirect('/login');
//     }
//     Flight::redirect('accueil');
});
Flight::route('/serviceconnexion', function(){

    $service = new serviceconnexion($_POST);
    $user = $service->login();

    if($user) {
        $_SESSION['user']= $user;
        Flight::redirect('Cool');
    }
    else {
        Flight::redirect('Accueil'); 
    }
    
    // Flight::redirect('/cool');
    
    // $service = new loginService();
    // $service->setParams(Flight::request()->data->getData());
    // $service->launchControls();
    // if($service->getError()){
    //     $_SESSION['erreur']=$service->getError();
    //     Flight::redirect('/login');
    // }
    // Flight::redirect('accueil');
});
Flight::route('/servicedeco', function(){

    include "service/servicedeco.php";

    
//     $service = new loginService();
//     $service->setParams(Flight::request()->data->getData());
//     $service->launchControls();
//     if($service->getError()){
//         $_SESSION['erreur']=$service->getError();
//         Flight::redirect('/login');
//     }
//     Flight::redirect('accueil');
});


Flight::route('/Messages', function(){
    
    Flight::render('Messages');

  if(empty($_SESSION['user'])){
      echo"<h2> MERCI DE TE CONNECTER  </h2>";
  }

});

Flight::route('/creeruneannonce', function(){
    Flight::render('creeruneannonce');
});

Flight::route('/cool', function(){
    
    Flight::render('cool');

});

Flight::route('/mesreservation', function(){
    
    Flight::render('mesreservation');

});
Flight::route('/modifier/@id', function($id){
    
    Flight::render('modifier', array("id" => $id));

});
Flight::route('/servicedeco', function(){

    include "service/servicedeco.php";

    

});
Flight::route('/servicefavoris', function(){

    include "service/servicefavoris.php";

    

});

Flight::route('/serviceannonce', function(){

    include "service/serviceannonce.php";

    

});
Flight::route('/servicemodifier', function(){

    include "service/servicemodifier.php";

    

});

Flight::route('/servicesuppr', function(){

    include "service/servicesuppr.php";
    Flight::redirect('cool');

    

});

Flight::route('/servicereservation', function(){

    include "service/servicereservation.php";
    Flight::redirect('cool');

    

});


Flight::route('/mesannonces', function(){
    
    Flight::render('mesannonces');
    if(empty($_SESSION['user'])){
      echo"<h2> MERCI DE TE CONNECTER  </h2>";
  }

});

Flight::route('/annonce/@id', function($id){
    
    Flight::render('annonce', array("id" => $id));

});

Flight::route('/servicecommentaire', function(){

    include "service/servicecommentaire.php";
   Flight::redirect('cool');

    

});
Flight::route('/servicemessage', function(){

    include "service/servicemessage.php";
   

    

});

// Flight::route('/sign', function(){
//     Flight::render('sign');
// });

// Flight::route('POST /registerService', function(){
//     unset($_SESSION['erreur']);
//     $service = new registerService();
   
// });

Flight::start();
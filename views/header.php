<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>

    <div id="menu"> 
  
        <h4><a href="/Louemonappart/cool"> Accueil </a></h4>
        
        <h4><a href="/Louemonappart/accueil"> Se connecter/s'inscrire </a></h4>  
 
   
     <?php
         if(!empty($_SESSION['user'])){
echo"  

<h4><a href='/Louemonappart/mesreservation'> Mes reservations </a></h4> 
        <h4><a href='/Louemonappart/creeruneannonce'> Creer une annonce </a></h4>
        
        <h4><a href='/Louemonappart/mesannonces'> Mes annonces </a></h4> 
<form action='/Louemonappart/servicedeco' method='post'>
    <input type='submit' value='deconnexion'>
    </form>";
}
    ?>
    
    

   
</div>
    

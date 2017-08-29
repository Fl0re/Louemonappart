<?php echo $header ?>
 <?php

 if(!empty($_SESSION['user']['id'])){
 $bdd = new BddManager();
 
  $annonceRepository = $bdd->getAnnonceRepository();
  $annonceRepositorys = $annonceRepository -> selectReservationByLocataireId($_SESSION['user']['id']);


?>  <?
foreach ($annonceRepositorys as $annonceRepository){

   echo"<section id='reservation'>";
echo "<h2>". $annonceRepository->getTitre(). "</h2>";

    echo "<section id='annonce'>";
    // echo "<h3> TITRE </h3>";
    echo "<h3> <a href='annonce/".$annonceRepository->getId()."' >". $annonceRepository->getTitre(). "</a> </h3> ";

    echo "<p class='info'> ".$annonceRepository->getVille()."</p> ";
    
    echo "<p class='info'>".$annonceRepository->getTarif()."</p>";
   
    echo "<p class='info'> ".$annonceRepository->getPropriete()."</p> ";
    
    echo"<img src='".$annonceRepository->getPhoto_1()."' style='height:300px; width:500px;'>";
    echo"</section>";

 

}
 }
       

  ?>
</section>

    
<?php echo $footer ?>
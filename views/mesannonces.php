<?php echo $header ?>

<h1> Mes annonces </h1>


 <?php

 if(!empty($_SESSION['user']['id'])){
 $bdd = new BddManager();
 
  $annonceRepository = $bdd->getAnnonceRepository();
  $annonceRepositorys = $annonceRepository -> selectAnnoncesByInscriptionId($_SESSION['user']['id']);


?>  <?
foreach ($annonceRepositorys as $annonceRepository){

   

    // echo "<h3> TITRE </h3>";
    echo "<section id='mesannonces'>
    <form action='servicesuppr' method='POST'>";
    echo "<input type='submit' value='X'>";
    echo"<input type='hidden' name='id' value=".$annonceRepository->getId()." />";
    echo "</form>";
    echo"<p> <a href='modifier/".$annonceRepository->getId()."'> Modifier </a> </p>";
      echo "<h3> <a href='annonce/".$annonceRepository->getId()."' >". $annonceRepository->getTitre(). "</a> </h3> ";

    echo "<p> VILLE:".$annonceRepository->getVille()."</p> ";
    
    echo "<p>TARIF:".$annonceRepository->getTarif()."</p> </section>";
   
    // echo "<p> TYPE DE PROPRIETE :".$annonceRepository->getPropriete()."</p>";
    
    // echo"<p> superficie:". $annonceRepository->getSuperficie()."</p>";
    
    // echo "<p> dispo:".$annonceRepository->getDispo_debut()."</p>";
  
    // echo"<p> fin de dispo:". $annonceRepository->getDispo_fin()."</p>";
    
    // echo "<p> description". $annonceRepository->getDescription()."</p>";
    // echo"</section>";

 

}
 }
       

  ?>
</section>

    
<?php echo $footer ?>
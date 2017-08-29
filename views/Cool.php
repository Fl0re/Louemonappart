<?php echo $header ?>

    <?php
 $bdd = new BddManager();
      $annonce = new Annonce();
      
  $annonceRepository = $bdd->getAnnonceRepository();
  $annonceRepositorys = $annonceRepository -> selectAnnonces();
  
?> <section id="annonces"><?
foreach ($annonceRepositorys as $annonceRepository){

   
    echo "<section id='annonce'>";
    // echo "<h3> TITRE </h3>";
    echo "<h3> <a href='annonce/".$annonceRepository->getId()."' >". $annonceRepository->getTitre(). "</a> </h3> ";

    echo "<p class='info'> ".$annonceRepository->getVille()."</p> ";
    
    echo "<p class='info'>".$annonceRepository->getTarif()."</p>";
   
    echo "<p class='info'> ".$annonceRepository->getPropriete()."</p> ";
    
    echo"<img src='".$annonceRepository->getPhoto_1()."' style='height:300px; width:500px;'>";
    // echo"<h3> Superficie </h3>";
    // echo"<p>". $annonceRepository->getSuperficie()."</p>";
    // echo"<h3> Debut de disponibilté </h3>";
    // echo "<p>".$annonceRepository->getDispo_debut()."</p>";
    // echo"<h3> fin de disponibilté </h3>";
    // echo"<p>". $annonceRepository->getDispo_fin()."</p>";
    // echo"<h3> description </h3>";
    // echo "<p>". $annonceRepository->getDescription()."</p>";
    echo"</section>";

  echo"<br><br>";

}


  ?>
</section>
    
<?php echo $footer ?>

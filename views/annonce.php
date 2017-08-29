<?php echo $header ?>


<section id="fondannonce">


    <?php
 $bdd = new BddManager();
     
      
  $annonceRepository = $bdd->getAnnonceRepository();
  $annonce = $annonceRepository -> getAnnonceById($id);
  
?>
<h1> Annonce </h1>
<section id="annoncebyidparent">
<?
 
    if($annonce->getETat()==true){
    
echo"<h2 class='h2'> Ce bien est déjà loué </h2>";}
?>

<h2 class='h2'><a class='h2' href="#avis"> Avis / </a></h2> <br>
<h2 class='h2'> <a class='h2' href="../Messages"> Contacter le loueur. </a> </h2>
<?php

$AnnonceRepository = $bdd->getAnnonceRepository();
$annonce= $annonce= $AnnonceRepository -> getAnnonceById($id);
if(!empty($_SESSION['user']['id'])){
    if($annonce->getETat()==false){
   echo" <form action='/Louemonappart/servicefavoris' method='post'>";
   echo"<input type='submit' value='<3'> 
   <input type='hidden' value='".$id."' name='id'>
   </form>";

echo"<form action='/Louemonappart/servicereservation' method='post'>
<input type='submit' value='RESERVER '>
<input type='hidden' value='".$id."' name='id'>
</form>";}}
    echo "<div id='annoncebyid'>";
    // echo "<h3> TITRE </h3>";
    echo "<h2>". $annonce->getTitre(). "</h2>";

    echo "<h3> Ville </h3> <p>".$annonce->getVille()."</p>";
    
    echo "<h3> Tarif </h3> <p>".$annonce->getTarif()."</p>";
   
    echo "<h3> Type de propriété </h3> <p>".$annonce->getPropriete()."</p>";
    echo"<h3> Superficie </h3>";
    echo"<p>". $annonce->getSuperficie()."</p>";
    echo"<h3> Debut de disponibilté </h3>";
    echo "<p>".$annonce->getDispo_debut()."</p>";
    echo"<h3> fin de disponibilté </h3>";
    echo"<p>". $annonce->getDispo_fin()."</p>";
    echo"<h3> description </h3>";
    echo "<p>". $annonce->getDescription()."</p>";
    echo"<img src='".$annonce->getPhoto_1()."' style='height:600px; width:1000px;'>";
    echo"<img src='".$annonce->getPhoto_2()."' style='height:600px; width:1000px;'>";
    echo"<img src='".$annonce->getPhoto_3()."' style='height:600px; width:1000px;'>";
    


  ?>
<h3 id="avis"> laissez un commentaires </h3>
<form action="../servicecommentaire" method="post"> 
    <textarea type="text" name="description"> </textarea>
       <?php
    echo"<input type='hidden' value='".$id."' name='id'>"
?>
    <input type="submit" value="envoyer !">
 
    </form>

<h3> <a href="../Messages"> Contacter le loueur. </a> </h3>
    
 
    <?php
 $bdd = new BddManager();
     
      
  $commentaireRepository = $bdd->getcommentaireRepository();
  $commentaireRepositorys = $commentaireRepository -> selectcommentairebyannonce($id);
  

foreach ($commentaireRepositorys as $commentaireRepository){

   
 
    // echo "<h3> TITRE </h3>";
   
    echo "<br>". $commentaireRepository->getDescription();

  

}
echo"</div>";
  ?>
</section>
</section>
<?php echo $footer ?>
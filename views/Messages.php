<?php echo $header ?>

<?

if(!empty($_SESSION['user'])){


    echo"<h1> Messages </h1>

    <form action='servicemessage' method='post'>
    <input type='text' name='textes'>
    <input type='submit' value='valider'>
    </form>";
}



?>

<?php echo $footer ?>

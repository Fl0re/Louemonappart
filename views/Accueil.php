<?php echo $header ?>


<section id="formuser">
    <div>
            
            <form action="serviceinscription" method="post">
            <h2> inscription</h2> 
                <label>Prénom</label> <input type="text" name="prenom"/>
                <label> Nom </label> <input type="text" name="nom" />
                <label> Email </label> <input type="text" name="email" />
                <label> Mot de passe </label> <input type="password" name="mdp" />
                <input type="submit" value="valider"> 
            </form>

    </div>
    </div>
           
            <form action="serviceconnexion" method="post">
            
             <h2> connexion </h2>
                <label> Email </label> <input type="text" name="email" />
                <label> Mot de passe </label> <input type="password" name="mdp"/>
                <input type="submit" value="valider">
            </form>
    </div>
</section>    
<?php echo $footer ?>
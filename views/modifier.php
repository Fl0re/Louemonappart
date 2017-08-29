<?php echo $header ?>
 <h2> inscription</h2>
    <form action="../servicemodifier" method="post">
    
     <label>Statut</label>
        <select name="statut">
            <option value="libre">Libre </option>
            <option value="Occupé">Occupé </option>
        </select>
       
        <label>dispo_debut</label> <input type="date" name="dispo_debut"/>
        <label>dispo_fin</label> <input type="date" name="dispo_fin"/>
         <label> Description </label> <textarea id="description" type="text" name="description">
        </textarea> <br>
        <label > photo 1 </label>
        <input type="file" name="photo_1" />
         <label > photo 2 </label>
         <input type="file" name="photo_2" />
          <label > photo 3 </label>
          <input type="file" name="photo_3" />
      
        <input type="submit" value="valider">
    </form>
    
<?php echo $footer ?>
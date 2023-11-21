<div id="contenu">
      <h2>Mes fiches de frais</h2>
      <h3>Mois </h3>
      <form action="index.php?uc=cumulfrais&action=voirfraisid" method="post">
      <div class="corpsForm">
         
      <p>
	 
      <label for="typeforfait" accesskey="n">type de forfait  </label>
        <select id="identifiant" name="id">
            <?php
			foreach ($lesid as $unid)
			{
			    $id = $unid['id'];

      ?><option selected value="<?php echo $id ?>"><?php echo $id?></option>
				<?php 
				}
           
		   ?>    
            
        </select>
      </p>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
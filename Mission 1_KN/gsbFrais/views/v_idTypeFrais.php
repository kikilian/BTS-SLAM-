<div id="contenu">
      <h2>Etat de tout les frais par visiteur</h2>
      <h3>Mois </h3>
      <form action="index.php?uc=cumulfrais&action=voirTypeFrais" method="post">
      <div class="corpsForm">
         
      <p>
	 
      <label for="typeforfait" accesskey="n">Visiteur </label>
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
      <p>
	 
        <label for="typeforfait" accesskey="n">Type de forfait  </label>
        <select id="typeforfait" name="tfrais">
            <?php
			foreach ($typeFraiss as $unfrais)
			{
			    $frais = $unfrais['id'];

      ?><option selected value="<?php echo $frais ?>"><?php echo $frais?></option>
				<?php 
				}
           
		   ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
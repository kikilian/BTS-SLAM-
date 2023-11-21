<div id="contenu">
      <h2>Cumul des frais</h2>
      <h3>Mois </h3>
      <form action="index.php?uc=cumulfrais&action=voirCumulFrais" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </p>
      <p>
	 
        <label for="typeforfait" accesskey="n">type forfait  </label>
        <select id="typeforfait" name="tfrais">
            <?php
			foreach ($typeFrais as $unfrais)
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

<h3>Suivi des cumuls de frais par mois <?php echo $numMois."-".$numAnnee?> : 
    </h3>
    <div class="encadre">
    <p>
        Etat  <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant <?php echo $montantValide?>
              
                     
    </p>
  	
  	<table class="listeLegere">
  	   <caption> hors forfait -<?php echo $nbJustificatifs ?> justificatifs 
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>                
             </tr>
        <?php      
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
             </tr>
        <?php 
          }
		?>
    </table>
  </div>

 














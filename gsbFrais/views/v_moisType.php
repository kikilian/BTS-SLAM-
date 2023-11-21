<?php include_once 'v_afficherMois.php';?>
<h3 class="align-center">Fiche du cumule des frais du mois : </h3>
    <div class="encadre">
    <table class="listeLegere">
             <tr>
                <th class='nom'> Étape: </th>   
                <th class='prenom'> Frais Kilométré:</th>   
                <th class='montant'>Etape </th> 
                <th class='mois'> Repas Midi </th> 

           
             </tr>
        <?php    foreach ( $montant as $unMontant ): ?>
            <tr>
            <tr>
                <th class='nom'><?=$unMontant['ETP']?> </th>   
                <th class='prenom'> <?=$unMontant['KM']?></th>   
                <th class='montant'><?=$unMontant['NUI']?></th> 
                <th class='mois'> <?=$unMontant['REP']?> </th> 
           </tr>
           <?php endforeach?>
          
    </table>
  </div>
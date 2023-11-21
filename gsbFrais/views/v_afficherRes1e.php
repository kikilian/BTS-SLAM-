<?php include_once 'v_insertionform.php';?>
<h3 class="align-center">Nouvelle entrée  </h3>
    <div class="encadre">
    <table class="listeLegere">
             <tr>
                <th class='nom'> Visiteur: </th>   
                <th class='prenom'> Type de frais:</th>   
                <th class='montant'>Quantité: </th> 
                <th class='mois'> Mois: </th>

           
             </tr>
        <?php    foreach ( $montant as $unMontant ): ?>
            <tr>
              <td><?=$unMontant['idVisiteur']?></td>
              <td><?=$unMontant['idFraisForfait']?></td>
              <td><?=$unMontant['quantite']?></td>
              <td><?=$unMontant['mois']?></td>
           </tr>
           <?php endforeach?>
          
    </table>
  </div>
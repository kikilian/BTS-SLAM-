<?php include_once 'v_idtype.php';?>
<h3 class="align-center">Fiche du cumule des frais du mois : </h3>
    <div class="encadre">
    <table class="listeLegere">
             <tr>
                <th class='nom'> Visiteur </th>   
                <th class='prenom'> Type de frais</th>   
                <th class='montant'>Nom </th> 
                <th class='mois'> Prénom </th>
                <th class='montant'> Somme</th> 

           
             </tr>
        <?php    foreach ( $montant as $unMontant ): ?>
            <tr>
              <td><?=$unMontant['idVisiteur']?></td>
              <td><?=$unMontant['idFraisForfait']?></td>
              <td><?=$unMontant['nom']?></td>
              <td><?=$unMontant['prenom']?></td>
              <td><?=$unMontant['somme']?></td>
           </tr>
           <?php endforeach?>
          
    </table>
  </div>
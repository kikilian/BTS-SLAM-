<?php include_once 'v_fraisParId.php';?>
<h3 class="align-center">Fiche du cumule des frais </h3>
    <div class="encadre">
    <table class="listeLegere">
             <tr>
                <th class='nom'> Visiteur </th>   
                <th class='prenom'> Etape</th>   
                <th class='montant'>Nuitée</th> 
                <th class='mois'> Frais Kilométré </th>
                <th class='mois'> Repas </th>

           
             </tr>
        <?php    foreach ( $montant as $unMontant ): ?>
            <tr>
              <td><?=$unMontant['idVisiteur']?></td>
              <td><?=$unMontant['ETP']?></td>
              <td><?=$unMontant['NUI']?></td>
              <td><?=$unMontant['KM']?></td>
              <td><?=$unMontant['REP']?></td>
           </tr>
           <?php endforeach?>
          
    </table>
  </div>
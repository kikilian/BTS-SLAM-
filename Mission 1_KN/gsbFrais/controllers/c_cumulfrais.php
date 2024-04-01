<?php
/** @var PdoGsb $pdo */
include 'views/v_sommaire.php';
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'selectionnerMois':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
	
        $lesforfaits=$pdo->getListeTypeForfait();
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
        $lesforfaits=$pdo->getListeTypeForfait();
		include("views/v_cumulfrais.php");
		break;

	}

	case 'cumulfrais':{
        $typeFrais=$pdo->getListeTypeForfait();
     
        $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
    
       
        include("views/v_cumulfrais.php");
        break;
    }

    case 'voirCumulFrais':{
        $typeFrais=$pdo->getListeTypeForfait();
        $leMois = $_REQUEST['lstMois'];
        $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
    
        include("views/v_cumulfrais.php");
        $idFraisForfait=$_REQUEST['tfrais'];
        $mois = $_REQUEST['lstMois'];
      
        $montant=$pdo->getlecumuldesfrais($idVisiteur,$mois,$idFraisForfait);
     
        include("views/v_voircumulfrais.php");
        break;
    }

    case 'idtypeFrais':{
        $lesid=$pdo->getIdClient();
        $typeFraiss=$pdo->getListeTypeForfait();
        include("views/v_idTypeFrais.php");
        break;
    }

    case 'voirTypeFrais':{
        $lesid=$pdo->getIdClient();
        $typeFraiss=$pdo->getListeTypeForfait();
        include("views/v_idTypeFrais.php");
        $id=$_REQUEST['id'];
        $type = $_REQUEST['tfrais'];
        $montant=$pdo->getForfaitParId($id,$type);
        include("views/v_idtype.php");
        break;
    }

    case 'selectionnerMoiss':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
	
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		include("views/v_afficherMois.php");
		break;
	}
    case 'typemois':{
        $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
        $mois = $_REQUEST['lstMois'];
        $libelle=$pdo->getLibelle();
        $montant=$pdo->getCumulParMois($mois);
        include ("views/v_moisType.php");
        break;
    }

    case 'listeId':{
        $lesid=$pdo->getIdClient();
        include("views/v_fraisParId.php");
        break;

    }

    case 'voirfraisid':{
        $lesid=$pdo->getIdClient();
        include("views/v_fraisParId.php");
        $idd=$_REQUEST['id'];
        $montant=$pdo->getFraisParId($idd);
        include("views/v_voirfraisid.php");
        break;
    }

   

   

}
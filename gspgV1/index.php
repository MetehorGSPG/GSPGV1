<?php
include("data/class.PDOgspg.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGspg::getPdoGspg();
$estConnecte = isset($_SESSION['admin']);
if(!isset($_REQUEST['uc']) || !$estConnecte){
	$_REQUEST['uc'] = 'connexion';
}
	$uc = $_REQUEST['uc'];

switch($uc){
	case 'connexion':
		include("controleurs/c_connexion.php");
		break;
	case 'stages'  :
		include("controleurs/c_stages.php");
		break;
	case 'stagiaires' :
		include("controleurs/c_stagiaires.php");
		break;
	case 'entreprises' :
		include("controleurs/c_entreprises.php");
		break;
}
include("vues/v_pied.php") ;

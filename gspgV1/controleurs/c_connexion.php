<?php
if(!isset($_REQUEST['action']))
$_REQUEST['action'] = 'demandeConnexion';

$action = $_REQUEST['action'];
switch ($action)
{
    case 'demandeConnexion' :
        include("vues/v_connexion.php");
        break;
    case 'controler'        :
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];
        $user = $pdo->getUser($login,$mdp);
        if($user == 0){
            include("vues/v_connexion.php");
            $message = "Erreur de login et/ou de mot de passe ";
            include("vues/v_message.php");
        }
        else{
            $_SESSION['admin'] = $login;
            $stages = $pdo->getStages();
            //  var_dump($stages);
            include ('vues/v_stageOption.php');    
        }
        break;
    case 'formulaire'         :
        $_SESSION['stage'] = $_POST['stageop'];
        $_SESSION['option'] = $_POST['options'];
        include ('vues/v_sommaire.php');
        break;
    case 'deconnexion'        :
            session_destroy();
            include("vues/v_connexion.php");
            $message = "Vous avez été déconnecté.";
            include("vues/v_message.php");
        break;
    case 'changerStageOuOption' :
        // include ('vues/v_sommaire.php');
        $stages = $pdo->getStages();
        include ('vues/v_stageOption.php');  
        break;
    // default : 
    //      include("vues/v_connexion.php");

}
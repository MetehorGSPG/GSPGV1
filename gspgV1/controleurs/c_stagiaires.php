<?php

if (isset($_SESSION['admin'])) {  // toujours mettre ce test en début de controleur

    $action = $_REQUEST['action'];

    switch ($action) {

        case 'afficherStagiaires':
            include('vues/v_sommaire.php');
            $stagiaires = $pdo->getStagiaires();
            include("vues/v_stagiaires.php");
            break;

        case 'ajouterStagiaires':
            include('vues/v_sommaire.php');
            include("vues/v_ajouterStagiaires.php");
            break;

        case 'enregAjout':
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $adresse = $_REQUEST['adresse'];
            $mail = $_REQUEST['mail'];
            $tel = $_REQUEST['tel'];
            $promotion = $_REQUEST['promotion'];
            $choixOption = $_REQUEST['choixOption'];
            $ok = 1;
            $msgErreurs[] = null;
            if (strlen($choixOption) != 4) {
                $msgErreurs[] = "Option non conforme";
                $ok = 0;
            }
            if (strlen($promotion) != 4) {
                $msgErreurs[] = "Promotion non conforme";
                $ok = 0;
            }
            if (strlen($tel) != 10) {
                $msgErreurs[] = "Numero de téléphone du stagiaire invalide";
                $ok = 0;
            }
            if ($ok == 0)
                include("vues/v_erreurs.php");

            else {
                $res = $pdo->ajouterStagiaires($nom, $prenom, $adresse, $mail, $tel, $promotion, $choixOption);
                if ($res != 0)
                    $message = "Stagiaire ajouté";
                else
                    $message = "Veuillez réessayer plus tard";

                include("vues/v_message.php");
            }
            include('vues/v_sommaire.php');
            include("vues/v_ajouterStagiaires.php");

            break;

        case 'modifierStagiaires':
            include('vues/v_sommaire.php');
            $id = $_REQUEST['id'];
            $stagiaire = $pdo->getStagiaireById($id);
            $nom = $stagiaire['nom'];
            $prenom = $stagiaire['prenom'];
            $adresse = $stagiaire['adresse'];
            $mail = $stagiaire['mail'];
            $tel = $stagiaire['tel'];
            $promotion = $stagiaire['promotion'];
            $choixOption = $stagiaire['choixOption'];
            include('vues/v_modifierStagiaires.php');
            break;

        case 'enregModif':
            include('vues/v_sommaire.php');
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $adresse = $_REQUEST['adresse'];
            $mail = $_REQUEST['mail'];
            $tel = $_REQUEST['tel'];
            $promotion = $_REQUEST['promotion'];
            $choixOption = $_REQUEST['choixOption'];
            $id = $_REQUEST['id'];
            $ok = 1;
            $msgErreurs[] = null;
            if (strlen($choixOption) != 4) {
                $msgErreurs[] = "Option non conforme";
                $ok = 0;
            }
            if (strlen($promotion) != 4) {
                $msgErreurs[] = "Promotion non conforme";
                $ok = 0;
            }
            if (strlen($tel) != 10) {
                $msgErreurs[] = "Numero de téléphone du stagiaire invalide";
                $ok = 0;
            }
            if ($ok == 0)
                include("vues/v_erreurs.php");

            else {
                $res = $pdo->majStagiaires($id, $nom, $prenom, $adresse, $mail, $tel, $promotion, $choixOption);
                if ($res != 0)
                    $message = "Mise à jour effectuée";
                else
                    $message = "Veuillez réessayer plus tard";
                include("vues/v_message.php");
            }

            include('vues/v_modifierStagiaires.php');
    }
} else // il n'est pas connecté

    include("vues/v_connexion.php");

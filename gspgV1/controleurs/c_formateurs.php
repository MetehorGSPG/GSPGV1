<?php

if (isset($_SESSION['admin'])) {  // toujours mettre ce test en début de controleur

    $action = $_REQUEST['action'];

    switch ($action) {

        case 'afficherFormateurs':
            include('vues/v_sommaire.php');
            $formateurs = $pdo->getFormateurs();
            include("vues/v_formateurs.php");
            break;

        case 'ajouterFormateurs':
            include('vues/v_sommaire.php');
            include("vues/v_ajouterFormateurs.php");
            break;

        case 'enregAjout':
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $mail = $_REQUEST['mail'];
            $tel = $_REQUEST['tel'];
            $ok = 1;
            $msgErreurs[] = null;
            if (strlen($tel) != 10) {
                $msgErreurs[] = "Numero de téléphone du formateur invalide";
                $ok = 0;
            }
            if ($ok == 0)
                include("vues/v_erreurs.php");

            else {
                $res = $pdo->ajouterFormateurs($nom, $prenom, $mail, $tel);

                if ($res != 0)
                    $message = "Formateur ajouté";
                else
                    $message = "Veuillez réessayer plus tard";

                include("vues/v_message.php");
            }
            include('vues/v_sommaire.php');
            include("vues/v_ajouterFormateurs.php");

            break;

        case 'modifierFormateurs':
            include('vues/v_sommaire.php');
            $id = $_REQUEST['id'];
            $formateur = $pdo->getFormateurById($id);
            $nom = $formateur['nom'];
            $prenom = $formateur['prenom'];
            $mail = $formateur['mail'];
            $tel = $formateur['tel'];
            include('vues/v_modifierFormateurs.php');
            break;

        case 'enregModif':
            include('vues/v_sommaire.php');
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $mail = $_REQUEST['mail'];
            $tel = $_REQUEST['tel'];
            $id = $_REQUEST['id'];
            $ok = 1;
            $msgErreurs[] = null;
            if (strlen($tel) != 10) {
                $msgErreurs[] = "Numero de téléphone du formateur invalide";
                $ok = 0;
            }
            if ($ok == 0)
                include("vues/v_erreurs.php");

            else {
                $res = $pdo->majFormateurs($id, $nom, $prenom, $mail, $tel);

                if ($res != 0)
                    $message = "Mise à jour effectuée";
                else
                    $message = "Veuillez réessayer plus tard";

                include("vues/v_message.php");
            }
            include('vues/v_modifierFormateurs.php');
            break;
    }
} else // il n'est pas connecté

    include("vues/v_connexion.php");

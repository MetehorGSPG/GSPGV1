<?php

if (isset($_SESSION['admin'])) {  // toujours mettre ce test en début de controleur

    $action = $_REQUEST['action'];

    switch ($action) {

        case 'afficherEntreprises':
            include('vues/v_sommaire.php');
            $entreprises = $pdo->getEntreprises();
            include("vues/v_entreprises.php");
            break;

        case 'ajouterEntreprises':
            include('vues/v_sommaire.php');
            include("vues/v_ajouterEntreprises.php");
            break;

        case 'enregAjout':
            $nom = $_REQUEST['nom'];
            $adresse = $_REQUEST['adresse'];
            $ville = $_REQUEST['ville'];
            $mail = $_REQUEST['mail'];
            $tel = $_REQUEST['tel'];
            $nomTuteurStage = $_REQUEST['nomTuteurStage'];
            $telTuteurStage = $_REQUEST['telTuteurStage'];
            $ok = 1;
            $msgErreurs[] = null;
            if (strlen($tel) != 10) {
                $msgErreurs[] = "Numero de téléphone de l'entreprise invalide";
                $ok = 0;
            }
            if (strlen($telTuteurStage) != 10) {
                $msgErreurs[] = "Numero de téléphone du tuteur invalide";
                $ok = 0;
            }
            if ($ok == 0)
                include("vues/v_erreurs.php");

            else {
                $res = $pdo->ajouterEntreprises($nom, $adresse, $ville, $mail, $tel, $nomTuteurStage, $telTuteurStage);

                if ($res != 0)
                    $message = "Entreprise ajoutée";
                else
                    $message = "Veuillez réessayer plus tard";

                include("vues/v_message.php");
            }
            include('vues/v_sommaire.php');
            include("vues/v_ajouterEntreprises.php");

            break;

        case 'modifierEntreprises':
            include('vues/v_sommaire.php');
            $id = $_REQUEST['id'];
            $entreprise = $pdo->getEntrepriseById($id);
            $nom = $entreprise['nom'];
            $adresse = $entreprise['adresse'];
            $ville = $entreprise['ville'];
            $mail = $entreprise['mail'];
            $tel = $entreprise['tel'];
            $nomTuteurStage = $entreprise['nomTuteurStage'];
            $telTuteurStage = $entreprise['telTuteurStage'];
            include('vues/v_modifierEntreprises.php');
            break;

        case 'enregModif':
            include('vues/v_sommaire.php');
            $nom = $_REQUEST['nom'];
            $adresse = $_REQUEST['adresse'];
            $ville = $_REQUEST['ville'];
            $mail = $_REQUEST['mail'];
            $tel = $_REQUEST['tel'];
            $nomTuteurStage = $_REQUEST['nomTuteurStage'];
            $telTuteurStage = $_REQUEST['telTuteurStage'];
            $id = $_REQUEST['id'];
            $res = $pdo->majEntreprises($id, $nom, $adresse, $ville, $mail, $tel, $nomTuteurStage, $telTuteurStage);
            if ($res != 0)
                $message = "Mise à jour effectuée";
            else
                $message = "Veuillez réessayer plus tard";
            include("vues/v_message.php");
            include('vues/v_modifierEntreprises.php');

            break;
    }
} else // il n'est pas connecté

    include("vues/v_connexion.php");

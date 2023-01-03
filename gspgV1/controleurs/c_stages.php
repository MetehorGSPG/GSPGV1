<?php

if (isset($_SESSION['admin'])) {  // toujours mettre ce test en début de controleur

    $action = $_REQUEST['action'];

    switch ($action) {

        case 'afficherStages':
            include('vues/v_sommaire.php');
            $annee = date('Y');
            $stages = $pdo->getVueStages($annee);
            include("vues/v_stages.php");
            break;

        case 'majStages':
            include('vues/v_sommaire.php');
            $annee = date('Y');
            $stages = $pdo->getVueStages($annee);
            $promotion = $_REQUEST['promotion'];
            $debut1 = $_REQUEST['dateDebut1'];
            $fin1 = $_REQUEST['dateFin2'];
            $debut2 = $_REQUEST['dateDebut3'];
            $fin2 = $_REQUEST['dateFin4'];
            $pdo->majStages($debut1, $fin1, $debut2, $fin2, $promotion);
            
            include("vues/v_stages.php");
            break;

        case 'ajouterStages':
            include('vues/v_sommaire.php');
            include('vues/v_ajouterStages.php');
            break;

        case 'enregAjout'   :
            $libelle = $_REQUEST['libelle'];
            $date1 = $_REQUEST['dateDebut'];
            $date2 = $_REQUEST['dateFin'];
            $promotion = $_REQUEST['promotion'];
            $numero = $_REQUEST['numero'];
            $ok = 1;
            $msgErreurs[] = null;
            if (strlen($libelle) != 6) {
                $msgErreurs[] = "Libelle invalide";
                $ok = 0;
            }
            if ($date2 < $date1) {
                $msgErreurs[] = "Année non conforme";
                $ok = 0;
            }
            if ($ok == 0)
                include("vues/v_erreurs.php");

            else {
                $res = $pdo->ajouterStages($libelle, $date1, $date2, $promotion, $numero);

                if ($res != 0)
                    $message = "Stage ajouté";
                else
                    $message = "Veuillez réessayer plus tard";

                include("vues/v_message.php");
            }
            include('vues/v_sommaire.php');
            include("vues/v_ajouterStages.php");

            break;
    }
} else // il n'est pas connecté

    include("vues/v_connexion.php");

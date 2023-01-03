<?php

if (isset($_SESSION['admin'])) {  // toujours mettre ce test en début de controleur

    $action = $_REQUEST['action'];

    switch ($action) {

        case 'afficherConventions':
            include('vues/v_sommaire.php');
            $libelle = $_SESSION['stage'];
            $option = $_SESSION['option'];
            $existeConventions = $pdo->stagiaireConventions($libelle,$option);
            $annee = date('Y');
            $sansConventions = $pdo->stagiaireSansConventions($annee, $libelle, $option);
            include("vues/v_conventions.php");
            break;

        case 'ajouterConventions':
            include('vues/v_sommaire.php');
            $stage = $_SESSION['stage'];
            $entreprises = $pdo->getEntreprises();
            $formateurs = $pdo->getFormateurs();
            $stages = $pdo->getStages();
            $id = $_REQUEST['id'];
            $stagiaire = $pdo->getStagiaireById($id);
            $nomStagiaire = $stagiaire['nom'];
            include("vues/v_ajouterConventions.php");
            break;

        case 'enregAjout':
            include('vues/v_sommaire.php');
            $id = $_REQUEST['idStagiaire'];
            $stagiaire = $pdo->getStagiaireById($id);
            $nomStagiaire = $stagiaire['nom'];
            $idEntreprise = $_REQUEST['entreprise'];
            $idFormateur = $_REQUEST['formateur'];
            $idStage = $_SESSION['stage'];
            $idStagiaire = $_REQUEST['idStagiaire'];
            $res = $pdo->ajouterConvention($idStagiaire, $idEntreprise, $idFormateur, $idStage);
            // var_dump($res);
            if ($res != null)
                $message = "Convention ajoutée";
            else
                $message = "Veuillez réessayer plus tard";

            include("vues/v_message.php");
           
            include("vues/v_ajouterConventions.php");
            break;

        case 'modifierConventions':
            include('vues/v_sommaire.php');
            $entreprises = $pdo->getEntreprises();
            $formateurs = $pdo->getFormateurs();
            $id = $_REQUEST['id'];
            $convention = $pdo->getConventionById($id);
            $idEntreprise = $convention['idEntreprise'];
            $idFormateur = $convention['idFormateur']; 
            include('vues/v_modifierConventions.php');
            break;
        
        case 'enregModif' :
            break;
    }
} else // il n'est pas connecté

    include("vues/v_connexion.php");

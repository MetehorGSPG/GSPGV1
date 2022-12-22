<?php

/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application GspgLes attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoGspg
{
	private static $serveur = 'mysql:host=localhost';
	private static $bdd = 'dbname=gspg';
	private static $user = 'root';
	private static $mdp = 'root';
	private static $monPdo;
	private static $monPdoGspg = null;


	/**
	 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
	 * pour toutes les méthodes de la classe
	 */
	private function __construct()
	{
		self::$monPdo = new PDO(self::$serveur . ';' . self::$bdd, self::$user, self::$mdp);
		self::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct()
	{
		self::$monPdo = null;
	}
	/**
	 * Fonction statique qui crée l'unique instance de la classe
	 *
	 * Appel : $pdo = PdoGspg::getPdoGspg();
	 * @return l'unique objet de la classe PdoGspg
	 */
	public  static function getPdoGspg()
	{
		if (self::$monPdoGspg == null) {
			self::$monPdoGspg = new PdoGspg();
		}
		return self::$monPdoGspg;
	}

	/**
	 * Retourne l'utilisateur connecté sous forme d'un tableau associatif
	 *
	 * @return l'utisateur 
	 */
	public function getUser($login, $mdp)
	{
		$req = "select * from gestionnaire where login = '" . $login . "' and mdp = '" . $mdp . "'";
		$res =  self::$monPdo->query($req);
		$ligne = $res->fetch();
		return $ligne;
	}

	// Cas STAGES --------------------------------------------

	public function getStages()
	{
		$req = "select id,libelle from stage";
		$res = self::$monPdo->query($req);
		$lignes = $res->fetchAll();
		return $lignes;
	}

	public function getVueStages($promotion)
	{
		$req = "select libelle, dateDebut, dateFin, promotion, numero from stage WHERE promotion ='" . $promotion . "'";
		$res = self::$monPdo->query($req);
		$lignes = $res->fetchAll();
		return $lignes;
	}

	public function majStages($debut1, $debut2, $fin1, $fin2, $promotion)
	{
		$req = "update stage set dateDebut ='" . $debut1 . "' where promotion ='" . $promotion . "' and numero = '1'";
		$req2 = "update stage set dateFin ='" . $debut2 . "' where promotion ='" . $promotion . "' and numero = '1'";
		$req3 = "update stage set dateDebut ='" . $fin1 . "' where promotion ='" . $promotion . "' and numero = '2'";
		$req4 = "update stage set dateFin ='" . $fin2 . "' where promotion ='" . $promotion . "' and numero = '2'";
		$res = self::$monPdo->exec($req);
		$res = self::$monPdo->exec($req2);
		$res = self::$monPdo->exec($req3);
		$res = self::$monPdo->exec($req4);
	}



	public function ajouterStages($libelle, $date1, $date2, $promotion, $numero)
	{
		$req = "insert into stage (libelle,dateDebut,dateFin,promotion,numero) VALUES('$libelle','$date1','$date2','$promotion','$numero')";
		$res = self::$monPdo->query($req);
		return $res;
	}

	// Cas STAGIAIRES --------------------------------------------

	public function getStagiaires()
	{
		$req = "select * from stagiaire";
		$res = self::$monPdo->query($req);
		$lignes = $res->fetchAll();
		return $lignes;
	}

	public function ajouterStagiaires($nom, $prenom, $adresse, $mail, $tel, $promotion, $choixOption)
	{
		$req = "insert into stagiaire (nom,prenom,adresse,mail,tel,promotion,choixOption) VALUES('$nom','$prenom','$adresse','$mail','$tel','$promotion','$choixOption')";
		$res = self::$monPdo->query($req);
		return $res;
	}

	public function getStagiaireById($id)
	{
		$req = "select id,nom,prenom,adresse,mail,tel,promotion,choixOption from stagiaire WHERE id ='" . $id . "'";
		$res = self::$monPdo->query($req);
		$ligne = $res->fetch();
		return $ligne;
	}

	public function majStagiaires($id, $nom, $prenom, $adresse, $mail, $tel, $promotion, $choixOption)
	{
		$req = "update stagiaire set nom = '$nom', prenom = '$prenom', adresse = '$adresse', mail = '$mail', tel = '$tel', promotion = '$promotion', choixOption = '$choixOption' ";
		$req .= "where id = '$id'";
		$res =  self::$monPdo->exec($req);
		return $res;
	}


	// Cas ENTREPRISES --------------------------------------------

	public function getEntreprises()
	{
		$req = "select * from entreprise";
		$res = self::$monPdo->query($req);
		$lignes = $res->fetchAll();
		return $lignes;
	}

	public function ajouterEntreprises($nom, $adresse, $ville, $mail, $tel, $nomTuteurStage, $telTuteurStage)
	{
		$req = "insert into entreprise (nom,adresse,ville,mail,tel,nomTuteurStage,telTuteurStage) VALUES('$nom', '$adresse', '$ville', '$mail', '$tel', '$nomTuteurStage', '$telTuteurStage')";
		$res = self::$monPdo->query($req);
		return $res;
	}

	public function getEntrepriseById($id)
	{
		$req = "select id,nom,adresse,ville,mail,tel,nomTuteurStage,telTuteurStage from entreprise WHERE id ='" . $id . "'";
		$res = self::$monPdo->query($req);
		$ligne = $res->fetch();
		return $ligne;
	}

	public function majEntreprises($id, $nom, $adresse, $ville, $mail, $tel, $nomTuteurStage, $telTuteurStage)
	{
		$req = "update entreprise set nom = '$nom', adresse = '$adresse', ville = '$ville', mail = '$mail', tel = '$tel', nomTuteurStage = '$nomTuteurStage', telTuteurStage = '$telTuteurStage' ";
		$req .= "where id = '$id'";
		$res =  self::$monPdo->exec($req);
		return $res;
	}

	// Cas FORMATEURS --------------------------------------------

	public function getFormateurs()
	{
		$req = "select * from formateur";
		$res = self::$monPdo->query($req);
		$lignes = $res->fetchAll();
		return $lignes;
	}

	public function ajouterFormateurs($nom, $prenom, $mail, $tel)
	{
		$req = "insert into formateur (nom,prenom,mail,tel) VALUES('$nom', '$prenom', '$mail', '$tel')";
		$res = self::$monPdo->query($req);
		return $res;
	}

	public function getFormateurById($id)
	{
		$req = "select id,nom,prenom,mail,tel from formateur WHERE id ='" . $id . "'";
		$res = self::$monPdo->query($req);
		$ligne = $res->fetch();
		return $ligne;
	}

	public function majFormateurs($id,$nom, $prenom, $mail, $tel)
	{
		$req = "update formateur set nom = '$nom', prenom = '$prenom', mail = '$mail', tel = '$tel' ";
		$req .= "where id = '$id'";
		$res =  self::$monPdo->exec($req);
		return $res;
	}
} // fin classe
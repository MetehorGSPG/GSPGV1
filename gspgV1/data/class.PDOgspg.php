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
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gspg';   		
      	private static $user='root' ;    		
		private static $mdp='root' ;
		private static $monPdo;
		private static $monPdoGspg = null;
		
		
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
        self::$monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp); 
        self::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		self::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $pdo = PdoGspg::getPdoGspg();
 * @return l'unique objet de la classe PdoGspg
 */
	public  static function getPdoGspg(){
		if(self::$monPdoGspg == null){
			self::$monPdoGspg = new PdoGspg();	}
		return self::$monPdoGspg ;	}

/**
 * Retourne l'utilisateur connecté sous forme d'un tableau associatif
 *
 * @return l'utisateur 
*/        
    public function getUser($login,$mdp){
            $req = "select * from gestionnaire where login = '" . $login . "' and mdp = '" . $mdp . "'";
            $res =  self::$monPdo->query($req);
            $ligne= $res->fetch();
            return $ligne;
        }
	
		public function getStages(){
			$req = "select id,libelle from stage";
			$res = self::$monPdo->query($req);
			$lignes= $res->fetchAll();
			return $lignes;
		}

} // fin classe
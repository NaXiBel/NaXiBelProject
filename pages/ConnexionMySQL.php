<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connexion
 *
 * @author Amélie
 */

require 'MySQLException.php'; 
class ConnexionMySQL {
    private static $instance = null; 
    private
            $hote = 'mysql-naxibel.alwaysdata.net',
            $utilisateur = 'naxibel',
            $motDePasse = 'u28ncxam', 
            $lien = '',
            $nombreRequetes = 0, 
            $nomBD = 'naxibel_bd';

    /**
     * 
     * Constructeur en private (singleton) + connexion à la base de données
     */
     private function __construct(){
        $this->lien = mysqli_connect($this->hote, $this->utilisateur, $this->motDePasse); 
                if(!$this->lien){
                    throw new MySQLException('Erreur de connexion au serveur MySQL'); 
                }
        mysqli_select_db($this->lien, $this->nomBD) 
                or die('Pb de sélection BD :'. mysql_error($lien)); 
        
    } // __construct()
    
    public static function getInstance() {
        if(is_null(self::$instance)){
            self::$instance = new ConnexionMySQL(); 
        }
        
        return self::$instance; 
    }//getInstance()
    
    public function TabResultatRequete($requeteSQL){
        $resultat = mysqli_query($this->lien, $requeteSQL); 
        $tabResultatReq = array(); 
        
        if(!$resultat){
            throw new MySQLException('Erreur de requête SQL ! '); 
        }
        
        $i = 0; 
        while($ligne = mysqli_fetch_assoc($resultat)){
            foreach($ligne as $clef => $valeur){
                $tabResultatReq[$i][$clef] = $valeur; 
            }
            ++$i; 
      
        }
        mysqli_free_result($resultat); 
        $this->nombreRequetes++; 
        return $tabResultatReq; 
        
    } // TabResultatRequete()
    
    public function ExecuteSQL($requete){
        $resultat = mysqli_query($this->lien, $requete); 
        if (!$resultat){
            throw new MySQLException('Echec de la requête SQL'); 
        }
        
        ++$this->NbRequetes; 
        $nombreLignesAffectees = mysqli_affected_rows($this->lien); 
        
        return $nombreLignesAffectees; 
        
    }//ExecuteSQL()
            
}


?>

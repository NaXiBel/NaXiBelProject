<?php
    require 'ConnexionMySQL.php'; 
    
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    
      try {
        if(isset($login) and isset($passwd)){
           
            $requete = 'SELECT Name, MotDePasse FROM USER WHERE Name = \''.$login.'\' AND MotDePasse = \''.md5($passwd).'\''; 
            $connexion = ConnexionMySQL::getInstance(); 
            $tabResultat = $connexion->TabResultatRequete($requete); 
            

            
            for ($i = 0 ; $i < count($tabResultat); ++$i){
                $utilisateur = $tabResultat[$i]['Name']; 
                $mdp = $tabResultat[$i]['MotDePasse']; 
                //echo 'Coucou '.$utilisateur.' '.$mdp;
                if ($utilisateur == $login and $mdp == md5($passwd)){
                    
                    $_SESSION['login'] = $login; 
                    $_SESSION['passwd'] = 'ok'; 
                    //header('location:panneauDeConfig.php'); 
                    echo 'Coucou isset ok - login : '.$tabResultat .' '. count($tabResultat); 
                    exit(); 
                }
            }
            
        }
        
        //header('location:Connexion.php?step=ERROR'); 
        
    } catch (MySQLException $exception){
        if(!class_exists(MySQLException)){
            require 'MySQLException.php';
        }
        echo $exception->retourneErreur(); 
    } 
?> 



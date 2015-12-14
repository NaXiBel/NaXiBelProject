
 /*if(isset($login) and isset($passwd)){
           
            $query = 'SELECT Name, MotDePasse FROM USER WHERE Name = \''.$login.'\' AND MotDePasse = \''.md5($passwd).'\''; 
            $dbHost = 'mysql-naxibel.alwaysdata.net';
            $dbLogin = 'naxibel';
            $dbPass = 'u28ncxam';
            $dbBd = 'naxibel_bd';
            $dbLink = mysqli_connect($dbHost, $dbLogin, $dbPass)
            or die('Erreur de connexion au serveur : ' .mysqli_connect_error());

            mysqli_select_db($dbLink, $dbBd)
            or die('Erreur dans la sélection de la base : '.mysqli_error($dbLink));
            
            if(!($dbResult = mysqli_query($dbLink, $query)))
            {
                echo 'Erreur dans requête<br />';
                // Affiche le type d'erreur.
                echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
                // Affiche la requête envoyée.
                echo 'Requête : ' . $query . '<br/>';
                exit();
            }


            while($dbRow = mysqli_fetch_assoc($dbResult))
            {
                $identifiant = $dbRow['Name'];
                $mdp = $dbRow['MotDePasse'];
                echo $identifiant.' ?= '.$login. ' '. $mdp .' ?= '. $passwd;
                
                

               if ($identifiant == $login && $mdp == md5($passwd))
                {
                    $_SESSION['login'] = $login;
                    $_SESSION['mdp'] = 'ok';
                    header('location:panneauDeConfig.php');
                    exit();
                    //header('location:login.php?step=ERROR');
                }


            }

            //echo 'Coucou isset ok - login : '.$tabResultat .' '. count($tabResultat); 
            /*for ($i = 0 ; $i < count($tabResultat); ++$i){
                $utilisateur = $tabResultat[$i]['Name']; 
                $mdp = $tabResultat[$i]['MotDePasse']; 
                //echo 'Coucou '.$utilisateur.' '.$mdp;
                
            }*/
            
           
        }l>
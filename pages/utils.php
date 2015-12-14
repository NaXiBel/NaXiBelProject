<?php

    require 'ConnexionMySQL.php';
    $requete = 'SELECT * FROM ARTICLES'; 
    try {
        $connexion = ConnexionMySQL::getInstance();  
        $tab = $connexion->TabResultatRequete($requete);
        for($i = 0; $i < sizeof($tab); ++$i){ ?>

            <article id ="news<?php echo $tab[$i]['ID'];?>">
                <p>
                    <?php
                        $donnees = $tab[$i]; 
                        echo htmlspecialchars($donnees['Contenu']); 
                    ?>
                </p>
            </article>
<?php
        }
   } catch (MySQLException $exception) {
        if(!class_exists(MySQLException)){
            require 'MySQLException.php';
        }
        echo $exception->retourneErreur(); 
    }
?>

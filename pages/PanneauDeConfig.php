
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
            <title>NaXiBel's site</title>
            <script type="text/javascript" src="../js/scripts.js"></script>
        </head>

        <body>
            <div id ="pageBody"> 
                <header>
                    <h1><p>NaXiBel Creations Site</p></h1>
                    <nav>
                        <a class = "boutonMenu" href="index_1.php">Page 1 </a>
                        <a class = "boutonMenu" href="index_2.php">Page 2 </a>
                        <a class = "boutonMenu" href="index_3.php">Page 3 </a>
                        <a class = "boutonMenu" href="index_4.php">Page 4 </a>
                    </nav>
                    
                </header>

                <section id ="contentConfig">
                    <a id="clickOption" href="#" onclick="deroulerContenu(this)">Rédiger une news</a> 
                    <div class="contenuCache" id="contenuDeroulant"> Coucou ! </div>
                    <a id="clickOption" href="#" onclick="deroulerContenu(this)">Gestion des histoires</a>
              
                </section>
                

                
                <footer>
                    <h3><a href = "Connexion.php">Panneau de configuration</a></h3>
                </footer>
            </div>
            
            
            
        
        
        </body>

    </html>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../css/style.php" type="text/css" media="all" />
            <title>NaXiBel's site</title>
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
                <section id ="connexionForm">
                    <form method="post" action="authentification.php">
                        <p>
                            <label>Identifiant : </label>
                            <input type="text" name="login" id="login" />
                            <br/>

                            <label>Mot de passe : </label>
                            <input type="password" name="passwd" id="passwd"/>
                            <br />

                            <input type="submit" name="ok" value="ok" />
                            <br />
                        </p>
                    </form>
                   
                </section>

            </div>

            
        
        
        </body>

    </html>
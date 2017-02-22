<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario02</title>
    </head>
    <body>
        <header>
            <aside>
                <a href="indexFormulario02.php" target="_blank" title="Formulario2"> 
                    <img src="Captura de pantalla 2016-11-18 00.29.05.png"  alt="Formulario2" title="Formulario2" height="60" width="1098" /> 
                </a>
            </aside>
            <article>
                <h1>Registrarte</h1>
            </article>
        </header>
        <div> 
            <?php
            $nom = $_GET['nom'];
            echo "Usuario: " . $nom . " ";
            ?>
        </div>
        <div>
            <?php
            $email = $_GET['email'];
            echo "Email: " . $email . "<br />";
            ?> 
        </div>
        <div> 
            <?php
            $password = $_GET['password'];
            echo "Password: " . $password . " ";
            ?>
        </div>
        <div>
            <?php
            $password2 = $_GET['password2'];
            echo "Confirmació del password: " . $password2 . "<br />";
            ?>
        </div>
        <div>
            <?php
            $transporteMasUtilizado = $_GET['transporteMasUtilizado'];
            echo "Transporte mas utilizadotilizado: ";
            foreach ($transporteMasUtilizado as $selected) {
                echo $selected . ", ";
            }
            ?>
        </div>
    </body>
</html>
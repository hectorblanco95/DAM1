<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario03</title>
    </head>
    <body>
        <header>
            <aside>
                <a href="indexFormulario02.php" target="_blank" title="Formulario2"> 
                    <img src="Captura de pantalla 2016-11-18 01.21.46.png"  alt="Formulario2" title="Formulario2" height="60" width="1098" /> 
                </a>
            </aside>
            <article>
                <h1>Registrarte</h1>
            </article>
        </header>
        <div> 
            <?php
            $nom = $_GET['nom'];
            echo "Nombre: " . $nom . " ";
            ?>
        </div>
        <div>
            <?php
            $nacimiento = $_GET['nacimiento'];
            echo "Nacimiento: " . $nacimiento . "<br />";
            ?> 
        </div>
        <div> 
            <?php
            $blog = $_GET['blog'];
            echo "Blog: " . $blog . " ";
            ?>
        </div>
        <div>
            <?php
            $marcaMobil = $_GET['marcaMobil'];
            echo "Marca Mobil: " . $marcaMobil . "<br />";
            ?>
        </div>
        <div>
            <?php
            $numeroHermanos = $_GET['numeroHermanos'];
            echo "Número de hermanos: " . $numeroHermanos . " ";
            ?>
        </div>
        <div>
            <?php
            $comidaFavorita = $_GET['comidaFavorita'];
            echo "Comida favorita: ";
            foreach ($comidaFavorita as $selected) {
                echo $selected . ", ";
            }
            ?>
        </div>
    </body>
</html>
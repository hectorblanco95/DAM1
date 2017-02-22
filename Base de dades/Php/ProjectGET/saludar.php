<html>
    <head>
        <meta charset="UTF-8">
        <title>Saludar</title>
    </head>
    <body>
        <form action="saludar.php">
            <div>
                Nombre: <input required="" type="text" placeholder="inputNombre" name="nombre"/>
            </div>
            <?php
            $nombre = $_GET['nombre'];
            echo "Hola $nombre!";
            ?>
        </form>   
    </body>
</html>
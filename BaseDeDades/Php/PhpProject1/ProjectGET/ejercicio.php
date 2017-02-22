<html>
    <head>
        <title></title>
    </head>
    <body>

        <?php
        $respuesta = $_GET['respuesta'];
        if ($respuesta == 'saludo') {
            ?>
            <form action="saludo.php">
                <div>escribe tu nombre:  <input name="nombre" type="text" value="validar"/>    <input type="submit" value="validar"/>  </div>  
                <?php
            }
            if ($respuesta == 'romanos') {
                ?>
                <form action="ejercicioromanos.php">
                    <div>Introduce un numero:  <input name="numeroenromano" type="number" min="1" max="500" value="validar"/>    <input type="submit" value="validar"/>  </div>
                    <?php
                }
                if ($respuesta == 'vida') {
                    ?>
                    <form action="ejerciciovida.php">
                        <div>Introduce fecha actual:  <input name="fechaactual" type="date" value="introducir" required/>  fecha de nacimiento:<input name="fechadenacimiento" type="date" value="introducir" required/>    <input type="submit" value="validar"/>  </div>
                        <?php
                    }
                    ?>
                    </body>
                    </html>


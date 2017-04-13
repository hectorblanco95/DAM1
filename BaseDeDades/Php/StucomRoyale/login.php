<?php
// Abrimos sesión
session_start();
require_once 'bbdd_user.php';
if (isset($_POST["login-submit"])) {
    $username = $_POST["username"];
    $pass = $_POST["password"];
    if (validateUser($username, $pass)) {
        // Ole ole! el usuario ha hecho login
        // Guardamos el username en variables de session
        $_SESSION["username"] = $username;
        // Llamamos al método que devuelve todos los datos de los usuarios
        $userData = userData($_SESSION["username"]);
        // Mientras haya datos, leemos la fila y la mostramos
        while ($fila = mysqli_fetch_array($userData)) {
            extract($fila);
            // SIEMPRE después de un extract, las variables
            // tienen el nombre de los campos de la bbdd
            $_SESSION["wins"] = $wins;
            $_SESSION["level"] = $level;
            // Guardamos los datos del username en variables de session
        }
        // Comprobamos el tipo para dirigir al user
        $tipo = getTypeByUsername($username);
        // Guardamos el tipo de usuario en la variable de sesión
        $_SESSION["tipo"] = $tipo;
        if ($tipo == 0) 
            // Dirigimos al usuario a su página
            header("Location: home_user.php");
         else if ($tipo == 1) 
            header("Location: home_admin.php");
    }  else 
        echo "<p>Usuario o contraseña incorrectos.</p>";
} 
if (isset($_POST["register-submit"])) {
    $username = $_POST["username"];
    // Comprobamos si existe un usuario con el mismo username
    if (existUser($username)) { // es lo mismo que existUser($username)==true
        echo "<p>Ya existe un usuario con ese username.</p>";
    } else {
        // Verificamos que la contraseña y la verificación son iguales
        $pass = $_POST["password"];
        $veri = $_POST["confirm-password"];
        if ($pass != $veri) 
            echo "<p>Las contraseñas no coinciden. </p>";
         else 
            // Ya está todo ok!!!! Podemos dar de alta el user :)
            insertUser($username, $pass);
            
            if (validateUser($username, $pass)) {
                // Ole ole! el usuario ha hecho login
                // Guardamos el username en variables de session
                $_SESSION["username"] = $username;
                // Llamamos al método que devuelve todos los datos de los usuarios
                $userData = userData($_SESSION["username"]);
                // Mientras haya datos, leemos la fila y la mostramos
                while ($fila = mysqli_fetch_array($userData)) {
                    extract($fila);
                    // SIEMPRE después de un extract, las variables
                    // tienen el nombre de los campos de la bbdd
                    $_SESSION["wins"] = $wins;
                    $_SESSION["level"] = $level;
                    // Guardamos los datos del username en variables de session
                }
                // Comprobamos el tipo para dirigir al user
                $tipo = getTypeByUsername($username);
                // Guardamos el tipo de usuario en la variable de sesión
                $_SESSION["tipo"] = $tipo;
                
                // Llamamos al método que devuelve los nombres de las cartas
                $cards = selectNameCards();
                $nameCards=array();
                $imageCards=array();
                // Mientras haya datos, leemos la fila y la mostramos
                while ($fila = mysqli_fetch_array($cards)) {
                    extract($fila);
                    // SIEMPRE después de un extract, las variables
                    // tienen el nombre de los campos de la bbdd
                    array_push($nameCards,$name);
                }
                $rand = array_rand($nameCards, 3);
                for($i=0;$i<3;$i++){
                    array_push($imageCards,selectImageCards($nameCards[$rand[$i]]));
                    insertDeckUser($_SESSION["username"], $nameCards[$i], $imageCards[$i]);
                }
                ?>    
                <!DOCTYPE html>
    <!-- HomePage del user -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Home Page User</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            
        </head>
        <body style="padding-top: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12 user-stats" style="width: 100%;">
                        <div class="well" style="background-image: url('img/StarburstEffectBackground.jpeg');padding: 8% 44%;background-size: 103%;background-position-x: 51%">
                            <h1 style="margin-top: -68%;text-align: center;width: 846%;color: white;background-color: red;margin-left: -373%;font-size: 39px;font-family: bungee,sans-serif;font-style: normal;font-weight: 400;text-shadow: -1px 0 1px black, 1px 0 1px black, 0 -1px 1px black, 0 4px 1px black, -2px 4px 1px black, 2px 3px 2px black;">GIFT CARDS</h1>
                            <div id="imgmid2" style="width: 365%;text-align: center;margin-left: -124%;margin-top: 41%;"></div>
                            <div id="imgmid">
                                <img onclick="addImg()" src="img/Coffre-en-or-ferme.png" style="margin-top: 76%;margin-left: -24%;">
                                <h1 style="text-align: center;color: white;font-size: 39px;font-family: bungee,sans-serif;font-style: normal;font-weight: 400;text-shadow: -1px 0 1px black, 1px 0 1px black, 0 -1px 1px black, 0 4px 1px black, -2px 4px 1px black, 2px 3px 2px black;">OPEN</h1>
                            </div>
                        </div>    
                    </div> 
                </div>  
            </div>
            <link href="cssRoyale.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript " src="jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script>
        function addImg(){
            $("#imgmid > img").remove();
            $("#imgmid > h1").remove();
            var image = $("<img src=img/CoffreGoldenChest.png style=width:250%;margin-left:-72%;margin-top:-59%;></img>").hide();
            var image2 = $("<img src=<?php echo $imageCards[0];?> style=width:30%;><img src=<?php echo $imageCards[1];?> style=width:30%;><img src=<?php echo $imageCards[2];?> style=width:30%;>").hide();
            $("#imgmid").append(image);
            $("#imgmid2").append(image2);
            image.show();
            image2.show();
        }   
        </script>
        </body>
        <footer></footer>
    </html>
        <?php
            // Dirigimos al usuario a su página
            header("refresh:14;url=home_user.php");
            }
    }
}
if (isset($_POST["modificarPass"])) {
    $username = $_SESSION["username"];
    $pass = $_POST["password"];
    // Comprobamos si existe una password con el mismo username
    if (existPass($username, $pass)) { // es lo mismo que existPass($username, $pass)==true
        // Verificamos que la contraseña y la verificación son iguales
        $pass = $_POST["newPassword"];
        $veri = $_POST["newPassword2"];
        if ($pass != $veri) 
            echo "<p>Las contraseñas no coinciden. </p>";
         else {
            // Ya está todo ok!!!! Podemos modificar la password :)
            setPass($username, $pass);
        }
    } else{
        echo "<p>Contraseña incorrecta.</p>";
    }
}
if (isset($_POST["guardarUser"])) {
    $username = $_POST["username"];
    // Comprobamos si existe un usuario con el mismo username
    if (existUser($username))  // es lo mismo que existUser($username)==true
        echo "<p>Ya existe un usuario con ese username.</p>";
     else {
        // Verificamos que la contraseña y la verificación son iguales
        $pass = $_POST["password"];
        $veri = $_POST["confirm-password"];
        if ($pass != $veri) {
            echo "<p>Las contraseñas no coinciden. </p>";
        } else {
            $type = $_POST["tipo"];
            // Ya está todo ok!!!! Podemos dar de alta el user :)
            insertUser2($username, $pass, $type);
        }
    }
}
if (isset($_POST["altaCard"])) {
    $name = ucfirst(strtolower($_POST["name"]));
    // Comprobamos si existe una carta con el mismo nombre
    if (existName($name))  // es lo mismo que existName($name)==true
        echo "<p>Ya existe una carta con ese nombre.</p>";
     else {
        $type = strtolower($_POST["type"]);
        $rarity = strtolower($_POST["rarity"]);
        $hitpoints = $_POST["hitpoints"];
        $damage = $_POST["damage"];
        $cost = $_POST["cost"];
        /*$target_dir = "https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/";
        $fotoperfil = $_FILES['image']['name']; 
        $ruta = $target_dir.$fotoperfil;

        $resultado = move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
              
              echo "Target_DIR: ".$target_dir."<br>";
            echo "Nom adjunt: ".$fotoperfil."<br>";
            echo "Ruta: ".$ruta."<br>";
            echo "Resultado: ".$resultado."<br>";*/
        
        // Ya está todo ok!!!! Podemos dar de alta la carta :)
        insertCard($name, $type, $rarity, $hitpoints, $damage, $cost, $ruta);
    }
}
if (isset($_POST["giveAwayCard"])) {
    $card = $_POST["card"];
    $user = $_POST["userName"];
    // Comprobamos si existe una carta con el mismo nombre
    if (existCard($user, $card)){  // es lo mismo que existName($name)==true
        echo "<p>El usuario ya tiene la carta en la baraja. La carta ha subido de nivel!</p>";
        header("refresh:4;url=home_admin.php");
    }else {
        // Ya está todo ok!!!! Podemos regalar la carta :)
        insertDeckUser($user, $card, selectImageCards($card));
        echo "Carta regalada :)";
        header("refresh:3;url=home_admin.php");
    }
}
if (isset($_POST["delete"])) {
    // Recogemos la variable del post
    $usuario = $_POST["usuario"];
    borrarUser($usuario);
}
?>


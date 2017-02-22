<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>practica07_SINTESIS_UF1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="red"><div id="link"></div><div id="link2"></div></div>
        <div id="top">
            <div id="blues">
                <div class="blue"></div>
                <div class="blue2"></div></div>
            <div id="image"></div>      
            <div id="blues2">
                <div class="blue"></div>
                <div class="blue2"></div></div></div>
        <div id="center">
            <div id="orange"></div>
            <div id="orange2"></div>
            <div id="orange3"><form action="registroExamen.php" method="POST" id="form">
                    <h1>NUEVO FORMULARIO</h1>
                    <div id="image2"></div> 
                    <div id="formulario"><p>Email: <input type="email" name="email"></p>
                    <p>Sexo: Humano <input type="radio" name="sexo" value="humano">
                        Nomo <input type="radio" name="sexo" value="nomo">
                        Elfo <input type="radio" name="sexo" value="elfo">
                    </p>
                    <p>Comida Favorita: Judias <input type="checkbox" name="comida[]" value="judias">
                        Habas <input type="checkbox" name="comida[]" value="habas">
                        Espinacas <input type="checkbox" name="comida[]" value="espinacas">
                        Maíz <input type="checkbox" name="comida[]" value="maiz">
                    </p></div> 
                    <h4>CARGA AVATAR</h4><br>
                    <br><input type="submit" name="enviar" value="REGISTRATE" id="REGISTRATE">
                </form></div>
        </div>
        <div id="red2"></div>
        <footer id="white"></footer>
    </body>
</html>

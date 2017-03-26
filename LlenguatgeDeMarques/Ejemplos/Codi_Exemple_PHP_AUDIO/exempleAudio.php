<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if( isset($_GET["song"]) ){
             $cancion = $_GET["song"];
        }else{
            $cancion="TuMeri.mp3";
        }
        if(isset($_GET["op"])){
            $aleatorio = $_GET["op"];
            if($aleatorio=="aleatorio"){
                $num_cancion=rand(0,2);
                switch ($num_cancion){
                    case 0: 
                        $cancion="KissHimGoodBye.mp3";
                        break;
                    case 1:
                        $cancion="TuMeri.mp3";
                        break;
                    case 2:
                        $cancion="TheMicrowave.mp3";
                        break;
                }
            }
        }
        ?>

<audio controls autoplay>
    <source src="<?php echo $cancion ?>" type="audio/mpeg">
    Your browser does not support the <code>audio</code> tag.
</audio>
        
<form action="exempleAudio.php" >
    <select name="song">
        <option value="KissHimGoodBye.mp3"
    <?php if($cancion=="KissHimGoodBye.mp3"){ echo "selected"; }?>
                >
            KissHimGoodBye</option>
        <option value="TuMeri.mp3" 
    <?php if($cancion=="TuMeri.mp3"){ echo "selected"; }?>
                >
            Tu Meri BANG BANG</option>
        <option value="TheMicrowave.mp3" 
    <?php if($cancion=="TheMicrowave.mp3") echo "selected"; ?>
                >
            The Microwave Song
        </option>
    </select>
    
    <input type="submit" name="op" value="seleccion"/>
    <input type="submit" name="op" value="aleatorio"/>
    
</form>



    </body>
</html>

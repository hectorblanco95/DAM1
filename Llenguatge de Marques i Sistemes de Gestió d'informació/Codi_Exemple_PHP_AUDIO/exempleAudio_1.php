<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$musicas =["KissHimGoodBye.mp3","TuMeri.mp3","TheMicrowave.mp3"];
        
        if( isset($_GET["song"]) ){
             $cancion = $_GET["song"];
        }else{
            $cancion="TuMeri.mp3";
        }
        if(isset($_GET["op"])){
            $aleatorio = $_GET["op"];
            if($aleatorio=="aleatorio"){
                $num_cancion=rand(0,2);
                $cancion = $musicas[$num_cancion];
            }
        }
        ?>

<audio controls autoplay>
    <source src="<?php echo $cancion ?>" type="audio/mpeg">
    Your browser does not support the <code>audio</code> tag.
</audio>
        
<form action="exempleAudio.php"  >
    <select name="song">
        <?php 
        for($k=0; $k< count($musicas);$k++){
            ?> 
        <option value="<?php echo $musicas[$k]?>"
                <?php if($cancion==$musicas[$k]){ echo "selected"; }?>
                > 
            <?php echo $musicas[$k]?>
        </option>
            <?php
        }
        ?>
    </select>
    
    <input type="submit" name="op" value="seleccion"/>
    <input type="submit" name="op" value="aleatorio"/>
    
</form>



    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nom =$_GET['nom'];
        $cont = $_GET['con'];
        ?> <h1> 
        <?php echo $nom;  ?>
        </h1>
        <?php
      while($cont>0){
          echo "iteración ".$cont;
          ?> <br />
          <?php
          $cont--;
      }
        ?>
    </body>
</html>

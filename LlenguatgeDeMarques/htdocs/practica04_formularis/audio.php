<?php
$song='010794050_prev.mp3';
if (isset($_GET['song']) == TRUE) {
    $song = $_GET['song'];
    $rand = $_GET['Random'];

    if ($rand == 'Random') {
        $opcion = rand(1, 3);
        if ($opcion == 1) {
            $opcion = '010794050_prev.mp3';
        }
        if ($opcion == 2) {
            $opcion = 'ambient_51.mp3';
        }
        if ($opcion == 3) {
            $opcion = 'la-atmosfera_4.mp3';
        }
    }
    if ($rand == 'noRandom') {
        $opcion = $song;
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Audio</title>
    </head>
    <body>
        <form action="audio.php">    
            <div>
                <audio controls autoplay>  
                    <source src="<?php echo $opcion ?>" type="audio/ogg" preload="auto"></source>
                </audio>
            </div>
            <div>
                <select name="song">
                    <option value="010794050_prev.mp3" <?php if($song=="010794050_prev.mp3") echo "selected";?>> Song1</option>
                    <option value="ambient_51.mp3" <?php if($song=="ambient_51.mp3") echo "selected";?>> Song2</option>
                    <option value="la-atmosfera_4.mp3" <?php if($song=="la-atmosfera_4.mp3") echo "selected";?>> Song3</option>
                </select>        
                <input type="submit" value="PlaySong" />
            </div>
            <div>
                Random <input type="radio" value="Random" name="Random"/>
                No random <input type="radio" value="noRandom" name="Random"/>
            </div>
        </form>   
    </body>
</html>
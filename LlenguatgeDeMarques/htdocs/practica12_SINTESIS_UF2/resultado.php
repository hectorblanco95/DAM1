<?php
if (isset($_POST['modificar'])) {
    $rand=rand(1,2);
    if ($rand==1){
        echo "WINNER PLAYER 1";
        $direc = $_GET['direc1'];
        $edad = $_GET['edad1'];
        $persona = $_GET['persona1'];
    } 
    else{ 
        echo "WINNER PLAYER 2";
        $direc = $_GET['direc2'];
        $edad = $_GET['edad2'];
        $persona = $_GET['persona2'];
    ?>
<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIP1XaKjlAHRifpgl2xc35FPeruUOrkBo&callback=initMap" type="text/javascript"></script>
<script src="gmap3.min.js" type="text/javascript"></script>
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <div id="mapa2" style="width: 500px; height:400px;"></div>
    
        <script>
            $(document).ready(init);
            function init() {
                $('#mapa2')
                .gmap3({
                    zoom: 4
                })
                .infowindow({content: "contentString"})
                .marker([
                    {address: "<?php echo $direc ?>", data: "<h3>Titulo</h3><div><?php echo $direc ?></div>"}
                ])
                .on('click', function (marker) {  //Al clicar obrim una finestra sobre la marca i hi insertem el data de la marca
                    marker.setIcon('http://maps.google.com/mapfiles/marker_green.png');
                    var map = this.get(0); //this.get(0) retorna la primera propietat vinculada-> gmap3
                    var infowindow = this.get(1); //this.get(1) retorna la segona propietat vinculada -> infowindow
                    infowindow.setContent(marker.data);     //dins la finestra mostrem el atribut data de la marca
                    infowindow.open(map, marker);
                })
                .fit();
            }
        </script>
    </body>
</html>
<?php
} else{
  header("Location: ejemploSlic.html");
}
?>
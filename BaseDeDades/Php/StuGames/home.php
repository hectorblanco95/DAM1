<?php
session_start();
if (isset($_SESSION["username"])) {
    // incluimos el fichero de la bbdd
    require_once 'bbdd_user.php';
        ?>
        <!DOCTYPE html>
        <!-- Página principal del usuario admin -->
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Home Page Administrator</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <link href="cssMail.css" rel="stylesheet" type="text/css"/>
            </head>
            <body>
                <div class="inbox-body">
                                     <div class="mail-option">
                                         <?php
                                         if (isset($_GET["contador"])) {
                                             $contador = $_GET["contador"];
                                         } else {
                                             $contador = 0;
                                         }
                                         $total = totalGames();
                                         ?>
                                         <ul class="unstyled inbox-pagination">
                                             <li><span>
                                             <?php
                                             // Mostrando mensaje de los resultados actuales
                                             if (($contador + 3) <= $total) {
                                                 echo ($contador + 1) . "-" . ($contador + 3) . " of $total";
                                             } else {
                                                 echo ($contador + 1) . "-$total of $total";
                                             }
                                             ?>
                                             </span></li>
                                             <?php
                                             // Mostrando el anterior (en caso de que lo haya)
                                             if ($contador > 0) {
                                                 echo "<li>
                                                         <a class='np-btn' href='home_admin.php?contador=".($contador-3)."'><i class='fa fa-angle-left  pagination-left'></i></a>
                                                       </li>";
                                             }
                                             // Mostrar el siguiente (en cado de que lo haya)
                                             if (($contador + 3) < $total) {
                                                 echo "<li>
                                                         <a class='np-btn' href='home_admin.php?contador=".($contador+3)."'><i class='fa fa-angle-right pagination-right'></i></a>
                                                       </li>";
                                             }
                                             ?>
                                         </ul>
                                     </div>
                                     
                                      <table class="table table-inbox table-hover">
                                        <tbody>
                                          <?php
                                            $games = selectGames(selectIdGames(selectGamesNoVotados()), $contador, 3);
                                            while ($fila = mysqli_fetch_array($games)) {
                                                extract($fila);
                                                    echo "<tr>
                                                          <td class='inbox-small-cells' style='width: 4%;'>
                                                            <input type='checkbox' class='mail-checkbox'>
                                                          </td>
                                                          <td class='inbox-small-cells' style='width: 8%;'><i class='fa fa-star'></i></td>
                                                          <td class='view-message  dont-show'>$title</td>
                                                          <td class='view-message '>$price</td>
                                                          <td class='view-message  inbox-small-cells'><i class='fa fa-paperclip'></i></td>
                                                          <td class='view-message  text-right' style='width: 13%;'>$genre</td>
                                                          </tr>";    
                                            }
                                          ?>
                                      </tbody>
                                      </table>
                                  </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	        </body>
        </html>
        <?php
} else {
    echo "<p>No hay usuario validado</p>";
}
?>
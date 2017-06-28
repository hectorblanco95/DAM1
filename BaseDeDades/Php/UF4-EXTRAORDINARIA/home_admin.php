<?php
session_start();
if (isset($_SESSION["idmember"])) {
    $idmember=$_SESSION["idmember"];
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
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
                <style type="text/css">
                    #example_length{ display: none;}
                    #example_filter{ display: none;}
                    #example_paginate{ display: none;}
                    #example_info{ display: none;}
                </style>
            </head>
            <?php
                if (isset($_GET["contador"])) {
                    $contador = $_GET["contador"];
                } else {
                    $contador = 0;
                }
                $total = totalUsers();
            ?>
            <body>
            <a href="logout.php" class="btn btn-danger btn-sm">
                <span class="glyphicon glyphicon-log-out"></span> Log out
            </a>

            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Llamamos al método que devuelve todos los datos
                $users = selectAllUsers($contador);
                // Mientras haya datos, leemos la fila y la mostramos
                while ($fila = mysqli_fetch_array($users)) {
                    extract($fila);
                    // SIEMPRE después de un extract, las variables
                    // tienen el nombre de los campos de la bbdd
                    echo "<tr>
                        <td>$idmember</td>
                        <td>$name</td>
                        <td>$age</td>
                    </tr>";
                }?>
                </tbody>
            </table>
            <div class="col-sm-5">
                <div class="dataTables_info" id="info" role="status" aria-live="polite">
                <?php
                // Mostrando mensaje de los resultados actuales
                    if (($contador + 10) <= $total) {
                        echo "Showing " . ($contador + 1) . " to " . ($contador + 10) . " of $total entries";
                    } else {
                        echo "Showing " . ($contador + 1) . " to $total of $total entries";
                    }
                ?>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="paginate">
                    <ul class="pagination">
            <?php
                // Mostrando el anterior (en caso de que lo haya)
                if ($contador > 0) {
                echo "<li class='paginate_button previous' id='example_previous'>
                        <a href='home_admin.php?contador=".($contador-10)."' aria-controls='example' data-dt-idx='0' tabindex='0'>Previous</a>
                    </li>";
                }
                // Mostrar el siguiente (en cado de que lo haya)
                if (($contador + 10) < $total) {
                echo "<li class='paginate_button previous' id='example_previous'>
                        <a href='home_admin.php?contador=".($contador+10)."' aria-controls='example' data-dt-idx='2' tabindex='0'>Next</a>
                    </li>";
            }
            ?>
                    </ul>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	        <script type="text/javascript">
	            $(document).ready(function() {
                    $('#example').DataTable();
                } );
	        </script>
	        </body>
        </html>
        <?php
} else {
    echo "<p>No hay usuario validado</p>";
}
?>
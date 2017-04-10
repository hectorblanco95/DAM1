<?php
session_start();
// incluimos el fichero de la bbdd
require_once 'bbdd_user.php';
if (isset($_SESSION["username"])) {
    // Nos aseguramos que el usuario sea administrador
    // Cogemos el tipo de la variable de sesión
    $tipo = $_SESSION["tipo"];
    if ($tipo == 1) {
        ?>
        <!DOCTYPE html>
        <!-- Página principal del usuario admin -->
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Home Page Administrator</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
            <link href="cssRoyale.css" rel="stylesheet" type="text/css"/>
        </head>
        <body>
            <div class="container">
    <div class="row">
        <div class="col-md-3 col-xs-12 user-stats">
            <div class="well">
                <h5>
                    <strong>Username: </strong><?php echo $_SESSION["username"];?> <span class="label label-info">Admin</span>
                </h5>
                <h5>
                    <strong>Level: </strong><?php echo $_SESSION["level"];?>
                </h5>
                <h5>
                    <strong>Wins: </strong>$1,000,000
                </h5> 
                <h5>
                    <strong>Deck: </strong>1,234
                </h5>
                <hr />
                <h5>
                    <a href="" class="pull-left" data-toggle="modal" data-target="#changePassword">Change Password</a>
                    <a href="logout.php" class="pull-right">Logout</a>
                    <div class="clearfix"></div>
                </h5>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 text-center page-header">
            <h1 class="game-name">
                <img src="img/header.png" alt="image" width="357" height="113"></img> 
            </h1>   
        </div>
        <div class="col-md-3 col-xs-12 user-stats">
            <h5>Health</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 60%;">
                    60/100
                </div>
            </div>
            <h5>Energy</h5>
            <div class="progress">
                <div class="progress-bar" style="width: 95%;">
                    95/100
                </div>
            </div>
            <h5>Mana</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-info" style="width: 33%;">
                    10/30
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="home_admin.php">Usuarios</a></li>
                    <li><a href="altaDeCartas.php">Alta de Cartas</a></li>
                    <li class="active"><a href="ranking_admin.php">Ranking</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="panel panel-primary filterable" style="border-color: transparent;">
            <div class="panel-heading">
                <h3 class="panel-title">RANKING DE LOS 10 MEJORES</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Wins" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Level" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Llamamos al método que devuelve todos los datos de los cocineros
                    $usuarios = selectUser();
                    $i=0;
                    // Mientras haya datos, leemos la fila y la mostramos
                    while ($fila = mysqli_fetch_array($usuarios)) {
                        extract($fila);
                        // SIEMPRE después de un extract, las variables
                        // tienen el nombre de los campos de la bbdd
                        $i++;
                        echo "<tr>
                        <td style='border-top: 0;'>$i</td>
                        <td style='border-top: 0;'>$username</td>
                        <td style='border-top: 0;'>$wins</td>
                        <td style='border-top: 0;'>$level</td>
                      </tr>";
                    }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="fade modal" id="changePassword">
        <div class="modal-dialog">
            <div class="modal-content" style="top: 68px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title" id="myModalLabel">New Password</h2>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Form Name -->
                            <!-- Prepended text-->
                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Password</label>
                                <div class="col-md-5">
                                    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">New Password</label>
                                <div class="col-md-5">
                                    <input id="newPassword" name="newPassword" type="password" placeholder="New Password" class="form-control input-md" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Confirm New Password</label>
                                <div class="col-md-5">
                                    <input id="newPassword2" name="newPassword2" type="password" placeholder="Confirm New Password" class="form-control input-md" required="">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Save</button>
                            </div>
                            <!-- File Button -->
                            <!-- Button -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer></footer>
<script type="text/javascript " src="jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript " src="jsRoyale.js"></script>
        </body>
    </html>
        <?php
    } else {
        echo "<p>No tienes permisos para ver esta página.</p>";
    }
} else {
    echo "<p>No hay usuario validado</p>";
}
?>
<?php
session_start();
// incluimos el fichero de la bbdd
require_once 'bbdd_user.php';
// Si hay variable user en session es que un usuario se ha validado
if (isset($_SESSION["username"])) {
    // Nos aseguramos que el usuario sea user
    // Cogemos el tipo de la variable de sesión
    $tipo = $_SESSION["tipo"];
    if ($tipo == 0) {
        ?>
        <!DOCTYPE html>
        <!-- Página principal del usuario admin -->
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Home Page Administrator</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <link href="cssRoyale.css" rel="stylesheet" type="text/css"/>
        </head>
        <body>
            <div class="container">
    <div class="row">
        <div class="col-md-3 col-xs-12 user-stats">
            <div class="well">
                <h5>
                    <strong>Username: </strong><?php echo $_SESSION["username"];?>
                </h5>
                <h5>
                    <strong>Level: </strong><?php echo $_SESSION["level"];?>
                </h5>
                <h5>
                    <strong>Wins: </strong><?php echo $_SESSION["wins"];?>
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
            <h5>Level</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: <?php echo $_SESSION['level']%100?>%;">
                    <?php echo $_SESSION['level']%100?>%
                </div>
            </div>
            <h5>Wins</h5>
            <div class="progress">
                <div class="progress-bar" style="width: <?php echo $_SESSION['wins']%100?>%;">
                    <?php echo $_SESSION['wins']%100?>%
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
                    <li class="active"><a href="home_user.php">Cartas Conseguidas</a></li>
                    <li><a href="ranking_user.php">Ranking</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="section" style="margin-left: -26px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 panel-primary filterable" style="width: 1189px;">
                    <table class="table table-hover table-striped">
                        <thead>
                    <tr class="filters">
                        <th><p style="margin: 0;margin-left: 29%;color: #333;">#</p></th>
                        <th><input type="text" class="form-control" placeholder="Card" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Level" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Type" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Rarity" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Hitpoints" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Damage" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Cost" disabled></th>

                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </tr>
                </thead>
                        <tbody>
                            <?php
                    // Llamamos al método que devuelve todos los datos de las tabla deck
                    $deck = deckUser($_SESSION["username"]);
                    // Mientras haya datos, leemos la fila y la mostramos
                    while ($fila = mysqli_fetch_array($deck)) {
                        extract($fila);
                        // SIEMPRE después de un extract, las variables
                        // tienen el nombre de los campos de la bbdd
                        echo "<tr>
                        <td><img src='$Image' style='width: 47%; margin-left: 11%;'></td>
                        <td><h4>
                                <b>$card</b>
                            </h4>
                        </td>
                        <td><p style='margin-top: 10px;margin-bottom: 10px;color: #333;'>$level</p></td>";
                        // Llamamos al método que devuelve todos los datos de las tabla deck
                        $deck2 = cardData($card);
                        // Mientras haya datos, leemos la fila y la mostramos
                        while ($fila = mysqli_fetch_array($deck2)) {
                            extract($fila);
                            // SIEMPRE después de un extract, las variables
                            // tienen el nombre de los campos de la bbdd
                            $hitpoints=($hitpoints+$level)*2;
                            $damage=($damage+$level)*2;
                  echo "<td><p style='margin-top: 10px;margin-bottom: 10px;'>$type</p></td>
                        <td><p style='margin-top: 10px;margin-bottom: 10px;color: #333;'>$rarity</p></td>
                        <td><p style='margin-top: 10px;margin-bottom: 10px;color: #333;'>$hitpoints</p></td>
                        <td><p style='margin-top: 10px;margin-bottom: 10px;color: #333;'>$damage</p></td>
                        <td><p style='margin-top: 10px;margin-bottom: 10px;color: #333;'>$cost</p></td>";
                        }
                 echo "</tr>";
                    }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="fade modal" id="changePassword">
        <div class="modal-dialog">
            <div class="modal-content" style="top: 68px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-fw s fa-remove"></i></button>
                    <h2 class="modal-title" id="myModalLabel">New Password</h2>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="login.php" method="POST">
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
                                <button type="submit" class="btn btn-primary" name="modificarPass">
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
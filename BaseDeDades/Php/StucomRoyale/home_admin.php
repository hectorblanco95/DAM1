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
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
                    <strong>Wins: </strong><?php echo $_SESSION["wins"];?>
                </h5> 
                <h5>
                    <strong>Deck: </strong><?php echo $_SESSION["deck"];?>
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
                <img href="home_admin.php" src="img/header.png" alt="image" width="357" height="113"></img> 
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
                    <li class="active"><a href="home_admin.php">Usuarios</a></li>
                    <li><a href="cartasConseguidas_admin.php">Cartas Conseguidas</a></li>
                    <li><a href="altaDeCartas.php">Alta de Cartas</a></li>
                    <li><a href="ranking_admin.php">Ranking</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 well">
            <a class="btn btn-primary" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw -square -circle fa-plus-square"></i> New User</a>
            <a class="btn btn-default" data-toggle="modal" data-target="#delete"><i class="fa fa-fw fa-remove"></i> Delete User</a>
            <a class="btn btn-default" data-toggle="modal" data-target="#giveAwayCard"><i class="fa fa-fw fa-gift"></i> Give Away Card</a>
        </div>
    </div>
    <div class="section" style="margin-left: -26px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 panel-primary filterable" style="width: 1189px;">
                    <table class="table table-hover table-striped">
                        <thead>
                    <tr class="filters">
                        <th><p style="margin: 0;margin-left: 30%;color: #333;">#</p></th>
                        <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Wins" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Level" disabled></th>
                    
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </tr>
                </thead>
                        <tbody>
                            <?php
                    // Llamamos al método que devuelve todos los datos de los usuarios
                    $usuarios = selectAllUser();
                    // Mientras haya datos, leemos la fila y la mostramos
                    while ($fila = mysqli_fetch_array($usuarios)) {
                        extract($fila);
                        // SIEMPRE después de un extract, las variables
                        // tienen el nombre de los campos de la bbdd
                        
                        if ($type==1) $type="Admin";
                        else $type="User";
                        echo "<tr>
                        <td><img src='http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png' class='img-circle' width='60' style='margin-left: 11%;'></td>
                        <td><h4>
                          <b>$username</b>
                         </h4>
                         <p style='margin: 0;'>$type</p>
                        </td>
                        <td><p style='margin-top: 10px;margin-bottom: 10px;color: #333;'>$wins</p></td>
                        <td><p style='margin-top: 10px;margin-bottom: 10px;color: #333;'>$level</p></td>
                       </tr>";
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
    <div class="fade modal" id="usuario">
        <div class="modal-dialog">
            <div class="modal-content" style="top: 68px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-fw s fa-remove"></i></button>
                    <h2 class="modal-title" id="myModalLabel">New User</h2>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="login.php" method="post" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <!-- Prepended text-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prependedtext">Username</label>
                                <div class="col-md-5">
                                    <input id="username" name="username" class="form-control" placeholder="Username" type="text" required="">
                                </div>
                            </div>
                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Password</label>
                                <div class="col-md-5">
                                    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Confirm Password</label>
                                <div class="col-md-5">
                                    <input id="confirm-password" name="confirm-password" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="departamento">Type</label>
                                <div class="col-md-5">
                                    <select id="tipo" name="tipo" class="form-control">
                                            <option value="0">Usuario</option>
                                            <option value="1">Admin</option>
                                        </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="guardarUser">
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
    <div class="fade modal" id="delete">
        <div class="modal-dialog">
            <?php
            // Formulario que permite escoger usuario al admin
            echo "<form action='login.php' method='POST'>";
            ?>
            <div class="modal-content" style="top: 68px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-fw s fa-remove"></i></button>
                    <h2 class="modal-title" id="myModalLabel">Delete Confirmation</h2>
                </div>
                <div class="modal-body">
                    <p class="error-text"><i class="fa fa-fw s fa-remove"></i>Are you sure you want to delete the user?</p>
                    <?php
                    echo "<select name='usuario'>";
                    // Llamamos al método que devuelve todos los datos de los usuarios
                    $usuarios = selectAllUser();
                    // Mientras haya datos, leemos la fila y la mostramos
                    while ($fila = mysqli_fetch_array($usuarios)) {
                        extract($fila);
                        // SIEMPRE después de un extract, las variables
                        // tienen el nombre de los campos de la bbdd
                        if($username!="admin"){
                            if ($type==1) $type="Admin";
                            else $type="User";
                            echo "<option value='$username'>$type: $username";
                            echo "</option>";
                        }
                    }
                    echo "</select>";
                    ?>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <?php echo "<button type='submit' class='btn btn-danger' name='delete'>Delete</button>";?>
                </div>
            </div>
            <?php echo "</form>";?>
        </div>
    </div>
    <div class="fade modal" id="giveAwayCard">
        <div class="modal-dialog">
            <div class="modal-content" style="top: 68px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-fw s fa-remove"></i></button>
                    <h2 class="modal-title" id="myModalLabel">Give Away Card</h2>
                </div>
                <div class="modal-body">
                    <?php
                    // Formulario que permite escoger usuario al admin
                    echo "<form action='login.php' method='POST'>";
                    ?>
                        <fieldset>
                            <!-- Form Name -->
                            <!-- Cards name-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prependedtext" style="text-align:center;">Cards Name</label>
                                <div class="col-md-5">
                                    <?php
                                    echo "<select name='card' class='form-control'>";
                                    // Llamamos al método que devuelve todos los datos de los usuarios
                                    $cards = selectImageCards2();
                                    // Mientras haya datos, leemos la fila y la mostramos
                                    while ($fila = mysqli_fetch_array($cards)) {
                                        extract($fila);
                                        // SIEMPRE después de un extract, las variables
                                        // tienen el nombre de los campos de la bbdd
                                        echo "<option value='$name'>$name";
                                        echo "</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </div>
                            </div>
                            <!-- User name -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="userName" style="text-align:center;">User Name</label>
                                <div class="col-md-5">
                                    <?php
                                    echo "<select name='userName' class='form-control'>";
                                    // Llamamos al método que devuelve todos los datos de los usuarios
                                    $userNames = selectAllUser();
                                    // Mientras haya datos, leemos la fila y la mostramos
                                    while ($fila = mysqli_fetch_array($userNames)) {
                                        extract($fila);
                                        // SIEMPRE después de un extract, las variables
                                        // tienen el nombre de los campos de la bbdd
                                        if ($type==1) $type="Admin";
                                        else $type="User";
                                        echo "<option value='$username'>$type: $username";
                                        echo "</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </div>
                                <button type="submit" class="btn btn-primary" name="giveAwayCard">
                                        <i class="fa fa-fw fa-gift"></i>Give Away</button>
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
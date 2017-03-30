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
            <link href="./cssRoyale.css" rel="stylesheet" type="text/css"/>
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
                    <a href="./logout.php" class="pull-right">Logout</a>
                    <div class="clearfix"></div>
                </h5>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 text-center page-header">
            <h1 class="game-name">
                <img src="./header.png" alt="image" width="357" height="113"></img> 
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
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="ranking_admin.php">Ranking</a></li>
                    <li><a href="#">Page 5</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="section" style="margin-left: -15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 well">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw -square -circle fa-plus-square"></i> New User</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="section" style="margin-left: -114px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 panel-primary filterable" style="width: 1283px;">
                    <table class="table table-hover table-striped">
                        <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Wins" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Level" disabled></th>
                    </tr>
                    <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
                </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#"><i class="-alt fa fa-2x fa-eye fa-fw"></i></a>
                                </td>
                                <td>
                                    <h4>
                                        <b>Asistente de sistemas</b>
                                    </h4>
                                    <p>@ramonvillaw</p>
                                </td>
                                <td>
                                    <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" width="60">
                                </td>
                                <td>
                                    <h4>
                                        <b>Ramón Villa Awad</b>
                                    </h4>
                                    <a href="mailto:ramonvillaw@gmail.com">ramonvillaw@gmail.com</a>
                                </td>
                                <td>2 años</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-default" value="left" type="button">
                                                <i class="fa fa-fw s fa-remove"></i>Eliminar</button>
                                        <button class="btn btn-default" value="right" type="button">
                                                <i class="fa fa-fw fa-cog"></i>Configurar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"><i class="fa fa-2x fa-fw fa-eye-slash"></i></a>
                                </td>
                                <td>
                                    <h4>
                                        <b>Supervisora</b>
                                    </h4>
                                    <p>@claudiaramos</p>
                                </td>
                                <td>
                                    <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" width="60">
                                </td>
                                <td>
                                    <h4>
                                        <b>Claudia Ramos</b>
                                    </h4>
                                    <a href="mailto:claudia@mail.com">claudia@mail.com</a>
                                </td>
                                <td>3 años</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-default" value="left" type="button">
                                                <i class="fa fa-fw s fa-remove"></i>Eliminar</button>
                                        <button class="btn btn-default" value="right" type="button">
                                                <i class="fa fa-fw fa-cog"></i>Configurar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"><i class="fa fa-2x fa-fw fa-eye"></i></a>
                                </td>
                                <td>
                                    <h4>
                                        <b>Gerente de capacitación</b>
                                    </h4>
                                    <p>@anaojeda</p>
                                </td>
                                <td>
                                    <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" width="60">
                                </td>
                                <td>
                                    <h4>
                                        <b>Ana Isabel Ojeda</b>
                                    </h4>
                                    <a href="mailto:ana@mail.com">ana@mail.com</a>
                                </td>
                                <td>1 mes</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-default" value="left" type="button">
                                                <i class="fa fa-fw s fa-remove"></i>Eliminar</button>
                                        <button class="btn btn-default" value="right" type="button">
                                                <i class="fa fa-fw fa-cog"></i>Configurar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"><i class="fa fa-2x fa-fw -alt fa-eye-slash"></i></a>
                                </td>
                                <td>
                                    <h4>
                                        <b>Director de Recursos Humanos</b>
                                    </h4>
                                    <p>@Carlos Enciso</p>
                                </td>
                                <td>
                                    <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" width="60">
                                </td>
                                <td>
                                    <h4>
                                        <b>Carlos Enciso</b>
                                    </h4>
                                    <a href="mailto: carlos@mail.com"> carlos@mail.com</a>
                                </td>
                                <td>5 años</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-default" value="left" type="button">
                                                <i class="fa fa-fw s fa-remove"></i>Eliminar</button>
                                        <button class="btn btn-default" value="right" type="button">
                                                <i class="fa fa-fw fa-cog"></i>Configurar</button>
                                    </div>
                                </td>
                            </tr>
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
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title" id="myModalLabel">New User</h2>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Form Name -->
                            <!-- Prepended text-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prependedtext">Username</label>
                                <div class="col-md-5">
                                    <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Username" type="text" required="">
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
                                    <input id="password2" name="password2" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
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
                                <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
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
<script type="text/javascript " src="./jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript " src="./jsRoyale.js"></script>
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
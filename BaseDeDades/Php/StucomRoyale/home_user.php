<?php
// Antes de mostrar la página nos aseguramos que hay un usuario autentificado
session_start();
// incluimos el fichero de la bbdd
require_once 'bbdd_user.php';
if (isset($_SESSION["username"])) {
    // Si hay variable user en session es que un usuario se ha validado
    ?>
    <!DOCTYPE html>
    <!-- HomePage del user -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Home Page User</title>
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
                    <li class="active"><a href="home_user.php">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="ranking_user.php">Ranking</a></li>
                    <li><a href="#">Page 5</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="fade modal" id="changePassword">
        <div class="modal-dialog">
            <div class="modal-content" style="top: 68px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
    echo "<p>Debes hacer login para poder ver esta pagina</p>";
}
?>
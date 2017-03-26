<?php
session_start();
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
            <link href="./cssRoyale.css" rel="stylesheet" type="text/css"/>
        </head>
        <body>
            <div class="container">
    <div class="row">
        <div class="col-md-3 col-xs-12 user-stats">
            <div class="well">
                <h5>
                    <strong>Username: </strong><?php echo $_SESSION["username"]; ?> <span class="label label-info">Admin</span>
                </h5>
                <h5>
                    <strong>Level: </strong>9000
                </h5>
                <h5>
                    <strong>Cash: </strong>$1,000,000
                </h5> 
                <h5>
                    <strong>Premium Points: </strong>1,234
                </h5>
                <hr />
                <h5>
                    <a href="#" class="pull-left">My Account</a>
                    <a href="./logout.php" class="pull-right">Logout</a>
                    <div class="clearfix"></div>
                </h5>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 text-center page-header">
            <h1 class="game-name">
                <img src="./header.png" alt="image" width="300" height="84"></img> 
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 4</a></li>
                    <li><a href="#">Page 5</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="page-title text-center">Travel</h3>
            <table class="table table-bordered">
                <thead>
                    <tr class="active">
                        <th>Location</th>
                        <th width="100px">Cost</th>
                        <th width="100px">Time</th>
                        <th width="60px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>London</td>
                        <td>$450</td>
                        <td>02:30:00</td>
                        <td><button class="btn btn-xs">Travel</button></td>
                    </tr>
                    <tr>
                        <td>Paris</td>
                        <td>$450</td>
                        <td>02:30:00</td>
                        <td><button class="btn btn-xs">Travel</button></td>
                    </tr>
                    <tr>
                        <td>Berlin</td>
                        <td>$450</td>
                        <td>02:30:00</td>
                        <td><button class="btn btn-xs">Travel</button></td>
                    </tr>
                    <tr>
                        <td>Madrid</td>
                        <td>$450</td>
                        <td>02:30:00</td>
                        <td><button class="btn btn-xs">Travel</button></td>
                    </tr>
                    <tr>
                        <td>Rome</td>
                        <td>$450</td>
                        <td>02:30:00</td>
                        <td><button class="btn btn-xs">Travel</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
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

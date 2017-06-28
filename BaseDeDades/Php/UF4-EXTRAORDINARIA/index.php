<?php
require_once 'bbdd_user.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NoTeRoma s</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
        <style type="text/css">
        	#example_length{ display: none;}
        	#example_filter{ display: none;}
        	#example_paginate{ display: none;}
        	#example_info{ display: none;}
        </style>
        <link href="cssLogin.css" rel="stylesheet" type="text/css"/>
    </head>
    <?php
    if (isset($_GET["contador"])) {
        $contador = $_GET["contador"];
    } else {
        $contador = 0;
    }
    $total = totalActivitys();
    ?>
    <body>
        <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
                		<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                		<br>
                		<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                			<div class="form-group">
                				<input type="text" name="username" class="form-control" placeholder="Username" maxlength="20" required autofocus>
                			</div>
                			<div class="form-group">
                				<input type="password" name="password" class="form-control" placeholder="Password" maxlength="250" required>
                			</div>
                			<div class="form-group text-center" style="margin-left: 4%;">
                				<label class="checkbox pull-left">
                			    	<input type="checkbox" value="remember-me"> Remember me
                				</label>
                			</div>
                			<div class="form-group">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-3">
               							<button class="btn btn-lg btn-primary btn-block" type="submit" name="login-submit"> Sign in</button>
                					</div>
								</div>
							</div>
                		</form>
                		<form id="register-form" action="login.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" class="form-control" placeholder="Name" maxlength="20" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password" maxlength="250" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password" maxlength="250" required>
									</div>
									<div class="form-group">
										<input type="number" name="age" id="age" class="form-control" placeholder="Age" max="99999999999" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
            		</div>
				</div>
			</div>
		</div>
	</div>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Capacity</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Llamamos al método que devuelve todos los datos
                $activitys = selectAllActivitys($contador);
                // Mientras haya datos, leemos la fila y la mostramos
                while ($fila = mysqli_fetch_array($activitys)) {
                    extract($fila);
                    // SIEMPRE después de un extract, las variables
                    // tienen el nombre de los campos de la bbdd
                    echo "<tr>
                        <td>$name</td>
                        <td>$price €</td>
                        <td>$capacity</td>
                    </tr>";
                }?>
                </tbody>
            </table>
            <div class="col-sm-5">
                <div class="dataTables_info" id="info" role="status" aria-live="polite">
                <?php
                // Mostrando mensaje de los resultados actuales
                    if (($contador + 5) <= $total) {
                        echo "Showing " . ($contador + 1) . " to " . ($contador + 5) . " of $total entries";
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
                        <a href='home.php?contador=".($contador-5)."' aria-controls='example' data-dt-idx='0' tabindex='0'>Previous</a>
                    </li>";
                }
                // Mostrar el siguiente (en cado de que lo haya)
                if (($contador + 5) < $total) {
                echo "<li class='paginate_button previous' id='example_previous'>
                        <a href='home.php?contador=".($contador+5)."' aria-controls='example' data-dt-idx='2' tabindex='0'>Next</a>
                    </li>";
            }
            ?>
                    </ul>
                </div>
            </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
            $('#example').DataTable();
        } );
	</script>
	<script type="text/javascript " src="jsLogin.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Stucom Games</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link href="cssLogin.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" style="margin-top: -23px;">
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
                				<input type="text" name="username" class="form-control" placeholder="Username" maxlength="10" required autofocus>
                			</div>
                			<div class="form-group">
                				<input type="password" name="password" class="form-control" placeholder="Password" maxlength="200" required>
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
										<input type="text" name="username" id="username" class="form-control" placeholder="Username" maxlength="10" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password" maxlength="200" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password" maxlength="200" required>
									</div>
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" placeholder="Name" maxlength="20" required>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript " src="jsLogin.js"></script>
    </body>
</html>

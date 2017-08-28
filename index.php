<!DOCTYPE html>
<?php 			
session_start();
?>
<html>
	<head>
		<title>Sistema de Tramites - Ariadna - Alejandro Cortes</title>
		<meta name="viewport" content="initial-scale=1.0">
		<meta charset="utf-8">
		<script src="js/jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
		<link  rel='stylesheet' type='text/css' href="css/tramites.css">
		<script type="text/javascript" src="js/login.js"></script>
	</head>
	<body>
		<div class="container">
			<form class="form-horizontal" id="loginForm" method="post">	
				<div class="row login_box">
					<div class="col-md-12 col-xs-12" align="center">
						<div class="line"><h4>Sistema de Tramites - Ariadna - Alejandro Cortes</h4></div>
						<div class="outter"><img src="images/people-q-c-100-100-1.jpg" class="image-circle"/></div>   
						<span><h4>Bienvenido</h4></span>
					</div>
					<div class="col-md-12 col-xs-12 login_control">					
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-8">
								<input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button id="entrar" class="btn btn-default">Entrar</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>



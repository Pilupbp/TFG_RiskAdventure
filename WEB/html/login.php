<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login RA</title>
   <!--Made with love by Mutiullah Samim -->
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--Bootsrap 4 CDN-->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<div class="container">
  <div class="row" id="logo">
    <div class="col-md-1">
      <a href="../html/index.php"><img src="../imagenes/favicon_risk.png"></a>
    </div>
    <div class="col-md-10" id="texto">
      <p>login RISK ADVENTURE </p>
    </div>
  </div>
    
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
				<span><a href="https://m.facebook.com/adventurerisk/"><i class="fab fa-facebook-square"></i></a></span>
					<span><a href="https://cutt.ly/UvIKPOG"><i class="fab fa-whatsapp-square"></i></a></span>
					<span><a href="https://twitter.com/adventurerisk"><i class="fab fa-twitter-square"></i></a></span>
          
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="carrito.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="user" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="pass" required>
					</div>
          
          
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿Aún no tienes una cuenta?<a href="registro.php">Regístrate</a>
				</div>
				
			</div>
		</div>
	</div>
         
      <script type="text/javascript" src="../js/contacto.js"></script> <!--Enlace externo a archivo JS-->
  

</div>
</body>
</html>
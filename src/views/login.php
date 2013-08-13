<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="assets/css/login.css" rel="stylesheet" media="screen">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<form class="form-signin" action="index.php?section=security&action=in" method="post">
			<h2 class="form-signin-heading">Ingrese sus datos</h2>
			<input name="usuario" type="text" class="input-block-level"
				placeholder="Usuario"/> 
			<input type="password" name="password"
				class="input-block-level" placeholder="Password"/> 
				
			<button class="btn btn-large btn-primary" type="submit">Entrar</button>
			<?php if(isset($error) && ($error)): ?>
			<h5 style="color:#FF3217;"><?php echo $error; ?></h5>
			<?php endif; ?>
		</form>
		
	</div>
	<!-- /container -->

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
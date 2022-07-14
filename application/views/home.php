<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventario Administradores</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Inventario Administradores</h1>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<?php
				$user = $this->session->userdata('user');
				extract($user);
			?>
			<h2>Bienvenido </h2>
			<h4>User: <?php echo $fname; ?></h4>
			<p>Email: <?php echo $email; ?></p>
			
			
			<a href="<?php echo base_url(); ?>index.php/user/inicio" class="btn btn-danger">Inventario</a>
			<a href="<?php echo base_url(); ?>index.php/user/iniciotienda" class="btn btn-danger">Tienda</a>
			<a href="<?php echo base_url(); ?>index.php/user/logout" class="btn btn-danger">Cerrar Sesión</a>
		</div>
	</div>
</div>
</body>
</html>

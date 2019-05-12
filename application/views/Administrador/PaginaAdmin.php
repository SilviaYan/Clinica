<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>clinica</title>
		
		<link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilospagAdmin.css">
	</head>
	
<body>

	<div class="header">
			<h1><img src="<?= base_url(); ?>resource/images/imagenes/logo.png"></h1>
	</div>

	<a href="index.php"><div class="con" id="seis">
		<img class="icono" src="<?= base_url(); ?>resource/images/iconos/salida.png" >
		<span class="texto2">Logout</span>		
	</div></a>

	<div class="nav">
		<?php
		include("menuAdmin.php");
		?>
	</div>

	<div class="contenido">
		<img class="fondo" src="<?= base_url(); ?>resource/images/imagenes/medical.jpg" >
	</div>

</body>
</html>
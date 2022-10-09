<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="registerStyle.css">
	<link rel="stylesheet" type="text/css" href ="../css/w3c.css">
</head>
<body class="w3-mobile">
	<header>
		<?php
			include("../layouts/cabecera.html");
		?>
	</header>
    <form class="w3-mobile" method="post">
    	<h1 class="w3-mobile">¡Suscribete!</h1>
    	<input type="text" name="nombre" placeholder="Nombre completo">
		<input type="text" name="edad" placeholder="Edad">
		<input type="text" name="genero" placeholder="Género">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php
			include("../register/register.php");
		?>
</html>
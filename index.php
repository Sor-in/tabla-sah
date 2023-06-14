<?php
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabla de sah</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="page-container">
		<h1>TABLA DE SAH</h1>
		<?= tablaSah() ?>
		<?= tablaSah('border') ?>
	</div>

</body>

</html>
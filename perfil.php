<?php
session_start();
include ("db/db.php");
$id_Usuario = $_SESSION['iduser'];
$st_Email   = $_SESSION['mail'];
$st_Password   = $_SESSION['pass'];
$st_Tarjeta = $_SESSION['tarjeta'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bienvenido</title>
</head>

<body>
	<section id="inicio">
		<div class="row">
			<div class="col-md-12">
				<table>
					<tr>
						<td colspan="2">Bienvenido a Tu sitio</td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><?=$st_Email?></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><?=$st_Password?></td>
					</tr>
					<tr>
						<td>Id de Usuario: </td>
						<td><?=$id_Usuario?></td>
					</tr>
					<tr>
						<td>Tarjeta: </td>
						<td><?=$st_Tarjeta?></td>
					</tr>
				</table>
			</div>
		</div>
	</section>
</body>
</html>
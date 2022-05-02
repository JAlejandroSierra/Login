<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
	<section id="">
		<div class="row">
			<div class="col-md-6 padding-z">
				<div class="wrp-sec1" id="ingresar">
					<div class="wrp-inp-log">
						<form action="valida.php" method="post" name="login" id="login">
							<input type="text" name="email" id="email" class="inp-log"  maxlength="30" placeholder="Correo">
							
							<input type="password" name="password" id="password" class="inp-log" placeholder="Contraseña" maxlength="12">
							
							<input type="button" name="ingresar" class="inp-bt1" value="Ingresar" onClick="validar();">
							
							<a href="registro.php" class="lk-reg"><p class="txt-sign">Registrarse</p></a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
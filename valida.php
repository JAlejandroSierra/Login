<?php
include ("db/db.php");

$email=trim($_POST['email']);
$password= trim($_POST['password']);

if($email=="" || $email ==" " || $password=="" || $password==" "){
	?>
	<script>
		alert("Los campos vienen vacíos !!");
		location.href="Login.php";
	</script>
	<?php
}else{
	$query = $pdo->prepare("select count (*) as Existe from tbl_UsuariosWeb 
	where st_Email='".$email."' and st_Password='".$password."' and id_TarjetaStatus = 1");
	
	$query->execute();
	$row = $query->fetch();
	$existe=$row['existe'];
	
	if($existe==0){
		?>
		<script>
			alert("El usuario no existe!!");
			location.href="index.php";
		</script>
		<?php
	}else if($existe>1){
		?>
		<script>
			alert("El usuario está registrado más de una vez!!");
			location.href="index.php";
		</script>
		<?php		
	}else if($existe==1){
		$query1 = $pdo->prepare("select * from tbl_UsuariosWeb where st_Email='".$email."' and st_Password='".$password."' and id_TarjetaStatus = 1 ");
		
		$query1->execute();
		$row1 = $query1->fetch();
		
		session_start();
		$_SESSION['iduser']=$row1['id_UsuarioWeb'];
		$_SESSION['pass']=$row1['st_Password'];
		$_SESSION['tarjeta']=$row1['st_Tarjeta'];
		$_SESSION['mail']=$row1['st_Email'];	


		$_SESSION['valido']='TRUE';  				
		$_SESSION['TIPO']="1";
		
		?>
		<script>
			location="perfil.php";
		</script>
		<?php
		
	}
}
?>
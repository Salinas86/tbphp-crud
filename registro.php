<?php 

include("db_con.php");

if (isset($_POST['insert'])) {
	$usuario=$_POST['nombre'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$insertar="INSERT INTO usuario(usuario, password, email) VALUES ('$usuario', '$pass', '$email')";
	$ejecutar =mysqli_query($dbConnection,$insertar);
	if ($ejecutar) {
		echo "<h3>INSERTADO CORRECTAMENTE</h3>";
	}
}

?>
<?php 
require 'conexion.php';
/*--------------------*/
$username = $_POST['ownwer_name'];
$email = $_POST['pet_name'];
$password = $_POST['description'];
$id_registro = $_POST[''];
/* ------------------- */
$insertar = "INSERT INTO pet_list (ownwer_name, pet_name, description) VALUES ('$username','$email','$password')";
$consulta = "SELECT * FROM pet_list";
/**/
$query = mysqli_query($conectar, $insertar);
if ($query) {
	//echo "correcto";
	header("Location:success.html");
	}else{
	echo "incorrecto";
}
 ?>

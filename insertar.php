	<!-- este codigo permite hacer una consulta de insercion de datos-->
	<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}
//llamamos el archivo de conexion
	include 'model/conexion.php';
// conectamos variables con los name 
	$paterno = $_POST['txtPaterno'];
	$materno = $_POST['txtMaterno'];
	$nombre = $_POST['txtNombre'];
	$parcial = $_POST['txtParcial'];
	$final = $_POST['txtFinal'];
// ejecutamos sentencia de insercion en la base de datos
	$sentencia = $bd->prepare("INSERT INTO alumno(ap_paterno,ap_materno,nombre,ex_parcial,ex_final) VALUES (?,?,?,?,?);");
	$resultado = $sentencia->execute([$paterno,$materno,$nombre,$parcial,$final]);
	

	if ($resultado === TRUE) {
		
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>
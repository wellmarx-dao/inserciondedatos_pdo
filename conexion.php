<!-- este archivo permite conectar mi web con una bd en un servidor local o remoto-->
<?php  
	$contrasena = '';
	$usuario = 'root';
	$nombrebd= 'registro';

	//cremos el objeto
	try {
		$bd = new PDO(
			'mysql:host=localhost;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>
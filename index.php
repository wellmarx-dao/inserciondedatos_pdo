	
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos fichas 2226925 y 2226927</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Bienvenido técnico por competencias laborales</h1>
	

		<!-- inicio insert -->
		<hr>
		<h3>Registrar practicantes:</h3>
		<form method="POST" action="insertar.php">
			<table>
				<tr>
					<td>Apellido paterno: </td>
					<td><input type="text" name="txtPaterno"></td>
				</tr>
				<tr>
					<td>Apellido materno: </td>
					<td><input type="text" name="txtMaterno"></td>
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				<tr>
					<td>Nota fase 3: </td>
					<td><input type="text" name="txtParcial"></td>
				</tr>
				<tr>
					<td>Nota fase 4: </td>
					<td><input type="text" name="txtFinal"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="INGRESAR ALUMNO"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>
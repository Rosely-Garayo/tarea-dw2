

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>me duele la cabeza</title>
</head>
<body>
	<?php
	session_start();
	?>
	<?php
	if (!$_SESSION['persona']) {
		$_SESSION['persona']=[];
	}
		array_push($_SESSION['persona'], $_POST);

	?>

<center><h1> FORMULARIO</h1></center>
<div id="form" class="container">
<form action="formulario.php" method="post" name="frm">
<div class="form-outline mb-4">
  <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre"<br>
</div>
<div class="form-outline mb-4">
  <input type="text" name="apellido" class="form-control" placeholder="Ingrese el apellido"<br>
</div>
<div class="form-outline mb-4">
  <input type="date" name="fenac" class="form-control" data-date-format="DD/MMM/YYY"placeholder="Ingrese el fecha de nacimiente"><br>
</div>
  <input type="submit" name="enviar" value="ENVIAR">
	<input type="submit" name="mostrar" value="MOSTRAR">
	<input type="submit" name="borrar" value="BORRAR">
</form>
<?php

if (isset($_POST["enviar"])) {
  array_pop($_POST); // eliminamos el último elemento del array que pertenece al botón de mostrar
  foreach($_POST as $clave => $valor) {
  $_SESSION[$clave] = $valor;

  }

}
if(isset($_POST['mostrar']))
{
	echo 	"<table  class="."table".">
			<div class="."container".">
				<thead>
				  	<tr id="."tab_cabe".">
					    <th>Nombre</th>
					    <th>Apellido</th>
					    <th>Nacimiento</th>
					</tr>
				</thead>
				<tbody id="."tab_datos".">
					<tr>";
					for ($i=0; $i<count($_SESSION['persona']) ; $i++) {
							echo "<td>".$_SESSION['persona'][$i]['nombre']."</td><td>".$_SESSION['persona'][$i]['apellido']."</td><td>".$_SESSION['persona'][$i]['fenac']."</td>"."</tr>";
						}
				echo "</tbody>
			</div>
		</table>";
}
if(isset($_POST['borrar']))
{
	session_destroy();
}

 ?>
</div>


</table>
</body>
</html>

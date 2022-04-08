<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traea3-Equipo2</title>
	<!-- CDN Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="bg-success nav navbar navbar-expand-lg">
	<div class="nav">
		<a class="text-white nav-link" href="index.php">Registros</a>
	</div>	
</nav>
<div class="container">
	<div class="row my-5 py-5">
		<div class="col-md-4"></div>
		<div class="card col-md-4 shadow">
			<div class="card-title">
				<i class="fas fa-arrow-back"></i>Registro de Mascotas :)
				<form method="POST" name="form-work" action="accion.php">
					<div class="card-body">
							<label>Nombre del Dueño:</label>
							<input class="form-control" type="text" name="ownwer_name" required>
							<label>Nombre de la Mascota:</label>
							<input class="form-control" type="text" name="pet_name" required>
							<label>Descripción:</label><br>
							<textarea class="form-control" style="height:200px;" name="description" required></textarea>					
					</div>
					<button class="btn btn-sm btn-success" type="submit">Guardar</button>
					<a href="registros.php" class="btn btn-sm btn-warning">Regresar</a>
				</form>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<footer class="bg-dark position-absolute top-50 start-100 translate-middle">
	
</footer>
</body>
</html>
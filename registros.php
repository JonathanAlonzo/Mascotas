<?php 
include 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM pet_list";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traea3-Equipo3</title>
	<!-- CDN Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="bg-success nav navbar navbar-expand-lg">
	<div class="nav">
		<a class="text-white nav-link" href="registrar.php">Registrar</a>
		<a class="text-white nav-link" href="index.html">Salir</a>
	</div>	
</nav>
<div class="container">
	<div class="row my-5 py-5">
		<div class="card">
			<div class="card-title">
				<i class="fas fa-arrow-back"></i>Registro de Mascotas :)
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead class="border">
							<th>Nombre (Dueño)</th>
							<th>Nombre (Mascota)</th>
							<th>Descripción de la mascota</th>
							<th>Acciones</th>
						</thead>
						<tbody class="border">
							<?php foreach($usuarios as $usuario){ ?>
								<tr>
									<td><?php echo $usuario['ownwer_name']?></td>
									<td><?php echo $usuario['pet_name']?></td>
									<td><?php echo $usuario['description']?></td>
									<td>
										<button class="btn btn-sm btn-warning">Editar</button>
										<button class="btn btn-sm btn-danger">Eliminar</button>
									</td>			
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="bg-dark position-absolute top-50 start-100 translate-middle">
	
</footer>
</body>
</html>
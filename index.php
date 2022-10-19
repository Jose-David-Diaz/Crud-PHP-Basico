<!-- Codigo PHP -->
<?php
	include("conexion.php");
	$conectar = conectar();

	$sql = "SELECT * FROM persona";
	$consulta = mysqli_query($conectar, $sql);
?>
<!-- Codigo HTML -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="CRUD con PHP, MySQL, HTML, Bootstrap" content="">
    <meta name="Jose Diaz" content="">
    <title>CRUD v1.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 container mt-5">
           <form action="agregar.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Ingresar datos</h1>
            <div class="mb-3">
              <input type="text" class="form-control" name="cc" placeholder="Cedula">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
            <div class="mb-3">
              <input type="number" class="form-control" name="edad" placeholder="Edad">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="direccion" placeholder="Direccion">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="telefono" placeholder="Telefono">
            </div>
            <input class="w-100 btn btn-primary" type="submit" value="Guardar">
          </form>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10">
        <div class="pt-3 pb-2 mb-3">
        </div>

        <h2>Listado de personas</h2>
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Cedula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            		while ($fila = mysqli_fetch_array($consulta)) {
            			// code...
            	?>
              <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['cc']?></td>
                <td><?php echo $fila['nombre']?></td>
                <td><?php echo $fila['apellido']?></td>
                <td><?php echo $fila['edad']?></td>
                <td><?php echo $fila['direccion']?></td>
                <td><?php echo $fila['telefono']?></td>
                <td>
                	<a href="vista_editar.php?id=<?php echo $fila['id'] ?>" class="btn btn-outline-success">
                		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  					  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
  					</svg>
                	</a>
                </td>
                <td>
                	<a href="eliminar.php?id=<?php echo $fila['id'] ?>" class="btn btn-outline-danger">
                		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  					  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
  					</svg>
                	</a>
                </td>
              </tr>
              <?php
              	}
              ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>


  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M
    ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="assets/dashboard.js"></script>
  </body>
</html>

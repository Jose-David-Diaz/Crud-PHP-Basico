<!-- Codigo PHP -->
<?php 
    include("conexion.php");
    $conecta = conectar();

    $identificador = $_GET['id'];

    $sql      = "SELECT * FROM persona WHERE id = '$identificador'";
    $consulta = mysqli_query($conecta,$sql);

    $fila = mysqli_fetch_array($consulta);
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
          
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10">
          <div class="pt-3 pb-2 mb-3">

          </div>
          <div class="position-sticky pt-3 container mt-5">
             <form action="editar.php" method="POST" enctype="multipart/form-data">
              <h1 class="h3 mb-3 fw-normal">Actualizar datos</h1>
              <div>
                <input type="hidden" class="form-control" name="id" value="<?php echo $fila['id']  ?>">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="cc" placeholder="Cedula" value="<?php echo $fila['cc'] ?>">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre'] ?>">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php echo $fila['apellido'] ?>">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" name="edad" placeholder="Edad" value="<?php echo $fila['edad'] ?>">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?php echo $fila['direccion'] ?>">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?php echo $fila['telefono'] ?>">
              </div>
              <input class="w-100 btn btn-primary" type="submit" value="Actualizar">
            </form>
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
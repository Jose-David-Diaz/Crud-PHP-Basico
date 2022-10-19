<?php
    include("conexion.php");

    $conecta = conectar();

    $identificador = $_POST['id'];
    $cedula        = $_POST['cc'];
    $nombre        = $_POST['nombre'];
    $apellido      = $_POST['apellido'];
    $edad          = $_POST['edad'];
    $direccion     = $_POST['direccion'];
    $telefono      = $_POST['telefono'];

    $sql      = "INSERT INTO persona VALUES('$identificador','$cedula','$nombre','$apellido','$edad','$direccion','$telefono')";
    $consulta = mysqli_query($conecta,$sql);

    if($consulta){
        Header("Location: index.php");
        
    } else 
        {
    }
?>
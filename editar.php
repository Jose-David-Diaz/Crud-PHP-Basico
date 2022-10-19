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

    $sql   = "UPDATE persona SET cc='$cedula',nombre='$nombre',apellido='$apellido',edad='$edad',direccion='$direccion',telefono='$telefono' WHERE id='$identificador'";
    $consulta = mysqli_query($conecta,$sql);

    if($consulta){
        Header("Location: index.php");
    }
?>
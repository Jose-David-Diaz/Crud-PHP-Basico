<?php
    include("conexion.php");
    $conecta = conectar();

    $identificador = $_GET['id'];

    $sql      = "DELETE FROM persona WHERE id = '$identificador'";
    $consulta = mysqli_query($conecta,$sql);

    if($consulta){
        Header("Location: index.php");
    }
?>
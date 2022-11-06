<?php

    include "conexionbd.php";
    conectarbd();

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $carnet = $_POST['carnet'];
    $fechaNac = $_POST['fechaNac'];
    $direccion = $_POST['direccion'];
    $numero = $_POST['numero'];
    $ciudad = $_POST['ciudad'];
    $zona = $_POST['zona'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $nomb1 = $_POST['nomb1'];
    $telf1 = $_POST['telf1'];
    $nomb2 = $_POST['nomb2'];
    $telf2 = $_POST['telf2'];
    
    $sql = "INSERT INTO clientes (idCliente, nombres, apellidos, carnet, fechaNac, direccion, numero, ciudad, zona, correo, telefono, refNomb1, refTelf1, refNomb2, refTelf2) 
    VALUES (NULL, '$nombres', '$apellidos', '$carnet', '$fechaNac', '$direccion', '$numero', '$ciudad', '$zona', '$correo', '$telefono', '$nomb1', '$telf1', '$nomb2', '$telf2')";

    //Ejecutar Consulta
    $consulta = mysqli_query ($conex,$sql);
?>

    <div class="alert alert-success">
        <strong>Registro Exitoso!</strong> Datos guardados en el sistema
    </div>

<?php 
?>
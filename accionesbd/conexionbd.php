<?php
    //Datos para enlazar con mysql bd
    $servidor = "localhost";
    $usuariobd = "root";
    $password = "";
    $db = "ejemplo";

    $conex = mysqli_connect($servidor, $usuariobd, $password, $db);

function conectarbd(){
    $servidor = "localhost";
    $usuariobd = "root";
    $password = "";
    $db = "ejemplo";

    $conex = mysqli_connect($servidor, $usuariobd, $password, $db);

    if(!$conex){
        die("Conexion fallido".mysqli_connect_error());
    }
}

?>

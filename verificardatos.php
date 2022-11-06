<?php
    // Datos para enlazar con mysql bd
    $servidor = "localhost";
    $usuariobd = "root";
    $password = "";
    $bd = "ejemplo";

    $conex = mysqli_connect($servidor, $usuariobd, $password, $bd);

    //Obteniendo valores
    $usu = $_POST['usu'];
    $passw = $_POST['passw'];

    //Consulta
    $consultasql = "select usuario, passw from usuario where usuario='$usu' and passw='$passw'";
    $ejecutarconsulta = mysqli_query($conex, $consultasql);

    if(mysqli_num_rows($ejecutarconsulta)>0){
    ?>
        <script>
            window.location.href = "http://localhost:9095/proyectoProgaWeb/index2.html";
        </script>
        <?php
    }
    else{
        echo "<p id='sinresultado'>El usuario no fue encontrado, por favor vuelva a ingresar sus datos</p>";
    }

    mysqli_close($conex);

?>
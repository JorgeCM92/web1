<?php

include "accionesbd/conexionbd.php";
conectarbd();
//echo "ingreso";
$idCliente3 = $_POST['idClien'];

    $nombres3 = $_POST['nombres'];
    $apellidos3 = $_POST['apellidos'];
    $carnet3 = $_POST['carnet'];
    $fechaNac3 = $_POST['fechaNac'];
    $direccion3 = $_POST['direccion'];
    $numero3 = $_POST['numero'];
    $ciudad3 = $_POST['ciudad'];
    $zona3 = $_POST['zona'];
    $correo3 = $_POST['correo'];
    $telefono3 = $_POST['telefono'];
    $nomb13 = $_POST['refNomb1'];
    $telf13 = $_POST['refTelf1'];
    $nomb23 = $_POST['refNomb2'];
    $telf23 = $_POST['refTelf2'];

    /*********actualizar**/
    $sqlupdate = "UPDATE clientes SET nombres = '$nombres3', apellidos = '$apellidos3', carnet = '$carnet3',
     fechaNac = '$fechaNac3', direccion = '$direccion3', numero = '$numero3', ciudad = '$ciudad3', zona = '$zona3',
    correo = '$correo3', telefono ='$telefono3', refNomb1 ='$nomb13', refTelf1 = '$telf13', refNomb2 = '$nomb23', refTelf2 ='$telf23'
    WHERE idCliente = '$idCliente3'";
    
    $ejecutarupdate = mysqli_query($conex,$sqlupdate);

    //mostrar tabla actualizada
    $sql = "select idCliente, nombres, apellidos, carnet, direccion, telefono from clientes ";
    $consulta3 = mysqli_query($conex,$sql);



?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Carnet</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($fila = mysqli_fetch_assoc($consulta3)){
                                echo "<tr>";
                                    $idCliente3 = $fila['idCliente'];

                                    echo "<td>".$fila['nombres']."</td>";
                                    echo "<td>".$fila['apellidos']."</td>";
                                    echo "<td>".$fila['carnet']."</td>";
                                    echo "<td>".$fila['direccion']."</td>";
                                    echo "<td>".$fila['telefono']."</td>";
                            ?>
                            <td class="align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#actualizar" onClick="actualizarCliente(<?php echo $idCliente3;?>)"><i class="fas fa-user-edit"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>

                              </div>
                            </td>
                          </tr>
                        <?php        
                        }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Carnet</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th></th>
                    </tr>
                    </tfoot>
                  </table>
<?php
    include "accionesbd/conexionbd.php";
    conectarbd();
    
    $idCliente3 = $_POST['idClien'];

    /*********eliminar**/

    $sqldelete = "delete from clientes where idCliente=".$idCliente3."";

    $ejecutardelete = mysqli_query($conex,$sqldelete);

    /*actualizar tabla*/
    $sqlmostrar3 = "select idCliente, nombres, apellidos, carnet, direccion, telefono from clientes ";
    $consulta3 = mysqli_query($conex,$sqlmostrar3);


    
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
                            while($fila3 = mysqli_fetch_assoc($consulta3)){
                                echo "<tr>";
                                    $idCliente3 = $fila3['idCliente'];

                                    echo "<td>",$fila3['nombres']."</td>";
                                    echo "<td>",$fila3['apellidos']."</td>";
                                    echo "<td>",$fila3['carnet']."</td>";
                                    echo "<td>",$fila3['direccion']."</td>";
                                    echo "<td>",$fila3['telefono']."</td>";
                            ?>
                            <td class="align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-warning" data-toggle='modal' data-target='#update' onClick="actualizarCliente(<?php echo $idCliente3;?>)"><i class="fas fa-user-edit"></i> Editar</a>
                                <a href="#" class="btn btn-danger" data-toggle='modal' data-target='#' onClick="eliminarCliente(<?php echo $idCliente3;?>)"><i class="fas fa-trash"></i>Eliminar</a>

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
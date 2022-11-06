<?php
    include "accionesbd/conexionbd.php";
    conectarbd();
    //echo "ingreso";
    $idC = $_POST['idClien'];

    $consultaActualizar = "select * from clientes where idCliente='$idC'";
    $ejecutar = mysqli_query($conex,$consultaActualizar);
    //echo "consulta";
    while($fila1 = mysqli_fetch_assoc($ejecutar)){
        $idCliente1 = $fila1['idCliente'];
      
?>

 <div class="modal-body">
    <form action="">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombres:</label>
                    <input type="text" class="form-control"value="<?php echo $fila1['nombres'];?>" id="nombres1" placeholder="Nombres">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Apellidos:</label>
                    <input type="text" class="form-control" value="<?php echo $fila1['apellidos'];?>" id="apellidos1" placeholder="Apellidos">
                  </div>
                  <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Carnet Identidad:</label>
                            <input type="text" class="form-control" value="<?php echo $fila1['carnet'];?>" id="carnet1" placeholder="Carnet Identidad">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label>Fecha Nacimiento:</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input type="text" value="<?php echo $fila1['fechaNac'];?>" id="fechaNac1" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Direccion:</label>
                            <input type="text" class="form-control" value="<?php echo $fila1['direccion'];?>" id="direccion1" placeholder="Direcccion">
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">N°:</label>
                            <input type="text" class="form-control" value="<?php echo $fila1['numero'];?>" id="numero1" placeholder="N°">
                          </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-7">
                        <div class="form-group">
                            <label>Ciudad:</label>
                            <select id="ciudad1" class="form-control select2" name="ciudad" style="width: 100%;">
                              <option value="<?php echo $fila1['ciudad'];?>"><?php echo $fila1['ciudad'];?></option>
                              <option value="Santa Cruz">Santa Cruz</option>
                              <option value="La Paz">La Paz</option>
                              <option value="Cochabamba">Cochabamba</option>
                              <option value="Tarija">Tarija</option>
                              <option value="Potosi">Potosi</option>
                              <option value="Chuquisaca">Chuquisaca</option>
                              <option value="Oruro">Oruro</option>
                              <option value="Beni">Beni</option>
                              <option value="Pando">Pando</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Zona:</label>
                            <input type="text" class="form-control"  value="<?php echo $fila1['zona'];?>" id="zona1" placeholder="Zona">
                          </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                        <label for="examplecorreo">Correo electronico:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email"  value="<?php echo $fila1['correo'];?>" class="form-control" id="correo1" placeholder="Correo electronico">
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="exampletelefono">Telefono:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" value="<?php echo $fila1['telefono'];?>" id="telefono1" placeholder="Telefono" maxlength="8">
                        </div>
                    </div>
                  </div>
                <div class="card card-success">
                    <div class="card-header">
                      
                        <h3 class="card-title">Contactos Referencia</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombres y Apellidos:</label>
                                <input type="text" class="form-control"  value="<?php echo $fila1['refNomb1'];?>" id="nomb01" placeholder="Nombres y Apellidos">
                              </div>
                        </div>
                        <div class="col-3">
                            <label for="exampletelefono">Telefono:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control"  value="<?php echo $fila1['refTelf1'];?>"  id="telf01" placeholder="Telefono" maxlength="8">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombres y Apellidos:</label>
                                <input type="text" class="form-control" value="<?php echo $fila1['refNomb2'];?>" id="nomb02" placeholder="Nombres y Apellidos">
                              </div>
                        </div>
                        <div class="col-3">
                            <label for="exampletelefono">Telefono:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $fila1['refTelf2'];?>" id="telf02" placeholder="Telefono" maxlength="8">
                            </div>
                        </div>
                    </div>
                </div>
    </form>
 </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="ejecutarUpdate(<?php echo $idCliente1;?>)">Actualizar</button>
    </div>

<?php
    }
?>
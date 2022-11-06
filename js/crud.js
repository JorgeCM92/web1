function registrarCliente(){

    $(document).ready(function () {
        //Obtener valores
        var nombres = $('#nombres').val();
        var apellidos = $('#apellidos').val();
        var carnet = $('#carnet').val();
        var fechaNac = $('#fechaNac').val();
        var direccion = $('#direccion').val();
        var numero = $('#numero').val();
        var ciudad = $('#ciudad').val();
        var zona = $('#zona').val();
        var correo = $('#correo').val();
        var telefono = $('#telefono').val();
        var nomb1 = $('#nomb1').val();
        var telf1 = $('#telf1').val();
        var nomb2 = $('#nomb2').val();
        var telf2 = $('#telf2').val();

        $.post("accionesbd/registrarcliente.php", {
            nombres: nombres, apellidos: apellidos, carnet: carnet,
            fechaNac: fechaNac, direccion: direccion, numero: numero,
            ciudad: ciudad, zona: zona, correo: correo, telefono: telefono, nomb1: nomb1,
            telf1: telf1, nomb2: nomb2, telf2: telf2 }, function (result) {
            $("#respuesta").html(result);
            $("#respuesta").show();
        });
    });
}

function actualizarCliente(idreg){

    let idClien = idreg;
        $.post("actualizarCliente.php",{idClien:idClien},function(result){
            $("#contenidoclienteupdate").html(result);
            $("#contenidoclienteupdate").show();
        });
}

function ejecutarUpdate(cliente) {
    //alert('update '+paciente);
    var idCliente1 = cliente;
    var nombres1 = $('#nombres1').val();
    var apellidos1 = $('#apellidos1').val();
    var carnet1 = $('#carnet1').val();
    var fechaNac1 = $('#fechaNac1').val();
    var direccion1 = $('#direccion1').val();
    var numero1 = $('#numero1').val();
    var ciudad1 = $('#ciudad1').val();
    var zona1 = $('#zona1').val();
    var correo1 = $('#correo1').val();
    var telefono1 = $('#telefono1').val();
    var nomb01= $('#nomb01').val();
    var telf01 = $('#telf01').val();
    var nomb02 = $('#nomb02').val();
    var telf02 = $('#telf02').val();

    $.post("ejecutarUpdateCliente.php", { idClien: idCliente1,
        nombres: nombres1, apellidos: apellidos1, carnet: carnet1,
        fechaNac: fechaNac1, direccion: direccion1, numero: numero1,
        ciudad: ciudad1, zona: zona1, correo: correo1, telefono: telefono1, refNomb1: nomb01,
        refTelf1: telf01, refNomb2: nomb02, refTelf2: telf02
    }, function (result) {
        $("#actualizarTabla").html(result);
        $("#actualizarTabla").show();
    });

}

function eliminarCliente(idCli) {

    var idCliente4 = idCli;
    $.post("deleteCliente.php", { idClien: idCliente4 }, function (result) {
        $("#actualizarTabla").html(result);
        $("#actualizarTabla").show();
    });

}
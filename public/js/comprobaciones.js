
//comprueba que el telefono sea español, empiece por 6-7-8-9 y que tenga los dígitos adecuados

function comprobarTelefono(){
    $("#telefono").keyup(function (event) {
        let telefono = $("#telefono").val();


        let regex = /^(\+34|0034|34)?[6|7|8|9][0-9]{8}$/;

        if (regex.test(telefono)) {
            $("#telefono").removeClass('is-invalid');
            $("#telefono").addClass('is-valid');
            $("#crear").prop('disabled', false);
        } else {
            $("#telefono").removeClass('is-valid');
            $("#telefono").addClass('is-invalid');
            $("#crear").prop('disabled', true);
        }
    });
}
function comprobarHora(){
    $("#hora_peticion").keyup(function (event) {
    let hora = $("#hora_peticion").val();
    let regex = /^([01]?[0-9]|2[0-3]):[0-5][0-9]$/;

    if (regex.test(hora)) {
        $("#hora_peticion").removeClass('is-invalid');
        $("#hora_peticion").addClass('is-valid');
        $("#crear").prop('disabled', false);
    } else {
        $("#hora_peticion").removeClass('is-valid');
        $("#hora_peticion").addClass('is-invalid');
        $("#crear").prop('disabled', true);
    }
});
}
function comprobacionPrecio(){
    $("#precio").keyup(function (event) {
        let precio = $("#precio").val();
        let regex = /^[0-9]+([,][0-9]{1,2})?$/;

        if (regex.test(precio)) {
            $("#precio").removeClass('is-invalid');
            $("#precio").addClass('is-valid');
            $("#crear").prop('disabled', false);
        } else {
            $("#precio").removeClass('is-valid');
            $("#precio").addClass('is-invalid');
            $("#crear").prop('disabled', true);
        }
    });
}
function comprobacionDescuento(){
    $("#descuento").keyup(function (event) {
        let descuento = $("#descuento").val();
        let regex = /^[0-9][0-9]?$|^100$/;

        if (regex.test(descuento)) {
            $("#descuento").removeClass('is-invalid');
            $("#descuento").addClass('is-valid');
            $("#crear").prop('disabled', false);
        } else {
            $("#descuento").removeClass('is-valid');
            $("#descuento").addClass('is-invalid');
            $("#crear").prop('disabled', true);
        }
    });
}
function comprobacionPrecioProveedor(){
    $("#precio_proveedor").keyup(function (event) {
        let precio_proveedor = $("#precio_proveedor").val();
        let regex = /^[0-9]+([,][0-9]{1,2})?$/;

        if (regex.test(precio_proveedor)) {
            $("#precio_proveedor").removeClass('is-invalid');
            $("#precio_proveedor").addClass('is-valid');
            $("#crear").prop('disabled', false);
        } else {
            $("#precio_proveedor").removeClass('is-valid');
            $("#precio_proveedor").addClass('is-invalid');
            $("#crear").prop('disabled', true);
        }
    });
}
function comprobacionPeso(){
    $("#peso").keyup(function (event) {
        let peso = $("#peso").val();
        let regex = /^[0-9]+([,][0-9]{1,2})?$/;

        if (regex.test(peso)) {
            $("#peso").removeClass('is-invalid');
            $("#peso").addClass('is-valid');
            $("#crear").prop('disabled', false);
        } else {
            $("#peso").removeClass('is-valid');
            $("#peso").addClass('is-invalid');
            $("#crear").prop('disabled', true);
        }
    });
}
function comprobacionTamano(){
    $("#peso").keyup(function (event) {
        let Tamano = $("#Tamano").val();
        let regex = /^[0-9]?[0-9]?[0-9]?$|^1000$/;

        if (regex.test(Tamano)) {
            $("#Tamano").removeClass('is-invalid');
            $("#Tamano").addClass('is-valid');
            $("#crear").prop('disabled', false);
        } else {
            $("#Tamano").removeClass('is-valid');
            $("#Tamano").addClass('is-invalid');
            $("#crear").prop('disabled', true);
        }
    });
}

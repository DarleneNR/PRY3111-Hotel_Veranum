$(document).ready(function () {
    /* Servicios Extras */
    $("#form-actualizar-serv").validate({
        rules: {
            nombre_serv: { required: false, minlength: 4, maxlength: 150},
            precio_serv: { required: false, min: 1000, maxlength: 400000},
            descripcion: { required: false, minlength: 5, maxlength: 300}
        },
        messages: {
            nombre_serv: "Debe introducir un nombre válido.",
            precio_serv: "Debe introducir un precio válido.",
            descripcion: "Debe introducir una descripción válida."
        },
        errorElement : 'span'
    });
    //Redirección a página anterior
    $('#volver_serv').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/menu_serv_extras.php";
    });

    /* Habitaciones */
    $('#form-actualizar-hab').validate({
        rules: {
            ac_nombre_hab: {required: true},
            ac_cant_camas: {required: true},
            ac_cant_bannos: {required: true},
            ac_precio: {required: true, min: 1000, maxlength: 400000},
            ac_descripcion: {required: false, minlength: 5, maxlength: 300}
        },
        messages: {
            nombre_hab: "El campo Tipo Habitación es obligatorio.",
            cant_camas: "El campo Cantidad Camas es obligatorio.",
            cant_bannos: "El campo Cantidad Baños es obligatorio.",
            precio_hab: "El campo Precio es obligatorio.",
        },
        errorElement : 'span',
    });
    //Redirección a página anterior
    $('#volver_hab').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/menu_habitaciones.php";
    });

    /* Descuentos */
    $('#form-actualizar-desc').validate({
        rules: {
            ac_nombre_desc: { required: true, minlength: 4, maxlength: 150},
            ac_porc_desc: { required: true, min: 0.999, maxlength: 100},
            ac_fecha_ini_desc: { required: true, minlength: 5, maxlength: 300},
            ac_fecha_fin_desc: { required: true, minlength: 5, maxlength: 300},
        },
        messages: {
            nombre_desc: "El campo Nombre es obligatorio.",
            porc_desc: "El campo Porcentaje es obligatorio.",
            fecha_ini_desc: "El campo Fecha Inicio es obligatorio.",
            fecha_fin_desc: "El campo Fecha Término es obligatorio.",
        },
        errorElement : 'span',
    });
    //Redirección a página anterior
    $('#volver_desc').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/menu_descuentos.php";
    });

    /* Promociones */
    $('#form-actualizar-prom').validate({
        rules: {
            ac_precio_min: {min: 4, maxlength: 150},
            ac_precio_max: {min: 4, maxlength: 100},
            ac_cant_porc:  {min: 1, maxlength: 300},
        },
        messages: {
            ac_precio_min: "El campo precio minimo es obligatorio.",
            ac_precio_max: "El campo precio maximo es obligatorio.",
            ac_cant_porc: "El campo cantidad de porcentaje es obligatorio.",
        },
        errorElement : 'span',
    });
    //Redirección a página anterior
    $('#volver_prom').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/menu_promociones.php";
    });
});
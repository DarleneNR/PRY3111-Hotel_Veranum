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
            nombre_hab: { required: true, minlength: 4, maxlength: 150},
            precio_hab: { required: true, min: 1000, maxlength: 400000},
            descripcion: { required: true, minlength: 5, maxlength: 300}
        },
        messages: {
            nombre_hab: "El campo Nombre es obligatorio.",
            precio_hab: "El campo Precio es obligatorio.",
            descripcion: "El campo Descripción es obligatorio."
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
            nombre_desc: { required: true, minlength: 4, maxlength: 150},
            porc_desc: { required: true, min: 0.999, maxlength: 100},
            fecha_ini_desc: { required: true, minlength: 5, maxlength: 300},
            fecha_fin_desc: { required: true, minlength: 5, maxlength: 300},
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
// Promociones
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
    $('#volver_desc').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/menu_promociones.php";
    });
});
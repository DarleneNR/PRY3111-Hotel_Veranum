$(document).ready(function () {
    /* Servicios Extras */
    $('#form-agregar-serv').validate({
        rules: {
            nombre_serv: { required: true, minlength: 4, maxlength: 150},
            precio_serv: { required: true, min: 1000, maxlength: 400000},
            descripcion: { required: true, minlength: 5, maxlength: 300}
        },
        messages: {
            nombre_serv: "El campo Nombre es obligatorio.",
            precio_serv: "El campo Precio es obligatorio.",
            descripcion: "El campo Descripción es obligatorio."
        },
        errorElement : 'span',
    });
    //Redirección a página anterior
    $('#volver_serv').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/menu_serv_extras.php";
    });
    
    /* Habitaciones */
    $('#form-agregar-hab').validate({
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
    $('#form-agregar-desc').validate({
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





    /* $('#agregar-').click(function(){
        $('#confirmarAgregar').show();
    }); */
});
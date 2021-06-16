$(document).ready(function () {
    /* Servicios Extras */
    $("#form-agregar-serv").validate({
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
    
});
$(document).ready(function () {
    $("#form-actualizar").validate({
        rules: {
            nombre_hab: { required: false, minlength: 4, maxlength: 150},
            precio_hab: { required: false, min: 1000, maxlength: 400000},
            descripcion: { required: false, minlength: 5, maxlength: 300}
        },
        messages: {
            nombre_hab: "Debe introducir un nombre válido.",
            precio_hab: "Debe introducir un precio válido.",
            descripcion: "Debe introducir una descripción válida."
        },
        errorElement : 'span'
    });

    //Redirección a página anterior
    $('#volver').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/menu_habitaciones.php";
    });
});
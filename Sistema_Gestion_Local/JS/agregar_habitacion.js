$(document).ready(function () {
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
    
    /* $('#agregar').click(function(){
        $('#confirmarAgregar').show();
    }); */

    //Redirección a página anterior
    $('#volver').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sistema_Gestion_Local/menu_habitaciones.php";
    });
});
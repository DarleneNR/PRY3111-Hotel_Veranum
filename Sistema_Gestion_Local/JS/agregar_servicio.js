$(document).ready(function () {
    $('#form-agregar').validate({
       
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
    
    /* $('#agregar').click(function(){
        $('#confirmarAgregar').show();
    }); */

    //Redirección a página anterior
    $('#volver').click(function(){
        location.href = "menu_serv_extras.php";
    });
});
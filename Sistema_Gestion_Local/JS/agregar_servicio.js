$(document).ready(function () {
    $("#form-agregar").validate({
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
        errorElement : 'span'
    });

    /*Redirección a página anterior*/
    $("#reset").click(function(){
        location.href = "serv_extras.html";
    });
});
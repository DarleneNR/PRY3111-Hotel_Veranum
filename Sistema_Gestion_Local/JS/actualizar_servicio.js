$(document).ready(function () {
    $("#form-actualizar").validate({
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
    $("#volver").click(function(){
        location.href = "menu_serv_extras.php";
    });
});
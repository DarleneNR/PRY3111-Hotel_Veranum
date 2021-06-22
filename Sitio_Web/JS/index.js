$(document).ready(function() {
    $("#contacto").validate({
        rules: {
            name: {required: true, minlength: 6, maxlength: 150},
            email: {required: true, min: 10, maxlength: 150},
            phone: {required: true, minlength: 9, maxlength: 9},
            message: {required: true, minlength: 5, maxlength: 200}
        },
        messages: {
            name: "El campo Nombre es obligatorio.",
            email: "El campo Precio es obligatorio.",
            phone: "El campo Descripción es obligatorio.",
            message: "El campo mensaje es obligatorio"
        },
        errorElement : 'span',
    });
     $("#reset").click(function(){
        $("span").fadeOut(0.1)
    }); 
});

$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
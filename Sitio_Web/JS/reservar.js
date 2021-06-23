$(document).ready(function () {
    /* Servicios Extras */
    $('#form-reserva').validate({
        rules: {
            fname: {required: true, minlength: 3, maxlength: 150},
            lname: {required: true, minlength: 6, maxlength: 150},
            telf: {required: true,  minlength: 8, maxlength: 9},
            email: {required: true,  minlength: 20, maxlength: 100},
            init: {required: true},
            init_time: {required: true},
            finish: {required: true},
            finish_time: {required: true},
            cant_adultos: {required: true, min: 1},
            cant_ninos1: {required: false, min: 0},
            cant_ninos2: {required: false, min: 0},
            tipo_hab: {required: true},
            tipo_serv: {required: true},
        },
        messages: {
            fname: "El campo Nombre es obligatorio.",
            lname: "El campo Apellido es obligatorio.",
            telf: "El campo Celular / Teléfono es obligatorio.",
            email: "El campo Email es obligatorio",
            init: "El campo Fecha de Inicio es obligatorio.",
            init_time: "El campo Hora estimada obligatorio.",
            finish: "El campo Fecha de Salida es obligatorio.",
            finish_time: "El campo Hora estimada es obligatorio.",
            cant_adultos: "El campo Adultos es obligatorio.",
            tipo_hab: "El campo Tipo Habitación es obligatorio.",
            tipo_serv: "El campo Tipo Servicio es obligatorio.",
        },
        errorElement : 'p',
    });
    //Redirección a página anterior
    $('#volver_res').click(function(){
        location.href = "index.html";
    });
});
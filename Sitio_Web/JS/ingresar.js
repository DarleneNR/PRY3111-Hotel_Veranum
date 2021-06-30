$(document).ready(function () {
    /* Registro de Cliente */
    $('#form-registration').validate({
        rules: {
            num_rut: {required: true, minlength: 7, maxlength: 13},
            dv_rut: {required: true, maxlength: 1},
            nombre: {required: true, minlength: 3, maxlength: 40},
            apellido: {required: true, minlength: 5, maxlength: 40},
            fec_nac: {required: true},
            email: {required: true, minlength: 13, maxlength: 30},
            username: {required: true, minlength: 8, maxlength: 20},
            pass: {required: true, minlength:7, maxlength: 10}
        },
        messages: {
            num_rut: "El campo Número Rut es obligatorio.",
            dv_rut: "El campo Dígito Verificador es obligatorio.",
            nombre: "El campo Nombre es obligatorio.",
            apellido: "El campo Apellidos es obligatorio.",
            fec_nac: "El campo Fecha de Nacimiento es obligatorio.",
            email: "El campo Email es obligatorio.",
            username: "El campo Nombre de Usuario es obligatorio.", 
            pass: "El campo Constraseña es obligatorio."
        },
        errorElement : 'span',
    });

    /* Inicio de Sesión */
    $('#form-login').validate({
        rules: {
            username_login: {required: true, minlength: 8, maxlength: 20},
            pass_login: {required: true, minlength:7, maxlength: 10}
        },
        messages: {
            username_login: "Debe ingresar su nombre de usuario",
            pass_login: "Debe ingresar su contraseña"
        },
        errorElement : 'label',
    });

    //Redirección a página anterior
    $('#volver').click(function(){
        location.href = "/PRY3111-Hotel_Veranum/Sitio_Web/index.html";
    });
});




/* Animación para Sección de Ingreso */
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
    var $this = $(this),
        label = $this.prev('label');
        if (e.type === 'keyup') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.addClass('active highlight');
            }
      } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight'); 
            } else {
                label.removeClass('highlight');   
            }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
                label.removeClass('highlight'); 
            } 
        else if( $this.val() !== '' ) {
                label.addClass('highlight');
            }
      }
  });
  
$('.tab a').on('click', function (e) {
    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
});
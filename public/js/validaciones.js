/* --- Validaciones usando ../js/bootstrap/bootstrapValidator.js ---
 * Documentación bootstrapValidator: https://web.archive.org/web/20140819055124/http://bootstrapvalidator.com/
 *
 * Sebastián Mon - Leg. 114490
 * Arian Acevedo - Leg. FAI 1157
 * Agustín Cerda - Leg. 71853
 * Programación Web Avanzada 2021 - UNCo Neuquén
 */

// Función para usar Bootstrap validator el pulsar submit
$(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
});


// --- Validaciones TP2ej4 con plugin bootstrapValidator ---
$('#formBusqueda, #formInscripcion, #formRubro').bootstrapValidator({
    container: '#validaciones',
    excluded: [':disabled', ':hidden', ':not(:visible)'],
    feedbackIcons: {
        valid: 'fas fa-check',
        invalid: 'fas fa-times',
        validating: 'fas fa-refresh'
    },
    fields: {
        nombre: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar su nombre. '
            },
            stringLength: {
                min: 3,
                max: 150,
                message: 'El nombre debe ser mayor a 3 caracteres. '
            },
            regexp: {
                regexp: /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]+$/umg,
                message: 'El nombre contiene números o símbolos no permitidos. '
            }
        }
        },
        apellido: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar el nombre de su establecimiento. '
            },
            stringLength: {
                min: 3,
                max: 150,
                message: 'El apellido debe ser mayor a 3 caracteres. '
            },
            regexp: {
                regexp: /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]+$/umg,
                message: 'El apellido contiene números o símbolos no permitidos. '
            }
        }
        },
        empresa: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar el nombre de su empresa. '
            },
            stringLength: {
                min: 3,
                max: 150,
                message: 'La empresa debe ser mayor a 3 caracteres. '
            }
        }
        },
        titulo: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar el título. '
            },
            stringLength: {
                min: 3,
                max: 150,
                message: 'El titulo debe ser mayor a 3 caracteres. '
            }
        }
        },
        descripcion: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar la descripcion. '
            },
            stringLength: {
                min: 3,
                max: 150,
                message: 'La descripcion debe ser mayor a 3 caracteres. '
            }
        }
        }
    }
});
// Para cuando se modifique algún campo, advierta antes de salir o recargar la página:
$('#formContacto').confirmarSalir('');

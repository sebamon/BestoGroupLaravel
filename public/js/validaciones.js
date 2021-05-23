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
    excluded: [':disabled', ':hidden', ':not(:visible)'],
    feedbackIcons: {
        valid: 'fas fa-check',
        invalid: 'fas fa-times',
        validating: 'fas fa-refresh'
    },
    fields: {
        nombreDuenio: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar su nombre y apellido. '
            },
            stringLength: {
                min: 2,
                max: 150,
                message: 'El nombre debe ser mayor a 3 caracteres. '
            }
        }
        },
        nombreLugar: { // VALIDAR DE FORMA REMOTA CON AJAX (si ya existe): https://web.archive.org/web/20140813104225/http://bootstrapvalidator.com/validators/remote
        validators: {
            notEmpty: {
                message: 'Debe ingresar el nombre de su establecimiento. '
            },
            stringLength: {
                min: 2,
                max: 100,
                message: 'El nombre debe ser mayor a 2 caracteres. '
            }
        }
        },
        localidad: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar la localidad de su establecimiento. '
            },
            stringLength: {
                min: 2,
                max: 100,
                message: 'La localidad debe ser mayor a 2 caracteres. '
            }
        }
        },
        tipoLugar: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar el tipo de su establecimiento. '
            },
            stringLength: {
                min: 2,
                max: 100,
                message: 'El tipo debe ser mayor a 2 caracteres. '
            }
        }
        },
        telefono: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar su teléfono. '
            },
            regexp: {
                regexp: /^[\+]?[(]?[0-9]{3,4}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{2,6}$/i, // Basado y adaptado de: https://ihateregex.io/expr/phone
                message: 'El teléfono no tiene un formato válido. No olvide el código de área. '
            }
        }
        },
        email: {
        validators: {
            notEmpty: {
                message: 'Debe ingresar su email. '
            },
            emailAddress: {
                message: 'El email no tiene un formato válido. '
            }
        }
        },
        web: {
        validators: {
            // Campo opcional
            uri: {
                message: 'El sitio web no tiene un formato válido. No olvide incluir http:// ó https://. '
            }
        }
        }
    }
});
// Para cuando se modifique algún campo, advierta antes de salir o recargar la página:
$('#formContacto').confirmarSalir('');

$(function(){ 
    let datos;
    $.ajax({
        type: "Get",
        url: "ej3.json",
        dataType: "json",
        success: function (data){
            datos = data;
        },
        error: function (){
            alert("json not found");
        }
    }) 
    $(document).on("click", ".imagen" ,function(){
          var id =$(this).attr("id");
          let i;
          for (i=0; i<=14; i++){
                if (datos[i].Id_alojamiento == id ){
                        let resultado = datos[i];
                        $("#nombreModal").text(resultado.Nombre);
                        $("#imagenMod").attr("src",resultado.imagen);
                        $("#direccionModal").text(resultado.Direccion);
                        $("#emailModal").text(resultado.Email);
                        $("#telefonoModal").text(resultado.Telefono);
                        $("#webModal").text(resultado.Sitio_Web);
                        $('.modal-footer').html(`<a href="${resultado.Sitio_Web}" id="linkModal" class="btn btn-outline-info">Sitio web »</a>`);
                }  
                
          }
           
        });
        
        
        });


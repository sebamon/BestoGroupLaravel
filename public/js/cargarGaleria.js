$(function (){
    CargarGaleria();

   
    $('#galeria').on('click', function(){
        //idAlojamiento=$(this).idAlojamiento.val();
        console.log($(this));
        $.post('../img/TP2/rutas.json',{idAlojamiento:idAlojamiento},function(data)
        {
            galeriaModal=$('#abrirModal');
            console.log(data);

        });
    });

    function CargarGaleria(){

        $.post('../img/TP2/rutas.json',function(data){
            galeria=$('#galeria');
            galeria.html('');
            console.log(data);
           // data=JSON.parse(data);
            for(let valor of data)
            {
                console.log(valor);
                galeria.append(`<div class="col-xl-2 col-md-3 col-sm-4 zoom">
                                    <div class="miniatura">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
                                        <img src="${valor.imagenMini}" class="img-fluid img-thumbnail rounded-3" alt="Amancay"></a>
                                    </div>
                                    <h5 class="text-center">${valor.nombreAlojamiento}</h5>
                                </div>`
                );
            }
            galeria.append('<div id="abrirModal" class="modal fade" id="abrirModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> </div> <!-- Modal relleno con AJAX-->');
            galeriaModal=$('#abrirModal');
            galeriaModal.html('');
            for (let valorModal of data){
            galeriaModal.append(`<div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="nombreModal">${valorModal.nombreAlojamiento}</h4><br>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    <div class="modal-body">
                                        <img src="${valorModal.imagenGrande}" class="imagenModal img-fluid img-thumbnail rounded-3 mb-3" alt="Amancay">
                                        <p>
                                            <span class=fw-bold>Dirección: </span><span id="direccionModal">San Martín y Hernandez</span><br>
                                            <span class=fw-bold>Teléfono: </span><span id="telefonoModal">(0294)4492222</span><br>
                                            <span class=fw-bold>Email: </span><span id="emailModal">hotelamancay@elbolson.com</span><br>
                                            <span class=fw-bold>Sitio web: </span><span id="webModal">http://www.hotelamancay.com.ar/</span><br>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="http://www.hotelamancay.com.ar/" id="linkModal" class="btn btn-outline-info">Sitio web »</a>
                                    </div>
                                </div>`);
            }});
    }
    

});
 

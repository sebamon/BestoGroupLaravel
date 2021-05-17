$(function(){


  //------------------------------------------------------- INICIO EJERCICIO 1 ------------------------------------------------
  $.post('../TP2/calls/TipoAlojamiento.php',function (data){ //al iniciar cargo el primer combo con los Tipos de alojamiento
    data=JSON.parse(data);//convierto el JSON
    html=$('#TipoAlojamiento');
    html.empty();
    html.append(`<option value='0' selected>Tipo de Alojamiento</option>`);
    for(let valor of data.data)
    {
      html.append(`
        <option value='${valor.idTipoAlojamiento}'>${valor.Descripcion}</option>
      `);
    }
  })

  $('#TipoAlojamiento').on('change',function (){
    idTipoAlojamiento=$('#TipoAlojamiento').val();
    $.post('../TP2/calls/Alojamientos.php',{idTipoAlojamiento:idTipoAlojamiento},function (data){
      data=JSON.parse(data);
      html=$('#Alojamientos');
      html.empty();
      console.log('errir');
      for (let valor of data.data){
        html.append(`
          <option value='${valor.idAlojamiento}'>${valor.Nombre}</option>
        `);
      }
    });
  });
  // ------------------------------------------ FIN EJERCICIO 1 --------------------------------------------
  

  // ------------------------------------------- INICIO EJERCICIO 2 ---------------------------------------
  // Contenido de pestañas TP1ej2.php:
  $("#nav-comarca-tab").on('click', function () {
    // console.log("Click hecho en comarca!");
    $("#nav-comarca").load("./tabs/Tab1.txt");
  });
  $("#nav-clima-tab").on('click', function () {
    // console.log("Click hecho en clima!");
    $("#nav-clima").load("./tabs/Tab2.txt");
  });
  $("#nav-ubicacion-tab").on('click', function () {
    // console.log("Click hecho en ubicacion!");
    $("#nav-ubicacion").load("./tabs/Tab3.txt");
  });
  $("#nav-productos-tab").on('click', function () {
    // console.log("Click hecho en productos!");
    $("#nav-productos").load("./tabs/Tab4.txt");
  });

//------------------------------------------- FIN EJERCICIO 2 --------------------------------------------------


// ---------------------------------------- INICIO EJERCICIO 5 ------------------------------------------------
$('#btnListar').on('click',function(){ //Evento al boton listar Alojamientos
  $('#tListaAlojamientos').show(500);
  $tbody = $('#tListaAlojamientos tbody'); //Obtengo el cuerpo de la tabla y lo guardo en una variable
  $.post('../TP2/calls/ListarAlojamientos.php',function(data,status){ //por metodo post traigo un JSON en la variable data -> si abris ListarAlojamientos.php se puede ver el JSON
    data=JSON.parse(data);// Convierto el dato para trabajarlo como JSON
      var i = 1;
      for(let valor of data.data) //El JSON viene adentro de una clave data, por eso se accede a data. el nombre de la variable, en este caso tmb data
      {                           // foreach JSON y armo el html
        $tbody.append(`
        <tr>
          <th>${valor.idAlojamiento}</th>
          <th>${valor.Nombre}</th>
          <th>${valor.Localidad}</th>
          <th>${valor.Direccion}</th>
          <th>${valor.Descripcion}</th>
          <th>${valor.Email}</th>
          <th>${valor.Telefono}</th>
          <th><a href='${valor.Link}'>${valor.Link}</a></th>
        </tr>
  
        `);
        $('#tListaAlojamientos').addClass('text-break');//aca probaba meterle classes porque se veia feo, se puede EDITAR
      }
       $('#tListaAlojamientos').DataTable({ // antes de terminar la funcion, llamo a la funcion DataTable (esta necesita sus script)
        "destroy": true, // Estos son parametros de la funcion DataTable, destroy es para que elimine los datos cuando se vuelve a llamar la funcion
        "lengthMenu": [ 3, 5, 10], //la cantidad de elementos para mostrar
         "language": {
          "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json" // Un pluggin que te pone los textos en español
      }
      });
    });
   });

// ------------------------------------------------------- FIN EJERCICIO 5 ----------------------------------


// -------------------------------------------------------- INICIO EJERCICIO 6 ----------------------------------

$('#localidad').on('keyup',function(){
  listaLocalidad=$('#listaLocalidad');
  cadena=$('#localidad').val();
  console.log(cadena);
  console.log(listaLocalidad);

  
  
  $.post('../TP2/calls/Localidades.php',{Localidad:cadena}, function(data){
  data=JSON.parse(data);
  listaLocalidad.empty();
    for(let valor of data.data){
    listaLocalidad.append(`<option value="${valor.Localidad}">`);
    }
  });
}

);
$('#tipoLugar').on('keyup',function(){
  listaTipo=$('#listaTipoLugar');
  cadena=$('#tipoLugar').val();
  
  $.post('../TP2/calls/TipoAlojamiento.php',{Descripcion:cadena}, function(data){
  data=JSON.parse(data);
  listaTipo.empty();
    for(let valor of data.data){
      listaTipo.append(`<option value="${valor.Descripcion}">`);
    }
  });
}
);


//--------------------------------------------------------- FIN EJERCICIO 6 -----------------------------------------

});
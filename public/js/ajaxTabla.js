$(function() {
    	
$('#btnListar').on('click',function(){ //Evento al boton listar Alojamientos
$tbody = $('tbody'); //Obtengo el cuerpo de la tabla y lo guardo en una variable
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
        <th>${valor.Link}</th>
      </tr>

      `);
      $('#tListaAlojamientos').addClass('table table-dark table-hover');//aca probaba meterle classes porque se veia feo, se puede EDITAR
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
})

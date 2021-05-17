$(function() {
  Listar();
});

var Listar = function (){
  
  url='../TP2/calls/ListarAlojamientos.php';
  $.post(url,function(data){
    console.log(data);
    data2=JSON.parse(data);
    console.log(data2);
    $("#tListaAlojamientos").DataTable({

    });


  });
}






//   $('#tListaAlojamiento').DataTable({
//      serverSide: true,
//       ajax: {
//         url: '../TP2/calls/ListarAlojamientos.php',
//         type: 'POST'
//     },"column":[
//       {"data":"idAlojamiento"},
//       {"data":"Nombre"},
//       {"data.data":"Localidad"},
//       {"data.data":"Direccion"},
//       {"data.data":"Email"},
//       {"data.data":"Telefono"},
//       {"data.data":"Link"},
//     ]
// }
//     },
    
//   } );

  // $('#btnListar').DataTable({
  //   "ajax": {
  //     "method": "POST",
  //     "url":"../TP2/calls/ListarAlojamientos.php",
  //   },
  //       "column":[
  //         {"data.data":"idAlojamiento"},
  //         {"data.data":"Nombre"},
  //         {"data.data":"Localidad"},
  //         {"data.data":"Direccion"},
  //         {"data.data":"Email"},
  //         {"data.data":"Telefono"},
  //         {"data.data":"Link"},
  //       ]
  
  //   });


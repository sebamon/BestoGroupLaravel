$(function(){
  var url = '../TP2/calls/TipoAlojamiento.php';
  $.get(url,function(data, status)
  {
     $("#TipoAlojamiento").html(data);  
  });
/*

    //AJAX con get
    $('#TipoAlojamiento').on('select',function() { 
        
    var url = '../TP2/calls/TipoAlojamiento.php';
    $.get(url,function(data, status)
    {
       $("#TipoAlojamiento").html(data);  
    });
  });*/

  $("#TipoAlojamiento").on({
   /* click: function(){
      var url = '../TP2/calls/TipoAlojamiento.php';
      $.get(url,function(data, status)
      {
         $("#TipoAlojamiento").html(data);  
      });
    },*/
    click: function(){
      var url2= '../TP2/calls/Alojamientos.php?idTipoAlojamiento='+$(this).val();
      $.get(url2,function(data,status){
        $('#Alojamientos').html(data);
  
      });
    }
  });

  /*$('#TipoAlojamiento').on('change',function() { 

    var url2= '../TP2/calls/Alojamientos.php?idTipoAlojamiento='+$(this).val();

    $.get(url2,function(data,status){
      $('#Alojamientos').html(data);

    });
  });*/


/*
  //AJAX con post
    $('#pais').on("change",function() { 
     var id_pais = this.value;
     alert("El pais es " + id_pais);
     $.post("conectadb-post.php", {id_pais:id_pais},function(data,status){
      console.log(status);
      $('#provincias').html(data);
     });
    });*/
  
});
$(document).ready(function(){
	
  //Funcion ocultar todo el html y ocultar el boton

  $("#btn_ocultar").on('click', function(event) {
    event.preventDefault();
    if( $('#informacion').css('display') != 'none'){
      $('#informacion').hide();
      $("#btn_ocultar").text('Ocultar Boton');
    }
    else{
        $('#btn_ocultar').hide();
      }
  });

  //Funcion ocultar el encabezado y el primer parrafo
  
  $("#btn_ocultar_parrafo").on('click', function(event) {
    event.preventDefault();
    if( $('#intro').css('display') != 'none'){
      $('#intro').hide();
      $('#btn_ocultar_parrafo').text('Mostrar Parrafo')
    }
    else{
      $('#intro').show();
      $('#btn_ocultar_parrafo').text('Ocultar Parrafo')
    }
  });

})
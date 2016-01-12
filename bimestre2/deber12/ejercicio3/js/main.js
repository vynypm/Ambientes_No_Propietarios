$(document).ready(function(){
	
	//Pinto las filas de la tabla de rojo y ver
	$('.rojo').css('background-color','red');
	$('.verde').css('background-color','green');

	//Fución Hover
	$("#tabla").hover(function() {
		$('#mensage').text('El puntero está DENTRO de la tabla')	
	}, function() {
		$('#mensage').text('El puntero está FUERA de la tabla')
	});

	//Función Hover
	$("input").focus(function(event) {
		$("input").css('background-color','blue');
	});

	$("input").blur(function(event) {
		$("input").css('background-color','purple');
	});

})
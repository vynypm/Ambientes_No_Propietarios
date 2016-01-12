
$(document).ready(function() {

$("#formulario").validate({
	rules: {
		nombre: { 
			required: true,
			lettersonly: true
		},
		email:{
			required: true,
			email:  true,
			remote: "validar_email.php"
		},
		telefono:{
			required: true,
			digits: true,
			minlength:7
		},
		usuario:{
			required: true,
		},
		contrasena:{
			required: true,
		},
		verif_contrasena:{
			required: true,
			equalTo: "#contrasena"
		}	
	},
	messages:{
		nombre:{
			lettersonly: 'Ingrese solo letras'
		},
		telefono: {
			minlength: 'Ingrese un numero de telefono correcto'
		}
	}

	// submitHandler: function() {
 //      alert("formulario enviado");
 //    }

})



$("#btn_registrar").on('click', function(event){
	//event.preventDefault();

	if( $( "#formulario" ).valid() ) {
		var $btn = $(this).button('loading');

	$.ajax({
		url: 'rpc/procesar.php',
		type: 'POST',
		data: {
			nombre: $('#nombre').val(),
			email: $('#email').val(),
			telefono: $('#telefono').val(),
			direccion: $('#direccion').val(),
			usuario: $('#usuario').val(),
			contrasena: $('#contrasena').val(),
			verif_contrasena: $('#verif_contrasena').val(),
		},
	})
	// .done(function() {
	// 	console.log("success");
	// })
	// .fail(function() {
	// 	console.log("error");
	// })
	// .always(function() {
	// 	console.log("complete");
	// });

	.done(function(msg) {
        console.log("success");
        $("#success").html(msg)

      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("fail: " + textStatus + " " + errorThrown);
        $("#error").html(textStatus)
      })
      .always(function() {
        console.log("complete");
        $btn.button('reset');
      });
}
});




// $("#formulario").on("hide.bs.modal", function(){
//     $('#formulario')[0].reset();
//   })

});

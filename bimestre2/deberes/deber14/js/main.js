$(document).ready(function(){
	$("form#usuario").validate({
		rules:{
			nombre:{
				required:true,
			},
			email:{
				email:true,
				required:true
			},
			telefono:{
				required:true,
				minlength:7
			},
			usuario:{
				required:true,
        	remote: {

		        url: "rpc/validar_usuario.php",
		        type: "post",
		        data:{
		         
		        	usuario: function(){
		            return $('#usuario').val();
		        }

        	}


        	}
			},
			contrasena:{
				required:true,
				minlength: 3
			},
			conf_contrasena:{
				required:true,
				equalTo:"#contrasena"
			} 
		},
		messages:{
			nombre:{
				required:'Llene el campo',
			},
			email:{
				required:'Llene el campo'
			},
			telefono:{
				required:'Llene el campo',
				minlength:$.validator.format("Ingrese un telefono valido ")
			},
			usuario:{
				required:'Llene el campo',
				remote:"El usuario ya esta registrado , intente con otro"
			},
			contrasena:{
				required:'Llene el campo',
				minlength: $.validator.format("Ingrese una contraseña mas larga")
			},
			conf_contrasena:{
				
				equalTo: $.validator.format("Las contraseñas no coinciden")
			}
		}
	})

	$("#btn-enviar").on('click', function(event) {
		event.preventDefault();
		if ($("form#usuario").valid()) {

			$.ajax({
				url: 'rpc/procesar.php',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: {
					nombre: $('#nombre').val(),
					email: $('#email').val(),
					telefono:$('#telefono').val(),
					direccion:$('#direccion').val(),
					provincia:$('#provincia').val(),
					canton:$('#canton').val(),
					parroquia:$('#parroquia').val(),
					usuario:$('#usuario').val(),
					contrasena:$('#contrasena').val(),
					conf_contrasena:$('#conf_contrasena').val(),
				},
			})
			.done(function(msg) {
			    if(msg == "Mensaje enviado con éxito.")
			    	$('#mensaje').addClass('alert-success');
			    else
			        $('#mensaje').addClass('alert-danger');

			    $('#mensaje').html(msg);
			    console.log("success");
    		})
		    .fail(function() {
		      console.log("error");
		    })
		    .always(function() {
		      // $('#usuario').reset();
		      console.log("complete");
		    });
		};

	});

	$('#provincia').on('change', function(event) {
		event.preventDefault();
	  
		$.ajax({
			url: 'rpc/get_cantones.php',
			type: 'POST',
			data: {provincia: $('#provincia').val()},
	  	})
		.done(function(msg) {
			$('#canton').html(msg);
		    
			$('#parroquia').html('<option value="">Seleccione...</option>');
			console.log("success");
		})
		
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	  
	});


	$('#canton').on('change', function(event) {
		event.preventDefault();
	  
		$.ajax({
			url: 'rpc/get_parroquias.php',
			type: 'POST',
			data: {canton: $('#canton').val()},
		})
	  	.done(function(msg) {
	    	$('#parroquia').html(msg);
	    	console.log("success");
	  	})
	  	.fail(function() {
	    	console.log("error");
	  	})
	  	.always(function() {
	    	console.log("complete");
	  	});
	  
	});
})
$(document).ready(function(){
	$("form#usuario").validate({
		rules:{
			nombre:{
				required:true,
				minlength:2
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
		            return $('#txtusuario').val();
		        }

        	}


        	}
			},
			contrasenia:{
				required:true,
				minlength: 3
			},
			conf_contrasena:{
				required:true,
				equalTo:"#contrasenia"
			} 
		},
		messages:{
			nombre:{
				required:'Ingresa tu nombre',
				minlength:$.validator.format("Al menos 2 caracteres requeridos")
			},
			email:{
				required:'Ingresa el email'
			},
			telefono:{
				required:'Ingrese el telefono',
				minlength:$.validator.format("Al menos 3 caracteres requeridos")
			},
			usuario:{
				required:'Ingrese un usuario valido',
				remote:"El usuario ya esta registrado , intente con otro"
			},
			contrasenia:{
				required:'Ingrese la contraseña',
				minlength: $.validator.format("Se requiere al menos 3 caracteres")
			},
			conf_contrasena:{
				
				equalTo: $.validator.format("La contraseña no coincide")
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
					provincia:$('#txtprovincia').val(),
					canton:$('#txtcanton').val(),
					parroquia:$('#txtparroquia').val(),
					usuario:$('#txtusuario').val(),
					contrasenia:$('#contrasenia').val(),
					conf_contrasena:$('#conf_contrasena').val(),
				},
			})
			.done(function(msg) {
			    if(msg == 'Correcto')
			    	$('#mensaje').addClass('alert-success');
			    else
			        $('#mensaje').addClass('alert-danger');

			    $('#mensaje').html(msg);
			    console.log("success");

			    $('#usuario').trigger('reset');
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

	$('#txtprovincia').on('change', function(event) {
		event.preventDefault();
	  
		$.ajax({
			url: 'rpc/get_cantones.php',
			type: 'POST',
			data: {provincia: $('#txtprovincia').val()},
	  	})
		.done(function(msg) {
			$('#txtcanton').html(msg);
		    
			$('#txtparroquia').html('<option value="">Seleccione...</option>');
			console.log("success");

			
		})
		
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	  
	});


	$('#txtcanton').on('change', function(event) {
		event.preventDefault();
	  
		$.ajax({
			url: 'rpc/get_parroquias.php',
			type: 'POST',
			data: {canton: $('#txtcanton').val()},
		})
	  	.done(function(msg) {
	    	$('#txtparroquia').html(msg);
	    	console.log("success");

	    	
	  	})
	  	.fail(function() {
	    	console.log("error");
	  	})
	  	.always(function() {
	    	console.log("complete");
	  	});
	  
	});

	var campo,id; 

	$('#tabla_registro tr td').each(function(index, el) {
		$(el).on('click', function(event) {
		 	//event.preventDefault();
		 	//event.stopPropagation();
			campo=$(this).closest("td").data("campo");
			id=$(this).closest("tr").find(".id").text();
			$(this).html('<input type="text" id="modificar" value=""> <button id="guardar_' + $(this).attr("id") + '">Guardar cambios</button>  <button id="cancelar_' + $(this).attr('id') + '">Cancelar</button>');
			$('#modificar').focus();
		});

       
		$('guardar_' + $(this).attr('id')).on('click', function(event) {
	   		event.preventDefault();
	    
		    $.ajax({
		    	url:'rpc/actualizar.php',
		    	type:'post',
		    	dataType:'json',
		    	data: {

			    	valorM: $('#modificar').val(),
			    	campo:campo,
			    	id:id

		        },
		    })

		  	.done(function() {
		    	console.log("success");
		    })

		    .fail(function() {
		    	console.log("error");
		    })

		    .always(function() {
		    	console.log("complete");
		    });
	      
	   	});
   	});

	function tabla_registro(valor){
	$.ajax({
		url:'../php/buscar.php',
		type:'POST',
		data:'valor='+valor+'&boton=buscar'
	}).done(function(resp){
		//alert(resp);
		var valores = eval(resp);
		html="<table class='table table-bordered'><thead><tr><th>#</th><th>id</th><th>nombre</th><th>email</th><th>direccion</th><th>telefono</th><th>usuario<</th>/tr></thead><tbody>";
		for(i=0;i<valores.length;i++){
			html+="<tr><td>"+(i+1)+"</td><td>"+valores[i][1]+"</td><td>"+valores[i][2]+"</td><td>"+valores[i][3]+"</td><td>"+valores[i][4]+"</td><td>"+valores[i][5]+"</td><td>"+valores[i][6]+"</td><td>"+valores[i][7]+"</td></tr>";
		}
		html+="</tbody></table>"
		$("#tabla_registro").html(html);
	});
}

})
$(document).ready(function(){


	//Cargamos dinámicamente las materias

	$('select#sltnivel').change(function(event) {
		event.preventDefault();
		$.ajax({
			url: 'rpc/materia.php',
			type: 'POST',
			data: {id_nivel: $('#sltnivel').val()},
		})
		.done(function(msg) {
			console.log("success");
			$('#materias').html(msg);
			
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});


	//Checked

	$('#ch_materias input:checkbox').each(function(index, el) {
				var id_materia = $(this).val();

				$.ajax({
					url: 'rpc/checked.php',
					type: 'POST',
					data: {"id_materia": id_materia},
				})
				.done(function(msg) {
					console.log("success");
					if(msg=="true")
					{
						$('#materias input:checkbox[value='+id_materia+']').attr('checked', true);
					}
					
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			});


	//Registrar las materias seleccionadas

	var mats=[];
    $('#btn_guardar').on('click', function(e) {
        event.preventDefault();
        $('input[type=checkbox]').each(function(){
            if (this.checked) {
                mats.push($(this).val());
            }
        }); 
        $.ajax({
            url: 'rpc/matricula.php',
            type: 'POST',
           dataType:'json',
            data: {
                materias: mats,
                nivel:$('#sltnivel').val()
        }
        })
        .done(function(msg) {
            $('#mensaje').html(msg.result);
            $('#materias').html(msg.materias);
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    });

    

    $('#sltnivel').on('change',function(e) {
        event.preventDefault();
        
        $.ajax({
            url: 'rpc/conseguir_materias.php',
            type: 'POST',
            data: {
                nivel:$('#sltnivel').val()
        },
        })
        .done(function(msg) {
            $('#materias').html(msg);
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
	});

    $('#btn_cancelar').on('click',function(e){
		$('input[type=checkbox]').each(function(){
			if (this.checked) {
				$(this).removeAttr('checked');	
			}
		});
	});


});
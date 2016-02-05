
$(document).ready(function() {

  $( "form#formulario_usuario" ).validate({
    rules: {

        nombre: {
          required: true,
        },
        email: {
          
          required: true,
          remote: {
              url: "rpc/verificar_correo.php",
              type: "post"
          }
        },
        telefono: {
          
          required: true,
          number:true,
          minlength:7,
          
        },
        
        contrasena: {
          required: true,
        },

        confir_contrasena: {
          required: true,
          equalTo:"#contrasena",
        },

        usuario: {
        
          required: true,
          remote: {
              url: "rpc/verificar_user.php",
              type: "post"
          }
        }
    },


    messages: {

      nombre: {
        required: "Campo Obligatorio",
      },

      email: {
        required: "Campo Obligatorio.",
        email: "Ingrese email correcto",
        remote:$.validator.format("El email ingresado ya esta registrado")
      },

      telefono: {
        required: "Campo Obligatorio",
        number:"Ingrese valores corectos",
        minlength:$.validator.format("Ingrese un numero valido")   
      },
      
      contrasena: {
        required: "Campo Obligatorio",
      },

      confir_contrasena: {
      required: "Campo Obligatorio",
      equalTo:"Las contraseñas deben ser iguales"
      },

      usuario: {
      required: "Campo Obligatorio",
      }
   }
  });



  $('#enviar').on('click',  function(event) {
    event.preventDefault();
    if($('form#formulario_usuario').valid())
    {
      
      $.ajax({
        url: 'rpc/procesar.php',
        type: 'post',
        data: {
          nombre: $('#nombre').val(),
          email: $('#email').val(),
          telefono:$('#telefono').val(),
          direccion:$('#direccion').val(),
          usuario:$('#usuario').val(),
          provincia:$('#txtprovincia').val(),
          parroquia:$('#txtparroquia').val(),
          canton:$('#txtcanton').val(),
          contrasena:$('#contrasena').val()
        },
      })

      .done(function(msg) {
            if(msg == 'Datos Ingresados Corectamete')
              $('#mensaje').addClass('alert-success');
            else
                $('#mensaje').addClass('alert-danger');

            //('#mensaje').html(msg.result);
            //$('#tabla_usuarios tbody').html(msg.act_usuario);
            console.log("success");

            $('#formulario_usuario').trigger('reset');
      })

      .fail(function() {
        console.log("error");
      })
     
      .always(function() {
            // $('#usuario').reset();
            console.log("complete");
      });
    }
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

//Codigo para editar los datos ya ingresados

  var td,campo,valor,id;

  $(document).on("click","td.editable span",function(e)
  {
  e.preventDefault();
  $("td:not(.id)").removeClass("editable");
  td=$(this).closest("td");
  campo=$(this).closest("td").data("campo");
  valor=$(this).text();
  id=$(this).closest("tr").find(".id").text();
  td.text(" ").html("<input type='text'  name='"+campo+"' value='"+valor+"'><button id=guardar>Guardar</button>");
  });

  $(document).on("click","#guardar",function(e)
  {
    
    e.preventDefault();
    nuevovalor=$(this).closest("td").find("input").val();
    if(nuevovalor!="")
    
    {
      $.ajax({
        type: "POST",
        url: "rpc/actualizar.php",
        data: { 
          campo: campo, 
          valor: nuevovalor, 
          id:id }
      })


      .done(function( msg ) {
        
          $("#sms_editar").html(msg).addClass('alert-success').show();
       td.html("<span>"+nuevovalor+"</span>");
        $("td:not(.id)").addClass("editable");
      });
    }
    else {
      $("#sms_editar").html("<p class='alert-danger'>Debes ingresar un valor</p>").show();
    }
  });

  //Codigo para buscar 

  $( "#buscar" ).keyup(function(event)
  { 
   
    $.ajax({
          type: "POST",
          url: "rpc/busqueda.php",
          data: { 
            search:$('#metodo_buscar #buscar').val(),

          },
          success: function(data){                                                    
                          $("#tabla_bd tbody").empty();
                          $("#tabla_bd tbody").html(data);
                                                             
                    }
        });

  });

  
})
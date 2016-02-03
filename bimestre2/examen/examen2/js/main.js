
$(document).ready(function() {

  //Validamos los campos, con las condiciones dadas.

  $( "form#formulario_registro" ).validate({
      rules: {

          nombres: {
            required: true,
          },

          apellidos: {
            required: true,
          },

          email: {
            required: true,
            email:true,
            remote: {
                url: "rpc/verificar_correo.php",
                type: "post"
            }
          },
          
          contrasena: {
            required: true,
            minlength: 5
          },

          verif_contrasena: {
            required: true,
            equalTo:"#contrasena",
          },

      },

      messages: {

          nombres: {
            required: "Campo Obligatorio",
          },

          apellidos: {
            required: "Campo Obligatorio",
          },

          email: {
            required: "Campo Obligatorio.",
            email: "Ingrese email correcto",
            remote:$.validator.format("El email ingresado ya existe")
          },
          
          contrasena: {
            required: "Campo Obligatorio",
            minlength: "Ingrese una contraseña más larga"
          },

          verif_contrasena: {
            required: "Campo Obligatorio",
            equalTo:"No coincide la contraseña"
          },
      }
  });

  //Reaizamos la llamada para la conexión con la base de datos

  $('#registrarme').on('click',  function(event) {
      event.preventDefault();
      if($('form#formulario_registro').valid())
      {  
        $.ajax ({
            url: 'rpc/conexion_registro.php',
            type: 'post',
            data: {
              nombres: $('#nombres').val(),
              apellidos: $('#apellidos').val(),
              email: $('#email').val(),
              contrasena:$('#contrasena').val()
            },
        })

        .done(function(msg) {
            if(msg == "Mensaje enviado con éxito.")
              $('#mensaje').addClass('alert-success');
            else
                $('#mensaje').addClass('alert-danger');

            $('#mensaje').html(msg);
            console.log("success");
            $('#formulario_registro').trigger('reset');
        })
        
        .fail(function() {
            console.log("error");
        })
        
        .always(function() {
            console.log("complete");
        })
      }
  });

})
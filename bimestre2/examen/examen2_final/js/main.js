
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
            window.location.href = './index.php';
            console.log("success");
        })
        
        .fail(function() {
            console.log("error");
        })
        
        .always(function() {
            console.log("complete");
        })
      }
  });

  //Codigo cuando damos clic en el botón cancelar 

  $('#cancelar').on('click', function(event) {
      event.preventDefault();
      window.location.href = './index.php';
  });

  //Codigo para verificar que coincidan el correo y contraseña, y luego entre a la pagina matriculación

  $('#inicio_sesion').on('click',  function(event) {
      event.preventDefault();
      if($('form#formulario_sesion').valid())
      {  
        $.ajax ({
            url: 'rpc/verificar_login.php',
            type: 'post',
            data: {
              email: $('#email').val(),
              contrasena:$('#contrasena').val()
            },
        })

        .done(function(msg) {
            window.location.href = './matriculacion.php';
            console.log("success");
        })
        
        .fail(function() {
            console.log("error");
        })
        
        .always(function() {
            console.log("complete");
        })
      }
  });

  //Cargamos dinámicamente las materias

  $('#txtnivel').on('change', function(event) {
      event.preventDefault();
      $.ajax({
        url: 'rpc/get_materias.php',
        type: 'POST',
        data: {
          nivel: $('#txtnivel').val()
        },
      })

      .done(function(msg) {
        $('#txtmateria').html(msg);
        console.log("success");
        $(this).html(msg.mens);
      })

      .fail(function() {
        console.log("error");
      })

      .always(function() {
        console.log("complete");     
      });
      
  });


  //Registrar las materias seleccionadas

  $('#regis_materia').on('click', function(event) {
      event.preventDefault();

      var mats = [];
      $('#checkbox_formulario :input:checked').each(function(){
        mats.push($(this).val());
      });

      $.ajax ({
          url: 'rpc/registro_materias.php',
          type: 'post',
          dataType: 'json',
          data: {mats:mats},
      })

      .done(function(msg) {
        alert("hola");
          //window.location.href = './matriculacion.php';
          console.log("success");
      })
      
      .fail(function() {
          console.log("error");
      })
      
      .always(function() {
          console.log("complete");
      })

  });

})
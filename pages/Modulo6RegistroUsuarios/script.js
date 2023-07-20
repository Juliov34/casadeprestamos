$(document).ready(function() {
    $('#capital-form').submit(function(event) {
      // Evitar que el formulario se envíe de manera convencional
      event.preventDefault();
  
      // Obtener el valor del campo "estado"
      var estado = $('#estado').val();
  
      // Enviar una solicitud AJAX al servidor
      $.ajax({
        url: 'getCapital.php',
        method: 'POST',
        data: {estado: estado},
        success: function(response) {
          // Mostrar la capital devuelta por el servidor
          $('#resultado').html(response);
          // alert($resultado); prueba de alert
        },
        error: function() {
          // Manejar errores de la solicitud
          alert('Hubo un error al buscar la capital.');
        }
      });
    });
  });
  
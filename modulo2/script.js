$(document).ready(function() {
    $("#formulario").submit(function(e) {
      e.preventDefault(); // Evitar que se envíe el formulario de forma convencional
  
      $.ajax({
        type: "POST",
        url: "procesar_formulario.php",
        data: $(this).serialize(),
        success: function(response) {
          if (response === "success") {
            alert("¡Solicitud enviada correctamente!");
            // Aquí puedes redirigir al usuario a una página de confirmación o hacer algo más
          } else {
            // Mostrar errores de validación
            var errors = JSON.parse(response);
            mostrarError("errorNombre", errors.nombre);
            mostrarError("errorApellido", errors.apellido);
            mostrarError("errorEmail", errors.email);
            mostrarError("errorCantidad", errors.cantidad);
          }
        }
      });
    });
  
    function mostrarError(id, mensaje) {
      document.getElementById(id).innerHTML = mensaje;
    }
  });
<?php
// Obtener el valor del campo "estado"
$estado = $_POST['estado'];

// Buscar la capital correspondiente
if ($estado == 'Coopel') {
  $capital = 'Estado:Pagado, -  Monto:10,000, - Folio:2468';
} elseif ($estado == 'Baja California') {
  $capital = 'le debes un vergo a coopel';

} 

// Devolver la capital al script de JavaScript
sleep(1);
// echo $capital;

// echo '<div class="alert alert-success" role="alert">' . $capital . '</div>';

echo '<script>alert("' . $capital . '");</script>';

?>



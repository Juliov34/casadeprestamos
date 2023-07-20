<?php
$errors = array();

// Validar los campos (puedes agregar más validaciones según tus necesidades)
$nombre = $_POST['nombre'];
if (empty($nombre)) {
  $errors['nombre'] = "Por favor, ingresa tu nombre";
}

$apellido = $_POST['apellido'];
if (empty($apellido)) {
  $errors['apellido'] = "Por favor, ingresa tu apellido";
}

$email = $_POST['email'];
if (empty($email)) {
  $errors['email'] = "Por favor, ingresa tu correo electrónico";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = "Por favor, ingresa un correo electrónico válido";
}

$cantidad = $_POST['cantidad'];
if (empty($cantidad)) {
  $errors['cantidad'] = "Por favor, ingresa la cantidad del préstamo";
} else if (!is_numeric($cantidad) || $cantidad <= 0) {
  $errors['cantidad'] = "Por favor, ingresa una cantidad válida";
}

if (count($errors) === 0) {
  // Si no hay errores, envía la respuesta "success"
  echo "success";
} else {
  // Si hay errores, envía los errores en formato JSON
  echo json_encode($errors);
}
?>

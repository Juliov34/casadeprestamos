<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalles del préstamo</title>
    <link rel="stylesheet" href="css/results.css">
</head>
<body>
    <div class="container">
        <?php
            // Datos simulados de los préstamos (pueden venir de una base de datos)
            $loans = array(
                1 => array(
                    'nombre' => 'Préstamo 1',
                    'tasa_interes' => 8.5,
                    'plazos_pago' => 12,
                    'otra_informacion' => 'Información adicional sobre el préstamo 1'
                ),
                2 => array(
                    'nombre' => 'Préstamo 2',
                    'tasa_interes' => 7.2,
                    'plazos_pago' => 24,
                    'otra_informacion' => 'Información adicional sobre el préstamo 2'
                )
                // Agrega más préstamos aquí
            );

            // Verificar si se recibió un ID de préstamo válido desde la URL
            if (isset($_GET['id']) && array_key_exists($_GET['id'], $loans)) {
                $loan_id = $_GET['id'];
                $loan = $loans[$loan_id];
        ?>
        <h1><?php echo $loan['nombre']; ?></h1>
        <p class="loan-info">Tasa de interés: <?php echo $loan['tasa_interes']; ?>%</p>
        <p class="loan-info">Plazos de pago: <?php echo $loan['plazos_pago']; ?> meses</p>
        <p class="loan-info"><?php echo $loan['otra_informacion']; ?></p>
        <?php
            } else {
                echo '<p>Préstamo no encontrado.</p>';
            }
        ?>
    </div>
</body>
</html>

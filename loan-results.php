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
                    'nombre' => 'Luis Gerardo Carbajal Rivera',
                    'tasa_interes' => 8.5,
                    'plazos_pago' => 12,
                    'otra_informacion' => 'Nuestro préstamo especial incluye un seguro de desempleo que protege tu pago mensual en caso de pérdida involuntaria de empleo. Así, puedes tener tranquilidad en momentos difíciles y seguir cumpliendo con tus obligaciones financieras.'
                ),
                2 => array(
                    'nombre' => 'Juan José Pacheco Reyes',
                    'tasa_interes' => 7.2,
                    'plazos_pago' => 24,
                    'otra_informacion' => 'Ofrecemos un programa de pagos flexibles que te permite ajustar la cantidad mensual según tus necesidades. Si experimentas un imprevisto o un cambio en tu situación financiera, puedes modificar temporalmente el monto del pago para adaptarlo a tu capacidad económica actual.'
                )
            );
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

<?php
include_once __DIR__ . '/partials/classes/Info.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="info-dipendente">
        <ul>
            <?php
            foreach ($inventoryDip as $item) { ?>
            <li>
                <h3><?php echo $item -> name. ' ' . $item -> surname; ?></h3>
                <h3>ID: <?php echo $item -> id; ?></h3>
                <h3>Grado: <?php echo $item -> degree; ?></h3>
                <h3>Salario: <?php echo $item -> salary; ?></h3>
            </li>
            <?php } ?>
        </ul>
    </div>

</body>
</html>
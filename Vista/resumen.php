<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
    <link rel="stylesheet" href="css/estiloresumen.css?v=<?php echo time() ?>">
    <script src="js/resumen.js?v=<?php echo time() ?>"></script>
    <script type="text/javascript" src="js/header.js?v=<?php echo time() ?>"></script>
    <link rel="stylesheet" href="css/global.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time() ?>">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <section class="seccion-principal">
        <section id="lista-datos"></section>
        <button id="btn-aceptar">Confirmar</button>
        <p id="info">Puedes cancelar Tu Reserva pinchando en la X de arriba. También puedes hacerlo en cualquier momento desde Ver Mis Citas.</p>

    </section>

    <div id="confirmado">Reserva confirmada <img src="img/check_circle_24dp_75FB4C_FILL0_wght300_GRAD0_opsz24.png" alt=""></div>
    <div id="overlay" class="overlay"></div>


</body>

</html>
<?php
include 'apiClima.php';
// Iniciar la sesión (asegúrate de llamar a session_start() antes de usar la sesión en cualquier página)
// Verificar si el usuario ha iniciado sesión (es decir, si la ID del usuario está en la sesión)
if (isset($_SESSION['id'])) {
    // La ID del usuario está en la sesión, por lo que el usuario ha iniciado sesión correctamente
    // Obtener el ID del usuario desde la sesión
    $user_id = $_SESSION['id'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="../Favicon.png" href="../Favicon.png">

    <title>Vista Principal</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilosExtra.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="apiclima.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.js"
        integrity="sha512-6HrPqAvK+lZElIZ4mZ64fyxIBTsaX5zAFZg2V/2WT+iKPrFzTzvx6QAsLW2OaLwobhMYBog/+bvmIEEGXi0p1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header class="header">
        <div class="partOne">
            <img src="../logo.png" alt="" class="logoImage" href="">
        </div>
        <nav class="menu">
            <a href="../Menu_Superior/Cliente.php">Cliente</a>
            <a href="../Menu_Superior/Contacto.php">Contacto</a>
            <a href="../index.php">Salir</a>
        </nav>
        <div class="user">
            <span class="userName">Bienvenido, <?php echo $_SESSION['Nombre'] ?></span>
        </div>
    </header>

    <input type="checkbox" id="btn-menu">
    <div class="seccionSuperior">
        <div class="clima">
            <img id="weatherIcon" src="">
            <p class="city"><?php echo $ubicacion; ?></p>
            <p>Temperatura actual:</p>
            <div id="temperatura"></div>
        </div>
    </div>

    <div id="ubicacion-data" data-ubicacion="<?php echo $ubicacion; ?>" style="display: none"></div>
    <main>

        <div class="cardsContainer">

            <div class="card">
                <div class="card-img-container">
                    <img src="./img/controlgif.gif" class="card-image">
                </div>
                <div class="segundaParteCard">
                    <h2>Gestión de Parcelas</h2>
                    <ul>
                        <li><a href="../Menu/Registro_Parcela/Registro_parcela.php">Registro de Parcela</a></li>
                        <li><a href="../Menu/Control_Seguimiento/Control_Seguimiento.php">Control y Seguimiento</a></li>
                        <li><a href="../Menu/Cosecha_Producción/Cosecha_Produccion.php">Cosecha y Producción</a></li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-img-container">
                    <img src="./img/resources.gif" class="card-image">
                </div>
                <div class="segundaParteCard">
                    <h2>Manejo de Recursos</h2>
                    <ul>
                        <li><a href="../Menu/Ingresos/Ingresos.php">Ingresos</a></li>
                        <li><a href="../Menu/Registro_Personas/Registro_Jornaleros/Registro_Jornaleros.php">Registro de Personas</a></li>
                        <li><a href="../Menu/Gastos/Pagos_Compras/Pagos_Compras.php">Gastos</a></li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-img-container">
                    <img src="./img/notifications.gif" class="card-image">
                </div>
                <div class="segundaParteCard">
                    <h2>Notificaciones y Alertas</h2>
                    <ul>
                        <li><a href="../Menu/Emergencias_Ambientales/Emergencias_Ambientales.php">Emergencias Ambientales</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>
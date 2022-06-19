<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="icon" href="img/icono.png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Portafolio</title>
        <link rel="stylesheet" href="estilos/estilos.css">
    </head>

    <header class="fixed-top">
        <div class="container-fluid cabecera">
            <div class="row">
                <div class="col-md-2 col-lg-2 text-center py-4 d-none d-sm-none d-md-none d-lg-block">
                    <img src="img/logo_gris.png" alt="Logo" class="img-fluid logo">
                </div>
                <!-- versión para mostrar en Desktop y otros -->
                <div class="col-lg-10 d-none d-sm-none d-md-none d-lg-block">
                    <p class="text-right display-4 text-muted py-5 pr-5">TU PROFESIÓN</p>
                </div>
                <!-- versión para mostrar en Móvil -->
                <div class="col-sm-12 d-sm-block d-md-block d-lg-none">
                    <p class="text-center h1 text-muted py-4">TU PROFESIÓN</p>
                </div>
            </div>
        </div>
        <!-- versión para mostrar en Desktop y otros -->
        <nav class="cabecera d-none d-sm-none d-lg-block">
            <a href="index.html" title="Inicio" class="lead">Inicio</a> | 
            <a href="curriculum.php" title="Curriculum" class="lead">Curriculum</a> | 
            <a href="proyectos.php" title="Proyectos" class="lead">Proyectos</a> | 
            <a href="contacto.php" title="Contacto" class="lead">Contacto</a>
        </nav>
        <!-- versión para mostrar en Móvil -->
        <nav class="cabecera text-center d-block d-sm-block d-lg-none">
            <a href="index.html" title="Inicio" class="lead">Inicio</a> | 
            <a href="curriculum.php" title="Curriculum" class="lead">Curriculum</a> | 
            <a href="proyectos.php" title="Proyectos" class="lead">Proyectos</a> | 
            <a href="contacto.php" title="Contacto" class="lead">Contacto</a>
        </nav>
         <!-- versión para mostrar en Desktop y otros -->
        <div class="text-right pr-3 fechaHora d-none d-sm-none d-md-block d-lg-block">
            <!-- Obteniendo la Fecha con PHP -->
            <?php Fecha(); ?>
            <!-- Obteniendo la Hora con JAVASCRIPT -->
            | <span id="hora"></span>
        </div>
    </header>
    
    <!-- ================================ OBTENIENDO LA FECHA CON PHP ================================ -->
    <?php

        // CREANDO UNA FECHA EN ESPAÑOL:
        function Fecha(){
            // Configuración de la Zona Horaria:
            date_default_timezone_set("America/El_Salvador");

            switch(Date("l")){
                case "Monday":
                    $dia = "Lunes";
                    break;
                case "Tuesday":
                    $dia = "Martes";
                    break;
                case "Wednesday":
                    $dia = "Miércoles";
                    break;
                case "Thursday":
                    $dia = "Jueves";
                    break;
                case "Friday":
                    $dia = "Viernes";
                    break;
                case "Saturday":
                    $dia = "Sábado";
                    break;
                case "Sunday":
                    $dia = "Domingo";
                    break;
            }

            switch(Date("F")){
                case "January":
                    $mes = "Enero";
                    break;
                case "February":
                    $mes = "Febrero";
                    break;
                case "March":
                    $mes = "Marzo";
                    break;
                case "April":
                    $mes = "Abril";
                    break;
                case "May":
                    $mes = "Mayo";
                    break;
                case "June":
                    $mes = "Junio";
                    break;
                case "July":
                    $mes = "Julio";
                    break;
                case "August":
                    $mes = "Agosto";
                    break;
                case "September":
                    $mes = "Septiembre";
                    break;
                case "October":
                    $mes = "Octubre";
                    break;
                case "November":
                    $mes = "Noviembre";
                    break;
                case "December":
                    $mes = "Diciembre";
                    break;
            }

            echo $dia.", ".Date("j")." de ".$mes." de ".Date("Y");
        }
    ?>

    <!-- ================================ HORA CON JAVASCRIPT ================================ -->
    <script>
        setInterval(() => {
            const objFecha = new Date();
            document.getElementById("hora").innerHTML = objFecha.toLocaleTimeString();

        }, 1000);
    </script>

</html>
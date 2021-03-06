<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Información</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <?php
    //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
    include("../layouts/header_s.php");
    ?>
</head>


<body >

    <div class="p-2">
        <h1 class="text-center">Reservación</h1>
        <p class="text-center">Información acerca de la reservación</p>
    </div>

    <!-- Navegacin-->
    <div class="servicios container px-lg-  pt-4 btn-group" role="group" aria-label="">
        <input type="checkbox" class="btn-check" id="btncheck1">
        <a class="boton-ser btn-outline-danger" for="btncheck1" href="reservacion.php">Servicios</a></span>

        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
        <a class="boton btn-outline-danger" for="btncheck2" href="informacion.php">Información Cita</a></span>

        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
        <a class="boton-ser btn-outline-danger" for="btncheck3" href="resumen.php">Resumen</a></span>

    </div>

    <form class="container card-body   mt-5 rounded shadow ">
        <div class="form-row">
            <div class="form-group">
                <label for="inputnombre">Nombre</label>
                <input type="text" class="form-control" id="inputnombre">
            </div>

            <div class="mb-4">
                <label for="fecha">Fecha</label>
                <input id="fecha" type="date" />
            </div>
            <div class="mb-4">
                <label for="hora">Hora</label>
                <input id="hora" type="time" />
            </div>

        </div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Tipo de mascota</option>
            <option value="1">Perro</option>
            <option value="2">Felino</option>
            <option value="3">Aves</option>
        </select>
        </div>


    </form>

    <div class=" servicios container px-lg-6  pt-5 btn-group" role="group" aria-label="">
        <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
        <a class="boton btn-outline-danger" for="btncheck1" href="reservacion.php">Atrás</a></span>

        <input type="checkbox"><label class=""></label>

        <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
        <a class="boton btn-outline-danger" for="btncheck1" href="resumen.php">Siguiente</a></span>
    </div>


    <!-- Footer-->
    <footer class="pt-5">
        <?php
        include '../layouts/footer.php';
        ?>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Reservación</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/styles.css" rel="stylesheet" />
</head>
<?php
    //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
    include("../layouts/header_s.php");
    ?>
<body class="seccion">
    
<div">
    <h1>Reservación</h1>
    <p >Elige tus servicios a continuación</p>
  </div>

         <!-- Navegacin-->
         <div class="servicios container px-lg-  pt-4 btn-group" role="group" aria-label="">
            <input type="checkbox" class="btn-check" id="btncheck1"  >
            <a class="boton btn-outline-danger" for="btncheck1" href="reservacion.php">Servicios</a></span>
      
            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
            <a class="boton btn-outline-danger" for="btncheck2" href="informacion.php">Información Cita</a></span>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
            <a class="boton btn-outline-danger" for="btncheck3" href="resumen.php">Resumen</a></span>

        </div>

    <!-- Related items section-->
    <section>
        <div class="center">
            <h2>Medico</h2>
        </div>
        <div class=" px-4 px-lg-5 ">
            <div class="pt-4 row gx-4 gx-lg-5 row-cols-2 row-cols-md-3  ">
                <div class="col mb-5">
                    <div class="card h-100 ">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Desparasitación</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                        <label class="botn btn-outline-Warning" for="btncheck4">seleccionar</label>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 ">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Consulta Medica</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                        <label class="botn btn-outline-Warning" for="btncheck5">seleccionar</label>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 ">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Vacunas</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                        <label class="botn btn-outline-Warning" for="btncheck6">seleccionar</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <h2>Estética</h2>
        </div>
        <div class=" px-4 px-lg-5 ">
            <div class="pt-4 row gx-4 gx-lg-5 row-cols-2 row-cols-md-3  ">
                <div class="col mb-5">
                    <div class="card h-100 ">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                        <label class="botn btn-outline-Warning" for="btncheck7">seleccionar</label>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 ">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">PríncipePrincesa</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                        <label class="botn btn-outline-Warning" for="btncheck8">seleccionar</label>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 ">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Rey</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                        <label class="botn btn-outline-Warning" for="btncheck9">seleccionar</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="servicios container px-lg-  pt-4 btn-group" role="group" aria-label="">
        <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
        <a class="boton btn-outline-danger" for="btncheck1" href="servicios.php">Atrás</a></span>

        <input type="checkbox"><label class="" ></label>

        <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
        <a class="boton btn-outline-danger" for="btncheck1" href="informacion.php">Siguiente</a></span>
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
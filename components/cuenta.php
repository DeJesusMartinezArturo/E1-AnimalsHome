<!DOCTYPE html>
  <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Crear cuenta</title>
    <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <style>
        .bg {
            background-image: url(../assets/img/imagen6.jpg);
            background-position: center;
            background-size: cover;
            padding-left: 1rem;
        }
    </style>
</head>

<body>
    <?php
    //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
    include("../layouts/header.php");
    ?>
    <div class="container w-75  mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="../assets/img/logo.png" width="48" alt="">
                </div>
                <h2 class="fw-bold text-center py-5">Crear Cuenta</h2>

                <form action="#">

                    <div class="mb-4">
                        <label for="nombre">Nombre</label>
                        <input class="input-text" type="text" id="nombre" name="nombre" />
                    </div>

                    <div class="mb-4">
                        <label for="apellido">Apellido</label>
                        <input class="input-text" type="text" id="apellido" name="apellido" />

                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label"> Correo Electrónico</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-grid">
                        <a class="btn btn-primary" href="../paneladmin/index.php"> Crear Cuenta </a>
                        <!-- <button type="submit" class="btn btn-primary" > Crear Cuenta </button> -->
                    </div>
                    <br>
                    <div class="my-3 center">
                        <span><a href="../components/login.php">Volver</a></span>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
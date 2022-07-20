<!DOCTYPE html>
  <html lang="es">
    <head>
        <title>Agenda tu cita</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="./assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="./assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style >
            body{
                background: #fff;
            }
           .bg{
                background-image: url(./assets/img/imagen5.jpg);
                background-position: center center;
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
                        <img src="./img/logo.png" width="48" alt="">
                    </div>
                    <h2 class="fw-bold text-center py-5">Agenda tu cita</h2>

                    <form action="#">
                        <div class="mb-4">
                            <select class="form-select" aria-label="Default select example" >
                                <option selected>Elige un servicio</option>
                                <option value="1">Medico</option>
                                <option value="2">Estetico</option>   
                              </select>
                        </div>
                       <div class="mb-4">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                       </div>
                       <div class="mb-4">
                            <label for="fecha">Fecha</label>
                            <input id="fecha" type="date" />
                       </div>
                       <div class="mb-4">
                            <label for="hora">Hora</label>
                            <input id="hora" type="time" />
                       </div>
                       <div class="mb-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tipo de mascota</option>
                            <option value="1">Perro</option>
                            <option value="2">Felino</option>
                            <option value="3">Aves</option>
                          </select>
                       </div>
                       <div class="d-grid">
                           <button type="submit" class="btn btn-primary">Enviar información</button>
                       </div>
                    </form>
                 </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
    </body>
    <?php
  //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
  include("../layouts/footer.php");
  ?>
  </html>
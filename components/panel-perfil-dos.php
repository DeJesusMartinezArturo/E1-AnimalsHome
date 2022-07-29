<!-- LINK DE BOOSTRAP -->
<!doctype php>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animal's Home</title>
    <link rel="stylesheet" href="../assets/css/styles-perfildos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
<!-- ENCABEZADO PRINCIPAL -->
  <header>
      <?php
      include'../layouts/header.php';
      ?>
    </header>
    <!-- TITULOS/COL = COLUMNAS, -3 ES EL TAMAÑO  -->
  <body>
  <div class="titulo-principal">
            <div class="container">
                <div class="row">
                    <strong class="col display-6">Configuración general del la cuenta</strong>
                    <strong class="col-3 display-6">Perfil</strong>
                </div>
          </div>
  </div>
<!-- IMAGEN DEL PERRO -->

  <img src="../assets/img/PerfilPerro.jpg" class="rounded float-end img-perfil" alt="..." width="400px" height="400px">
  <div class="Circulo"></div>

<!-- FORMULARIO -->
    <div class="row">
      <div class="col-4">
        <form>
          <div class="formulario">
            <label for="exampleInputNombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="exampleInputNombre" aria-describedby="nombrelHelp">
          </div>
          <div class="formulario">
            <label for="exampleInputApellidos" class="form-label">Apellidos:</label>
            <input type="text" class="form-control" id="exampleInputNombre" aria-describedby="ApellidoslHelp">
          </div>
          <div class="formulario">
            <label for="exampleInputEmail" class="form-label">Correo:</label>
            <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emaillHelp">
          </div>
          <div class="formulario">
            <label for="exampleInputTelefono" class="form-label">Telefono:</label>
            <input type="tel" class="form-control" id="exampleInputTelefono" aria-describedby="telefonolHelp">
          </div>
          <div class="formulario">
            <label for="exampleInputFnac" class="form-label">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="exampleInputFnac" aria-describedby="fnaclHelp">
            <div class="center">
            <button type="submit" class="btn btn-primary">Guardar</button>

            <button type="submit" class="btn btn-primary">Salir</button>
            </div>
          </div>
          
        </form>

      </div>
      
    </div>




<!-- LINK DE BOOSTRAP -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>


<!-- INFERIOR DE LA PAGINA -->
<footer>
<?php
include '../layouts/footer.php';
?>
</footer>


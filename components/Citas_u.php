<title>Tus citas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- ENCABEZADO PRINCIPAL -->
<header>
  <?php
      include '../layouts/header_s.php';
      ?>
</header>

<body>          
  <br>
  <div class="container" id="liveAlertPlaceholder">
  </div>
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col align-self-start">
        <h2 class="center">Tus Citas</h2>
      </div>
      <div class="col-sm-9">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Dia</th>
              <th scope="col">Hora</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>
                  <button type="button" class="btn btn-primary" id="liveAlertBtn">Cancelar</button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td><button type="button" class="btn btn-primary" id="liveAlertBtn">Cancelar</button></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td><button type="button" class="btn btn-primary" id="liveAlertBtn">Cancelar</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <footer>
    <?php
    include '../layouts/footer.php';
    ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    <script>
      var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-danger alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> <br> <br> <button type="button" class="btn btn-info">Cancelar cita</button> </div>'

  alertPlaceholder.append(wrapper)
}

if (alertTrigger) {
  alertTrigger.addEventListener('click', function () {
    alert('¡Cancelar Cita! Usted esta a punto de cancelar su cita, ¿Desea continuar?', 'success')
  })
}
    </script>
</body>
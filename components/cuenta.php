<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/css/styles.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <style>
        .fondopug {
            background-image: url(../assets/img/imagen6.jpg);
            height: 100%;
            background-repeat: no-repeat;
            background-position: center left;
            background-size: cover;

        }
    </style>
</head>

<body class="fondopug">

    <section class="contenedor">
        <form class="col s12 m3 formulario">
            <h3 class="center">Crear Cuenta</h3>

            <div class="campo">
                <label for="nombre">Nombre</label>
                <input class="input-text" type="text" id="nombre" name="nombre" placeholder="Nombre" />
            </div>

            <div class="campo">
                <label for="apellido">Apellido</label>
                <input class="input-text" type="text" id="apellido" name="apellido" placeholder="Apellido" />
            </div>

            <div class="campo">
                <label for="telefono">Teléfono</label>
                <input class="input-text" type="tel" id="telefono" name="telefono" placeholder="Teléfono" />
            </div>

            <div class="campo">
                <label for="email">E-mail</label>
                <input class="input-text" type="email" id="email" name="email" placeholder="Correo" />
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>
                <input class="input-text" type="password" id="password" name="password" placeholder="Contraseña" />
            </div>

            <div class="d-grid center">
                <button type="submit" class="waves-effect waves-light btn-small">Crear cuenta</button>
            </div>
            <br>
            <div class="my-3 center">
                <span><a href="../components/login.php">Volver</a></span>
            </div>
            <br>
            </fieldset>
        </form>
    </section>
    </div>
</body>

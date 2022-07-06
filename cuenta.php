<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        
        <style >
            .fondopug{
            background-image: url(img/imagen6.jpg);
            height: 639px;
            background-repeat: no-repeat;
            background-position: center left;
            background-size: cover; 
    
         }
        </style>    
</head>

<body class="fondopug">
    
    <section class="contenedor">
        <form class="formulario">
            <legend>Crear Cuenta</legend>

            <div class="campo">
                <label for="nombre">Nombre</label>
                <input class="input-text" type="text" id="nombre" name="nombre" placeholder="Tu Nombre" />
            </div>

            <div class="campo">
                <label for="apellido">Apellido</label>
                <input class="input-text" type="text" id="apellido" name="apellido" placeholder="Tu Apellido" />
            </div>

            <div class="campo">
                <label for="telefono">Teléfono</label>
                <input class="input-text" type="tel" id="telefono" name="telefono" placeholder="Tu Teléfono" />
            </div>

            <div class="campo">
                <label for="email">E-mail</label>
                <input class="input-text" type="email" id="email" name="email" placeholder="Tu E-mail" />
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input class="input-text" type="password" id="password" name="password" placeholder="Tu Password" />
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Crear cuenta</button>
            </div>
            <br>
            <div class="my-3">
                <span><a href="./login.php">Volver </a></span>
           </div>
            

            </fieldset>
        </form>
    </section>
</body>


</html>
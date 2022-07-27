
<title>Animal's Home</title>
<link rel="stylesheet" href="../assets/css/stylesrodrigo.css">
  <!-- ENCABEZADO PRINCIPAL -->
  <header>
      <?php
      include '../layouts/header_s.php';
      include 'sidebar_panel_u.php';
      ?>
    </header>
<body>
    <div class="titulo">
    <h2 class="titulos">Configuración general del la cuenta</h2>
    <h1 class="titulos">Perfil</h1>
   
    </div>

    <img src="../assets/img/PerfilPerro.jpg" class="right img-perfil">

<!-- EDITAR PERFIL -->
    <section class="todo">
        <form class="formulario">
                <fieldset>
                            <div class="contenedor-campos">
                                <div class="campo">
                                    <label>Nombre:</label>
                                    <input class="input-text" type="text">
                                </div>
                                
                                <div class="campo">
                                    <label>Apellidos:</label>
                                    <input class="input-text" type="text">
                                </div>
                                
                                <div class="campo">
                                    <label>Correo:</label>
                                    <input class="input-text" type="email">
                                </div>
                                
                                <div class="campo">
                                    <label>Telefono:</label>
                                    <input class="input-text" type="tel">
                                </div>
                                <div class="campo">
                                    <label>Fecha de Nacimiento:</label>
                                    <input class="input-text" type="date">
                                </div>
                            </div> 
                    <div class="center">
                        <input class="boton" type="submit" value="Guardar"> <input class="boton" type="submit" value="Volver">
                    </div>
        
                </fieldset>
        </form>
    </section>
    
</body>

<footer>
<?php
include '../layouts/footer.php';
?>
</footer>

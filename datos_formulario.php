<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Datos</title>
</head>
<body >
    <section class="datos">
      <h3 class="datos"><?php echo '<br>Nombre: '.$_POST['nombre'];
      echo '<br>'?></h3>

      <h3 class="datos"><?php echo '<br>Email: '.$_POST['correo'];
      echo '<br>'?></h3>

      <h3 class="datos"><?php echo '<br>Teléfono: '.$_POST['telefono'];
      echo '<br>';?></h3>
      
      <h3 class="datos"><?php echo '<br>Datos guardados correctamente.';?></h3>

      <h3 class="datos"><?php echo '<br>¡Gracias por la confianza y por ser parte de nuestra familia!';?></h3>

      <h3 class="datos"><?php echo '<br>Enseguida nos contactamos contigo.';?></h3>
    </section>

    <section id="inicio">
        <br><a href="formulario.html">Regresar a la página de contacto</a></br>
    </section>

</body>
</html>


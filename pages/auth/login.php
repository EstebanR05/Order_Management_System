<?php require_once ("../../components/principalHtml.php"); ?>

<div class="row">
  <div class="large-12 columns">
    <h2>Control de Ingreso AstroService</h2>
  </div>
</div>

<div class="row">
  <div class="large-6 columns">
    <!--Formulario Para Enviar el Usuario y Clave a MYSQL usando el metodo POST-->
    <form method="post" action="">
      <input name="user" type="text" placeholder="Usuario" required />
      <input name="pass" type="password" placeholder="Contraseña" required />
      <input type="submit" value="Enviar" name="enviar">
    </form>
    <br />
    <p>
      <a href="registrarse.php">¿No tienes una cuenta? Regístrate aquí</a>
    </p>
    <?php
    // Conexión a la base de datos
    include("../../includes/conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      // Recibir los datos del formulario
      $user = $_POST['user'];
      $clave = $_POST['pass'];

      // Consulta SQL para verificar las credenciales
      $var_consulta = "SELECT * FROM cliente WHERE email = '$user' AND contrasena = '$clave'";
      $var_resultado = $obj_conexion->query($var_consulta);

      // Verificar si el usuario fue encontrado
      if ($var_resultado->num_rows > 0) {
        // Usuario autenticado
        echo "Usuario Autenticado Bienvenido $user";
        header('Location: /sap/pages/Astroservice.php');
        exit();
      } else {
        // Usuario no autenticado
        header('Location: index.html');
        exit();
      }
    }
    ?>
  </div>
</div>

<?php require_once ("../../components/finishedHtml.php"); ?>
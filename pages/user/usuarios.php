<?php require_once('../../components/dashboardHtml.php'); ?>

<div class="details">
  <div class="large-12 columns">
    <h4>Consultar por Id Cliente</h4>
    <html>
    <form method="post" action="consulta.php">
      <input name="user" type="text" />
      <input type="submit" value="Enviar" name="enviar">
    </form>

    </html>
  </div>
</div>

<?php
require_once("../../includes/conexion.php");

if (isset($_POST['user'])) {
  $user = $_POST['user'];
  $var_consulta = "select * from cliente where idCliente ='$user'";
} else {
  $var_consulta = "select * from cliente";
}

$var_resultado = $obj_conexion->query($var_consulta);

if ($var_resultado->num_rows > 0) {
  echo "<table border='1' align='center'>
    <tr bgcolor='#E6E6E6'>
     <th>idCliente</th>
     <th>nombre</th>
     <th>direccion</th>
     <th>email</th>
     <th>nombreDeUsuario</th>
     <th>opciones</th>
     </tr>";

  while ($var_fila = $var_resultado->fetch_array()) {
    echo "<tr>";
    echo "<td>" . $var_fila["idCliente"] . "</td>";
    echo "<td>" . $var_fila["nombre"] . "</td>";
    echo "<td>" . $var_fila["direccion"] . "</td>";
    echo "<td>" . $var_fila["email"] . "</td>";
    echo "<td>" . $var_fila["nombreDeUsuario"] . "</td>";
    echo "<td>
        <form method='post' action='editarUser.php' style='display:inline;'>
            <input type='hidden' name='idCliente' value='" . $var_fila["idCliente"] . "' />
            <input type='submit' value='Editar' />
        </form>
        <form method='post' action='eliminarUser.php' style='display:inline;'>
            <input type='hidden' name='idCliente' value='" . $var_fila["idCliente"] . "' />
            <input type='submit' value='Eliminar' onclick=\"return confirm('¿Está seguro de que desea eliminar este registro?');\" />
        </form>
      </td>";
    echo "</tr>";
  }
} else {
  echo "No hay Registros";
}
?>

<?php require_once('../../components/finishedHtml.php'); ?>
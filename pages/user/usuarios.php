<?php require_once('../../components/dashboardHtml.php'); ?>

<div class="details">
  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Usuarios</h2>

      <div class="search">
        <form method="post">
          <label>
            <input type="text" name="user" placeholder="Consultar por Id Cliente">
            <ion-icon name="search-outline"></ion-icon>
          </label>
        </form>
      </div>
    </div>
    <?php
    require_once("../../includes/conexion.php");

    if (isset($_POST['user'])) {
      $var_consulta = "select * from cliente where idCliente =" . $_POST['user'];
    } else {
      $var_consulta = "select * from cliente";
    }

    $var_resultado = $obj_conexion->query($var_consulta);

    if ($var_resultado->num_rows > 0) {
      echo "<table>";
      echo "<thead>";
      echo "<tr>";
      echo "<td>idCliente</td>";
      echo "<td>nombre</td>";
      echo "<td>direccion</td>";
      echo "<td>email</td>";
      echo "<td>nombreDeUsuario</td>";
      echo "<td>opciones</td>";
      echo "</tr>";
      echo "</thead>";

      echo "<tbody>";
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
            <input class='btn' type='submit' value='Editar' />
        </form>
        <form method='post' action='eliminarUser.php' style='display:inline;'>
            <input type='hidden' name='idCliente' value='" . $var_fila["idCliente"] . "' />
            <input class='btn' type='submit' value='Eliminar' onclick=\"return confirm('¿Está seguro de que desea eliminar este registro?');\" />
        </form>
      </td>";
        echo "</tr>";
      }
      echo "</tbody>";

      echo "</table>";
    } else {
      echo "No hay Registros";
    }
    ?>
  </div>
</div>

<?php require_once('../../components/finishedHtml.php'); ?>
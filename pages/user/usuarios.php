<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="details">
  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Users</h2>
      <div class="search">
        <form method="post">
          <label>
            <input type="text" name="user" placeholder="search user by Id">
            <ion-icon name="search-outline"></ion-icon>
          </label>
        </form>
      </div>
    </div>
    <?php
    require_once("../../includes/conexion.php");

    if (isset($_POST['user']) && is_numeric($_POST['user'])) {
      // Prepare the SQL statement
      $stmt = $obj_conexion->prepare("SELECT * FROM cliente WHERE idCliente = ?");
      $stmt->bind_param('i', $_POST['user']); // 'i' denotes integer type
    } else {
      // Default query to fetch all clients
      $stmt = $obj_conexion->prepare("SELECT * FROM cliente");
    }

    $stmt->execute();
    $var_resultado = $stmt->get_result();

    if ($var_resultado->num_rows > 0) {
      echo "<table>";
      
      echo "<thead>";
      echo "<tr>";
      echo "<td>Id</td>";
      echo "<td>Name</td>";
      echo "<td>Address</td>";
      echo "<td>Email</td>";
      echo "<td>NickName</td>";
      echo "<td>options</td>";
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
            <input class='btn' type='submit' value='Edit' />
        </form>
        <form method='post' action='eliminarUser.php' style='display:inline;'>
            <input type='hidden' name='idCliente' value='" . $var_fila["idCliente"] . "' />
            <input class='btn' type='submit' value='Remove' onclick=\"return confirm('¿Está seguro de que desea eliminar este registro?');\" />
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

<?php
require_once('../../components/finishedHtml.php');
ob_end_flush();
?>
<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="details">
  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Clients</h2>
      <div class="search">
        <form method="post">
          <label>
            <input type="text" name="user" placeholder="search by Id">
            <ion-icon name="search-outline"></ion-icon>
          </label>
        </form>
      </div>
    </div>
    <?php
    require_once("../../includes/conexion.php");

    if (isset($_POST['user']) && is_numeric($_POST['user'])) {
      $stmt = $obj_conexion->prepare("select c2.Name as cityName, c.* from client c inner join city c2 ON c.City_idCity = c2.idCity WHERE idCliente = ?");
      $stmt->bind_param('i', $_POST['user']);
    } else {
      $stmt = $obj_conexion->prepare("select c2.Name as cityName, c.* from client c inner join city c2 ON c.City_idCity = c2.idCity");
    }

    $stmt->execute();
    $var_resultado = $stmt->get_result();

    if ($var_resultado->num_rows > 0) {
      echo "<table>";
      
      echo "<thead>";
      echo "<tr>";
      echo "<td>Id</td>";
      echo "<td>Name</td>";
      echo "<td>Email</td>";
      echo "<td>Address</td>";
      echo "<td>City</td>";
      echo "<td>options</td>";
      echo "</tr>";
      echo "</thead>";

      echo "<tbody>";
      while ($var_fila = $var_resultado->fetch_array()) {
        echo "<tr>";
        echo "<td>" . $var_fila["idClient"] . "</td>";
        echo "<td>" . $var_fila["Name"] . "</td>";
        echo "<td>" . $var_fila["Email"] . "</td>";
        echo "<td>" . $var_fila["Address"] . "</td>";
        echo "<td>" . $var_fila["cityName"] . "</td>";
        echo "<td>
        <form method='post' action='UpdateClient.php' style='display:inline;'>
            <input type='hidden' name='idCliente' value='" . $var_fila["idClient"] . "' />
            <input class='btn' type='submit' value='Edit' />
        </form>
        <form method='post' action='RemoveClient.php' style='display:inline;'>
            <input type='hidden' name='idCliente' value='" . $var_fila["idClient"] . "' />
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
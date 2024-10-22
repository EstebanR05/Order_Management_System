<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="details">
  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Employees</h2>
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
      // Prepare the SQL statement
      $stmt = $obj_conexion->prepare("select r.name as rolName, c.Name as cityName, u.* from users u inner join city c ON u.City_idCity = c.idCity inner join rols as r on u.Rols_idRol = r.idRol WHERE idUser = ?");
      $stmt->bind_param('i', $_POST['user']); // 'i' denotes integer type
    } else {
      // Default query to fetch all clients
      $stmt = $obj_conexion->prepare("select r.name as rolName, c.Name as cityName, u.* from users u inner join city c ON u.City_idCity = c.idCity inner join rols as r on u.Rols_idRol = r.idRol");
    }

    $stmt->execute();
    $var_resultado = $stmt->get_result();

    if ($var_resultado->num_rows > 0) {
      echo "<table>";
      
      echo "<thead>";
      echo "<tr>";
      echo "<td>Id</td>";
      echo "<td>Name</td>";
      echo "<td>lastName</td>";
      echo "<td>Email</td>";
      echo "<td>Password</td>";
      echo "<td>NickName</td>";
      echo "<td>Address</td>";
      echo "<td>City</td>";
      echo "<td>Rol</td>";
      echo "<td>options</td>";
      echo "</tr>";
      echo "</thead>";

      echo "<tbody>";
      while ($var_fila = $var_resultado->fetch_array()) {
        echo "<tr>";
        echo "<td>" . $var_fila["idUser"] . "</td>";
        echo "<td>" . $var_fila["Name"] . "</td>";
        echo "<td>" . $var_fila["lastName"] . "</td>";
        echo "<td>" . $var_fila["Email"] . "</td>";
        echo "<td>" . $var_fila["Password"] . "</td>";
        echo "<td>" . $var_fila["NickName"] . "</td>";
        echo "<td>" . $var_fila["Address"] . "</td>";
        echo "<td>" . $var_fila["cityName"] . "</td>";
        echo "<td>" . $var_fila["rolName"] . "</td>";

        echo "<td>
        <form method='post' action='UpdateEmployee.php' style='display:inline;'>
            <input type='hidden' name='idUser' value='" . $var_fila["idUser"] . "' />
            <input class='btn' type='submit' value='Edit' />
        </form>
        <form method='post' action='RemoveEmployee.php' style='display:inline;'>
            <input type='hidden' name='idUser' value='" . $var_fila["idUser"] . "' />
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
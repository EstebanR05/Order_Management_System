<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Rols</h2>
            <ion-icon name="add-outline" style="font-size: 30px;" onclick="window.location.href='../../pages/Settings/city/CreateCity.php'"></ion-icon>
        </div>
        <?php
        require_once("../../includes/conexion.php");
        $stmt = $obj_conexion->prepare("select * from rols");
        $stmt->execute();
        $var_resultado = $stmt->get_result();

        if ($var_resultado->num_rows > 0) {
            echo "<table>";

            echo "<thead>";
            echo "<tr>";
            echo "<td>Id</td>";
            echo "<td>Name</td>";
            echo "<td>options</td>";
            echo "</tr>";
            echo "</thead>";

            echo "<tbody>";
            while ($var_fila = $var_resultado->fetch_array()) {
                echo "<tr>";
                echo "<td>" . $var_fila["idRol"] . "</td>";
                echo "<td>" . $var_fila["Name"] . "</td>";
                echo "<td>
        <form method='post' action='city/UpdateCity.php' style='display:inline;'>
            <input type='hidden' name='idRol' value='" . $var_fila["idRol"] . "' />
            <input class='btn' type='submit' value='Edit' />
        </form>
        <form method='post' action='RemoveCity.php' style='display:inline;'>
            <input type='hidden' name='idRol' value='" . $var_fila["idRol"] . "' />
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

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Citys</h2>
            <ion-icon name="add-outline" style="font-size: 30px;" onclick="window.location.href='../../pages/Settings/city/CreateCity.php'"></ion-icon>
        </div>
        <?php
        require_once("../../includes/conexion.php");
        $stmt = $obj_conexion->prepare("select * from city");
        $stmt->execute();
        $var_resultado = $stmt->get_result();

        if ($var_resultado->num_rows > 0) {
            echo "<table>";

            echo "<thead>";
            echo "<tr>";
            echo "<td>Id</td>";
            echo "<td>Name</td>";
            echo "<td>options</td>";
            echo "</tr>";
            echo "</thead>";

            echo "<tbody>";
            while ($var_fila = $var_resultado->fetch_array()) {
                echo "<tr>";
                echo "<td>" . $var_fila["idCity"] . "</td>";
                echo "<td>" . $var_fila["Name"] . "</td>";
                echo "<td>
        <form method='post' action='city/UpdateCity.php' style='display:inline;'>
            <input type='hidden' name='idCity' value='" . $var_fila["idCity"] . "' />
            <input class='btn' type='submit' value='Edit' />
        </form>
        <form method='post' action='city/RemoveCity.php' style='display:inline;'>
            <input type='hidden' name='idCity' value='" . $var_fila["idCity"] . "' />
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

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Categories Products</h2>
            <ion-icon name="add-outline" style="font-size: 30px;" onclick="window.location.href='../../pages/Settings/city/CreateCity.php'"></ion-icon>
        </div>
        <?php
        require_once("../../includes/conexion.php");
        $stmt = $obj_conexion->prepare("select * from category");
        $stmt->execute();
        $var_resultado = $stmt->get_result();

        if ($var_resultado->num_rows > 0) {
            echo "<table>";

            echo "<thead>";
            echo "<tr>";
            echo "<td>Id</td>";
            echo "<td>Name</td>";
            echo "<td>options</td>";
            echo "</tr>";
            echo "</thead>";

            echo "<tbody>";
            while ($var_fila = $var_resultado->fetch_array()) {
                echo "<tr>";
                echo "<td>" . $var_fila["idCategory"] . "</td>";
                echo "<td>" . $var_fila["Name_category"] . "</td>";
                echo "<td>
        <form method='post' action='city/UpdateCity.php' style='display:inline;'>
            <input type='hidden' name='idCategory' value='" . $var_fila["idCategory"] . "' />
            <input class='btn' type='submit' value='Edit' />
        </form>
        <form method='post' action='RemoveCity.php' style='display:inline;'>
            <input type='hidden' name='idCategory' value='" . $var_fila["idCategory"] . "' />
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
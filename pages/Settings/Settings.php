<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Citys</h2>
        </div>
    </div>
</div>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Rols</h2>
        </div>
    </div>
</div>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Categories Products</h2>
        </div>
    </div>
</div>

<?php
require_once('../../components/finishedHtml.php');
ob_end_flush();
?>
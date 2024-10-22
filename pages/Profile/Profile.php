<?php
ob_start();
require_once('../../components/dashboardHtml.php');
?>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Profile</h2>
            <div class="search">
                <form method="post">
                    <label>
                        <input type="text" name="user" placeholder="search by Id">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../../components/finishedHtml.php');
ob_end_flush();
?>
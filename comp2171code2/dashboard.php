<?php


include 'db.php'; 

$query = "SELECT * FROM stock";
$inventory_result = mysqli_query($conn, $query);
?>
<?php $totalItems=0?>
<?php 
    while ($row = mysqli_fetch_assoc($inventory_result)) { ?>
    <tr>
        
        <?php $totalItems=$totalItems+$row['quantity']?>
        
    </tr>
    <?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sheaz Grace Collections</title>
    <link rel="stylesheet" href="dashstyle.css">
</head>
<body>
<div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Sheaz Grace Collections</h2>
            <a href="dashboard.php">Dashboard</a>
            <a href="#">Orders</a>
            <a href="view_inventory.php">Inventory</a>
            <a href="#">Reports</a>
            <a href="#">Settings</a>
        </div>

        <!-- Main Content -->
        <div class="content">
            <div class="header">
                <div class="header-title">Dashboard</div>
                <button class="logout-button" onclick="switchPage()">Logout</button>
            </div>

            
            <div class="dashboard-content">
                <div class="card">
                    <h3>Total Sales</h3>
                    <p>$5,600</p>
                </div>
                <div class="card">
                    <h3>Total Products</h3>
                    <p><?php echo $totalItems?></p>
                </div>
                <div class="card">
                    <h3>New Orders</h3>
                    <p>15</p>
                </div>
                <div class="card">
                    <h3>Pending Shipments</h3>
                    <p>8</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; 2025 Sheaz Grace Collections. All Rights Reserved.
    </div>
    <script>
        function switchPage() {
            
            window.location.href = "logout.php";
        }
    </script>
</body>

</html>





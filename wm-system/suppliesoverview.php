<?php
include "conn.php";
$query = "SELECT *  FROM items";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/items.css" />
  <link href="lineicons/web-font-files/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="style/select2.min.css">
  <title>Item Management</title>
  
</head>
<body>
<header class="header-section text-center">
        <h1>Warehouse Management System with 2D Layout</h1>
    </header>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="dashboard.php">Dashboard</a>
                </div>
            </div>
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#prod" aria-expanded="false" aria-controls="prod">
                        <i class="lni lni-producthunt"></i>
                        <span>Products</span>
                    </a>
                    <ul id="prod" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="supplygroups.php" class="sidebar-link">Supply Groups</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="items.php" class="sidebar-link">Items</a>      
                        </li>
                        <li class="sidebar-item">
                            <a href="deliverygroup.php" class="sidebar-link">Delivery Group</a>      
                        </li>
                        <li class="sidebar-item">
                            <a href="releasing.php" class="sidebar-link">Releasing</a>
                        </li>
                    </ul>
                </li>
               
               
                </li>
                
               
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#equipment" aria-expanded="false" aria-controls="equipment">
                        <i class="lni lni-dropbox-original"></i>
                        <span>Equipments</span>
                    </a>
                    <ul id="equipment" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="equimentgroup.php" class="sidebar-link">Equipment Groups</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="unit.php" class="sidebar-link">Units</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="assignment.php" class="sidebar-link">Assignment</a>
                        </li>
                    </ul>
                </li>
               
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#details" aria-expanded="false" aria-controls="details">
                        <i class="lni lni-postcard"></i>
                        <span>Reports</span>
                    </a>
                    <ul id="details" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="deliveryreport.php" class="sidebar-link">Deliveries Report</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="releasingreport.php" class="sidebar-link">Releasing Report</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="equipmentreport.php" class="sidebar-link">Equipments Report</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#Supplies Overview" class="sidebar-link">Supplies Overview</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#manage" aria-expanded="false" aria-controls="manage">
                        <i class="lni lni-menu"></i>
                        <span>Management</span>
                    </a>
                    <ul id="manage" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                   
                        <li class="sidebar-item">
                            <a href="2dlayout.php" class="sidebar-link">2D Layout</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="users.php" class="sidebar-link" >Users</a>
            
                        </li>
                       
                       
                    </ul>
                </li>
               
               
                </li>
               
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
       
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Inventory Management</span>
                <h2>Supplies Overview</h2>
                
            </div>
       
        </div>
        <div class="card-container">
            <h3 class="main-title">Generate Supplies Overview</h3>
            <form action="" id=form method="post">
            <label for="supplygroup">Supply Groups:</label>
            <select name="supplygroup" id="supplygroup" >
                <option value="" style="text-align:center;">Select Groups</option>
                <option value="">ss</option>
                <option value="">ss</option>
                <option value="">ss</option>
                <option value="">ss</option>
                <option value="">ss</option>
                
            </select>
            <label for="supplygroup">Year:</label>
            <select name="supplygroup" id="supplygroup" >
                <option value="" style="text-align:center;">---</option>
                <option value="">2025</option>
                <option value="">2024</option>
                <option value="">2023</option>
                <option value="">2022</option>
                <option value="">2021</option>
                
            </select>
  
  
  
  <input type="submit" value="Generate">
            </form>
            
        </div>
       
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="functions/inventory.js"></script>
    <script type="module" src="functions/select2.min.js"></script>
  <script type="module">
    $('#supplygroup').select2();

   
  </script>
</body>
</html>
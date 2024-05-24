<?php
session_start();
require "conn.php";
$query = "SELECT *  FROM users";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/users.css" />
  <link href="lineicons/web-font-files/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="inventories/dashboard.php">
    <link rel="stylesheet" href="inventories/inventory.php">
    <link rel="stylesheet" href="inventories/items.php">
    <link rel="stylesheet" href="inventories/supplygroups.php">
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
  <title>User Management</title>
  
</head>
<body>
<header class="header-section text-center">
        <h1>Warehouse Management System with 2D Layout</h1>
    </header>
    <div class="wrapper" id="users">
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
                            <a href="suppliesoverview.php" class="sidebar-link">Supplies Overview</a>
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
                            <a href="#users" class="sidebar-link" >Users</a>
            
                        </li>
                       
                       
                    </ul>
                </li>
               
               
                </li>
               
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
       
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>User Management</span>
                <h2>Dashboard</h2>
            </div>
      
        </div>
        <div class="card-container">
            <h3 class="main-title">Users's Data</h3>
            <div class="card-wrapper">
                <div class="payment-card light-red">
                <div class="card-header">
                        
                    <div class="amount">
                        <span class="title">Total Number Active Users</span>
                        <span class="amount-value">
                        <?php
                        $sql = "SELECT SUM(Active) AS total_active FROM users";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            $row = $result->fetch_assoc();
                            $totalactive = $row["total_active"];
                            echo $totalactive;
                        } else {
                            echo "0 results";
                        }
                           
                         ?>
                        </span>
                    </div>
                    <i class="lni lni-users icon dark-red"></i> 
                </div>
                        </div>
                <div class="payment-card light-purple">
                    <div class="card-header">
                    <div class="amount">
                        <span class="title">Total Number Inactive Users</span>
                        <span class="amount-value">0</span>
                    </div>
                    <i class="lni lni-users icon dark-purple"></i>
                </div>
                    </div>  
            </div>
        </div>

        <div class="tabular-wrapper">
            <h3 class="main-title">
                Users
            </h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                       <th>Action</th>
                          <th>Name</th>
                          <th>Userame</th>
                          <th>Password</th>
                          <th>Contactnumber</th>
                          <th>Status</th>
                         
                        
                        </tr>
                        <tbody>
                           
                           
                           <?php
                            $query = "SELECT * FROM  users";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run)>0) {
                                foreach($query_run as $users){

                                    ?>
                                    <tr>
                                    <td><button class="text-danger bg-warning">Suspend</button></td>
                                        <td><?= $users['name']?></td>
                                        <td><?= $users['username']?></td>
                                        <td><?= $users['password']?></td>
                                        <td><?= $users['contactnumber']?></td>
                                        <td><?= $users['Active']?></td>
                                    </tr>
                                    <?php
                                }
                            }else{
                                echo "<h5> No record Found</h5>";
                            }
                            ?>
                               
                             
                           
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="functions/inventory.js"></script>
</body>
</html>
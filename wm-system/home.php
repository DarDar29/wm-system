<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="style/home.css">
    <title>Your Website</title>
</head>
<body>


  
    <header class="header-section text-center">
        <h1>Warehouse Management System with 2D Layout</h1>
    </header>

    
    <section class="services-section bg-light">
        <div class="container">
           
            <div class="row">
                <div class="col-md-4">
                    <a href="dashboard.php" class="service"><button type="button" href="inventory.php" class="btn service-item btn-lg">
                        <h3>Inventory</h3>
                    </button> </a> 
                </div>
                <div class="col-md-4" ">
                    <a href="2dlayout.php" class="service"><button type="button"  class="btn service-item btn-lg" >
                        <h3>2D Layout</h3>
                    </button> </a>
                </div>
                <div class="col-md-4">
               <a href="users.php" class="service"> <button type="button" class="btn service-item btn-lg">
                        <h3>Users</h3>
                    </button> </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-3">
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>

    <!-- Bootstrap and JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

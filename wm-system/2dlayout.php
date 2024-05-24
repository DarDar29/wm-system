
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/dataTables.bootstrap5.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="style/2dlayout.css" />
  <link href="lineicons/web-font-files/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="style/select2.min.css">
  <title>Inventory Management</title>
  
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
                <h2>2D Layout</h2>
            </div>
      
        </div>
        <div class="select-container">
            <div id="select-container1">
        <label for="products">Choose a product:</label>
        <select name="products" id="products">
            <option value="" selected disabled>Select Product</option> <!-- Placeholder option -->
        </select>
        <button id="edit-location">Edit Product Location</button>
    </div>

    <div class="box" id="1"></div>
    <div class="box0" id="2"></div>
    <div class="box2" id="3"></div>
    <div class="box2" id="4"></div>
    <div class="box1" id="5"></div>
    <div class="box3" id="6"></div>
    <div class="box4" id="7"></div>
    <div class="box5" id="8"></div>

    <!-- Overlay and Modal for editing product location -->
    <div id="overlay"></div>
    <div id="edit-container">
        <label for="new-div">Choose a new div:</label>
        <select name="new-div" id="new-div">
            <option value="" selected disabled>Select Section</option>
            <option value="1">Section 1</option>
            <option value="2">Section 2</option>
            <option value="3">Section 3</option>
            <option value="4">Section 4</option>
            <option value="5">Section 5</option>
            <option value="6">Section 6</option>
            <option value="7">Section 7</option>
            <option value="8">Section 8</option>
        </select>
        <button id="save-location">Save Location</button>
    </div>
    </div>

   
</div>
      
    </div>
    
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="datatables/dataTables.js"></script>
    <script src="datatables/.bootstrap5.js"></script>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous" ></script>
   
        <script src="functions/select2.min.js"></script>
    <script src="functions/inventory.js"></script>
     <!-- Initialize Select2 and handle change event -->
    
     <script>
        
        $(document).ready(function() {
            $('#products').select2();

            // Initialize the product to div map
            let productToDivMap = {
                
            };

            // Load saved mapping from localStorage if available
            const savedMapping = localStorage.getItem('productToDivMap');
            if (savedMapping) {
                productToDivMap = JSON.parse(savedMapping);
            }

            function updateHighlighting() {
                // Reset all boxes background color
                $('.box, .box0, .box1, .box2, .box3, .box4, .box5').css('background', 'white');

                // Get selected product
                const selectedProduct = $('#products').val();

                // Get corresponding div id
                const divId = productToDivMap[selectedProduct];

                // Change the background color of the corresponding div
                if (divId) {
                    $('#' + divId).css('background', 'red');
                }
            }

            $('#products').on('change', updateHighlighting);

            $('#edit-location').on('click', function() {
                $('#overlay').show();
                $('#edit-container').show();
            });

            $('#save-location').on('click', function() {
                const selectedProduct = $('#products').val();
                const newDivId = $('#new-div').val();

                if (selectedProduct && newDivId) {
                    // Update the mapping
                    productToDivMap[selectedProduct] = parseInt(newDivId);

                    // Save the updated mapping to localStorage
                    localStorage.setItem('productToDivMap', JSON.stringify(productToDivMap));

                    // Update the highlighting
                    updateHighlighting();

                    // Hide the modal and overlay
                    $('#overlay').hide();
                    $('#edit-container').hide();
                }
            });

            // Hide modal and overlay when clicking outside the modal
            $('#overlay').on('click', function() {
                $(this).hide();
                $('#edit-container').hide();
            });

            // Fetch products from the server
            $.ajax({
                url: 'selectconn.php',
                method: 'GET',
                dataType: 'json',
                success: function(products) {
                    let options = '<option value="" selected disabled>Select Product</option>';
                    products.forEach(product => {
                        options += `<option value="${product.id}">${product.name}</option>`;
                    });
                    $('#products').html(options);
                },
                error: function(error) {
                    console.error('Error fetching products:', error);
                }
            });

            // Update highlighting on page load
            updateHighlighting();
        });
    </script>
</body>
</html>
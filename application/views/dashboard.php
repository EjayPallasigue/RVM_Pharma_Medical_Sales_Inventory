<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Myriad, sans-serif;
            margin: 0;
            padding: 0;
        }
        #sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #1F456E;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 30px;
        }
        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #FFFFFF;
            display: block;
            transition: 0.3s;
        }
        #sidebar a:hover {
            background-color: #575757;
        }
        #main {
            transition: margin-left 0.5s;
            padding: 16px;
        }
        #openSidebarBtn {
            width: 50px;
            height: 50px;
            background-color: #1F456E;
            border: none;
            color: white;
            position: fixed;
            bottom: 20px;
            left: 20px;
            border-radius: 25px 25px 25px 25px;
            z-index: 2;
            cursor: pointer;
            font-size: 20px;
        }
        .panel-title {
            font-family: Myriad, sans-serif;
            color: #FFFFFF;
            font-size: 18px;
        }
    </style>
</head>
<body>

<button id="openSidebarBtn" onclick="toggleSidebar()" title="Click to toggle sidebar">☰</button>

<div id="sidebar">
    <div style="padding: 10px 15px; color: #FFFFFF; font-size: 25px; position: absolute; top: 1; width: 100%; text-align: center;">
        (Welcome, Admin)
    </div>
    <div style="padding-top: 60px;">
        <a href="http://localhost/pharmacy-management-ci/ShowForm/create_medicine_presentation/main">
            <span class="glyphicon glyphicon-th" aria-hidden="true"></span> Item Type
        </a>
        <a href="http://localhost/pharmacy-management-ci/ShowForm/medicine_purchase_statement/main">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Today's Purchase Amount
        </a>
        <a href="http://localhost/pharmacy-management-ci/ShowForm/supplier_payment/main">
            <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Total Purchase Due
        </a>
        <a href="http://localhost/pharmacy-management-ci/ShowForm/sell_statement/main">
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Sales of the Month
        </a>
        <a href="http://localhost/pharmacy-management-ci/ShowForm/sell_medicine/main">
            <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Today's Sale
        </a>
        <a href="http://localhost/pharmacy-management-ci/ShowForm/medicine_purchase_info/main">
            <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Expired Products
        </a>
        <a href="http://localhost/pharmacy-management-ci/ShowForm/create_generic_name/main">
            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Item Generic
        </a>
        <a href="http://localhost/pharmacy-management-ci/ShowForm/medicine_purchase_info/main">
            <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Items
        </a>
        <a href="http://localhost/pharmacy-management-ci/ShowForm/manage_staff/main">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Staffs
        </a>
        <a href="http://localhost/pharmacy-management-ci/main/logout">
            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
        </a>
    </div>
</div>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/create_medicine_presentation/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box1">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;"> 
                                    <span class="glyphicon glyphicon-th" aria-hidden="true" style="color: #009688;"></span> 
                                    <?php echo $medicine_qty; ?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Item Type</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/medicine_purchase_statement/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box2">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;"> 
                                    <span class="fas fa-cart-plus" aria-hidden="true" style="color:#f0ad4e;"></span> 
                                    <?php echo '₱'.$today_purchase_number; ?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Today's Purchase Amount</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/supplier_payment/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box3">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;"> 
                                    <span class="glyphicon glyphicon-credit-card" aria-hidden="true" style="color: #4cae4c;"></span>  
                                    <?php echo $today_due; ?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Total Purchase Due</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/sell_statement/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box4">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;"> 
                                    <span class="far fa-calendar-alt" aria-hidden="true" style="color: #2e6da4;"></span>  
                                    <?php echo '₱'.$monthly_sales_number; ?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Sales of the Month</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/sell_medicine/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box5">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;"> 
                                    <span class="glyphicon glyphicon-fire" aria-hidden="true" style="color: orange;"></span>  
                                    <?php echo '₱'.$today_sale_number; ?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Today's Sale</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/medicine_purchase_info/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box6">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;"> 
                                    <span class="glyphicon glyphicon-warning-sign" aria-hidden="true" style="color: darkred;"></span> 
                                    <?php echo $near_expired_product; ?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Expired Products</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/create_generic_name/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box7">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;"> 
                                    <span class="glyphicon glyphicon-th-list" aria-hidden="true" style="color: rgb(132, 75, 158);"></span> 
                                    <?php $query = $this->db->query('SELECT * FROM create_generic_name'); echo $query->num_rows();?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Item Generic</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/medicine_purchase_info/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box8">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;"> 
                                    <span class="glyphicon glyphicon-certificate" aria-hidden="true" style="color: rgb(139, 139, 139);"></span> 
                                    <?php $query = $this->db->query('SELECT * FROM create_medicine_name'); echo $query->num_rows();?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Items</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/pharmacy-management-ci/ShowForm/manage_staff/main">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: #1F456E; color: #FFFFFF;">
                            <h3 class="panel-title" style="font-family: Myriad, sans-serif; color: #FFFFFF; font-size: 18px;"></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well dash-box" id="box9">
                                <h2 style="font-family: Myriad, sans-serif; color: #000000; font-size: 16px;">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true" style="color: rgb(109, 139, 0);"></span> 
                                    <?php $query = $this->db->query('SELECT * FROM staff'); echo $query->num_rows();?>
                                </h2>
                                <h4 style="font-family: Myriad, sans-serif; color: #000000; font-size: 14px;">Staffs</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        const main = document.getElementById("main");
        if (sidebar.style.width === "250px") {
            sidebar.style.width = "0";
            main.style.marginLeft = "0";
        } else {
            sidebar.style.width = "250px";
            main.style.marginLeft = "250px";
        }
    }
</script>

</body>
</html>

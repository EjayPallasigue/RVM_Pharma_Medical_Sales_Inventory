<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>RVM Inventory & Sales Management System (admin)</title>
    <link rel="stylesheet" type="image/png" href="<?php echo base_url(); ?>assets/icon.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- CDN -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        /* Switch styling */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }
    </style>
</head>

<body>

    <!-- Menu Bar -->
    <nav class="navbar navbar-default" style="background-color: #5f6d73; border: none;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>Main/enter" style="color: #c4ddef;">Dashboard</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/create_medicine_name/main"
                            style="color: #c4ddef;">Create Options</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_info/main"
                            style="color: #c4ddef;">Inventory</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/sell_medicine/main" style="color: #c4ddef;">Sales</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/profit_loss/main" style="color: #c4ddef;">Accounting</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/manage_staff/main"
                            style="color: #c4ddef;">Manage Staff Account</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#"></a></li>
                    <li><a href="<?php echo base_url(); ?>main/logout" style="color: #c4ddef;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header" style="background-color: #151E3D; margin-top: -20px;">
        <div class="container">
            <div class="col-md-10">
                <h2>
                    <i class="fa fa-medkit"></i>
                    RVM Inventory & Sales Management System
                </h2>
            </div>
            <div class="col-md-2 text-right">
                <div id="dateTimeDisplay" style="font-family: Arial, sans-serif; font-size: 18px;"></div>
                <div>
                    <label class="switch">
                        <input type="checkbox" id="timeFormatToggle" onchange="updateTime()" title="Toggle time format">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
    </header>

    <script>
        function getMonthName(month) {
            var monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            return monthNames[month];
        }

        function getDayName(day) {
            var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            return dayNames[day];
        }

        function updateTime() {
            var now = new Date();
            var dateTimeDisplay = document.getElementById('dateTimeDisplay');
            var timeFormatToggle = document.getElementById('timeFormatToggle');
            var options = {
                hour12: !timeFormatToggle.checked,
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            };
            var timeString = now.toLocaleString('en-US', options);
            var monthName = getMonthName(now.getMonth());
            var dayName = getDayName(now.getDay());
            var dateString = dayName + ', ' + monthName + ' ' + now.getDate() + ', ' + now.getFullYear();
            dateTimeDisplay.innerHTML = dateString + ' ' + timeString;
        }

        updateTime();
        document.getElementById('timeFormatToggle').addEventListener('change', updateTime);
        setInterval(updateTime, 1000);
    </script>

</body>

</html>

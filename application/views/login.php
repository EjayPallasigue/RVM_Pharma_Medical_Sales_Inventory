<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>RVM Management System Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <style>
        /* Add background image to the body */
        body {
            background-image: url('https://pbs.twimg.com/media/GMKFEp7aIAA5HNQ?format=jpg&name=large');
            background-size: cover; /* Cover the entire page */
            background-position: center; /* Center the background image */
        }
        @keyframes moveRight {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        .tv-report-text {
            animation: moveRight 10s linear infinite;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" style="display: flex; justify-content: center; align-items: center; height: 5%;">
                    <li>
                        <a href="#" class="tv-report-text">
                            THIRD GROUP • RVM Pharma & Medical Distribution • COE - 31 ©&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THIRD GROUP • RVM Pharma & Medical Distribution • COE - 31 ©&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!-- Header -->
    <header id="header" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left" style="color: #0063C3;">
                    <h1>
                        <span class="fa fa-user-md user-md-icon" aria-hidden="true"></span>
                        <strong class="impact-italic">Admin Login</strong>
                    </h1>
                </div>
                <div class="col-md-6 text-right">
                    <h1 style="color: #0063C3; font-family: 'impact', serif; font-size: 3.5rem; font-style: bold;">
                        RVM Management System
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <section id="main" style="margin-top: 50px;">
        <div class="container-fluid"> <!-- Use container-fluid to make the container wider -->
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form method="post" class="well" action="<?php echo base_url();?>main/login_validation" style="border: 1px solid #141b5b; padding: 20px;">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" name="username" class="form-control" value="<?php echo $this->session->flashdata('valid_username') ? $this->session->flashdata('valid_username') : set_value('username'); ?>"/>
                            <span class="text-danger"><?php echo form_error('username');?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input class="form-control" name="password" id="password" type="password" value="<?php echo $this->session->flashdata('valid_password') ? $this->session->flashdata('valid_password') : ''; ?>"/>
                            <span class="text-danger"><?php echo form_error('password');?></span>
                        </div>
                        <button type="submit" name="insert" value="Login" class="btn btn-success" style="background-color: #0063C3;">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login
                        </button>

                        <button type="" name="insert" value="Login" class="btn btn-danger" style="background-color: white; border: 1px solid #ccc;">
                            <span class="glyphicon glyphicon-user" aria-hidden="true" style="color: navy;"></span> <a href="<?php echo base_url(); ?>Staff" style="color:#0063C3; text-decoration:none;">Staff Login</a>
                        </button>

                        <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="navbar navbar-fixed-bottom">
        <p>&copy; RVM Pharma & Medical Supplies Distribution, <?php echo date('Y')?>  </p>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>RVM Management System</title>
    <link rel="stylesheet"  type="image/png" href="<?php echo base_url(); ?>assets/icon.png">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/style.css">
</head>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<style>
    body {
        background-image: url('https://pbs.twimg.com/media/GMKFEsEa4AAfrL4?format=jpg&name=large');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <style>
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
                <ul class="nav navbar-nav" style="display: flex; justify-content: center; align-items: center; height: 100%;">
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
    <!--/.nav End -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <link rel="stylesheet" href="path/to/olde_english_font.css">
    <style>
        .impact-italic {
            font-family: Impact, Charcoal, sans-serif;
            font-style: italic;
        }
        .medkit-icon {
            color: green;
        }
    </style>
</head>
<body>

 <!-- /.header -->

 <header id="header" style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left" style="color: #0063C3;">
                <h1>
                    <span class="fa fa-medkit medkit-icon" aria-hidden="true"></span>
                    <strong class="impact">Staff Login</strong>
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
</body>
</html>

        

 
    <!-- /.container -->
    <section id="main" style="margin-top: 50px;">
       <div class="container-fluid"> <!-- Use container-fluid to make the container wider -->
         <div class="row">
           <div class="col-md-4 col-md-offset-4">
               <form method="post" class="well" action="<?php echo base_url();?>Staff/login_validation">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <!--<input type="username" class="form-control" id="email">-->
                        <input type="username" name="username" class="form-control"/>
                        <span class="text-danger"><?php echo form_error('username');?></span>
                    </div>
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <!--<input type="password" class="form-control" id="password">-->
                <!--<input type="password " name="password" id="password" class="form-control"/>-->
                        <input class="form-control" name="password" id="password" type="password"/>
                        <span class="text-danger"><?php echo form_error('password');?></span>
                    </div>
                    <!--<button type="submit" class="btn btn-default">Submit</button>-->
                    <button type="submit" name="insert" value="Login" class="btn btn-success">
    <span class="glyphicon glyphicon-log-in" aria-hidden="true" style="color: white;"></span> Login
</button>
<button type="" name="insert" value="Login" class="btn btn-default">
    <span class="glyphicon glyphicon-user" aria-hidden="true" style="color: navy;"></span>
    <a href="<?php echo base_url(); ?>Main" style="text-decoration:none; color: navy;">Admin Login</a>
</button>


                   <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?>
                  </form>
           </div>
       </div>
   </section>
    
    <!-- /.Footer -->
    <footer id="footer" class="navbar navbar-fixed-bottom">
  <p>&copy; RVM Pharma & Medical Supplies Distribution,  <?php echo date('Y')?>  </p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

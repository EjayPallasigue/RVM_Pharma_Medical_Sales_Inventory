<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        /* Ensure the body takes full height */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Flexbox to push footer to the bottom */
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 34vh;
        }

        .content {
            flex: 1;
        }

        #footer {
            background-color: #151E3D;
            color: #fff;
            text-align: center;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Main content -->
        <div class="content">
            <!-- Your main content goes here -->
        </div>

        <!-- /.Footer -->
        <footer id="footer">
            <p>&copy; RVM Pharma & Medical Distribution, <?php echo date('Y') ?> </p>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        window.jQuery ||
        document.write(
            '<script src="../../assets/js/vendor/jquery.min.js"><\/script>'
        );
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

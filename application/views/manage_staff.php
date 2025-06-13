<?php
if (isset($msg)) {
    if ($msg == "main") {
        $msg = "";
    } elseif ($msg == "empty") {
        $msg = "Please fill out all required fields";
    } elseif ($msg == "created") {
        $msg = "Created Successfully";
    } elseif ($msg == "edit") {
        $msg = "Edited Successfully";
    } elseif ($msg == "delete") {
        $msg = "Deleted Successfully";
    } elseif ($msg == "Username already taken") {
        $msg = "Username already taken";
    }
}

use Twilio\Rest\Client;

// Your Twilio credentials
$sid = 'AC2512954UDUI'; //  your Twilio Account SID
$token = '989251'; //  your Twilio Auth Token
$twilioNumber = '+639953484885'; //  your Twilio phone number
?>

<!-- /.Breadcrumb -->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Create Account Option</a></li>
            <li class="active"><?php echo $msg; ?></li>
        </ol>
    </div>
</section>

<!-- /.container -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Manage Staff Account
                    </a>
                    <a href="<?php echo base_url(); ?>ShowForm/manage_staff/main" class="list-group-item">
                        <span class="far fa-user" aria-hidden="true"></span> Create Staff Account
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Create Staff Account</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open_multipart('Insert/create_staff'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="" name="username">
                                </div>
                                <div class="col-sm-6">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" placeholder="" name="password" style="width: 300px;">
                                        <div class="input-group-append" style="position: relative;">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="background-color: rgba(255,255,255,0.8); border: none; position: absolute; right: 50;" title="Reveal Password">
                                    <i class="fas fa-eye" id="toggleIcon" style="opacity: 0.5;"></i>
                                </button>
                                    </button>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6" style="margin-top: 17px;">
                                    <button type="submit" class="pull-left btn btn-primary">
                                        <i class="fas fa-plus-circle"></i> Create
                                    </button>
                                    <button type="button" class="btn btn-secondary" onclick="generatePassword()">
                                        <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Generate Password
                                    </button>
                                    <p id="passwordSuggestion" style="margin-top: 10px;"></p>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.Panel End -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Staff List</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">Username</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($all_value as $single_value) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->username; ?></td>
                                            <td style="text-align: center;">
                                                <a style="margin: 5px;" class="btn btn-danger delete-btn" href="<?php echo base_url(); ?>Delete/manage_staff/<?php echo $single_value->id; ?>">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>
                                                <a style="margin: 5px;" class="btn btn-success edit-btn" href="<?php echo base_url(); ?>ShowForm/edit_staff_info/<?php echo $single_value->id; ?>">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.Container -->

    <!-- Back to Dashboard Button -->
    <div id="backToDashboardButton" title="Back to Dashboard" style="position: fixed; bottom: 20px; left: 20px; z-index: 999;">
        <a href="http://localhost/pharmacy-management-ci/Main/enter" style="text-decoration: none;">
            <div style="background-color: #1f456e; color: white; border-radius: 50%; width: 50px; height: 50px; display: flex; justify-content: center; align-items: center; cursor: pointer;">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="font-size: 24px;"></span>
            </div>
        </a>
    </div>

    <!-- Go to Top Button -->
    <button onclick="topFunction()" id="goTopButton" title="Go to top" style="display: none; position: fixed; bottom: 20px; right: 30px; z-index: 99; border: none; outline: none; background-color: transparent; cursor: pointer;">
        <i class="fa fa-arrow-up" style="font-size: 24px; color: #555;"></i>
    </button>

    <script>
    // Get the button
    const goTopButton = document.getElementById("goTopButton");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            goTopButton.style.display = "block";
        } else {
            goTopButton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
// Function to toggle password visibility
function togglePasswordVisibility() {
    const passwordField = document.getElementById("password");
    const toggleIcon = document.getElementById("toggleIcon");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    }
}

// Event listener for the toggle button
document.getElementById("togglePassword").addEventListener("click", togglePasswordVisibility);

    function generatePassword() {
        const length = 12;
        const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+~`|}{[]:;?><,./-=";
        let password = "";
        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * charset.length);
            password += charset[randomIndex];
        }
        document.getElementById("password").value = password;
        document.getElementById("passwordSuggestion").innerText = "Suggested Password: " + password;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const editButtons = document.querySelectorAll('.edit-btn');

        const deleteOtps = [ '102403','309527', '083102', '482910', '763812', '594023', '871234', '956701', '347890', '215648', '509381', '726549', '830193']; // Replace with actual OTP logic
        const editOtps = ['158321', '276435', '384216', '310208','184623', '376512', '592348', '780913', '365874', '891236', '673210','420195', '830165']; // Replace with actual OTP logic

        const usedOtps = { delete: [], edit: [] };

        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const userConfirmed = prompt('We have sent an OTP to your registered mobile number. Please enter the OTP to confirm deletion.');
                if (deleteOtps.includes(userConfirmed) && !usedOtps.delete.includes(userConfirmed)) {
                    usedOtps.delete.push(userConfirmed);
                    window.location.href = this.href;
                } else {
                    alert('Incorrect OTP.');
                }
            });
        });

        editButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const userConfirmed = prompt('We have sent an OTP to your registered mobile number. Please enter the OTP to confirm editing.');
                if (editOtps.includes(userConfirmed) && !usedOtps.edit.includes(userConfirmed)) {
                    usedOtps.edit.push(userConfirmed);
                    window.location.href = this.href;
                } else {
                    alert('Incorrect OTP.');
                }
            });
        });

        window.addEventListener('beforeunload', function() {
            localStorage.setItem('usedOtps', JSON.stringify(usedOtps));
        });

        const storedOtps = JSON.parse(localStorage.getItem('usedOtps'));
        if (storedOtps) {
            usedOtps.delete = storedOtps.delete;
            usedOtps.edit = storedOtps.edit;
        }
    });
    </script>

    <style>
        .btn-group-vertical {
            display: flex;
            flex-direction: column;
        }
        .btn-group-vertical button {
            margin-top: 5px;
        }
    </style>

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</section>


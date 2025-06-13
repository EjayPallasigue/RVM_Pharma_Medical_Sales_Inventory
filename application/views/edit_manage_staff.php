<?php
// Assuming you're using a database connection named $db

// Fetching existing user details for the form fields
foreach ($one_value as $one_info) {
    $record_id = $one_info->id;
    $one_name = $one_info->username;
    $one_password = $one_info->password;
}

// Initialize an error message variable
$error_msg = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the username already exists
    $query = "SELECT COUNT(*) as count FROM users WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result['count'] > 0 && $username != $one_name) {
        // Username already exists and it's not the current user's username
        $error_msg = "This username is already existing";
    } else {
        // Proceed with updating the user info
        $update_query = "UPDATE users SET username = ?, password = ? WHERE id = ?";
        $update_stmt = $db->prepare($update_query);
        $update_stmt->execute([$username, $password, $record_id]);
        $msg = "Edited Successfully";
        // Redirect or perform further actions as needed
    }
}
?>

<!-- /.Breadcrumb -->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Create Option</a></li>
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
                        <span class="glyphicon glyphicon-person" aria-hidden="true"></span> Manage Staff
                    </a>
                    <a href="<?php echo base_url(); ?>ShowForm/manage_staff/main" class="list-group-item">
                        <span class="fa fa-truck-moving" aria-hidden="true"></span> Create Staff
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Create Staff</h3>
                    </div>

                    <div class="panel-body">
                        <?php if ($error_msg): ?>
                            <div class="alert alert-danger">
                                <?php echo $error_msg; ?>
                            </div>
                        <?php endif; ?>
                        <?php echo form_open_multipart('Insert/edit_staff_info/'.$record_id); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder=""
                                           value="<?php echo $one_name; ?>" name="username">
                                </div>
                                <div class="col-sm-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder=""
                                           value="<?php echo $one_password; ?>" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 17px;">
                                <button type="submit" class="pull-left btn btn-primary">
    <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Update
</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.Panel End -->
        </div>
    </div> <!-- /.row -->
</div> <!-- /.Container -->
</section>



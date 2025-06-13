<?php
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
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Create Option</a></li>
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
                    <a href="index.html" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Create Option</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_medicine_presentation/main" class="list-group-item">
                        <span class="fa fa-capsules" aria-hidden="true"></span> Item Presentation</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_generic_name/main" class="list-group-item">
                        <span class="fa fa-plus-circle" aria-hidden="true"></span> Generic Name </a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_medicine_name/main" class="list-group-item">
                        <span class="fa fa-pills" aria-hidden="true"></span> Brand Name</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_supplier/main" class="list-group-item">
                        <span class="fa fa-truck-moving" aria-hidden="true"></span> Supplier</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Create Brand Name</h3>
                    </div>

                    <div class="panel-body">
                        <!-- /.Panel End -->
                        <?php echo form_open_multipart('Insert/medicine_name'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="generic_name">Generic Name</label>
                                    <select name="generic_name" id="generic_name" class="form-control selectpicker" data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_generic as $info) { ?>
                                            <option value="<?php echo $info->generic_name; ?>"><?php echo $info->generic_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="medicine_name">Brand Name</label>
                                    <input type="text" class="form-control" id="medicine_name" placeholder="" name="medicine_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 17px;">
                                    <button type="submit" class="pull-left btn btn-primary">
                                        <i class="fas fa-plus-circle"></i> <!-- Font Awesome create icon -->
                                        Create
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div><!-- /.Panel End -->
                
                <!-- /.Panel 2nd -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Brand Name List</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">
                                            Generic Name
                                            <button id="sortButton" class="btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-sort"></span> Sort
                                            </button>

                                        </th>
                                        <th style="text-align: center;">Brand Name
                                            <input type="text" id="brandSearchBar" placeholder="Search" class="form-control" style="display: inline-block; width: auto; margin-left: 10px;">
                                        </th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <!-- /.Row from DB-->
                                <tbody id="genericNameTable">
                                    <?php
                                    $count = 0;
                                    foreach ($all_value as $single_value) {
                                        $count++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: center;" class="generic-name"><?php echo $single_value->generic_name; ?></td>
                                        <td style="text-align: center;" class="brand-name"><?php echo $single_value->medicine_name; ?></td>
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-danger delete-btn" href="<?php echo base_url(); ?>Delete/medicine_name/<?php echo $single_value->medicine_name_id; ?>">
                                                <i class="fas fa-trash-alt"></i> Delete<!-- Font Awesome trash can icon -->
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
        </div> <!-- /.row -->
    </div> <!-- /.Container -->
</section>

<div id="backToDashboardButton" title="Back to Dashboard" style="position: fixed; bottom: 20px; left: 20px; z-index: 999;">
    <a href="http://localhost/pharmacy-management-ci/Main/enter" style="text-decoration: none;">
        <div style="background-color: #1f456e; color: white; border-radius: 50%; width: 50px; height: 50px; display: flex; justify-content: center; align-items: center; cursor: pointer;">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="font-size: 24px;"></span>
        </div>
        <div style="color: #1f456e; margin-top: 5px;"></div>
    </a>
</div>

<!-- Go to Top Button -->
<button onclick="topFunction()" id="goTopButton" title="Go to top" style="display: none; position: fixed; bottom: 20px; right: 30px; z-index: 99; border: none; outline: none; background-color: transparent; cursor: pointer;">
    <i class="fa fa-arrow-up" style="font-size: 24px; color: #555;"></i>
</button>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sortButton = document.getElementById('sortButton');
    const brandSearchBar = document.getElementById('brandSearchBar');
    let sortDirection = true;

    // Sort button functionality
    sortButton.addEventListener('click', function() {
        const table = document.getElementById('genericNameTable');
        const rows = Array.from(table.querySelectorAll('tr'));

        rows.sort((a, b) => {
            const nameA = a.querySelector('.generic-name').textContent.toLowerCase();
            const nameB = b.querySelector('.generic-name').textContent.toLowerCase();
            if (nameA < nameB) return sortDirection ? -1 : 1;
            if (nameA > nameB) return sortDirection ? 1 : -1;
            return 0;
        });

        rows.forEach(row => table.appendChild(row));
        sortDirection = !sortDirection;
    });

    // Search bar functionality
    brandSearchBar.addEventListener('input', function() {
        const searchText = this.value.toLowerCase();
        const tableRows = document.querySelectorAll('#genericNameTable tr');

        tableRows.forEach(row => {
            const brandName = row.querySelector('.brand-name').textContent.toLowerCase();
            if (brandName.includes(searchText)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Back to top button functionality
    const goTopButton = document.getElementById("goTopButton");
    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            goTopButton.style.display = "block";
        } else {
            goTopButton.style.display = "none";
        }
    };

    goTopButton.addEventListener('click', function() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    });

    // Delete button confirmation
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const userConfirmed = prompt('Are you sure you want to delete this? If yes, type "Confirm"');
            if (userConfirmed === 'Confirm') {
                window.location.href = this.href;
            }
        });
    });
});
</script>

<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

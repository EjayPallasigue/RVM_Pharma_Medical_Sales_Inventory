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
                        <h3 class="panel-title">Create Generic Name</h3>
                    </div>

                    <div class="panel-body">
                        <!-- /.Panel End -->
                        <div class="row">
                            <div class="col-md-3">
                                <?php echo form_open_multipart('Insert/generic_name'); ?>
                                <div class="box-body">
                                    <div class="form-group" style="width: 400px;">
                                        <label for="generic_name">Generic Name</label>
                                        <input type="text" class="form-control" id="generic_name" placeholder=""
                                            name="generic_name">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="pull-left btn btn-primary">
                                        <i class="fas fa-plus-circle"></i> <!-- Font Awesome create icon -->
                                        Create
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.Panel End -->
                <!-- /.Panel 2nd -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Generic Name List</h3>
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
                                            <input type="text" id="searchBar" placeholder="Search" class="form-control" style="display: inline-block; width: auto; margin-left: 10px;">
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
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-danger delete-btn" href="<?php echo base_url(); ?>Delete/generic_name/<?php echo $single_value->generic_id; ?>">
                                                <i class="fas fa-trash-alt"></i> Delete <!-- Font Awesome trash can icon -->
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
let sortOrder = 'asc';

document.getElementById('sortButton').addEventListener('click', function() {
    const table = document.getElementById('genericNameTable');
    const rows = Array.from(table.querySelectorAll('tr'));

    rows.sort((a, b) => {
        const nameA = a.querySelector('.generic-name').textContent.toLowerCase();
        const nameB = b.querySelector('.generic-name').textContent.toLowerCase();
        if (nameA < nameB) return sortOrder === 'asc' ? -1 : 1;
        if (nameA > nameB) return sortOrder === 'asc' ? 1 : -1;
        return 0;
    });

    rows.forEach(row => table.appendChild(row));

    sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
});

document.getElementById('searchBar').addEventListener('input', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#genericNameTable tr');
    
    rows.forEach(row => {
        const cell = row.querySelector('.generic-name');
        if (cell) {
            const text = cell.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
        }
    });
});

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

document.addEventListener('DOMContentLoaded', function() {
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

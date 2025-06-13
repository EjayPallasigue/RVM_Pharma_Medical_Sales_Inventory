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
                        <h3 class="panel-title">Create Item Presentation</h3>
                    </div>

                    <div class="panel-body">
                        <!-- /.Panel End -->
                        <div class="row">
                            <div class="col-md-3">
                                <?php echo form_open_multipart('Insert/medicine_presentation'); ?>
                                <div class="box-body">
                                    <div class="form-group" style="width: 400px;">
                                        <label for="medicine_presentation">Item Presentation</label>
                                        <input type="text" class="form-control" id="medicine_presentation" placeholder="" name="medicine_presentation">
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
                        <h3 class="panel-title">Item Presentation List</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">
                                        <div style="display: flex; align-items: center;">
                                              <span style="margin-left: 90px;">Item Presentation</span>
                                         <button id="sortButton" class="btn btn-default btn-xs" style="margin-left: 10px;">
                                                <span class="glyphicon glyphicon-sort"></span> Sort
                                            </button>
                                         <input type="text" id="searchPresentation" class="form-control" style="width: 230px; margin-left: 10px;" placeholder="Search">
                                            </div>

                                        </th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <!-- /.Row from DB-->
                                <tbody id="itemPresentationList">
                                    <?php
                                    $count = 0;
                                    foreach ($all_value as $single_value) {
                                        $count++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->medicine_presentation; ?></td>
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-danger delete-btn" href="#" onclick="return confirmDelete('<?php echo base_url(); ?>Delete/medicine_presentation/<?php echo $single_value->medicine_presentation_id; ?>');">
                                                <span class="glyphicon glyphicon-trash"></span> Delete
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
function confirmDelete(url) {
    var confirmation = prompt("Are you sure you want to delete this? If yes, type 'Confirm'.");
    if (confirmation === "Confirm") {
        window.location.href = url;
    } else {
        return false;
    }
}

// Get the button
const goTopButton = document.getElementById("goTopButton");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20
    ) {
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

// Sorting function
document.getElementById("sortButton").addEventListener("click", function() {
    var table = document.getElementById("itemPresentationList");
    var rows = Array.prototype.slice.call(table.querySelectorAll("tr"));

    rows.sort(function(a, b) {
        var A = a.cells[1].textContent.trim().toLowerCase();
        var B = b.cells[1].textContent.trim().toLowerCase();
        if (A < B) {
            return -1;
        }
        if (A > B) {
            return 1;
        }
        return 0;
    });

    rows.forEach(function(row) {
        table.appendChild(row);
    });
});

// Search functionality
document.getElementById("searchPresentation").addEventListener("input", function() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchPresentation");
    filter = input.value.toUpperCase();
    table = document.getElementById("itemPresentationList");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; // Index 1 for the column you want to search
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
});

</script>

<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
            <li><a href="#">Inventory</a></li>
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
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inventory</a>
                    <a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_info/main"
                        class="list-group-item">
                        <span class="fa fa-capsules" aria-hidden="true"></span> Insert Item Info.</a>
                    <a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_statement/main" class="list-group-item">
                        <span class="fa fa-plus-circle" aria-hidden="true"></span> Purchase Statement</a>
                    <a href="<?php echo base_url(); ?>ShowForm/supplier_payment/main" class="list-group-item">
                        <span class="fa fa-pills" aria-hidden="true"></span> Supplier Payment</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Insert Item Purchase Information</h3>
                    </div>

                    <div class="panel-body">

                        <!-- /.Panel End -->
                        <?php echo form_open_multipart('Insert/medicine_purchase_info'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-3" style="">
                                    <label for="medicine_name">Item Name</label>
                                    <select name="medicine_name" id="medicine_name" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_medicine as $info) { ?>
                                            <option value="<?php echo $info->medicine_name . "#" . $info->medicine_name_id; ?>"><?php echo $info->medicine_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-3" style="">
                                    <label for="generic">Generic</label>
                                    <select name="generic" id="generic" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_generic as $info) { ?>
                                            <option value="<?php echo $info->generic_name . "#" . $info->generic_id; ?>"><?php echo $info->generic_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-3" style="">
                                    <label for="presentation">Presentation</label>
                                    <select name="presentation" id="presentation" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_presen as $info) { ?>
                                            <option value="<?php echo $info->medicine_presentation . "#" . $info->medicine_presentation_id; ?>"><?php echo $info->medicine_presentation; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-3" style="">
                                    <label for="supplier">Supplier Company</label>
                                    <select name="supplier" id="supplier" class="form-control selectpicker"
                                            data-live-search="true">
                                        <option value="">-- Select --</option>
                                        <?php foreach ($all_sup as $info) { ?>
                                            <option value="<?php echo $info->supplier_name . "#" . $info->supplier_id; ?>"><?php echo $info->supplier_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="qty">Total Quantity</label>
                                    <input type="number" class="form-control" id="qty" name="qty">
                                </div>
                                <div class="col-sm-3" style="">
                                    <label for="unit_price">Unit Price</label>
                                    <input type="number" step="any" class="form-control" id="unit_price" name="unit_price">
                                </div>
                                <div class="col-sm-3">
                                    <label for="purchase_price">Total Amount</label>
                                    <input type="number" step="any" class="form-control" id="purchase_price" placeholder="₱"
                                           name="purchase_price">
                                </div>
                                <div class="col-sm-3">
                                    <label for="unit_sales_price">Selling Price</label>
                                    <input type="number" step="any" class="form-control" id="unit_sales_price" placeholder="₱"
                                           name="unit_sales_price">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="unit">Volume/Weight</label>
                                    <input type="text" class="form-control" id="unit" placeholder="mg / ml / kg"
                                           name="unit">
                                </div>
                                <div class="col-sm-3">
                                    <label for="purchase_paid">Purchase Paid</label>
                                    <input type="number" class="form-control" id="purchase_paid" placeholder="₱"
                                           name="purchase_paid">
                                </div>
                                <div class="col-sm-3">
                                    <label for="purchase_due">Purchase Due</label>
                                    <input type="number" step="any" class="form-control" id="purchase_due" placeholder="₱"
                                           name="purchase_due">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ex_date">Expire Date</label>
                                    <input type="date" class="form-control new_datepicker" id="ex_date"
                                           placeholder="Date" name="ex_date" autocomplete="off">
                                </div>
                                <div class="col-sm-3" style="display: none">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control new_datepicker" id="date"
                                           value="<?php echo date('y-m-d'); ?>" placeholder="Date" name="date" autocomplete="off">
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
                            </form>
                        </div>
                    </div>
                </div><!-- /.Panel End -->
            </div>
            <!-- /.Panel 2nd -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form method="post" action="<?php echo base_url(); ?>export_csv/export">
                            <h3 class="panel-title">Item List
                                <!-- <input type="submit" name="export"
                                     class="btn btn-success btn-xs" value="Export to CSV" /> -->
                            </h3>
                        </form>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="searchDetails" class="form-control" placeholder="Search Item">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="searchSupplier" class="form-control" placeholder="Search Supplier">
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="itemTable">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">Details</th>
                                        <th style="text-align: center;">Supplier</th>
                                        <th style="text-align: center;">Total Qty</th>
                                        <th style="text-align: center;">Unit Price</th>
                                        <th style="text-align: center;">Total Amount</th>
                                        <th style="text-align: center;">Selling Price</th>
                                        <th style="text-align: center;">Paid</th>
                                        <th style="text-align:center;">Due</th>
										<th style="text-align: center;">Expiry</th>
										<th style="text-align: center;">Action</th>
						</tr>
						</thead>
						<!-- /.Row from DB-->
						<tbody>
						<?php
						$count = 0;
						foreach ($all_value as $single_value) {
							$count++;

							if ($single_value->particulars != "Payment") {
								?>

								<tr>
									<td style="text-align: center;"><?php echo $count; ?></td>
									<td style="text-align: left;">
										<b>Item:</b> <?php echo $single_value->medicine_name; ?> <br>
										<b>Generic:</b> <?php echo $single_value->generic_name; ?></br>
										<b>Presentation:</b> <?php echo $single_value->medicine_presentation; ?> </br>
										<b>Volume/Weight:</b> <?php echo $single_value->unit; ?> </br>
										<b>P. Date:</b> <?php echo $single_value->date; ?>
									</td>
									<td style="text-align: center;"><?php echo $single_value->supplier_name; ?></td>
									<td style="text-align: center;"><?php echo $single_value->qty; ?></td>
									<td style="text-align: center;"><?php echo '₱' . $single_value->unit_price; ?></td>
									<td style="text-align: center;"><?php echo '₱' . $single_value->purchase_price; ?></td>
									<td style="text-align: center;"><?php echo '₱' . $single_value->unit_sales_price; ?></td>
									<td style="text-align: center;"><?php echo '₱' . $single_value->purchase_paid; ?></td>
									<td style="text-align: center;"><?php echo '₱' . $single_value->purchase_due; ?></td>
									<td style="text-align: center;"><?php echo $single_value->expiredate; ?></td>
									<td style="text-align: center;">
										<a style="margin: 5px;" title="Update"
										href="<?php echo base_url(); ?>ShowForm/edit_purchase_info/<?php echo $single_value->purchase_id; ?>">
											<span class="glyphicon glyphicon-edit"></span>
										</a>
										<a style="margin: 5px;" title="Delete"
										href="<?php echo base_url(); ?>Delete/medicine_purchase_info/<?php echo $single_value->purchase_id; ?>">
											<span class="fa fa-trash" style="color:crimson"></span>
										</a>
									</td>
								</tr>
							<?php } //if condition
						} ?>
						<!-- // foreach-->
						</tbody>
						</table>
						</div>
						</div>
						</div>
						</div> <!-- /.row -->
						</div> <!-- /.Container -->

						<!-- Back to Dashboard Button -->
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
							// Get the button
							const goTopButton = document.getElementById("goTopButton");

							// When the user scrolls down 20px from the top of the document, show the button
							window.onscroll = function () {
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

							// Filter table rows based on user input for Details column
							$('#searchDetails').on('keyup', function () {
								var value = $(this).val().toLowerCase();
								$('#itemTable tbody tr').filter(function () {
									$(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(value) > -1)
								});
							});

							// Filter table rows based on user input for Supplier column
							$('#searchSupplier').on('keyup', function () {
								var value = $(this).val().toLowerCase();
								$('#itemTable tbody tr').filter(function () {
									$(this).toggle($(this).find('td:nth-child(3)').text().toLowerCase().indexOf(value) > -1)
								});
							});
						</script>

						<!-- Include Font Awesome -->
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


						<script type="text/javascript">

							$("#purchase_paid").on("change paste keyup", function () {
								var purchase_paid = $('#purchase_paid').val();
								var purchase_price = $('#purchase_price').val();
								var total = parseFloat(purchase_price) - parseFloat(purchase_paid);
								$('#purchase_due').val(total);
							});
							$("#unit_price,#qty").on("change paste keyup", function () {
								var qty = $('#qty').val();
								var unit_price = $('#unit_price').val();
								//var total = parseFloat(purchase_price) - parseFloat(purchase_paid);
								var amount = qty * unit_price;
								$('#purchase_price').val(amount);
							});
						</script>


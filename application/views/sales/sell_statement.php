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
	<div class="container" id="no_print1">
		<ol class="breadcrumb">
			<li><a href="#">Sales / Sales Statement</a></li>
			<li class="active"><?php echo $msg; ?></li>
		</ol>
	</div>
</section>

<!-- /.container -->
<section id="main">
	<div class="container">

		<div class="row">
			<div class="col-md-3" id="no_print2">
				<div class="list-group">
					<a href="index.html" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Sales</a>
					<a href="<?php echo base_url(); ?>ShowForm/sell_medicine/main"
					   class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Sell Items</a>
					<a href="<?php echo base_url(); ?>ShowForm/sell_statement/main"
					   class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Sales Statement</a>
<!--					<a href="--><?php //echo base_url(); ?><!--ShowForm/medicine_purchase_statement/main" class="list-group-item">-->
<!--						<span class="fa fa-plus-circle" aria-hidden="true"></span> Client Payment</a>-->
				</div>
			</div>
			<div class="col-md-9" id="no_print3">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title"> Sales Statement</h3>
					</div>

					<div class="panel-body">

						<!-- /.Panel End -->

						<div class="box-body">
							<div class="row">
								<div class="col-sm-6" style="">
									<label for="date_from">Date From</label>
									<input type="date" class="form-control datepicker"
										   placeholder="Insert Date" name="date_from" id="date_from"
										   autocomplete="off">
								</div>
								<div class="col-sm-6" style="">
									<label for="date_to">Date To</label>
									<input type="date" class="form-control  datepicker"
										   placeholder="Insert Date" name="date_to" id="date_to"
										   autocomplete="off">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
								<button type="button" class="pull-left btn btn-primary" id="search_purchase">
									<i class="fas fa-search"></i> <!-- Font Awesome magnifying glass icon -->
									Search
								</button>

								</div>
							</div>

						</div>
					</div>
				</div><!-- /.Panel End -->
			</div>
			<!-- /.Panel 2nd -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
							<h3 class="panel-title">Sales Statement</h3>
					</div>
					<div class="panel-body" id="show_purchase">

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
</script>

<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</section>


<script type="text/javascript">
	$("#search_purchase").click(function () {
		var date_from = $('#date_from').val();
		var date_to = $('#date_to').val();
		var medicine_name = $('#medicine_name').val();
		//var invoice = $('#invoice').val();
		// var supplier = $('#supplier').val();
		var post_data = {
			'date_from': date_from, 'date_to': date_to, 'medicine_name': medicine_name
		};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/get_sales_statement",
			data: post_data,
			success: function (data) {
				$('#show_purchase').html(data);

			}
		});
	});
</script>

<style>
	@media print {
		a[href]:after {
			content: none !important;
		}

		#print_button {
			display: none;
		}

		#no_print1 {
			display: none;
		}
		#no_print2 {
			display: none;
		}
		#no_print3 {
			display: none;
		}
		#no_print4 {
			display: none;
		}
	}

</style>

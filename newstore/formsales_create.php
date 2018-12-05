<?php
include("api/db_config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">
		<title>Sales Transaction</title>

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <?php include "header.php"; ?>
            <!-- Top Bar End -->

            <?php include "sidemenu.php"; ?>
            <!-- Left Sidebar End -->

			<!-- Start right Content here -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Create Transaction</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="sales_transaction.php">Sales Transaction</a>
									</li>
									<li class="active">
										Create Transaction
									</li>
								</ol>
							</div>
						</div>


                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">
		                                        
									<form action="master_customer.php" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">No Faktur</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="INV-10000" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div>

                                        <div class="col-md-3"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Transaction Date</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="03-12-2018" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div>  
                                        <div class="col-md-3"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Exp Date</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="03-12-2018" required parsley-trigger="change" >
                                            </div> 
                                        </div>  
                                       
                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Customer Name</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Nickname</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Category Customer</label> 
                                                <input type="text" name="prodKode" class="form-control" value="Baby" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div>

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Cabin</label> 
                                                <select class="form-control" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                    <option value="female">Anak 1</option>
                                                    <option value="female">Anak 2</option>
                                                    <option value="female">Anak 3</option>
                                                    <option value="male">Dewasa 1</option>
                                                    <option value="male">Couple 1</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Therapist</label> 
                                                <select class="form-control" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                    <option value="female">Therapist Name 1</option>
                                                    <option value="female">Therapist Name 2</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Keterangan</label> 
                                                <textarea class="form-control autogrow" name="prodInfo" id="field-7" placeholder=""></textarea>
                                            </div> 
                                        </div> 

                                         <div class="col-md-12">  
                                            <div class="form-group text-center m-b-0">
                                                <button class="btn w-md btn-default waves-effect waves-light" type="submit">
                                                Save</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5">
                                                Back</button>
                                                <button type="reset" class="btn w-md waves-effect waves-light m-l-5">
                                                Clear</button>
									         </div>
                                        </div>

									</div>
									</form>
								</div>
							</div>
						</div>
                            

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <?php include 'footer.php'; ?>

            </div>


        </div>
        <!-- END wrapper -->

         <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/autocomplete.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>


        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>

        <script>
        function goBack() {
            window.history.back();
        }
        </script> 
	
	</body>
</html>
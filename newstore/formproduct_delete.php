<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">
		<title>Product</title>

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
								<h4 class="page-title">Delete Product</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="master_product.php">Product</a>
									</li>
									<li class="active">
										Delete Product
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-8">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Product Form</b></h4>
		                                        
									<form action="" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Product Name</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" parsley-trigger="change" disabled>
                                            </div> 
                                        </div> 

                                        <div class="col-md-4"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">ID Product</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" disabled>
                                            </div> 
                                        </div> 

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Why delete this product ?</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="" required parsley-trigger="change">
                                            </div> 
                                        </div> 
                                        
                                        <div class="col-md-12">  
                                            <div class="form-group text-left m-b-0">
                                                <button class="btn w-md btn-danger waves-effect waves-light" type="submit">
                                                Delete</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5">
                                                Back</button>
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
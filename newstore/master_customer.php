<?php
include("api/db_config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title>Customer</title>
    <!-- DataTables -->
    <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
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
                        <div class="pull-right m-t-15">
                           <!--
                            <a href="formservice_create.php">
                            <button class="btn btn-pink waves-effect waves-light"><i class="md md-add"></i> Add Customer</button>
                            </a>
                            -->
                        </div>

                        <h4 class="page-title">Customers</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                Customers
                            </li>
                        </ol>
                    </div>
                </div>

<!--
				<div class="row">
					<div class="col-sm-12">
						<div class="card-box widget-inline">
							<div class="row">
								<div class="col-lg-3 col-sm-6">
									<div class="widget-inline-box text-center">
                                        <h3><i class="text-purple md md-account-child"></i> <b data-plugin="counterup">1020</b></h3>
										<h4 class="text-muted">Total Pregnancy</h4>
									</div>
								</div>
										
								<div class="col-lg-3 col-sm-6">
									<div class="widget-inline-box text-center">
                                    <h3><i class="text-success md md-account-child"></i> <b data-plugin="counterup">4030</b></h3>
										<h4 class="text-muted">Total Baby</h4>
									</div>
								</div>
										
								<div class="col-lg-3 col-sm-6">
									<div class="widget-inline-box text-center">
										<h3><i class="text-warning md md-account-child"></i> <b data-plugin="counterup">2000</b></h3>
										<h4 class="text-muted">Total Kids</h4>
									</div>
								</div>
										
								<div class="col-lg-3 col-sm-6">
									<div class="widget-inline-box text-center b-0">
                                    <h3><i class="text-pink md md-account-child"></i> <b data-plugin="counterup">100</b></h3>
										<h4 class="text-muted">Total Regular</h4>
									</div>
								</div>
										
							</div>
						</div>
					</div>
				</div>
-->   
				
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                    <a href="formcustomer_create.php?cust=pregnancy">
                    <button class="btn btn-purple waves-effect waves-light col-xs-12"><i class="md md-add"></i> Add Pregnancy</button>
                    </a>
                        <div class="widget-panel widget-style-2 bg-white m-t-20">
                            <a href="">
                            <i class="md md-account-child text-purple"></i>
                            </a>
                             <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup">58962</span></h2>
                            <div class="text-muted m-t-5">Pregnancy</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <a href="formcustomer_create.php?cust=baby"">
                    <button class="btn btn-success waves-effect waves-light col-xs-12"><i class="md md-add"></i> Add Baby</button>
                    </a>
                        <div class="widget-panel widget-style-2 bg-white m-t-20">
                            <a href="">
                            <i class="md md-account-child text-success"></i>
                            </a>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup">2541</span></h2>
                            <div class="text-muted m-t-5">Baby</div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <a href="formcustomer_create.php?cust=kids"">
                    <button class="btn btn-warning waves-effect waves-light col-xs-12"><i class="md md-add"></i> Add Kids</button>
                    </a>
                        <div class="widget-panel widget-style-2 bg-white m-t-20">
                            <a href="">
                            <i class="md md-account-child text-warning"></i>
                            </a>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup">895</span></h2>
                            <div class="text-muted m-t-5">Kids</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <a href="formcustomer_create.php?cust=regular"">
                    <button class="btn btn-pink waves-effect waves-light col-xs-12"><i class="md md-add"></i> Add Regular</button>
                    </a>
                        <div class="widget-panel widget-style-2 bg-white m-t-20">
                            <a href="">
                            <i class="md md-account-child text-pink"></i>
                            </a>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup">3678</span></h2>
                            <div class="text-muted m-t-5">Regular</div>
                        </div>
                    </div>
                </div>
                        		
						

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive"
                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="5"
                             width="100%">
                             <thead>
                            <tr>
                                <th></th> 
                                <th>ID Customer</th> 
                                <th>Full Name</th>
                                <th>Category</th>
                                <th>Address</th> 
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>  
                            <tbody>
                            <tr>
                                <td>
                                    <a href="formsales_create.php">
                                    <button type="button" class="btn btn-xs btn-purple waves-effect waves-light"> <i class="fa fa-plus-square-o m-r-5"></i> <span>
                                   New Transaction</span> </button>
                                    </a>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                <a href="formproduct_update.php?update=">
                                <button type="button" class="btn btn-xs btn-warning waves-effect waves-light"> <i class="fa fa-edit m-r-5"></i> <span>
                                Edit</span> </button>
                                </a>
                                <a href="formproduct_delete.php?delete=">
                                <button type="button" class="btn btn-xs btn-danger waves-effect waves-light"> <i class="fa fa-trash m-r-5"></i> <span>
                                Delete</span> </button>
                                </td>
                                </a>
                            </tr>  
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->
            
            <!-- container -->

        </div> <!-- content -->

        <!-- footer -->
        <?php include "footer.php"; ?>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


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

<!-- Modal-Effect -->
<script src="assets/plugins/custombox/js/custombox.min.js"></script>
<script src="assets/plugins/custombox/js/legacy.min.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="assets/pages/datatables.init.js"></script>

<script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>

</body>
</html>
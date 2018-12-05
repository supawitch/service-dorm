<?php
session_start();
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>เช็คพัสดุ</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class = "header" style="height : 5em"> 
			<?php 
			include('/headerstu.php');
			?>
		</section>
		<section class="body">

			<!-- start: header -->
		

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left" style="background-color:#ff5c00;box-shadow: 0px 0 0 ">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							KMUTNB
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle" style="background-color:#ff5c00">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano" style='background-color:#242d32'>
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									
									<li >
										<a >
											<i class="fa fa-home" aria-hidden="true"></i>
                                            <span style="color:white">
                                                <font size=3>หน้าหลัก</font>
                                            </span>
										</a>
												
									</li>															
									<li >
										<a >
											<i class="fa fa-wrench" aria-hidden="true"></i>
                                            <span style="color:white">
                                                 <font size=3>แจ้งซ่อม</font>
                                            </span>
										</a>
										
									</li>
									<li >
										<a href="indexstu.php">
											<i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span  style="color:white">
                                            <font size=3>แจ้งสถานะพัสดุ</font>
                                             </span>
										</a>
									
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
										
							<hr class="separator" />
											
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header" style="background-color:#ff5c00">
						<h2  style='border-bottom: 0px solid'>ระบบแจ้งสถานะพัสดุออนไลน์</h2>
					
						
					</header>

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								
								<h2 class="panel-title">รายการพัสดุ</h2>
							</header>
							<?php
							 
							$serverName = "localhost";
							$userName = "root";
							$userPassword = "123456789";
							$dbName = "project";
							
								$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

								if (mysqli_connect_errno())
								{
									echo "Database Connect Failed : " . mysqli_connect_error();
								}
								else
								{
									$sql = "SELECT * FROM table_post WHERE Status = 'รอนำจ่าย'";
									$query = mysqli_query($conn,$sql);
									
							?>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>ลำดับ</th>
											<th>หมายเลขพัสดุ</th>
											<th>ชื่อ-นามสกุล</th>
											<th class="hidden-phone">ชนิดพัสดุ</th>
											<th class="hidden-phone">ประเภทพัสดุ</th>
											<th>วันที่ได้รับพัสดุ</th>
											<th>สถานะพัสดุ</th>
											<th>หมายเหตุ</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<?php 
											while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
											?>
											<td><?php echo $result["ID_Order"]; ?></td>
											<td><?php echo $result["ID_Post"]; ?></td>
											<td><?php echo $result["FirstName"].'   '.$result["LastName"]; ?></td>
											<td class="center hidden-phone"><?php echo $result["Type"]; ?></td>
											<td class="center hidden-phone"><?php echo $result["Category"]; ?></td>
											<td><?php echo $result["Date"]; ?></td>
											<td><?php echo $result["Status"]; ?></td>
											<td><?php echo $result["Note"]; ?></td>
										</tr>
										<?php
										}
										//echo "Database Connected.";
									}
									mysqli_close($conn);
										?>
									</tbody>
								</table>
							</div>
						</section>
																						
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
	</body>
</html>
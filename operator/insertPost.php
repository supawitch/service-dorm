<?php
session_start();
if($_SESSION["status"] == "OPERATOR"){

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
			include('headernomal.php');
			?>
			<!-- end: header -->


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
										<a>
											<i class="fa fa-wrench" aria-hidden="true"></i>
                                            <span style="color:white">
                                                 <font size=3>แจ้งซ่อม</font>
                                            </span>
										</a>
										
									</li>
									<li >
										<a href="insertPost.php">
											<i class="fa fa-keyboard-o" aria-hidden="true"></i>
                                            <span  style="color:white">
                                            <font size=3>บันทึกข้อมูลพัสดุ</font>
                                             </span>
										</a>
										
									</li>
									<li >
										<a href="updatePost.php">
											<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                            <span  style="color:white">
                                            <font size=3>แก้ไขสถานะพัสดุ</font>
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
								
								<h2 class="panel-title">บันทึกข้อมูลพัสดุ</h2>
							</header>
							<div class="panel-body">
							<form class="form-horizontal form-bordered" method="POST" action=''>
											<div class="form-group"  style="padding:1em 0em 0em 0em">
												<label class="col-md-3 control-label" for="inputReadOnly">ลำดับ</label>
												<div class="col-md-6">
													<?php 
													 	$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
														 $objDB = mysql_select_db("project");
														 $strSQL = "SELECT ID_Order FROM table_post order by ID_Order DESC limit 1 ";
														 $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
														 while($objResult = mysql_fetch_array($objQuery)){
															 $id= $objResult["ID_Order"];
														 }
													?>
													<input type="text" class="form-control" id="inputReadOnly" name ='orderId' value="<?php echo $id+1;?>"  readonly="readonly">
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">หมายเลขพัสดุ</label>
												<div class="col-md-6">
													<input class="form-control" id="inputDefault" name='trackingNumber' type="text " required>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ชื่อ</label>
												<div class="col-md-6">
													<input type="text" name='firstName' id="inputDefault" class="form-control" required>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">นามสกุล</label>
												<div class="col-md-6">
													<input type="text" name='LastName'class="form-control" id="inputDefault" required>
												</div>
											</div>
						
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ชนิดพัสดุ</label>
												<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate" name='PackageType' required>
															<option value="ซอง">ซอง</option>
															<option value="กล่อง">กล่อง</option>
													</select>
												</div>
                                            </div>
                                            
                                            
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ประเภทพัสดุ</label>
												<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate" name='parcel' required>
															<option value="EMS">EMS</option>
															<option value="ลงทะเบียน">ลงทะเบียน</option>
													</select>
												</div>
                                            </div>
                                            
											<?php 
											//set thai date
											date_default_timezone_set('UTC');					
											function DateThai($strDate)
											{
												$strYear = date("Y",strtotime($strDate))+543;
												$strMonth= date("n",strtotime($strDate));
												$strDay= date("j",strtotime($strDate));
												$strHour= date("H",strtotime($strDate));
												$strMinute= date("i",strtotime($strDate));
												$strSeconds= date("s",strtotime($strDate));
												//$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
												//$strMonthThai=$strMonthCut[$strMonth];
												return "$strYear-$strMonth-$strDay";
											}
											$today = date("Y-m-d");
											$nowDate = DateThai($today);

                                            ?>
                                            
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded" >วันที่ได้รับพัสดุ</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" data-plugin-datepicker class="form-control"  id="inputDefault" name='dateGetParcel'  value="<? echo $nowDate; ?>" required>
													</div>
												</div>
                                            </div>
								
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputRounded">สถานะพัสดุ</label>
                                                    <div class="col-md-6">
                                                        <select data-plugin-selectTwo class="form-control populate"  name='stausParcel' required > 
                                                                <option value="รอนำจ่าย">รอนำจ่าย</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"  style="padding:1em 0em 0em 0em">
                                                    <label class="col-md-3 control-label" for="inputDefault">หมายเหตุ</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" id="inputDefault" name='note'>
                                                    </div>
                                                </div>
                                                <div>
                                                   <center>
														<button type="reset" class="mb-xs mt-xs mr-xs btn btn-warning" >ยกเลิก</button>
														<button type="submit" name="submit" class="mb-xs mt-xs mr-xs btn btn-success">ยืนยัน</button>
													
                                                    </center>    
                                            </div>
                                            </div>
                                        </form>
                                        <?php 
                                        if(isset($_POST['submit'])){

										echo $_POST['dateGetParcel'];
											$orderId = $_POST['orderId'];
											$trackingNumber = $_POST['trackingNumber'];
											$firstName = $_POST['firstName'];
											$LastName = $_POST['LastName'];
											$PackageType = $_POST['PackageType'];
											$parcel = $_POST['parcel'];
											$dateGetParcel = $_POST['dateGetParcel'];
											$stausParcel = $_POST['stausParcel'];
											$note = $_POST['note'];
											
	
												$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
												$objDB = mysql_select_db("project");
												$strSQL = "INSERT INTO table_post ";
												$strSQL .="(ID_Order,ID_Post,FirstName,LastName,Type,Category,Date,Status,Note) ";
												$strSQL .="VALUES ";
												$strSQL .="('".$_POST['orderId']."','".$_POST["trackingNumber"]."','".$_POST["firstName"]."' ";
												$strSQL .=",'".$_POST["LastName"]."','".$_POST["PackageType"]."','".$_POST["parcel"]."'";
												$strSQL .=",'".$_POST["dateGetParcel"]."','".$_POST["stausParcel"]."','".$_POST["note"]."') ";
												$objQuery = mysql_query($strSQL);

												if($objQuery)
												{
													unset($_REQUEST);
													echo '<script>window.location.href="insertPost.php"</script>';
												}
												else
												{
													echo "Error Save [".$strSQL."]";
												}
										}

										?>
							</div>
						</section>
																						
					<!-- end: page -->
				</section>
			</div>

			
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
<?php }
else{
	header("location:../index.php");
}
?>
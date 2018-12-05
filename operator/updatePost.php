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
									<!-- <li >
										<a href="http://localhost/project1/index.php">
											<i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span  style="color:white">
                                            <font size=3>แจ้งสถานะพัสดุ</font>
                                             </span>
										</a>
										
                                    </li> -->
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
								
								<h2 class="panel-title">อัพเดทสถานะและแก้ไขข้อมูลพัสดุ</h2>
							</header>
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
                                            <th>แก้ไขข้อมูล</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeC">
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
									$sql = "SELECT * FROM table_post ";
									$query = mysqli_query($conn,$sql);
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
											<td>
											
												<!-- Modal Primary -->
												<?php 
												if($result["Status"] == "ได้รับแล้ว"){
													?>
												
												<?php
												}
												else{
													?>
												<a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#modalPrimary<?php echo $result["ID_Order"]; ?>">อัพเดท</a>
												<?php
												}
												?>
												<div id="modalPrimary<?php echo $result["ID_Order"]; ?>" class="modal-block modal-block-primary mfp-hide">
													<section class="panel">
														<header class="panel-heading">
															<h2 class="panel-title">คุณแน่ใจหรือไม่?</h2>
														</header>
														<div class="panel-body">
														<div class="modal-wrapper">
														<div class="modal-icon">
															<i class="fa fa-question-circle"></i>
														</div>
														<div class="modal-text">
															<h4>อัพเดท</h4>
															<?php
															echo "<p>คุณต้องการที่จะเปลี่ยนแปลงสถานะพัสดุของ ".$result["ID_Post"]." หรือไม่?</p>";
															?>														
															</div>
														</div>
														</div>
														<footer class="panel-footer">
															<div class="row">
																<div class="col-md-12 text-right">
																<form action="" method="POST">
																<button type="submit" name= "Conbtn" value="<?php echo $result["ID_Order"]; ?>" class="btn btn-primary">ตกลง</button>
																<button name= "canbtn" class="btn btn-default modal-dismiss">ยกเลิก</button>
																</form>
																</div>
															</div>
														</footer>
													</section>
												</div>
												<?php 
																	if (isset($_POST['Conbtn'])){
																		$sql = "UPDATE table_post SET Status = 'ได้รับแล้ว'  WHERE ID_Order = '".$_POST['Conbtn']."'";
																			$query = mysqli_query($conn,$sql);
																			if($query)
																			{
																				echo '<script>window.location.href="updatePost.php"</script>';
																			}
																			else
																			{
																				echo "Error Save [".$strSQL."]";
																			}}
															
																	
																		
																	?>
												  
												  <right>	
												  <?php 
												if($result["Status"] == "ได้รับแล้ว"){
													?>
													<center>
												<a class="mb-xs mt-xs mr-xs modal-basic btn btn-info" href="#modalForm<?php echo $result["ID_Order"]; ?>">แก้ไขข้อมูล</a>
												</center>
												<?php
												}
												else{
													?>
												<a class="mb-xs mt-xs mr-xs modal-basic btn btn-info" href="#modalForm<?php echo $result["ID_Order"]; ?>">แก้ไขข้อมูล</a>
												<?php
												}
												?>
												</right>
                                              

									<!-- Modal Form -->
									<div id="modalForm<?php echo $result["ID_Order"]; ?>" class="modal-block modal-block-primary mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<?php
													echo "<p>แก้ไขข้อมูลของ ".$result["ID_Post"]." หรือไม่?</p>";
												?>																							
											</header>
											<div class="panel-body">
												<form  action="" method="POST">
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">หมายเลขพัสดุ</label>
														<div class="col-sm-9">
															<input type="text" name="trackingNumber" class="form-control" value="<?php echo $result["ID_Post"]; ?>" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">ชื่อ</label>
														<div class="col-sm-9">
															<input type="text" name="firstName" class="form-control" value="<?php echo $result["FirstName"]; ?>" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">นามสกุล</label>
														<div class="col-sm-9">
															<input type="text" name="LastName" class="form-control" value="<?php echo $result["LastName"]; ?>"/>
														</div>
													</div>
													<div class="form-group">
													<label class="col-md-3 control-label" for="inputDefault">ชนิดพัสดุ</label>
														<div class="col-md-6">
														<select class="form-control " name='PackageType' value="<?php echo $result["Type"]; ?>" >
														<?php
																if( $result["Type"]=="ซอง"){?>
																	<option value="ซอง"  selected>ซอง</option>
																	<option value="กล่อง" >กล่อง</option>
																<?php }
																else{?>
																	<option value="กล่อง"  selected>กล่อง</option>
																	<option value="ซอง" >ซอง</option>
															<?php	}
														?>
														</select>
														</div>
													</div>
													<div class="form-group">
													<label class="col-md-3 control-label" for="inputDefault">ประเภทพัสดุ</label>
														<div class="col-md-6">
														<select class="form-control " name='parcel' value="<?php echo $result["Category"]; ?>" >
														<?php
																if( $result["Category"]=="ลงทะเบียน"){?>
																	<option value="ลงทะเบียน"  selected>ลงทะเบียน</option>
																	<option value="EMS" >EMS</option>
																<?php }
																else{?>
																	<option value="EMS"  selected>EMS</option>
																	<option value="ลงทะเบียน" >ลงทะเบียน</option>
															<?php	}
														?>
														</select>
														</div>
													</div>
													<div class="form-group">
												<label class="col-md-3 control-label" for="inputRounded" >วันที่ได้รับพัสดุ</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" data-plugin-datepicker class="form-control"  id="inputDefault" name='dateGetParcel' value="<?php echo $result["Date"]; ?>" >   
													</div>
												</div>
                                            		</div>
													<?php
														if( $result["Status"]=="รอนำจ่าย"){
														?>
															<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">สถานะพัสดุ</label>
																<div class="col-md-6">
																<select class="form-control " name='stausParcel'disabled>
																<?php
																		if( $result["Status"]=="ได้รับแล้ว"){?>
																			<option value="ได้รับแล้ว"  selected>ได้รับแล้ว</option>
																			<option value="รอนำจ่าย" >รอนำจ่าย</option>
																		<?php }
																		else{?>
																			<option value="รอนำจ่าย"  selected>รอนำจ่าย</option>
																			<option value="ได้รับแล้ว" >ได้รับแล้ว</option>
																	<?php	}
																?>
																</select>
																</div>
															</div>
													<?php
														}
		
														else{
													?>
													<div class="form-group">
													<label class="col-md-3 control-label" for="inputDefault">สถานะพัสดุ</label>
														<div class="col-md-6">
														<select class="form-control " name='stausParcel'>
														<?php
																if( $result["Status"]=="ได้รับแล้ว"){?>
																	<option value="ได้รับแล้ว"  selected>ได้รับแล้ว</option>
																	<option value="รอนำจ่าย" >รอนำจ่าย</option>
																<?php }
																else{?>
																	<option value="รอนำจ่าย"  selected>รอนำจ่าย</option>
																	<option value="ได้รับแล้ว" >ได้รับแล้ว</option>
															<?php	}
														?>
														</select>
														</div>
													</div>
													<?php
														}
														?>
													<div class="form-group">
														<label class="col-sm-3 control-label">หมายเหตุ</label>
														<div class="col-sm-9">
															<textarea rows="5" name='note' class="form-control"  value="" ><?php echo $result["Note"]; ?></textarea>
														</div>
													</div>				
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button type="submit" name="submit1" class="btn btn-primary " value="<?php echo $result["ID_Order"]; ?>">ตกลง</button>
														<button class="btn btn-default modal-dismiss">ยกเลิก</button>
													</div>
												</div>
											</footer>
											</form>
										</section>
									</div>
								</div>
											</td>
										</tr>
										<?php
										}
										//echo "Database Connected.";
									}
									mysqli_close($conn);
										?>
											 <?php 
                                        if(isset($_POST['submit1'])){

											$trackingNumber = $_POST['trackingNumber'];
											$firstName = $_POST['firstName'];
											$LastName = $_POST['LastName'];
											$PackageType = $_POST['PackageType'];
											$parcel = $_POST['parcel'];
											$dateGetParcel = $_POST['dateGetParcel'];
											$stausParcel = $_POST['stausParcel'];
											$note = $_POST['note'];
											$note = $_POST['note'];
											$submit1 = $_POST['submit1'];
											
												
												$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
												$objDB = mysql_select_db("project");
												// $strSQL ="UPDATE table_post SET ID_Post ='".$trackingNumber."',FirstName='".$firstName."',LastName='".$LastName."',Type='".$PackageType."',
												// $strSQL .=Category='".$parcel."',Date='".$dateGetParcel."',Status='".$stausParcel."',Note='".$note."' WHERE ID_Order = '".$submit1."'";

												$sql = "UPDATE table_post SET ID_POST = '$trackingNumber',FirstName='$firstName',LastName = '$LastName',Type='$PackageType',Category='$parcel'
												,Date='$dateGetParcel',Status='$stausParcel',Note='$note' where ID_Order = '$submit1' ";
												//echo $sql;
												echo "<br>";
												$objQuery = mysql_query($sql);

												if($objQuery)
												{
														// echo $strSQL;
													// unset($_REQUEST);
													echo '<script>window.location.href="updatePost.php"</script>';
												}
												else
												{
													echo "Error Save ".$strSQL;
												}
										}

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
     
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		


		<!-- Examples -->
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
	</body>
</html>
<?php }
  else{
	header("location:../index.php");

  }
?>
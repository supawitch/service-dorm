<?php session_start();?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>แจ้งซ่อม</title>
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
        <link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/vendor/dropzone/css/basic.css" />
		<link rel="stylesheet" href="assets/vendor/dropzone/css/dropzone.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="assets/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="assets/vendor/codemirror/theme/monokai.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
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
								</ul>
							</nav>
				
							<hr class="separator" />
				
										
							
											
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header" style="background-color:#ff5c00">
						<h2  style='border-bottom: 0px solid'>ระบบแจ้งซ่อมออนไลน์หอพักนักศึกษา</h2>
					
						
					</header>

					<!-- start: page -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
						
										<h2 class="panel-title">แจ้งซ่อม</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="get">
										<div class="form-group">
												<label class="col-md-3 control-label"><font size=3>ประเภทงานซ่อม</font></label>
												<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate">
														<option>งานไฟฟ้า</option>
														<option>งานประปาและสุขภัณฑ์</option>
														<option>งานมุ้งลวด/หน้าต่างประตู</option>
														<option>งานเฟอร์นิเจอร์</option>
														<option>อื่นๆ</option>														
													</select>
												</div>
											</div>
											 
											<div class="form-group">
											<label class="col-md-3 control-label" for="inputPlaceholder"><font size=3>อาการ/ปัญหา</font></label>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="เช่น พัดลมเสีย,หลอดไฟเพดานไม่ติด ฯลฯ" id="inputPlaceholder" required>
												</div>
											</div>							
											<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault"><font size=3>การนัดหมาย</font></label>
											<div class="col-md-6">
													<select data-plugin-selectTwo class="form-control populate">
														<option>ขึ้นซ่อมได้ตลอดในช่วงเวลา 09.00-12.00 น.(ทุกวันจันทร์-ศุกร์)</option>
														<option>ขึ้นซ่อมได้ตลอดในช่วงเวลา 13.00-16.00 น.(ทุกวันจันทร์-ศุกร์)</option>
														<option>ขึ้นซ่อมได้ตลอดในช่วงเวลา 09.00-12.00 น.(ทุกวันเสาร์-อาทิตย์)</option>
														<option>ขึ้นซ่อมได้ตลอดในช่วงเวลา 13.00-16.00 น.(ทุกวันเสาร์-อาทิตย์)</option>
														<option>ขอนัดหมายช่างเข้าซ่อมตามวันเวลาที่กำหนด</option>														
													</select>																								
												</div>
											</div>

											<div class="form-group">
											<label class="col-md-3 control-label" for="inputPlaceholder"><font size=3>เบอร์ติดต่อ</font></label>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="09xxxxxxxx" id="inputPlaceholder">
												</div>
											</div>	

											

											<div class="form-group">
											<label class="col-md-3 control-label"><font size=3>แนบรูปภาพ</font></label>
												<div class="col-md-6">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" />
															</span>
															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<form class="form-horizontal form-bordered" method="get"></form>											
												<label class="col-md-3 control-label" for="textareaDefault"><font size=3>รายละเอียด</font></label>
												<div class="col-md-6">
													<textarea class="form-control" rows="3" id="textareaDefault"></textarea>
												</div>											
											</div>
											
											<div class="form-group">												
												<form class="form-horizontal form-bordered" method="get"></form>											
													<div align="center">																				
														<button type="submit" name="submit" class="mb-xs mt-xs mr-xs btn btn-success">ยืนยัน</button>
														<button type="reset" class="mb-xs mt-xs mr-xs btn btn-warning" >ยกเลิก</button>													                                                  
													</div>																								
											</div>																						
											</div>																							
										</form>
									</div>
								</section>													
							</div>
						</div>
																						
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
        <script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="assets/vendor/fuelux/js/spinner.js"></script>
		<script src="assets/vendor/dropzone/dropzone.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="assets/vendor/codemirror/mode/css/css.js"></script>
		<script src="assets/vendor/summernote/summernote.js"></script>
		<script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="assets/vendor/ios7-switch/ios7-switch.js"></script>

		<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		<script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
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
        <script src="assets/javascripts/forms/examples.wizard.js"></script>
		<script src="assets/javascripts/forms/examples.advanced.form.js" /></script>
		
	</body>
</html>

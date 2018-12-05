<header class="header-left" >
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="logo.jpg" height="45" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
	
				<div class="search nav-form" style="padding:1em 1em 1em 1em;">
					<h5  style ="font-size: 1.5em; font-family:'Kanit',sans-serif;width:600px;">
						หอพักนักศึกษา มจพ.ปราจีนนุรี
					</h5>
				</div>
		<!--		&nbsp &nbsp 
						ระบบแจ้งสถานะพัสดุ
-->
				<!-- start: search & user box -->
				<div class="header-right" >
			
					<!-- <form action="pages-search-results.html" class="search nav-form">
						
					</form> -->
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="LOGO.jpg" alt="Joseph Doe" class="img-circle" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">		
								<span class="name"><?php echo $_SESSION["name"]; ?></span>
								<span class="status"><?php echo $_SESSION["status"]; ?></span>				
							</div>
							<i class="fa custom-caret"></i>
						</a>
						
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<!-- <li>
								<a  class="modal-with-form " role="menuitem" href="#modalForm"><i class="fa fa-user"></i>  เพิ่มผู้ใช้</a>
									 <div id="modalForm" class="modal-block modal-block-primary mfp-hide"> 
									 <section class="panel">
									 <form class="form-horizontal form-bordered" method="POST" action=''>	
											<header class="panel-heading">
												<h2 class="panel-title">เพิ่มผู้ใช้</h2>
											</header>
											<div class="panel-body">
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">ชื่อผู้ใช้</label>
														<div class="col-sm-9">
															<input type="text" name="username" class="form-control" placeholder="Username..." required/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">รหัสผ่าน</label>
														<div class="col-sm-9">
															<input type="password" name="password" class="form-control" placeholder="Password..." required/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">ชื่อ</label>
														<div class="col-sm-9">
															<input type="text" name="name" class="form-control" placeholder="ชื่อ..." required/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">นามสกุล</label>
														<div class="col-sm-9">
															<input type="text" name="lastname" class="form-control" placeholder="นามสกุล..." required/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
														<div class="col-sm-9">
															<input type="text" name="tel" class="form-control" placeholder="เบอร์โทรศัพท์..." required/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">สถานะผู้ใช้</label>
														<div class="col-sm-9">
															<input type="text" name="status" class="form-control" placeholder="สถานะผู่้ใช้..." required/>
														</div>
													</div>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary" type="submit" name="submit">ตกลง</button>
														<button class="btn btn-default modal-dismiss">ยกเลิก</button>
													</div>
												</div>
											</footer>
											</form>
										</section>
									 </div>
								</li>
								<?php 
                                        if(isset($_POST['submit'])){
 
											$username = $_POST['username'];
											$password = $_POST['password'];
											$name = $_POST['name'];
											$lastname = $_POST['lastname'];				
											$tel = $_POST['tel'];
											$status = $_POST['status'];

												$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
												$objDB = mysql_select_db("project");
												$strSQL = "INSERT INTO member_login ";
												$strSQL .="(Username,Password,name,lastname,Tel_member,status) ";
												$strSQL .="VALUES ";
												$strSQL .="('".$_POST['username']."','".$_POST["password"]."','".$_POST["name"]."' ";
												$strSQL .=",'".$_POST["lastname"]."','".$_POST["tel"]."','".$_POST["status"]."') ";
												$objQuery = mysql_query($strSQL);

												if($objQuery)
												{
													unset($_REQUEST);
													echo '<script>window.location.href="index.php"</script>';
												}
												else
												{
													echo "Error Save [".$strSQL."]";
												}
										}

										?>	

								
								<li>
						
								<a  class="modal-with-form " role="menuitem" href="#modalFormedit"><i class="fa fa-user"></i>  แก้ไขข้อมูลผู้ใช้</a>
									 <div id="modalFormedit" class="modal-block modal-block-primary mfp-hide"> 
									 <section class="panel">
									 <form class="form-horizontal form-bordered" method="POST" action=''>	
											<header class="panel-heading">
												<h2 class="panel-title">แก้ไขข้อมูลผู้ใช้</h2>
											</header>
											<div class="panel-body">
											<?php 
													 	$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
														 $objDB = mysql_select_db("project");
														 $strSQL = "SELECT * FROM member_login WHERE name='".$_SESSION["name"]."' ";
														 $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
														 while($objResult = mysql_fetch_array($objQuery)){
															$Username=$objResult["Username"]; 
															$Password=$objResult["Password"]; 
															$name=$objResult["name"]; 
															$lastname=$objResult["lastname"]; 
															$Tel_member=$objResult["Tel_member"]; 
															$status=$objResult["status"]; 
														 }
													
											?>
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">ชื่อผู้ใช้</label>
														<div class="col-sm-9">
															<input type="text" name="username" class="form-control" placeholder="Username..." value="<?php echo $Username; ?>"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">รหัสผ่าน</label>
														<div class="col-sm-9">
															<input type="password" name="password" class="form-control" placeholder="Password..." value="<?php echo $Password; ?>"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">ชื่อ</label>
														<div class="col-sm-9">
															<input type="text" name="name" class="form-control" placeholder="ชื่อ..." value="<?php echo  $name; ?>"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">นามสกุล</label>
														<div class="col-sm-9">
															<input type="text" name="lastname" class="form-control" placeholder="นามสกุล..." value="<?php echo  $lastname; ?>"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
														<div class="col-sm-9">
															<input type="text" name="tel" class="form-control" placeholder="เบอร์โทรศัพท์..." value="<?php echo  $Tel_member; ?>"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">สถานะผู้ใช้</label>
														<div class="col-sm-9">
															<input type="text" name="status" class="form-control" placeholder="สถานะผู่้ใช้..." value="<?php echo $status; ?>"/>
														</div>
													</div>
													
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary" type="submit" name="submitfix">ตกลง</button>
														<button class="btn btn-default modal-dismiss">ยกเลิก</button>
													</div>
												</div>
											</footer>
											</form>
										</section>
									 </div>
								</li> -->
								<?php  
                                        if(isset($_POST['submitfix'])){
 
											$username = $_POST['username'];
											$password = $_POST['password'];
											$name = $_POST['name'];
											$lastname = $_POST['lastname'];				
											$tel = $_POST['tel'];
											$status = $_POST['status'];
											$submit1 = $_POST['submitfix'];

												$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
												$objDB = mysql_select_db("project");

												$sql = "UPDATE member_login SET Username = '$username',Password='$password',name = '$name',lastname='$lastname',Tel_member='$tel'
												,status='$status' where name = '".$_SESSION["name"]."' ";
												$objQuery2 = mysql_query($sql);

												if($objQuery2)
												{
													unset($_REQUEST);
													$_SESSION["name"]=$name;
													echo '<script>window.location.href=""</script>';
												}
												else
												{
													echo "Error Save [".$sql."]";
												}
										}

										?>			
								</li>
													
								<li>
									<a role="menuitem" tabindex="-1" href="../logout.php"><i class="fa fa-power-off"></i> ออกจากระบบ</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
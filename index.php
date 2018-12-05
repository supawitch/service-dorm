<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> เข้าสู่ระบบ</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" >
		<div class="container-login100" style="background-color:#2C2929;">
			<div class="wrap-login100 col-md-4"  style="background-color:white; padding-block-end: 28px;">
			<?php 				
			
				if( $_SESSION["check"] =="Invalid Pass"){		
					
			?>
			<div class="container-login100" style="min-height: 0px;">
								<div class="row ">
								<img class="img-fluid" src="LOGO.jpg" >
								</div>
							</div>
				<form name="form1" method="post" action="" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-31" style="color: #ff5c00;">
						สำหรับเจ้าหน้าที่หอพักนักศึกษา มจพ.ปราจีน เท่านั้น
					</span>
					<small style="color:red"><b>*ชื่อผู้ใช้หรือรหัสผ่านผิดกรุณากรอกรหัสผ่านใหม่</b></small>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="txtUsername" id="txtUsername" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
							
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="txtPassword" id="txtPassword" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17" >
						<button name="in" class="login100-form-btn" style="background-color: #ff5c00;">
							เข้าสู่ระบบ
						</button>
					</div>

				</form>
				</div>
		</div>
	</div>
				<?php
				 $_SESSION["check"] ="";
					}
					else{?>
							<div class="container-login100" style="min-height: 0px;">
								<div class="row ">
								<img class="img-fluid" src="LOGO.jpg" >
								</div>
							</div>
					<span class="login100-form-title p-b-31" style="color: #ff5c00;" 
>
						สำหรับเจ้าหน้าที่หอพักนักศึกษา มพจ.ปราจีน เท่านั้น
					</span>
					
					<form name="form1" method="post" action="" class="">
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="txtUsername" id="txtUsername" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
									
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="txtPassword" id="txtPassword" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17" >
						<button name="in" class="login100-form-btn" style="background-color: #ff5c00;">
							เข้าสู่ระบบ
						</button>
					</div>

				</form><?php
					$_SESSION["check"]="";
					}
				?>

	<?php
	if(isset($_POST['in'])){
	mysql_connect("localhost","root","123456789");
	mysql_select_db("project");
	$strSQL = "SELECT * FROM member_login WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		$_SESSION["check"] = "Invalid Pass";
			echo '<script>window.location.href="/project1/index0.php"</script>';
		}		
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["status"] = $objResult["status"];
			$_SESSION["name"] = $objResult["name"];
              
			session_write_close();
			
			if($objResult["status"] == "ADMIN")
			{
				header("location:admin/adpage.php");
			}
			else if($objResult["status"] == "OPERATOR")
			{
				header("location:operator/operpage.php");
			}
			else if($objResult["status"] == "REPAIRMAN")
			{
				header("location:REPAIRMAN/");
			}
			else if($objResult["status"] == "MANAGER")
			{
				header("location:MANAGER");
			}
			/*else
			{
				header("location:toto.php");
			}*/
	}
	mysql_close();
	}
	?>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
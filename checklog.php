<?php
	session_start();
	mysql_connect("localhost","root","123456789");
	mysql_select_db("project");
	$strSQL = "SELECT * FROM member_login WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
            echo "<script>alert('กรอกข้อมูลไม่ครบ');</script>";
			exit();
			header("location:login.php");
		}		
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["status"] = $objResult["status"];
              
			session_write_close();
			
			if($objResult["status"] == "ADMIN")
			{
				header("location:../insertPost.php");
			}
			else
			{
				header("location:toto.php");
			}
	}
	mysql_close();
?>
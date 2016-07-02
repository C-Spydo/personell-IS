<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oyo State Payroll System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="date/jquery.datetimepicker.css"/>
<link rel="icon" href="img/logo.png" />
<script src="js/jquery-1.8.2.min.js"></script>
 <script src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js"></script>
<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    
<?php

session_name("MyLogin");
session_start();
$universe=$_SESSION['universalpasskey'];
$universe2=$_SESSION['universalpasskey2'];


$DBhost = "localhost"; 
$DBuser = "root";
$DBpass = ""; 
$DBname ="oyoppis";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 

if (isset($_POST['next'])){

		$date=$_POST['date'];
		$post=$_POST['post'];
		$promotedto=$_POST['promotedto'];


			$sql = "INSERT INTO promotionrecord (date,post,promotedto,universe,universe2)																																																
					VALUES('$date','$post','$promotedto','$universe','$universe2')";

			$runquery = mysql_query($sql,$link);	
				
			if ($runquery){
				header('Location:reg_6.php');
			}
			else {
				echo "<script> alert(\"An Error Occured,Retry\");</script>";
				echo "Something Wrong".mysql_error();
			}
	}
?>
</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    	<p class="regheader">Register Panel <span style="color:#900">Section E:Record of Promotion</span></p>
    	<form action="" method="post">
        	<label>Date:</label>
        	<p><input placeholder="Select date" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
            
            <label>Post:</label>
        	<p><input type="text" placeholder="Input Post here" name="post"/></p>
            
            <label>Promoted To:</label>
        	<p><input type="text" placeholder="Input New Post Here" name="promotedto"/></p>
            
            
            
           
          <button type="submit"  class="next" name="next"></button>
         
         <button type="reset">Reset</button>
        </form>
    
    </div>
    <?php include( "footer.php"); ?>
    



</div>

<script src="date/jquery.datetimepicker.js"></script>
<script>
$('.datetimepicker').datetimepicker({
	lang:'en',
	timepicker:false,
	format:'d/m/Y',
	formatDate:'Y/m/d',
});
</script>
</body>
</html>
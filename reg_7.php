<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oyo State Payroll System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css" />
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


$DBhost = "127.0.0.1"; 
$DBuser = "samson";
$DBpass = "samson"; 
$DBname ="oyoppis";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 

if (isset($_POST['next'])){

		$bankname=$_POST['bankname'];
		$accountname=$_POST['accountname'];
		$accountnumber=$_POST['accountnumber'];


			$sql = "INSERT INTO bankdetails (bankname,accountname,accountnumber,universe,universe2)																																																
					VALUES('$bankname','$accountname','$accountnumber','$universe','$universe2')";

			$runquery = mysql_query($sql,$link);	
				
			if ($runquery){
				header('Location:reg_7.php');
			}
			else {
				echo "<script> alert(\"An Error Occured,Retry\");</script>";
				echo "Something Wrong".mysql_error();
			}
	
	
	}	
?> 

</head>

<body>
<div class="container">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    	<p class="regheader">Register Panel <span style="color:#900">Section G: Authentication</span></p>
    	<form action="preview.php">
        	<label>Staff Signature:</label>
        	<p><input type="text" placeholder="Input Correspondence Address here" /></p>
            
            <label>Date:</label>
        	<p><input type="date" placeholder="Input Correspondence Address here" /></p>
            
           <label>Principal/ Head of Department Name:</label>
        	<p><input type="text" placeholder="Input Permanent Address here" /></p>
            
            <label>Signature:</label>
        	<p><input type="text" placeholder="Input Mobile Number here" /></p>
            
            <label>Date:</label>
        	<p><input type="date" placeholder="Input Mobile Number here" /></p>
            
           
        <button type="submit">Preview</button>
        <a href="reg_6.php" class="back" ><span class="prev"></span></a>
         <button type="reset">Reset</button>
        </form>
    
    </div>
    <?php include( "footer.php"); ?>
    



</div>


</body>
</html>
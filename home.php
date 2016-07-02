<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oyo State Payroll System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css" />
<link rel="icon" href="img/logo.png" />
<link href="css/sweetalert.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery-1.8.2.min.js"></script>
 <script src="js/jquery.backstretch.min.js"></script>


<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>


<?php
	session_name("MyLogin");
?>
<?php

if(isset($_GET['link'])){
			
			$link= $_GET['link'];
	if($link=='6'){
	
		header('Location:index.php');
		
		//session_start();
		//$_SESSION=array();
		//session_destroy();
	}
	}
	
?>
</head>

<body>
<div class="container  instaFade">
	<?php include( "header.php"); ?>
    <div class="body quickFade mCustomScrollbar" data-mcs-theme="minimal-dark"><div class="logoutp">
    <p>
    
    <span class="logout" onclick="logout();"><a href="#"><span></span>Logout</a></span>
    <span class="name">Adeleke Olakunle Ajibola Jinodu</span>
    </p>
    </div>
    	
    	<div class="hometab quickFade delayTwo">
        	<a href="reg.php"><div class="tab1">
            	<p></p>
                <h3>Register new Employee</h3>
                <h4>Click here to register new employee</h3>	
            </div></a>
        	<a href="emp_profile.php"><div class="tab2">
            <p></p>
                <h3>Employee profile</h3>
                <h4>Click here to view, update and edit employee profile </h3></div></a>	
        </div>
    
    	<div class="hometab quickFade delayTwo">
        	<a href="admin_home.php"><div class="tab3">
            	<p></p>
                <h3>Admin Profile</h3>
                <h4>Click here to check and change Admin Profile</h3>
             </div></a>
        	<a href="report.php"><div class="tab4">
            <p></p>
                <h3>Report</h3>
                <h4>Click here to generate report of all department</h3></div></a>
        </div>
    </div>
    <?php include( "footer.php"); ?>
    



</div>

<script src="js/scripts.js"></script>
<script src="js/sweetalert.min.js"></script>


</body>
</html>
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
<script>
function logout() {
	alert("Are you sure you want to logout")
	}

</script>

<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<link href="css/css2/bootstrap.min.css" rel="stylesheet">

<link href="css/css2/styles.css" rel="stylesheet">

<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<?php

session_name("MyLogin");
session_start();

$DBhost = "localhost"; 
$DBuser = "root";
$DBpass = ""; 
$DBname ="oyoppis";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 

//$universe=$_SESSION['universalpasskey'];
//$universe2=$_SESSION['universalpasskey2'];


?>
</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
     <div class="logoutp">
   <p>
    <span class="goback" ><a href="home.php">Go back to Home&nbsp;<span></span></a></span>
    
    </p></div>
    	<div class="emp">
        	<div class="nav ">
            	<ul>
               <li><a href="emp_profile.php" <?php if (($page == 'emp_profile.php')) { ?>class="active"<?php } ?>>View All Emloyee</a></li>
              <li><a href="update_emp_profile.php" <?php if (($page == 'update_emp_profile.php')) { ?>class="active"<?php } ?>>Update Emloyee Profile</a></li>
              <li><a href="retired_emp.php" <?php if (($page == 'retired_emp.php')) { ?>class="active"<?php } ?>>View Retired Employee</a></li>  
               <li ><a href="search_emp.php" <?php if (($page == 'search_emp.php')) { ?>class="active"<?php } ?>>Search for an Emloyee</a></li>   
                </ul>
            </div>
        	<div class="all_emp mCustomScrollbar" data-mcs-theme="minimal-dark">
			<div class="emp_label">Employee Profile</div>
			<div class="panel panel-default">
			<div class="panel-body ">
            <!--data-sort-order="desc"data-show-columns="true" data-show-refresh="true"data-select-item-name="toolbar1"-->
			
			<table class="emp_table " data-toggle="table" data-url="" data-show-toggle="true"   data-search="true"  data-pagination="true" data-sort-name="name" >
            
					<thead class="thead"><!--tables/data1.json-->
					
					<tr>
					
						<th width="5%">S/N</th>
						<th  width="48%" >Employee Name</th>
						
						<th width="20%"  >Staff ID</th>
						<th  width="20%" >Ministry</th>
					</tr>
					</thead>
					<!-- Here is the beginning of the table body-->
					<tbody>
					<?php
						$mySerial=1;
						$squer="SELECT * FROM personal";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$surname=$row['surname'];
							$firstname=$row['firstname'];
							$lastname=$row['lastname'];
							$staffid=$row['staffid'];
							$realname=$surname." ".$firstname." ".$lastname;
					?>
							<tr>
														
								<td width="5%"><a href="emp_details.php"><?php echo $mySerial ?></a></td>
								<td width="48%"><a href="emp_details.php"><?php echo $realname?></a></td>
								<td width="20%" ><a href="emp_details.php"><?php echo $row['staffid']?></a></td>
								
					<?php  
							$sql="SELECT * FROM employment WHERE universe='$surname' AND universe2='$staffid'";
							$result=mysql_query($sql,$link);
							if(mysql_num_rows($result)>0){	
							while($row = mysql_fetch_array($result)) {
						?>
							<td width="20%" ><a href="emp_details.php"><?php echo $row['presentministry'] ?></a> </td>
							
							</tr>
					<?php }}
						$mySerial= $mySerial+1;
					} }
					
					
					
					?>
					
					
				</tbody>
				</table>
            
            </div></div>
            
            </div>
        </div>
    </div>
    <?php include( "footer.php"); ?>
    



</div>

<script src="js/scripts.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	
	<script src="js/bootstrap-table.js"></script>
</body>
</html>
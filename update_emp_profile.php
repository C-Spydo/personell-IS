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

function empdelete() {
	alert ("Successfully Deleted")
	
}

</script>

<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
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
$mySerial=0;

?>
</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body quickFade mCustomScrollbar" data-mcs-theme="minimal-dark">
    <div class="logoutp">
     <p>
    <span class="goback" ><a href="home.php">Go back to Home&nbsp;<span></span></a></span>
    
    </p></div>
    	<div class="emp">
        	<div class="nav quickFade delayTwo">
            	<ul>
               <li><a href="emp_profile.php" <?php if (($page == 'emp_profile.php')) { ?>class="active"<?php } ?>>View All Emloyee</a></li>
              <li><a href="update_emp_profile.php" <?php if (($page == 'update_emp_profile.php')) { ?>class="active"<?php } ?>>Update Emloyee Profile</a></li>
               <li><a href="retired_emp.php" <?php if (($page == 'retired_emp.php')) { ?>class="active"<?php } ?>>View Retired Employee</a></li> 
               <li ><a href="search_emp.php" <?php if (($page == 'search_emp.php')) { ?>class="active"<?php } ?>>Search for an Emloyee</a></li>   
                </ul>
            </div>
        	<div class=" quickFade delayFour all_emp mCustomScrollbar" data-mcs-theme="minimal-dark">
            <p class="label">Search for the Employee You Want to Update profile</p>
            <div class="delete">
               <form  action="" method="POST">
              <p class="deletep1"><input type="text" placeholder="Search by Staff ID" name="searchtext"/></p>
              <p class="deletep2"><button type="submit" name="search">Search</button><button type="reset">Reset</button></p>
               </form>
              </div> 
              <br />
              <br />
              <br />
              	<br />	
                  
             <table class="updatetable">
                	<p class="deletelabel">Search Result<span><?php echo $mySerial." "." Results Found"; ?></span></p>
					<tr>
                    	<td width="8%">S/N</td>
                        <td width="45%">Name</td>
						<td width="15%">Staff ID</td>
                        <td width="25%">Department</td>
                    </tr>
<?php
					if (isset($_POST['search'])){
						$mySerial=1;
						$staffidd=$_POST['searchtext'];
						$squer="SELECT * FROM personal WHERE universe2='$staffidd'";
						
						$resultat=mysql_query($squer,$link);
						if(mysql_num_rows($resultat)>0){	
							while($row = mysql_fetch_array($resultat)) {
							
							$surname=$row['surname'];
							$firstname=$row['firstname'];
							$lastname=$row['lastname'];
							$staffid=$row['staffid'];
							$realname=$surname." ".$firstname." ".$lastname;
							
							$_SESSION['universalpasskey']=$surname;
							$_SESSION['universalpasskey2']=$staffid;
					?>
							<tr>
														
								<td width="5%"><a href="preview.php"><?php echo $mySerial ?></a></td>
								<td width="48%"><a href="preview.php"><?php echo $realname?></a></td>
								<td width="20%" ><a href="preview.php"><?php echo $row['staffid']?></a></td>
								
					<?php  
							$sql="SELECT * FROM employment WHERE universe='$surname' AND universe2='$staffid'";
							$result=mysql_query($sql,$link);
							if(mysql_num_rows($result)>0){	
							while($row = mysql_fetch_array($result)) {
						?>
							<td width="20%" ><a href="preview.php"><?php echo $row['presentministry'] ?></a> </td>
							
							</tr>
					<?php }}
						$mySerial= $mySerial+1;
					} }
					
					}
					
					
					
					?>
                    
                    
                   
                </table>
                
            
            
            
            </div>
        </div>
    </div>
    <?php include( "footer.php"); ?>
   



</div>

<script src="js/scripts.js"></script>
</body>
</html>
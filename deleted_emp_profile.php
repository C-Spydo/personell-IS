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
$surname="";
$staffid="";
?>
</head>

<body>
<div class="container">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    <div class="logoutp">
     <p>
    <span class="goback" ><a href="home.php">Go back to Home&nbsp;<span></span></a></span>
    
    </p></div>
    	<div class="emp">
        	<div class="nav">
            	<ul>
               <li><a href="emp_profile.php" <?php if (($page == 'emp_profile.php')) { ?>class="active"<?php } ?>>View All Emloyee</a></li>
              <li><a href="update_emp_profile.php" <?php if (($page == 'update_emp_profile.php')) { ?>class="active"<?php } ?>>Update Emloyee Profile</a></li>
               <li><a href="deleted_emp_profile.php" <?php if (($page == 'deleted_emp_profile.php')) { ?>class="active"<?php } ?>>Delete Emloyee Profile</a></li> 
               <li ><a href="search_emp.php" <?php if (($page == 'search_emp.php')) { ?>class="active"<?php } ?>>Search for an Emloyee</a></li>   
                </ul>
            </div>
        	<div class="all_emp mCustomScrollbar" data-mcs-theme="minimal-dark">
            <p class="label">Search for the Employee You Want to Delete</p>
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
              
             <table class="deletetable">
                	<p class="deletelabel">Search Result<span><?php echo "*** ".$mySerial." "." Results Found"." ***"; ?></span></p>
                    <tr>
                    	<td width="8%">S/N</td>
                        <td width="45%">Name</td>
						<td width="15%">Staff ID</td>
                        <td width="25%">Department</td>
                        <td width="5%">Delete</td>
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
							
						
					?>
							<tr>
														
								<td width="5%"><?php echo $mySerial ?></td>
								<td width="48%"><?php echo $realname?></td>
								<td width="20%" ><a href=><?php echo $row['staffid']?></a></td>
								
					<?php  
							$sql="SELECT * FROM employment WHERE universe='$surname' AND universe2='$staffid'";
							$result=mysql_query($sql,$link);
							if(mysql_num_rows($result)>0){	
							while($row = mysql_fetch_array($result)) {
						?>
							<td width="20%" ><a href="preview.php"><?php echo $row['presentministry'] ?></a> </td>
							
							
					<?php }} ?>
						<td width="5%"><span class="deletelogo" ><a href="?link=7" ></a></span></td>  <!--onclick="empdelete();" -->
							</tr>
					<?php
						$mySerial= $mySerial+1;
					} }
					
					}
					if(isset($_GET['link'])){
			
					$link= $_GET['link'];
						if($link=='7'){
							$q1="DELETE FROM personal WHERE universe='$surname' AND universe2='$staffid'";
							$q2="DELETE FROM employment WHERE universe='$surname' AND universe2='$staffid'";
							$q3="DELETE FROM contact WHERE universe='$surname' AND universe2='$staffid'";
							$q4="DELETE FROM educational WHERE universe='$surname' AND universe2='$staffid'";
							$q5="DELETE FROM bankdetails WHERE universe='$surname' AND universe2='$staffid'";
							$q6="DELETE FROM promotionrecord WHERE universe='$surname' AND universe2='$staffid'";
								
							$r1=mysql_query($q1);
							$r2=mysql_query($q2);
							$r3=mysql_query($q3);
							$r4=mysql_query($q4);
							$r5=mysql_query($q5);
							$r6=mysql_query($q6);
							
							if(($r1)&&($r2)&&($r3)&&($r4)&&($r5)&&($r6)){
								echo "<script> alert('Successfully Deleted');</script>";
							}
					}
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
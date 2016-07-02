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
<link rel="stylesheet" href="css/avatar.css">
<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>

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


//$mySerial=1;
//$squer="SELECT * FROM personal WHERE universe2='$universe2'";
//
//$resultat=mysql_query($squer,$link);
//if(mysql_num_rows($resultat)>0){	
//	while($row = mysql_fetch_array($resultat)) {
//	
//	$surname=$row['surname'];
//	$firstname=$row['firstname'];
//	$lastname=$row['lastname'];
//	$staffid=$row['staffid'];
//	$previousname=$row['previousname'];
//	$refid=$row['refid'];
//	$gender=$row['gender'];
//	$nationality=$row['nationality'];
//	$stateoforigin=$row['stateoforigin'];
//	$lga=$row['lga'];
//	$incremental=$row['incrementaldate'];
//	$dateofbirth=$row['dateofbirth'];
//	$profilepicture=$row['profilepicture'];
//	
//}}
//
//?>  

<?php
//$squer="SELECT * FROM contact WHERE universe2='$universe2'";
//
//$resultat=mysql_query($squer,$link);
//if(mysql_num_rows($resultat)>0){	
//	while($row = mysql_fetch_array($resultat)) {
//	
//	$correspondenceaddress=$row['correspondenceAddress'];
//	$permanentaddress=$row['permanentAddress'];
//	$mobilenumber=$row['mobilenumber'];
//	$email=$row['email'];
//
//	
//}}
//?>  

<?php
//
//$squer="SELECT * FROM employment WHERE universe2='$universe2'";
//
//$resultat=mysql_query($squer,$link);
//if(mysql_num_rows($resultat)>0){	
//	while($row = mysql_fetch_array($resultat)) {
//		$firstappointment=$row['firsappointment'];
//		$post=$row['post'];
//		$breakofservice=$row['breakofservice'];
//		$dateofconversion=$row['dateofconversion'];
//		$previouscadre=$row['previouscadre'];
//		$presentcadre=$row['presentcadre'];
//		$presentministry=$row['presentministry'];
//		$presentoyhmb=$row['presentoyhmb'];
//		$presentgradelevel=$row['presentgradelevel'];
//		$presentschool=$row['presentschool'];
//		$schoolzone=$row['schoolzone'];
//		$currentofficelocation=$row['currentofficelocation'];
//		
//		}
//		}
//?>

<?php
//$squer="SELECT * FROM educational WHERE universe2='$universe2'";
//
//$resultat=mysql_query($squer,$link);
//			
//if(mysql_num_rows($resultat)>0){	
//	while($row = mysql_fetch_array($resultat)) {
//			
//		$primary=$row['primaryy'];
//		$secondary=$row['secondary'];
//		$tertiary=$row['tertiary'];
//		$others=$row['others'];
//		}
//		}
//?>
<?php
//$squer="SELECT * FROM educational WHERE universe2='$universe2'";
//
//$resultat=mysql_query($squer,$link);
//if(mysql_num_rows($resultat)>0){	
//	while($row = mysql_fetch_array($resultat)) {
//			
//		$datee=$row['date'];
//		$postt=$row['post'];
//		$promotedto=$row['promotedto'];
//		}
//		}
//?>
<?php	
//$squer="SELECT * FROM bankdetails WHERE universe2='$universe2'";
//
//$resultat=mysql_query($squer,$link);
//if(mysql_num_rows($resultat)>0){	
//	while($row = mysql_fetch_array($resultat)) {	
//		$bankname=$row['bankname'];
//		$accountname=$row['accountname'];
//		$accountnumber=$row['accountnumber'];
//		}
//}
//if(isset($_GET['link'])){
//	
//	$link= $_GET['link'];
//		if($link=='8'){
//				header('Location:home.php');
//			}
//			}
//		
//?>

</head>

<body>
<div class="container">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark"><p class="regheader emp_header">Employee Information</p>
    <div class="logoutp">
    <p>
    <span class="goback" ><a href="home.php">Go back to Home&nbsp;<span></span></a></span>
    
    </p></div>
    
    <div class="pinfo">
   
   <table>
                	<p class="label">Personal Information</p>
        <div style=" float:left; width:25%; margin-top:2px; height:180px;">
        <p class="pictureh" >Picture:</p>
        <p class="pictureimg"></p>
        </div>          
        <div class="personalinfo" >
       		<div class="pdiv" >
            <p style="width:28%; ">Surname:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv" >
            <p style="width:28%; ">First Name:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv" >
            <p style="width:28%; ">Other Name:</p> 
            <p style="width:68%;"></p>
            </div>
            
                       
            <div class="pdiv" >
            <p style="width:28%; ">Staff ID:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv">
            <p style="width:28%; ">Ref ID:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv" >
            <p style="width:28%; ">Previous Name:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv">
            <p style="width:28%; ">Gender:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv">
            <p style="width:28%; ">Date Of Birth:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv">
            <p style="width:28%; ">Nationality:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv" >
            <p style="width:28%; ">State of Origin:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv">
            <p style="width:28%; ">Local Gov. Area:</p> 
            <p style="width:68%;"></p>
            </div>
            
            <div class="pdiv">
            <p style="width:28%; ">Incremental Date:</p> 
            <p style="width:68%;"></p>
            </div>
            
        </div>          
    
            
    	
    </table>
    <br />
    <table>
                	<p class="label">Contact Information</p>
        <tr> 
        	<td width="30%">Correspondence Address:</td>
            <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Permanent Address:</td>
            <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Mobile Number:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">E-mail:</td>
            <td width="69%"></td>
         </tr>
    
            
    	
    </table>
    
    <br />
    <table>
      <p class="label">Education Qualification/ Training</p>
        <tr> 
        	<td width="30%">Primary School Attended:</td>
           <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Secondary School Attended:</td>
            <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Tertiary Institution Attended:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Others:</td>
            <td width="69%"></td>
         </tr>
    
            
    	
    </table>
    
    <br />
    <table>
      <p class="label">Employment Record</p>
        <tr> 
        	<td width="30%">Date of First Appointment</td>
           <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Post Appointed To:</td>
            <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Break of Service:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Date of conversion:</td>
            <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Previous Cadre:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Present Cadre:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Present Ministry:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Present OHMB:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Present Grade Level:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Present School:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%"> School Zone:</td>
            <td width="69%"></td>
         </tr>
          <tr> 
        	<td width="30%"> Current Office Zone:</td>
            <td width="69%"></td>
         </tr>
         
    
            
    	
    </table>
    
    <br />
    <table>
      <p class="label">Record of Promotion</p>
        <tr> 
        	<td width="30%">Date:</td>
           <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Post:</td>
            <td width="69%"></td>
         </tr>
         
         <tr> 
        	<td width="30%">Promoted To:</td>
            <td width="69%"></td>
         </tr>
          
         
    	
    </table>
    
    <br />
    <table>
      <p class="label">Bank Details</p>
        <tr> 
        	<td width="30%">Bank Name:</td>
           <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Account Name:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Account Number:</td>
            <td width="69%"></td>
         </tr>
    </table>
    
     <br />
     
     <table>
      <p class="label">Retirement Record</p>
        <tr> 
        	<td width="30%">Date of first Apointment:</td>
           <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Years on Service:</td>
            <td width="69%"></td>
         </tr>
         <tr> 
        	<td width="30%">Date of Retirement</td>
            <td width="69%"></td>
         </tr>
    </table>
    <!--<table>
      <p class="label">Auhentication</p>
        <tr> 
        	<td width="30%">Principal/Head of Dept:</td>
           <td width="69%">Mr.Phobia PHillia</td>
         </tr>
         
    </table>-->
    <br />
   
    </div>
  
   
    
    </div>
    <?php include( "footer.php"); ?>
    



</div>


</body>
</html>
<?php
session_name("MyLogin");
session_start();

$DBhost = "localhost"; 
$DBuser = "root";
$DBpass = ""; 
$DBname ="oyoppis";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 

$universe=$_SESSION['universalpasskey'];
$universe2=$_SESSION['universalpasskey2'];
?>
 
<?php
$sql = "SELECT * FROM personal WHERE universe = '$universe' AND universe2 = '$universe2'";
			
			if($sql_exe = mysql_query($sql,$link)){
			$row = mysql_fetch_array($sql_exe);
			
			$surname=$row['surname'];
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$staffiddd=$row['staffid'];
			//$staffid="whatever";
			$refid=$row['refid'];
			$previousname=$row['previousname'];
			$gender=$row['gender'];
			
			//These guyz are really, really special
			$myDate=$row['dateofbirth'];
			$date=explode("-", $myDate);
			//list($day,$month,$year)=explode("-", $myDate);
			$day=$date[0];
			$month=$date[1];
			$year=$date[2];
			
			//And this is where the specialty ends, Hallelujah
			$nationality=$row['nationality'];
			$stateoforigin=$row['stateoforigin'];
			$incrementaldate=$row['incrementaldate'];
			$lga=$row['lga'];
			$profilepicture=$row['profilepicture'];
			$imagename=$row['imagename'];
		}
?>

<?php
$sql = "SELECT * FROM contact WHERE universe = '$universe' AND universe2 = '$universe2'";
			
			if($sql_exe = mysql_query($sql,$link)){
				$row = mysql_fetch_array($sql_exe);
			
			$correspondenceaddress=$row['correspondenceAddress'];
			$permanentaddress=$row['permanentAddress'];
			$email=$row['email'];
			$mobilenumber=$row['mobilenumber'];
		}
?>

<?php

$sql = "SELECT * FROM employment WHERE universe = '$universe' AND universe2 = '$universe2'";
			
		if($sql_exe = mysql_query($sql,$link)){
		$row = mysql_fetch_array($sql_exe);
		$firstappointment=$row['firsappointment'];
		$post=$row['post'];
		$breakofservice=$row['breakofservice'];
		$dateofconversion=$row['dateofconversion'];
		$previouscadre=$row['previouscadre'];
		$presentcadre=$row['presentcadre'];
		$presentministry=$row['presentministry'];
		$presentoyhmb=$row['presentoyhmb'];
		$presentgradelevel=$row['presentgradelevel'];
		$presentschool=$row['presentschool'];
		$schoolzone=$row['schoolzone'];
		$currentofficelocation=$row['currentofficelocation'];
		
		}
?>

<?php
$sql = "SELECT * FROM educational WHERE universe = '$universe' AND universe2 = '$universe2'";
			
			if($sql_exe = mysql_query($sql,$link)){
				$row = mysql_fetch_array($sql_exe);
			
		$primary=$row['primaryy'];
		$secondary=$row['secondary'];
		$tertiary=$row['tertiary'];
		$others=$row['others'];
		}
?>
<?php
$sql = "SELECT * FROM promotionrecord WHERE universe = '$universe' AND universe2 = '$universe2'";
			
			if($sql_exe = mysql_query($sql,$link)){
				$row = mysql_fetch_array($sql_exe);
			
		$datee=$row['date'];
		$postt=$row['post'];
		$promotedto=$row['promotedto'];
		}
?>

<?php
$sql = "SELECT * FROM bankdetails WHERE universe = '$universe' AND universe2 = '$universe2'";
			
			if($sql_exe = mysql_query($sql,$link)){
				$row = mysql_fetch_array($sql_exe);
			
		$bankname=$row['bankname'];
		$accountname=$row['accountname'];
		$accountnumber=$row['accountnumber'];
		}
?>
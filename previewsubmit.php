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

$sendstat=0;
//"update create_ledger_tbl set ledger_name='$ledger_name',
	//Acc_Grp='$Acc_Grp' where id='$Acc_id'";
?>
<?php
				$surname=$_POST['surname'];
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$staffid=$_POST['staffid'];
			$previousname=$_POST['previousname'];
			$gender=$_POST['gender'];
			$day=$_POST['day'];
			$month=$_POST['month'];
			$year=$_POST['year'];
			$nationality=$_POST['nationality'];
			$stateoforigin=$_POST['stateoforigin'];
			$incrementaldate=$_POST['incrementaldate'];
			$lga=$_POST['lga'];
			
			$imagename=$_FILES["profilepicture"]["name"];
			$profilepicture=addslashes(file_get_contents($_FILES['profilepicture']['tmp_name']));
			
			$correspondenceaddress=$_POST['correspondenceaddress'];
		$permanentaddress=$_POST['permanentaddress'];
		$email=$_POST['email'];
		$mobilenumber=$_POST['mobilenumber'];
		
		$primary=$_POST['primary'];
		$secondary=$_POST['secondary'];
		$tertiary=$_POST['tertiary'];
		$others=$_POST['others'];
		
		$firstappointment=$_POST['firstappointment'];
		$post=$_POST['post'];
		$breakofservice=$_POST['breakofservice'];
		$dateofconversion=$_POST['dateofconversion'];
		$previouscadre=$_POST['previouscadre'];
		$presentcadre=$_POST['presentcadre'];
		$presentministry=$_POST['presentministry'];
		$presentoyhmb=$_POST['presentoyhmb'];
		$presentgradelevel=$_POST['presentgradelevel'];
		$presentschool=$_POST['presentschool'];
		$schoolzone=$_POST['schoolzone'];
		$currentofficelocation=$_POST['currentofficelocation'];
		
		$date=$_POST['date'];
		$postt=$_POST['postt'];
		$promotedto=$_POST['promotedto'];

		$bankname=$_POST['bankname'];
		$accountname=$_POST['accountname'];
		$accountnumber=$_POST['accountnumber'];


?>
<?php
$dateofbirth=$day."-".$month."-".$year;
$sql = "UPDATE personal set 

			surname='$surname',
			firstname='$firstname',
			lastname='$lastname',
			staffid='$staffid',
			refid='$refid',
			previousname='$previousname',
			gender='$gender',
			dateofbirth='$dateofbirth',
			
			
			nationality='$nationality',
			stateoforigin='$stateoforigin',
			incrementaldate='$incrementaldate',
			lga='$lga',
			
			universe='$surname',
			universe2='$staffid',
			
			profilepicture='$profilepicture',
			imagename='$imagename';
			
		WHERE universe = '$universe' AND universe2 = '$universe2'";	
			
$sql_exe = mysql_query($sql,$link);
if($sql_exe){
	$sendstat=1;
}
else{
	$sendstat=0;
}
		
?>

<?php
$sql = "UPDATE contact SET
			
			correspondenceaddress='$correspondenceaddress',
			permanentaddress='$permanentaddress',
			email='$email',
			mobilenumber='$mobilenumber',
			
				universe='$surname',
			universe2='$staffid'
		
		WHERE universe = '$universe' AND universe2 = '$universe2'";
$sql_exe = mysql_query($sql,$link);
if($sql_exe){
	$sendstat=1;
}
else{
	$sendstat=0;
}
		?>

<?php

$sql = "UPDATE employment SET
			
		firstappointment='$firstappointment',
		post='$post',
		breakofservice='$breakofservice',
		dateofconversion='$dateofconversion',
		previouscadre='$previouscadre',
		presentcadre='$presentcadre',
		presentministry='$presentministry',
		presentoyhmb='$presentoyhmb',
		presentgradelevel='$presentgradelevel',
		presentschool='$presentschool',
		schoolzone='$schoolzone',
		currentofficelocation='$currentofficelocation',
			
				universe='$surname',
			universe2='$staffid'
		
		
		WHERE universe = '$universe' AND universe2 = '$universe2'";
$sql_exe = mysql_query($sql,$link);
if($sql_exe){
	$sendstat=1;
}
else{
	$sendstat=0;
}
?>

<?php
$sql = "UPDATE educational SET 
			
		primary='$primary',
		secondary='$secondary',
		tertiary='$tertiary',
		others='$others',
			
				universe='$surname',
			universe2='$staffid'
		
		 WHERE universe = '$universe' AND universe2 = '$universe2'";
		 $sql_exe = mysql_query($sql,$link);
		 if($sql_exe){
	$sendstat=1;
}
else{
	$sendstat=0;
}
?>
<?php
$sql = "UPDATE promotionrecord SET
			
		date='$date',
		post='$postt',
		promotedto='$promotedto',
			
			universe='$surname',
			universe2='$staffid'
		
		WHERE universe = '$universe' AND universe2 = '$universe2'";
		$sql_exe = mysql_query($sql,$link);
		if($sql_exe){
	$sendstat=1;
}
else{
	$sendstat=0;
}
?>

<?php
$sql = "UPDATE bankdetails SET

		bankname='$bankname',
		accountname='$accountname',
		accountnumber='$accountnumber',
		universe='$surname',
			universe2='$staffid'
		
		WHERE universe = '$universe' AND universe2 = '$universe2'";
		$sql_exe = mysql_query($sql,$link);
		if($sql_exe){
	$sendstat=1;
}
else{
	$sendstat=0;
}
?>
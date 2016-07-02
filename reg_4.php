<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oyo State Payroll System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css" />
<link rel="icon" href="img/logo.png" />
<link rel="stylesheet" type="text/css" href="date/jquery.datetimepicker.css"/>
<script src="js/jquery-1.8.2.min.js"></script>
 <script src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js"></script>
<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/styleselect.css" />
<script type='text/javascript' src='js/select_demo2.js'></script>   

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
		

			$sql = "INSERT INTO employment (firsappointment,post,breakofservice,dateofconversion,previouscadre,presentcadre,presentministry,presentoyhmb,presentgradelevel,presentschool,schoolzone,currentofficelocation,universe,universe2)
					VALUES('$firstappointment','$post','$breakofservice','$dateofconversion','$previouscadre','$presentcadre','$presentministry','$presentoyhmb','$presentgradelevel','$presentschool','$schoolzone','$currentofficelocation','$universe','$universe2')";
			
			$sql2="UPDATE personal SET ministry='$presentministry',gradelevel='$presentgradelevel',firstappointment='$firstappointment' 
						WHERE universe='$universe' AND universe2='$universe2'";
			
			$runquery = mysql_query($sql,$link);	
			$runquery2=mysql_query($sql2,$link);
				
			if (($runquery)&&($runquery2)){
				header('Location:reg_5.php');
			}
			else {
				echo "<script> alert(\"An Error Occured,Retry\");</script>";
				echo "something wrong".mysql_error();
			}
	
	
	}	
?>
</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    	<p class="regheader">Register Panel <span style="color:#900">Section D: Employment Record</span></p>
    	<form action="" method="POST">
        	<label>Date of first Appointment:</label>
        	<p><input placeholder="Select date of first Appointment" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
            
            <label>Post Appointed To:</label>
        	<p><input type="text" name="post" placeholder="Input Post Appointed To here" /></p>
            
            <label>Break of Service: <span style="color:#900;">*** Where Applicable *** </span></label>
        	<p><input type="text" name="breakofservice" placeholder="Input Break of Service here" /></p>
            
            <label>Date of Conversion: <span style="color:#900;">*** Where Applicable *** </span></label>
        	<p><input placeholder="Select date of Conversion" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
            
          <label>Previous CADRE:</label>
        	<p><input type="text"  name="previouscadre" placeholder="Input Previous CADRE here"  /></p>
            
           <label>Present CADRE: </label>
        	<p><input type="text"  name="presentcadre" placeholder="Input Present CADRE here"  /></p>
            
            <label>Present Ministry:  <span style="color:#900;">*** For those Working in Ministries *** </span></label>
       	  <p><select class="turnintodropdown_demo2 " name="presentministry">
            <option>....</option>
            <option>Accountant General</option>
            <option>Agency For Youth Development</option>
            <option>Auditor General for Local Government</option>
            <option>Auditor General for State Government</option>
            <option>Agricultural Credit Corporation</option>
            <option>Board of Internal Revenue</option>
            <option>Botaved</option>
            <option>Civil Service Commission</option>
            <option>Council for Arts and Culture</option>
            <option>Government Press</option>
            <option>Governor's Office</option>			
            <option>Head Of Service</option>
            <option>House Of Assembly</option>
            <option>House Of Assembly Service Commission</option>
            <option>Judiciary Service Commission</option>
            <option>Library Board</option>
            <option>Ministry For Youth And Sport</option>
            <option>Ministry Of Agriculture</option>			
            <option>Ministry Of Culture And Tourism</option>
            <option>Ministry Of Economic Planning And Budget</option>
            <option>Ministry Of Education</option>
            <option>Ministry Of Environment</option>
            <option>Ministry Of Establishment</option>
            <option>Ministry Of Finance</option>
            <option>Ministry Of Health</option>			
            <option>Ministry Of Industry</option>
            <option>Ministry Of Information</option>
            <option>Ministry Of Justice</option>
            <option>Ministry Of Lands</option>
            <option>Ministry Of Local Government</option>
            <option>Ministry Of Special Duties</option>
            <option>Ministry Of Trade Investment And Cooperative</option>			
            <option>Ministry Of Water Resources</option>
            <option>Ministry Of Women Affairs</option>
            <option>Ministry Of Works</option>
            <option>Office Of The Surveyor General</option>
            <option>Oysadep</option>
            <option>Pension Board</option>
            <option>Sport Council</option>
            <option>Subeb HQ</option>
            <option>Tescom HQ</option>
            <option>Urban and Regional Planning</option>
            
            
          </select></p> 
            
             <label>Present OYHMB: <span style="color:#900;">*** For those Working in OYHMB *** </span></label>
       	  <p><select class="turnintodropdown_demo2 " name="presentoyhmb" >
            <option>....</option>
            <option>Adeoyo Maternity Teaching Hospital Yemetu, Ibadan</option>
            <option>Central Medical Diagnostic Centre, Total Garden, Ibadan</option>
            <option>Dental Centre Aremo</option>
            <option>Dental Centre, Dugbe</option>
            <option>General Hospital Ago Amodu</option>
            <option>General Hospital Ago-Are</option>
            <option>General Hospital Eruwa</option>
            <option>General Hospital Fiditi</option>
            <option>General Hospital Iganna</option>
            <option>General Hospital Igbeti </option>
            <option>General Hospital Ikoyi-Ile</option>			
            <option>General Hospital Iresa Adu</option>
            <option>General Hospital Iseyin</option>
            <option>General Hospital Iwere-Ile</option>
            <option>General Hospital Kasumu Ajia</option>
            <option>General Hospital Kisi</option>
            <option>General Hospital Lanlate</option>
            <option>General Hospital Moniya</option>			
            <option>General Hospital Okaka</option>
            <option>General Hospital Orile-Odo</option>
            <option>General Hospital Sepeteri</option>
            <option>General Hospital Tede</option>
            <option>General Hospital, Ado-Awayet</option>
            <option>General Hospital, Ayete</option>
            <option>General Hospital, Igboho</option>			
            <option>General Hospital, Igbo-Ora</option>
            <option>General Hospital, Ilora</option>
            <option>General Hospital, Kutayi</option>
            <option>General Hospital, Lagun/option>
            <option>General Hospital, Okeho</option>
            <option>Government Chest Hospital Jericho, Ibadan</option>
            <option>Jericho Nursing Home</option>			
            <option>Jericho Specialist Hospital</option>
            <option>Maternal & Child Health Unit, Apata, Ibadan</option>
            <option>Oni Memorial Children Hospital Ring Road</option>
            <option>OYHMB Head Quarters</option>
            <option>Ring Road State Hospital</option>
            <option>St. Peter's maternity hospital, aremo, ibadan</option>
            <option>State Hospital Ogbomoso</option>
            <option>State Hospital Oyo</option>
            <option>State Hospital Saki</option>
            <option>Zonal Hospital Store Oyo</option>
            <option>Zonal Saki</option>
            </select></p> 
            
                        
           <label>Present Grade Level:</label>
       	  <p><select class="turnintodropdown_demo2 " name="presentgradelevel" >
            <option>....</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>12</option>	
            <option>13</option>
            <option>14</option>
            <option>15</option>	
            <option>16</option>
            <option>17</option>						
            
            
            </select></p> 
            
            <label>Present School: <span style="color:#900;">*** For Schol workers *** </span></label>
        	<p><input type="text" name="presentschool" placeholder="Input Present School here"  /></p>
            <label>School Zone: <span style="color:#900;">*** For TESCOM and SUBEB only *** </span></label>
       	  <p><select class="turnintodropdown_demo2 " name="schoolzone">
            <option>....</option>
            <option>Afijio</option>
            <option>Akinyele</option>
            <option>Atiba</option>
            <option>Atisbo</option>
            <option>Egbeda</option>
            <option>Eruwa</option>
            <option>Ibadan North East</option>
            <option>Ibadan North West</option>
            <option>Ibadan North</option>
            <option>Ibadan South East</option>
            <option>Ibadan South West</option>			
            <option>Ibadan Zone 1</option>
            <option>Ibadan Zone 2</option>
            <option>Ibarapa Central</option>
            <option>Ibarapa East</option>
            <option>Ibarapa North</option>
            <option>Ido</option>
            <option>Irepo</option>			
            <option>Iseyin</option>
            <option>Itesiwaju</option>
            <option>Iwajowa</option>
            <option>Kajola</option>
            <option>Lagelu</option>
            <option>Ogbomoso North</option>
            <option>Ogbomoso South</option>			
            <option>Ogbomoso</option>
            <option>Ogo Oluwa</option>
            <option>Olorunsogo</option>
            <option>Oluyole</option>
            <option>Ona Ara</option>
            <option>Orelope</option>
            <option>Orire</option>			
            <option>Oyo East</option>
            <option>Oyo West</option>
            <option>Saki East</option>
            <option>Saki West</option>
            <option>Saki</option>
            <option>Surulere</option>
            <option>Tescom Zonal</option>
            </select></p> 
             <label>Current Office location: <span style="color:#900;">*** e.g Saki, Oyo e.t.c. *** </span></label>
        	<p><input type="text" name="currentofficelocation" placeholder="Input Current Office location here"  /></p>
            
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
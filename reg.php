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
<link rel="stylesheet" href="css/avatar.css">
<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styleselect.css" />
<script type='text/javascript' src='js/select_demo2.js'></script>
    
<?php
session_name("MyLogin");
session_start();

$_SESSION['universalpasskey'] = "";
$_SESSION['universalpasskey2']="";

$DBhost = "localhost"; 
$DBuser = "root";
$DBpass = ""; 
$DBname ="oyoppis";	
$link=mysql_connect($DBhost,$DBuser,$DBpass)or die("Unable to connect to database");   //connect to the database
mysql_select_db($DBname,$link); 


$finalstaffidd="";

function idgen($linker){
$staffid="";
			$n1=rand(0,9);
			$n2=rand(0,9);
			$n3=rand(0,9);
			$n4=rand(0,9);
			$n5=rand(0,9);
			$n6=rand(0,9);
			$staffid=$n1.$n2.$n3.$n4.$n5.$n6;

			$finally=idchecker($staffid,$linker);
			return $finally;
		}
			
function idchecker($a,$linkk){
	$thre="SELECT * FROM personal WHERE staffid='$a'"; 
	$resultat=mysql_query($thre, $linkk);
	if(mysql_num_rows($resultat)>0){
		idgen();
	}
	else{ 
		$finalstaffid=$a; 
	}
	return $finalstaffid;

}

$finalstaffidd=idgen($link);

if (isset($_POST['next'])){

			
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
						
			$refid=$_POST['refid'];
			
			
			$dateofbirth=$day."-".$month."-".$year;

			
			//$profilepicture;
			$imagename=$_FILES["profilepicture"]["name"];
			$profilepicture=addslashes(file_get_contents($_FILES['profilepicture']['tmp_name']));
			
			$sql = "INSERT INTO personal (surname,firstname,lastname,staffid,refid,previousname,gender,dateofbirth,nationality,stateoforigin,lga,incrementaldate,profilepicture,imagename,universe,universe2)
					VALUES('$surname','$firstname','$lastname','$finalstaffidd','$refid','$previousname','$gender','$dateofbirth','$nationality','$stateoforigin','$lga','$incrementaldate','$profilepicture','$imagename','$surname','$staffid')";

			
			$runquery = mysql_query($sql,$link);
				
			if ($runquery){
				header('Location:reg_2.php');
				$_SESSION['universalpasskey'] = $surname;
				$_SESSION['universalpasskey2']=$staffid;
			}
			else {
				echo "<script> alert(\"An Error Occured,Retry\");</script>";
				echo "Something Wrong".mysql_error();
			}
	
	
	}



			/*if (!isset($_FILES['profilepicture'])){
				
			}
			else{
				try{
					
					if ($_FILES['profilepicture']['error']==UPLOAD_ERR_OK){
						if(is_uploaded_file($_FILES['profilepicture']['tmp_name'])){
							if(strpos(mime_content_type($_FILES['profilepicture']['tmp_name']),"image")===0){
								$finfo=finfo_open(FILEINFO_MIME_TYPE);
								if (strpos(finfo_file($finfo,$_FILES['profilepicture']['tmp_name']),"image")===0){
									$profilepicture=addslashes(file_get_contents($_FILES['profilepicture']['tmp_name']));
								}
							}
						}
					}
				}
				catch(Exception $e){
					
				}
			}*/
			//$profilepicture=$_POST['profilepicture'];
			//$profilepicture=$_FILES['profilepicture'];
				
?>


</head>

<body>
<div class="container instaFade">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    	<p class="regheader">Register Panel <span style="color:#900">Section A: Personal Information</span></p>
    	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" >
        	<label>Surname:</label>
        	<p><input type="text" placeholder="Input Surname here" name="surname"/></p>
            
            <label>Firstname:</label>
        	<p><input type="text"  placeholder="Input Firstname here" name="firstname" /></p>
            
            <label>Lastname:</label>
        	<p><input type="text" placeholder="Input Lastname here" name="lastname"/></p>
            
            <label>Staff ID: <span style="color:#900;">*** will be generated *** </span></label>
        	<p><input type="text"  required="required" readonly="readonly"  name="staffid"  value="<?php echo $finalstaffidd ?>" /></p>  
			<!-- value="" onfocus="if(this.value=='')this.value='<?php//echo $finalstaffid;
									?>'"-->
            
            <label>Ref ID: <span style="color:#900;">*** only for those that have before *** </span></label>
        	<p><input type="text" placeholder="Input Ref ID here" name="refid"/></p>
            
            <label>Previous Name: <span style="color:#900;">*** Change of Name/ Maiden Name *** </span></label>
        	<p><input type="text" placeholder="Input Previous Name here" name="previousname"/></p>
            
            <label>Gender:</label>
        	<p><select class="turnintodropdown_demo2 "  name="gender">
            <option>....</option>
            <option>Male</option>
            <option>Female</option>
            </select></p> 
            
            <label>Date of Birth:</label>
        	<p><input placeholder="Select date of birth" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
            
            <label>Nationality:</label>
        	<p><select class="turnintodropdown_demo2 ">
            <option selected="selected">Nigeria</option>
    </select></p>
            
            <label>State of Origin:</label>
        	<p><select class="turnintodropdown_demo2 " >
            <option></option>
            	<option>Abia</option>
                <option>Abuja</option>
                <option>Adamawa</option>
                <option>Akwa Ibom</option>
                <option>Anambra</option>
                <option>Bauchi</option>
                <option>Bayelsa</option>
                <option>Benue</option>
                <option>Borno</option>
                <option>Cross River</option>			
                <option>Delta</option>
                <option>Ebonyi</option>
                <option>Edo</option>
                <option>Ekiti</option>
                <option>Enugu</option>
                <option>Gombe</option>
                <option>Imo</option>
                <option>Jigawa</option>
                <option>Kaduna</option>
                <option>Kano</option>
                <option>Katsina</option>
                <option>Kebbi</option>
                <option>Kogi</option>
                <option>Kwara</option>
                <option>Lagos</option>
                <option>Nassarawa</option>
                <option>Niger</option>
                <option>Ogun</option>
                <option>Ondo</option>
                <option>Osun</option>
                <option>Oyo</option>
                <option>Plateau</option>
                <option>Rivers</option>
                <option>Sokoto</option>
                <option>Taraba</option>
                <option>Yobe</option>
                <option>Zamfara</option>
            </select></p>
           
            <label>Local Government Area:</label>
        	<p><input type="text"  placeholder="Input Local Government Area here" name="lga"/></p>
            
            <label>Incremental Date:</label>
        	<p><input placeholder="Select Incremental Date" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
			<label>Picture:</label>
			<p><input type="file" name="profilepicture" />
            
          <button type="submit" class="next" name="next"></button>
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
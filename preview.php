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

 <?php
include("previewcontroller.php");

if(isset($_POST['submit'])){
	include("previewsubmit.php");
	
	if($sendstat=1){
	echo "<script> function pre(){ alert('Successful');}</script>";
	header('Location:emp_details.php');
	}
}
?> 
</head>

<body>
<div class="container">
	<?php include( "header.php"); ?>
    <div class="body mCustomScrollbar" data-mcs-theme="minimal-dark">
    <p class="regheader">Preview page</p>
   
    	<p class="regheader"><span style="color:#900">Section A: Personal Information</span></p>
    	<form action="" method="POST">
        	<label>Surname:</label>
        	<p><input type="text"  placeholder="Input Surname here" name="surname" value="<?php echo $surname; ?>"/></p>
            
            <label>Firstname:</label>
        	<p><input type="text" - placeholder="Input Firstname here" name="firstname" value="<?php echo $firstname; ?>"/></p>
            
            <label>Lastname:</label>
        	<p><input type="text" placeholder="Input Lastname here" name="lastname" value="<?php echo $lastname; ?>"/></p>
            
            <label>Staff ID: <span style="color:#900;"></span></label>
        	<p><input type="text"   name="staffid" value="<?php echo $staffidd ?>"/></p>
            
            <label>Ref ID: <span style="color:#900;"></span></label>
        	<p><input type="text" placeholder="Input Ref ID here" name="refid" value="<?php echo $refid; ?>"/></p>
            
            <label>Previous Name: <span style="color:#900;">*** Change of Name/ Maiden Name *** </span></label>
        	<p><input type="text" placeholder="" name="previousname" value="<?php echo $previousname; ?>"/></p>
            
            <label>Gender:</label>
        	<p><input type="text" name="gender" value="<?php echo $gender; ?>"></p> 
            
            <label>Date of Birth:</label>
            
        	<p><input type="text" class="datetimepicker" name="year_est" id="login-text"/>
           </p> 
            
            <label>Nationality:</label>
        	<p><input type="text"  placeholder="Input Nationality here" name="nationality" value="<?php echo $nationality; ?>"/></p>
            
            <label>State of Origin:</label>
        	<p><input type="text" placeholder="Input State of Origin here" value="<?php echo $stateoforigin; ?>" name="stateoforigin"/></p>
           
            <label>Local Government Area:</label>
        	<p><input type="text" placeholder="Input Local Government Area here" name="lga" value="<?php echo $lga; ?>"/></p>
            
            <label>Incremental Date:</label>
        	<p><input placeholder="Select Incremental Date" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
			
			<label>Picture:&nbsp <span style="color:#900;">*** Click on Cosse to change image *** </span></label>
            <div class="previewimg"><?php echo $imagename ;?> Image will be displayed here</div>
            
			<p><input type="file" src="<?php echo $imagename; ?>" name="profilepicture" />
            
        
        <br />
		
		
		
        <p class="regheader"><span style="color:#900">Section B: Contact Information</span></p>
        <br />
        <br />
        <label>Correspondence Address:</label>
        	<p><input type="text" placeholder="Input Correspondence Address here" name="correspondenceaddress" value="<?php echo $correspondenceaddress; ?>"/></p>
            
            <label>Permanent Address:</label>
        	<p><input type="text" placeholder="Input Permanent Address here" value="<?php echo $permanentaddress; ?>" name="permanentaddress"/></p>
            
            <label>Mobile Number:</label>
        	<p><input type="text" placeholder="Input Mobile Number here" value="<?php echo $mobilenumber; ?>" name="mobilenumber"/></p>
            
            <label>E-mail <span style="color:#900;">*** If Any *** </span></label>
        	<p><input type="email"  placeholder="Input E-mail here"  value="<?php echo $email; ?>" name="email"/></p>
			
              <br />
			  
			  
			  
            <p class="regheader"><span style="color:#900">Section C: Educational Qualification/ Training</span></p>
              <br />
                <br />
			<label>Primary School Attended:</label>
        	<p><input type="text" placeholder="Input Primary School Attended here" name="primary" value="<?php echo $primary; ?>"/></p>
            
            <label>Secondary School/College Attended:</label>
        	<p><input type="text" placeholder="Input Secondary School/College Attended here" name="secondary" value="<?php echo $secondary; ?>"/></p>
            
            <label>Tertiary Institution Attended:</label>
        	<p><input type="text" placeholder="Input Tertiary Institution Attended here" value="<?php echo $tertiary; ?>"name="tertiary"/></p>
            
            <label>Others <span style="color:#900;">*** If Any *** </span></label>
        	<p><input type="text" placeholder="Input Others here"  name="others" value="<?php echo $others; ?>"/></p>
            
            <br />
			
			
			
            <p class="regheader"><span style="color:#900">Section D: Employment Record</span></p>
            
            <br />
                <br />
               <label>Date of first Appointment:</label>
        	<p><input placeholder="Select date of first Appointment" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
            
            <label>Post Appointed To:</label>
        	<p><input type="text" name="post" placeholder="Input Post Appointed To here" value="<?php echo $post; ?>"/></p>
            
            <label>Break of Service: <span style="color:#900;">*** Where Applicable *** </span></label>
        	<p><input type="text" name="breakofservice" placeholder="Input Break of Service here" value="<?php echo $breakofservice; ?>"/></p>
            
            <label>Date of Conversion: <span style="color:#900;">*** Where Applicable *** </span></label>
        	<p><input placeholder="Select date of Conversion" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
            
          <label>Previous CADRE:</label>
        	<p><input type="text"  name="previouscadre" placeholder="Input Previous CADRE here"  value="<?php echo $previouscadre; ?>"/></p>
            
           <label>Present CADRE: </label>
        	<p><input type="text"  name="presentcadre" placeholder="Input Present CADRE here"  value="<?php echo $presentcadre; ?>"/></p>
            
            <label>Present Ministry:</label>
       	  <p><input type="text" name="presentministry" value="<?php echo $presentministry; ?>"></p> 
            
             <label>Present OYHMB:</label>
       	  <p><input type="text" name="presentoyhmb" value="<?php echo $presentoyhmb; ?>"></p> 
            
                        
           <label>Present Grade Level:</label>
       	  <p><input type="text" name="presentgradelevel" value="<?php echo $presentgradelevel; ?>"></p> 
            
            <label>Present School:</label>
        	<p><input type="text" name="presentschool" placeholder="Input Present School here" value="<?php echo $presentschool; ?>" /></p>
            
			<label>School Zone: <span style="color:#900;">*** For TESCOM and SUBEB only *** </span></label>
       	  <p><input type="text" name="schoolzone" value="<?php echo $schoolzone; ?>"></p> 
		  
		  
             <label>Current Office location: <span style="color:#900;">*** e.g Saki, Oyo e.t.c. *** </span></label>
        	<p><input type="text" name="currentofficelocation" placeholder="Input Current Office location here"  value="<?php echo $currentofficelocation; ?>"/></p>
            
             <br />
			 
			 
			 
             <p class="regheader"><span style="color:#900">Section E:Record of Promotion</span></p>
              <br />
               <br />

        	<label>Date:</label>
        	<p><input placeholder="Select date" type="text" class="datetimepicker" name="year_est" id="login-text"/></p>
            
            <label>Post:</label>
        	<p><input type="text" placeholder="Input Post here" name="postt" value="<?php echo $postt; ?>"/></p>
            
            <label>Promoted To:</label>
        	<p><input type="text" placeholder="Input New Post Here" name="promotedto" value="<?php echo $promotedto; ?>"/></p>
            
            <br />
            <p class="regheader"><span style="color:#900">Section F:Bank Details</span></p>
            <br />
            <br />
            <label>Bank Name:</label>
        	<p><input type="text" placeholder="Input Bank Name here" name="bankname" value="<?php echo $bankname; ?>"/></p>
            
            <label>Account Name:</label>
        	<p><input type="text" placeholder="Input Account Name here" name="accountname" value="<?php echo $accountname; ?>"/></p>
            
            <label>Account Number:</label>
        	<p><input type="text" placeholder="Input Account Number here" name="accountnumber" value="<?php echo $accountnumber; ?>"/></p>
             <br />
			 
			 
			 <!--
             <p class="regheader"><span style="color:#900">Section G: Authentication</span></p>
              <br />
               <br />
               
               <label>Staff Signature:</label>
        	<p><input type="text" readonly="readonly" placeholder="Input Correspondence Address here" /></p>
            
            <label>Date:</label>
        	<p><input type="date" readonly="readonly" placeholder="Input Correspondence Address here" /></p>
            
           <label>Principal/ Head of Department Name:</label>
        	<p><input type="text" readonly="readonly" placeholder="Input Permanent Address here" /></p>
            
            <label>Signature:</label>
        	<p><input type="text" readonly="readonly" placeholder="Input Mobile Number here" /></p>
            
            <label>Date:</label>
        	<p><input type="date" readonly="readonly" placeholder="Input Mobile Number here" /></p>-->
            
            <button onclick="pre()" type="submit" name="submit">Register</button>
            <!--<button type="submit">Back</button>-->
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
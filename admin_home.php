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


<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>


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
               <li><a href="admin_home.php" <?php if (($page == 'admin_home.php')) { ?>class="active"<?php } ?>>My Profile</a></li>
             <li><a href="change_admin.php" <?php if (($page == 'change_admin.php')) { ?>class="active"<?php } ?>>Change Profile Settings</a></li>
              <li><a href="my_records.php" <?php if (($page == 'my_records.php')) { ?>class="active"<?php } ?>>My Records</a></li>  
                 
                </ul>
            </div>
        	<div class="all_emp mCustomScrollbar" data-mcs-theme="minimal-dark">
			<div class="emp_label">My Profile</div>
			<table class="profile">
              <tr>
              	<td>Surname:</td>
                <td>aklsd</td>
              </tr>
              <tr>
              	<td>Firstname:</td>
                <td>aklsd</td>
              </tr>
              <tr>
              	<td>Lastname:</td>
                <td>aklsd</td>
              </tr>
              
              <tr>
              	<td>Username:</td>
                <td>aklsd</td>
              </tr>
              
    </table>
          
            
            </div>
        </div>
    </div>
    <?php include( "footer.php"); ?>
    



</div>

<script src="js/scripts.js"></script>

	
</body>
</html>
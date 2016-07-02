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
<script type="text/javascript">
$(function(){
	$('#ans').hide();
	$('#ans_label').hide();
	$('.sel').click(function(){
	$('#ans').show();
	$('#ans_label').show();
	
});
});
</script>

<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />


<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<script src="js/pwdwidget.js" type="text/javascript"></script>
<style type="text/css">

.pwdfield
{
	height:30px ;
	padding:10px;
	margin:10px;
	width:90%;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:13px;
	color: #666;
	background:rgba(255,255,255,.8);
	border:0px;
	-webkit-transition: all 0.5s ease-in;
  	-moz-transition: all 0.5s ease-in;
	transition: all 0.5s ease-in;
}

.pwdopsdiv a
{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 13px;
	margin-left:10px;
	text-decoration:none;
	float:left;
	display:block;
	padding:0; 
	color:#900;
}

.pwdstrengthbar
{	
	float:right;
	background:#cccccc;
	height:4px;
	margin:0;
	

}

.pwdstrength
{	float:right	;
	margin:0;
	margin-top:-7px;
	margin-right:10px;
	padding:0;
	height:20px;
	width:200px;
	

}
.pwdstrengthstr
{
    float:right;
	clear:both;
	height:14px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 13px; 

}

.idiot {
	with:90%;
	margin:0 auto;
	padding:0;

}
</style>
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
			<div class="emp_label">Change Username/Password</div>
			<form class="chnpwrd">
            <label>Old Password:</label>
            <input type="password" placeholder="Please provide the Old Password" />
             <label for='regpwd'>New Password:</label>
            <div class='pwdwidgetdiv' id='thepwddiv'></div>
            <div class="idiot">
		<script  type="text/javascript" >
		var pwdwidget = new PasswordWidget('thepwddiv','regpwd');
		pwdwidget.MakePWDWidget();
		</script>
		<noscript>
		<div><input type='password'  id='regpwd' name='regpwd' /></div>		
		</noscript>
            </div>
             <br />
            <label>Password Recovery Question</label> <span style="color:#900; font-size:10px;">*** Used to recover your password *** </span>
            <p>
            <select class="sel">
            <option>....</option>
            <option>What is Your Maiden Name</option>
            <option>What is the name of Your First car</option>
            <option>What is your Mothers Name</option>
            <option>What Your Favorite Colour</option>
            <option>What is YOur Next of Kin's Name</option>
            <option>What The Name of your Seconary School</option>
            <option>What is the Name of Your Hometown</option>
            <option>How old Are you</option>
            </select>
            </p>
            <label id="ans_label">Answer Here:</label>
            <p id="ans"><input type="text" placeholder="Please provide Your Answer here" /></p>
            <br />
            <button>Change Password</button>
            </form>
          
            
            </div>
        </div>
    </div>
    <?php include( "footer.php"); ?>
    



</div>

<script src="js/scripts.js"></script>

	
</body>
</html>
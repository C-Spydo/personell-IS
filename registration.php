<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oyo State Payroll System</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<link rel="icon" href="img/logo.png" />
<script src="js/jquery-1.8.2.min.js"></script>
 <script src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js"></script>

<link rel="stylesheet" href="js/scroll/jquery.mCustomScrollbar.css" />
<script src="js/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/pwdwidget.js" type="text/javascript"></script>
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
<link rel="stylesheet" type="text/css" href="css/styleselect.css" />
<script type='text/javascript' src='js/select_demo2.js'></script>
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
	color: #900; 
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
<div class="container instaFade" >
	<?php include( "header.php"); ?>
    <div class="body quickFade mCustomScrollbar" data-mcs-theme="minimal-dark">
    	<p class="loginheader">Register as an Administrator</p>
    	<form action="index.php" method="POST">
        	<label >Surname:</label>
        	<p><input type="text" required="required" name="username" placeholder="Input your Surname here" /></p>
            
            <label >Firstname:</label>
        	<p><input type="text" required="required" name="username" placeholder="Input your Firstname here" /></p>
            <label >Lastname:</label>
        	<p><input type="text" required="required" name="username" placeholder="Input your Lastname here" /></p>
            <label >Username:</label>
        	<p><input type="text" required="required" name="username" placeholder="Input your Surname here" /></p>
            <label for='regpwd'>Password:</label>
        	<div class='pwdwidgetdiv' id='thepwddiv'></div>
            <div class="idiot">
		<script  type="text/javascript" >
		var pwdwidget = new PasswordWidget('thepwddiv','regpwd');
		pwdwidget.MakePWDWidget();
		</script>
		<noscript>
		<div><input type='password' id='regpwd' name='regpwd' /></div>		
		</noscript>
            </div>
            <br />
            <label>Password Recovery Question</label> <span style="color:#900; font-size:12px;">*** Used to recover your password *** </span>
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
            <button type="submit"  name="submit">Register</button>
        </form>
    
    
    </div>
    <?php include( "footer.php"); ?>
    



</div>
</body>
</html>



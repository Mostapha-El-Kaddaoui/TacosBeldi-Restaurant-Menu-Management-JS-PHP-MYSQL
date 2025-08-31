<?php
session_start();
 $conn = mysqli_connect('localhost','tacos','tacbel5dios','snackdata');
  $error="";
   if (isset($_POST['login'])) {
    $query="SELECT * FROM `admin` WHERE `admin-name`='$_POST[login_name]' AND `admin-password`='$_POST[login_password]'";
    $result= mysqli_query($conn,$query);
    $att="'or 1='1";
    if($_POST['login_name']!=$att or $_POST['login_name']!=$att) {
   	  if(mysqli_num_rows($result)==1){
        $_SESSION['Adminlock']=$_POST['login_name'];
        header("location: dashboard.php");
      }
    }
    else {
    	$error="Invalid Name or Password";
    }
    
   
 }
  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.cdnfonts.com/css/jelita" rel="stylesheet">
	<link href="http://fonts.cdnfonts.com/css/romela" rel="stylesheet">
	<title></title>
		<style type="text/css">
		*{
		    margin: 0px;
		    padding: 0px;
		 }.login-home{
		    position: absolute;
		    top: 0px;
		    left: 0px;
		    width: 100%;
		    height: 100%;
		 }.login-home-c{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 60%;
        height: 65%;
        box-shadow: 0px 0px 20px 4px lightgrey;
     }.login-home-part{
		 	position: absolute;
		 	top: 0px;
		 	left: 0px;
		 	width: 40%;
		 	height: 100%;
		 	background-color: white;
		 }.login-home-background{
		 	position: absolute;
		 	top: 0px;
		 	right: 0px;
		 	width: 60%;
		 	height: 100%;
		 	background-image: url('https://images.pexels.com/photos/1633525/pexels-photo-1633525.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
		 }.login-form{
		 	position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 75%;
			height: 55%;
			text-align: center;
		 }.login-form h3{
		 	font-size: 30px;
		 	color: black;
		 	font-weight: bold;
		 	font-family: 'Romela', sans-serif;

		 }.login-form-para{
		 	font-size: 12px;
		 	color: #a1a1a1;
		 	font-weight: 100;
		 	font-family: 'Romela', sans-serif;
		 }.login-input-c{
		 	 padding: 0px 10px 0px 10px;
    		 width: 98%;
    		 height: 45px;
    		 background-color: #e9e9e9;
    		 border: none;
    		 border-radius: 2px;
    		 margin: 7px 0px 7px -5px;
		 }.login-inputs{
		 	margin-top: 15px;
		 }.login-button{
		 	margin-top: 20px;
		 }
		 .login-button-c{
		 	margin-top: 10px;
    		padding: 10px;
    		width: 130px;
    		font-family: 'Romela', sans-serif ;
    		font-weight: bold;
    		color:white;
    		background-color: #ffe941;
    		border: none;
    		border-radius:2px;
    		cursor: pointer;
		 }.forgot-password{
		 	font-size: 12px;
		 	color: #a1a1a1;
		 	font-weight: 100;
		 	font-family: 'Romela', sans-serif;
		 }.login-home-background div{
            position: relative;
    		top: 0px;
    		left: 0px;
    		height: 100%;
    		width: 100%;
    		background-color: #1e1e1e4d;
    		cursor: pointer;
		 }
		 .login-logo{
		 	width: 50%;
		 	height: auto;
		 	position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			z-index: 1;
		 }.error-stat{
		 	color: red;
		 	font-size: 12px;
		 	font-weight: 100;
            font-family: 'Romela', sans-serif;
		 }
@media(max-width:1250px){
.login-home-c {
    width: 75%;
 }
}@media(max-width:1000px){
.login-home-c {
    width: 75%;
 }
}@media(max-width:550px){
.login-home-part {
    width: 100%;
}.login-home-background{
	display: none;
}
.login-home-c {
    width: 100%;
    box-shadow: none;
}
}





	</style>
</head>
<body>
<div class="login-home">
	<div class="login-home-c">
	   <div class="login-home-part">
	   	<form action="" method="POST" class="login-form">
	   		<h3>Log In</h3>
	   		<p class="login-form-para">Admin log in dashboard</p>
	   		<div class="login-inputs">
	   		<input class="login-input-c" type="text" name="login_name" placeholder="Admin Name">
	   		<input class="login-input-c" type="password" name="login_password" placeholder="Admin Password">
	   		<p class="error-stat"><?php echo $error; ?></p>
	   		</div>
	   		<div class="login-button">
	   			<p class="forgot-password">Do you forgot the password</p>
	   			<input class="login-button-c" type="submit" name="login" value="Log in">
	   		</div>
	   	</form>
	   </div>
	   <div class="login-home-background">
	   	<div>
	   		<img class="login-logo" src="logotacos.png">
	   	</div>
	   </div>
	</div>
	
</div>
</body>

</html>


<?php


?>




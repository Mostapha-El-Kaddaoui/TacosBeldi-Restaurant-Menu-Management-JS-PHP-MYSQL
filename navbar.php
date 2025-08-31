<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.cdnfonts.com/css/league-mono" rel="stylesheet">
	<script src="https://kit.fontawesome.com/544f1ee096.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="responsive.css">
	<title></title>
</head>
<body>
<div class="navbar">
	<div class="logo" ><img src="logotacos.png"></div>
	<div class="pages">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="./#about">About Us</a></li>
			<li><a href="./#reserve">Reserve</a></li>
			<li><a href="menu.php">Menu</a></li>
			<li><a href="./#delivry">Delevry</a></li>
		</ul>
	</div>
	<div class="navlogo"><i onclick="opennav()" id="bars" class="fa-solid fa-bars"></i><i id="basket" class="fa-solid fa-basket-shopping"></i></div>
</div>
<div id="telenav" class="tele-navbar">
	<div class="delete-nav"><i onclick="closenav()" class="fa-solid fa-xmark"></i></div>
	<div class="tele-navbar-c">
		<div class="tele-pages">
			<ul class="tele-nav-ul">
			<li><a onclick="closenav()" href="index.php">Home</a></li>
			<li><a onclick="closenav()" href="./#about">About Us</a></li>
			<li><a onclick="closenav()" href="./#reserve">Reserve</a></li>
			<li><a onclick="closenav()" href="menu.php">Menu</a></li>
			<li><a onclick="closenav()" href="./#delivry">Delevry</a></li>
		</ul>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
	 function closenav(){
		document.getElementById('telenav').style.display = "none";
	}function opennav(){
		document.getElementById('telenav').style.display = "block";
	}
</script>
<style type="text/css">
*{
	margin: 0px;
	padding: 0px;
}
.navbar{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 120px;
}.logo{
	position: absolute;
	top: 50%;
	left: 10%;
	transform: translate(-50%,-50%);
}.logo img{
	width: 90px;
}.pages{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	height: 30px;
	margin-top: 20px;
}ul{
	display:flex;
	padding: 0;

}ul li a {
	color: white;
	text-decoration: none;
	margin: 0;
	font-family: 'Romela', sans-serif;
	cursor: pointer;
	font-weight: 400;
}li{
	list-style: none;
	margin: 0;
	padding-left: 20px;
	padding-right: 20px;
}.navlogo{
	position: absolute;
	top: 47%;
	right: 5%;
	transform: translate(-50%,-50%);
	margin: 10px;
}.navlogo i{
	color: white;
}.tele-navbar{
	position: fixed;
	top: 0px;
	left: 0px;
	width: 70%;
	height: 100%;
	background-color: white;
	display: none;
}.delete-nav{
    position: absolute;
	top: 0px;
	right: 0px;
}.delete-nav i{
    color: black;
    font-size: 20px;
    margin: 20px;
}.tele-pages{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}.tele-pages li a{
	color: black;
}.tele-pages li{
    margin: 10px;
}.tele-nav-ul{
	display: flex;
    flex-direction: column;
}







@media(max-width:450px){
   .logo img{
    width: 75px;
}.fa-basket-shopping{
    display: none;
}

}
@media(max-width:970px){
#basket{
    display: none;
}

}@media(min-width:970px){
#bars{
    display: none;
}

}










</style>
</html>
<?php

$conn = mysqli_connect('localhost','root','','snackdata');

$sql= 'SELECT * FROM meals';
$result = mysqli_query($conn, $sql);
$meals= mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.cdnfonts.com/css/btc-gaming" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/romela" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/jelita" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/major-mono-display-2" rel="stylesheet">
    <link rel="stylesheet" href="menustylek.css">
	<title></title>
</head>
<body>
<div class="navegatedbar"><?php include 'navbar.php';?></div>
<div class="homemenubackground">
    <div class="graybackground">
      <div class="menu-title">
      <h1>Our Menu</h1>
      <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise </p>
      </div>
    </div>
</div>
<div class="contai-meals">
	  <div class="c-contai-meals">
<?php foreach ($meals as $meal) { ?>
  <a href="chek.php?id=<?php echo $meal['id']?>">
    <div style="background-image: url(<?php echo htmlspecialchars($meal['image']);?>);" class="meal">
        <div class="gray-meal">
          <div class="meal-prix"><?php echo htmlspecialchars($meal['price']);?>dh</div>
          <h5 class="meal-name"><?php echo htmlspecialchars($meal['name']);?></h5>
        </div>
      </div>
  </a>	
<?php } ?>
	  </div>
</div> 
<div class="somthing-special">
  <div class="gray-somthing-special">
    <div class="somthing-special-c">
      <h4>Contact As and Command Somthing Special</h4>
      <h5><a href="https://api.whatsapp.com/send?phone=+212644672725&text=SALAM BGHIT NCOMANDER CHI HAJA SPECIAL">Command</a></h5>
    </div>
  </div>
</div>
<div class="contai-poiss">
  <div class="c-contai-meals">
    <div style="background-image: url('https://images.unsplash.com/photo-1600271886742-f049cd451bba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80');" class="meal">
        <div class="gray-meal">
          <div class="meal-prix">15dh</div>
          <h5 class="meal-name">ORANGE JUICE</h5>
        </div>
      </div>
      <div style="background-image: url('https://img.freepik.com/photos-gratuite/delicieux-milkshake-banane_144627-5653.jpg?w=740&t=st=1661968873~exp=1661969473~hmac=0ef7b00f85b2b51ad7b82ab4e6eda22f194b16bc53683a530f1ef8005eee8704');" class="meal">
        <div class="gray-meal">
          <div class="meal-prix">15dh</div>
          <h5 class="meal-name">FRUIT JUICE</h5>
        </div>
      </div>
      <div style="background-image: url('https://moroccanfoodtour.com/wp-content/uploads/2020/07/moroccan-food-tour-Moroccan-mint-tea-915x610.jpg');" class="meal">
        <div class="gray-meal">
          <div class="meal-prix">15dh</div>
          <h5 class="meal-name">MOROCCAN TEA</h5>
        </div>
      </div>
    </div>
  
</div>
<div class="footerbarre"><?php include 'footer.php';?></div>
</body>
</html>

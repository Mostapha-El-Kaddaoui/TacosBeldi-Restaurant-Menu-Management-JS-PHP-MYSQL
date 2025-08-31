<?php

$conn = mysqli_connect('localhost','root','','snackdata');
if (isset($_GET['id'])) {
  $id= mysqli_real_escape_string($conn,$_GET['id']);
  $sql="SELECT * FROM meals WHERE id=$id";
  $result= mysqli_query($conn, $sql);
  $meal= mysqli_fetch_assoc($result);
  $lien= "http://localhost/tuts/chek.php?id=$id";
  mysqli_free_result($result);
  mysqli_close($conn);
}if (isset($_POST['command'])) {
  header("location: https://api.whatsapp.com/send?phone=tele&text=SALAM BGHIT NCOMANDER ");
}

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
    <link rel="stylesheet" href="">
	<title></title>
</head>
<body>
<?php if ($meal):?>
<div class="meal-prev">
  <div class="meal-info">
    <div class="meal-info-c">
      <div class="name-desc">
        <h1><?php echo htmlspecialchars($meal['name']) ?></h1>
        <p><?php echo htmlspecialchars($meal['description']) ?></p>
      </div>
      <div class="ingredients-description">
        <div class="ingredients">
          <h3 class="ingredients-desc-title">INGREDIENTS <span>:</span></h3>
          <?php foreach (explode(",", $meal['ingredients']) as $ing) { ?>
             <p class="ingredients-desc-para"><?php echo htmlspecialchars($ing)?></p>
          <?php } ?>
        </div>
        <div class="description">
          <h3 class="ingredients-desc-title">SAUCES <span>:</span></h3>
          <?php foreach (explode(",", $meal['sauces']) as $ing) { ?>
             <p class="ingredients-desc-para"><?php echo htmlspecialchars($ing)?></p>
          <?php } ?>
        </div>
      </div>
      <div class="meal-price">
        <h3 class="price-title">PRICE <span>:</span></h3>
        <p class="price-para"><?php echo htmlspecialchars($meal['price']) ?> dh</p>
      </div>
      <div class="command-meal">
       <a href="https://api.whatsapp.com/send?phone=+212644672725&text=SALAM BGHIT <?php echo htmlspecialchars($meal['name']);?>">Command</a>
       </div>
    </div>
  </div>
  <div class="meal-uli" style="background-image: url(<?php echo htmlspecialchars($meal['image']);?>);">
    <div>
    </div>
  </div>
</div>
<?php else: ?>
  <p>No Such meal</p>
<?php endif; ?>
</body>
<style type="text/css">
*{
  margin: 0px;
  padding: 0px;
}
  .meal-prev{
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    display: flex;
  }.meal-info{
    position: relative;
    top: 0px;
    left: 0px;
    width: 40%;
    height: 100%;
  }.meal-uli{
    position: relative;
    top: 0px;
    left: 0px;
    width: 60%;
    height: 100%;
    background-size: cover;
    background-position: center;
  }.meal-uli div{
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    background-color: #1e1e1e4d;
    cursor: pointer;
  }.meal-info-c{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 65%;
    height: 70%;
}.name-desc{
    position: relative;
    top: 0px;
    left: 0px;
    width: 100%;
    height: auto;
  }.name-desc h1{
    font-size: 30px;
    font-family: 'Romela', sans-serif;
    font-weight: bold;
    margin-block: 0;
    margin-inline: 0px;
  }.name-desc p{
    margin-top:20px ;
    font-size: 20px;
    font-family: 'romela', sans-serif;
    font-weight: 100;
  }.ingredients-description{
    position: relative;
    top: 0px;
    left: 0px;
    width: 100%;
    height: auto;
    display: flex;
    margin-top: 30px;
  }.ingredients{
    position: relative;
    top: 0px;
    left: 0px;
    width: 50%;
    height: auto;
  }.description{
    position: relative;
    top: 0px;
    left: 0px;
    width: 50%;
    height: auto;
  }.ingredients-desc-title{
    font-size: 23px;
    font-family: 'Romela', sans-serif;
    font-weight: bold;
    margin-block: 0;
    margin-inline: 0px;
  }.ingredients-desc-para{
    margin-top:10px ;
    font-size: 20px;
    font-family: 'romela', sans-serif;
    font-weight: 100;
  }div span{
    font-size: 35px;
    font-family: system-ui;
    font-weight: 100;
  }.meal-price{
    position: relative;
    top: 0px;
    left: 0px;
    width: 100%;
    height: auto;
    margin-top: 20px;
  }.price-title {
    font-size: 23px;
    font-family: 'Romela', sans-serif;
    font-weight: bold;
    margin-block: 0;
    margin-inline: 0px;
  }.price-para{
    margin-top:10px ;
    font-size: 20px;
    font-family: 'Major Mono Display', sans-serif;
    font-weight: 100;
  }.command-meal{
    position: relative;
    top: 0px;
    left: 0px;
    width: 100%;
    height: auto;
    margin-top: 50px;
  }.command-meal a{
    text-decoration: none;
    padding: 10px;
    width: 110px;
    background: #ffe941;
    font-family: 'Romela', sans-serif;
    font-weight: bold;
    color: white;
    border-radius: 3px;
    border: none;
    cursor: pointer;
  }






@media(max-width:1440px){
.meal-info {
    width: 50%;
}.meal-uli {
    width: 50%;
}

}

@media(max-width:1130px){
.meal-info {
    width: 100%;
}.meal-uli {
    width: 100%;
}
.meal-prev {
    flex-direction: column-reverse;
    height: 1020px;
}.meal-uli {
    height: 600px;
}
.meal-info-c {
    width: 80%;
    height: 90%;
}

}

@media(max-width:450px){
.meal-info-c {
    width: 85%;
}.description {
    left: 42px;
    width: auto;
    height: auto;
}
.name-desc h1 {
    font-size: 25px;
}.name-desc p {
    font-size: 15px;
}.ingredients-desc-title {
    font-size: 20px;
}.ingredients-desc-para {
    font-size: 18px;
}.price-title {
    font-size: 20px;
}.price-para {
    font-size: 15px;
}

}



</style>
</html>

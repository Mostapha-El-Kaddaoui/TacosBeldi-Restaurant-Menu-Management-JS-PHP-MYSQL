<?php

$conn = mysqli_connect('localhost','tacos','tacbel5dios','snackdata');

session_start();
if (!isset($_SESSION['Adminlock'])) {
  header("location: login.php");
}
$errors = array('name'=>'' ,'image'=>'' ,'sauces'=>'' ,'price'=>'' ,'ingredients'=>'' ,'description'=>'' ,'mealdeleteerror'=>'' );
if (isset($_POST['submit'])) {
 
if(empty($_POST['name'])){
  $errors['name']='Name input is empty';
} else { 
  $name = $_POST['name'];
   if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
     $errors['name'] ='Invalid Meal Name';
   }
}

if(empty($_POST['image'])){
  $errors['image']='Image input is empty';
} else { 
   $image = $_POST['image'];
   
}

if(empty($_POST['sauces'])){
  $errors['sauces']='Sauces input is empty';
} else { 
  $sauces = $_POST['sauces'];
}

if(empty($_POST['price'])){
  $errors['price']='Price input is empty';
} else { 
  $price = $_POST['price'];
   if (!preg_match('/^[0-9]*$/', $price)) {
     $errors['price']='Price must be a number';
   }
}

if(empty($_POST['ingredients'])){
  $errors['ingredients']='Ingredients input is empty';
} else { 
  $ingredients = $_POST['ingredients'];
   
}

if(empty($_POST['description'])){
  $errors['description']='Description input is empty';
} else { 
  $description = $_POST['description'];
}
 if (array_filter($errors)) {
   // code...
 } else{
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $image = mysqli_real_escape_string($conn, $_POST['image']);
   $sauces = mysqli_real_escape_string($conn, $_POST['sauces']);
   $price = mysqli_real_escape_string($conn, $_POST['price']);
   $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
   $description = mysqli_real_escape_string($conn, $_POST['description']);

   $sql = "INSERT INTO meals(name,image,sauces,price,ingredients,description) VALUES('$name','$image','$sauces','$price','$ingredients','$description')";

   if(mysqli_query($conn, $sql)){

   }else{
    echo 'query error :'. mysqlierror($conn);
   }
 }
}
if (isset($_POST['button_delete'])) {
  $name_to_delete= $_POST['input_name_delete'];
  $query=mysqli_query($conn,"DELETE FROM `meals` WHERE `name`='$name_to_delete'");
  $data=mysqli_query($conn,$query);
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
    <link rel="stylesheet" href="dashboard.css">
	<title></title>
</head>
<body>
<div class="navegatedbar"><?php include 'navbar.php';?></div>
<div class="homedashbackground">
    <div class="graybackground">
      <div class="menu-title">
      <h1>Dashboard</h1>
      <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise </p>
      </div>
    </div>
</div>
<form class="inputs" action="dashboard.php" method="POST">
  <h3 class="delete-add-meal-title">Add Meal <span class="delete-add-meal-title-span">:</span></h3>
  <div class="input-fi">
    <div class="c-input-cn">
      <div class="name-input">
        <h4 class="title-input">Meal Name <span>:</span></h4>
        <input class="input-c"  placeholder="" type="text" name="name">
        <p class="error-stat"><?php echo $errors['name']; ?></p>
      </div>
      <div class="image-input">
        <h4 class="title-input">Image link <span>:</span></h4>
        <input class="input-c"  placeholder="" type="text" name="image">
        <p class="error-stat"><?php echo $errors['image']; ?></p>
      </div>
    </div>
  </div>
  <div class="input-se">
    <div class="c-input-cn">
      <div class="s-d-input">
        <h4 class="title-input">Sauces <span>:</span></h4>
        <input class="input-c"  placeholder="" type="text" name="sauces">
        <p class="error-stat"><?php echo $errors['sauces']; ?></p>
      </div>
      <div class="price-input">
        <h4 class="title-input">Price <span>:</span></h4>
        <input class="input-c" value="" placeholder="" type="text" name="price">
        <p class="error-stat"><?php echo $errors['price']; ?></p>
      </div>
    </div>
  </div>
  <div class="input-th">
    <div class="c-input-cn">
      <div class="ingredients-input">
        <h4 class="title-input">Ingredients <span>:</span></h4>
        <input class="input-c"  placeholder="" type="text" name="ingredients">
        <p class="error-stat"><?php echo $errors['ingredients']; ?></p>
      </div>
      <div class="description-input">
        <h4 class="title-input">Description <span>:</span></h4>
        <input class="input-c"  placeholder="" type="text" name="description">
        <p class="error-stat"><?php echo $errors['description']; ?></p>
      </div>
    </div>
  </div>
  <div>
  </div>
  <div class="button-submit"><input value="Add" type="submit" name="submit"></div>

</form>
<form class="delete-meal" action="dashboard.php" method="POST" >
  <h3 class="delete-add-meal-title">Delete Meal <span class="delete-add-meal-title-span">:</span></h3>
  <div class="input-delete">
  <div class="c-input-cn">
      <div class="s-d-l-input">
        <h4 class="title-input">Meal Name <span>:</span></h4>
        <input class="input-c"  placeholder="" type="text" name="input_name_delete">
        <p class="error-stat"><?php echo $errors['mealdeleteerror']; ?></p>
      </div>
      <div class="button-delete">
        <input type="submit" value="Delete" name="button_delete" class="delete">
      </div>
  </div>
</div>
</form>
<div class="dash-footer">
 <div>
   <form class="logout-f" action="dashboard.php" method="POST">
      <input type="submit" name="logout" value="Log Out">
   </form>
 </div> 
</div>
</body>
</html>



<?php 
if (isset($_POST['logout'])) {
  session_destroy();
  header("location: login.php");

}
?>











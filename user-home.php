<?php

include 'db_conn.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>

<?php include 'user-header.php'; ?>

<div class="row">
  <div class="side">
    <h2>User Info</h2>
    <h3>ID:  <?php echo $_SESSION['user_id']; ?></h3>
    <div class="box" style="height:60px;"> <?php echo $_SESSION['user_name']; ?></div><br>
    <div class="box" style="height:60px;"> <?php echo $_SESSION['user_email']; ?></div><br>
    <div class="box" style="height:60px;"> <?php echo $_SESSION['user_pass']; ?></div>
  </div>
  <div class="main">
  <h1>Welcome</h1>
    <h3><?php echo $_SESSION['user_name']; ?></h3>
	<br>
  <div class="product-grid">
          <!-- meletakkan produk dalam bentuk card -->
          <form class="product-card">
            <img src="images/pic.jpg" alt="Product 1">
            <h3>Name</h3>
			<h4>Author</h4>
            <p>RM 6</p>
            <input class="add" value="Add to List" type="submit">
          </form>
          <!-- penambahan product cards -->
          <form class="product-card">
            <img src="images/pic.jpg" alt="Product 2">
            <h3>Name</h3>
			<h4>Author</h4>
            <p>RM 6</p>
            <input class="add" value="Add to List" type="submit">
          </form>
          <form class="product-card">
            <img src="images/pic.jpg" alt="Product 3">
            <h3>Name</h3>
			<h4>Author</h4>
            <p>RM 6</p>
            <input class="add" value="Add to List" type="submit">
          </form>
          <form class="product-card">
            <img src="images/pic.jpg" alt="Product 4">
            <h3>Name</h3>
			<h4>Author</h4>
            <p>RM 6</p>
            <input class="add" value="Add to List" type="submit">
          </form>
        </div>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>


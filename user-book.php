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
<title>User Book</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>

<?php include 'user-header.php'; ?>

<div class="row">
  <div class="side">
    <form>
  <h1>Types</h1>
        <input type="radio" checked="checked" name="radio">
        <label for="vehicle1">Novel</label>
        <br>
        <input type="radio" name="radio">
        <label for="vehicle1">Comic</label>
        <br>
        <input type="radio" name="radio">
        <label for="vehicle1">Reference Book</label>
        <input type="submit" value="submit">
</form>
  </div>
  <div class="main">
  <h1>Carian Produk</h1>
  <div class="search">
        <form>
          <input type="search" placeholder="find...">
          <input type="submit" value="search">
        </form>
  </div>
        <hr>
        <br>
  <div class="product-grid">
          <!-- meletakkan produk dalam bentuk card -->
          <form class="product-card">
            <img src="images/pic.jpg" alt="Product 1">
            <h3>Name</h3>
			<h4>Author</h4>
            <p>RM 6</p>
            <input class="add" value="Add to Cart" type="submit">
          </form>
          <!-- penambahan product cards -->
          <form class="product-card">
            <img src="images/pic.jpg" alt="Product 2">
            <h3>Name</h3>
			<h4>Author</h4>
            <p>RM 6</p>
            <input class="add" value="Add to Cart" type="submit">
          </form>
          <form class="product-card">
            <img src="images/pic.jpg" alt="Product 3">
            <h3>Name</h3>
			<h4>Author</h4>
            <p>RM 6</p>
            <input class="add" value="Add to Cart" type="submit">
          </form>
          <form class="product-card">
            <img src="images/pic.jpg" alt="Product 4">
            <h3>Name</h3>
			<h4>Author</h4>
            <p>RM 6</p>
            <input class="add" value="Add to Cart" type="submit">
          </form>
        </div>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>


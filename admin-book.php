<?php

include 'db_conn.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Book</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

<?php include 'admin-header.php'; ?>

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
        <br>
        <br>
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
                <div class="product-card">
                    <img src="images/pic.jpg" alt="Product 1">
                    <h3>Name</h3>
                    <h4>Author</h4>
                    <p>RM 6</p>
                    <a href="" class="btn">update</a>
                    <a href="" class="btn" onclick="return confirm('delete this product?');">delete</a>
                </div>
                <!-- penambahan product cards -->
                <div class="product-card">
                    <img src="images/pic.jpg" alt="Product 2">
                    <h3>Name</h3>
                    <h4>Author</h4>
                    <p>RM 6</p>
                    <a href="" class="btn">update</a>
                    <a href="" class="btn" onclick="return confirm('delete this product?');">delete</a>
                </div>
                <div class="product-card">
                    <img src="images/pic.jpg" alt="Product 3">
                    <h3>Name</h3>
                    <h4>Author</h4>
                    <p>RM 6</p>
                    <a href="" class="btn">update</a>
                    <a href="" class="btn" onclick="return confirm('delete this product?');">delete</a>
                </div>
                <div class="product-card">
                    <img src="images/pic.jpg" alt="Product 4">
                    <h3>Name</h3>
                    <h4>Author</h4>
                    <p>RM 6</p>
                    <a href="" class="btn">update</a>
                    <a href="" class="btn" onclick="return confirm('delete this product?');">delete</a>
                </div>
            </div>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>


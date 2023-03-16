<?php

include 'db_conn.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body>

    <?php include 'admin-header.php'; ?>

    <div class="row">
        <div class="side">
            <h2>Admin Info</h2>
            <h3>ID:
                <?php echo $_SESSION['admin_id']; ?>
            </h3>
            <div class="box" style="height:60px;">
                <?php echo $_SESSION['admin_name']; ?>
            </div><br>
            <div class="box" style="height:60px;">
                <?php echo $_SESSION['admin_email']; ?>
            </div><br>
            <div class="box" style="height:60px;">
                <?php echo $_SESSION['admin_pass']; ?>
            </div>
        </div>
        <div class="main">
            <h2>Admin Dashboard</h2>
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
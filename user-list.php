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
  <h1>Comparison List</h1>
	<br>
  <table>
  <tr>
    <th>Book ID</th>
    <th>Book Name</th>
    <th>Price</th>
    <th>Author</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Name</td>
    <td>Author</td>
    <td>RM6</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Name</td>
    <td>Author</td>
    <td>RM6</td>
  </tr>
</table>
        </div>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>


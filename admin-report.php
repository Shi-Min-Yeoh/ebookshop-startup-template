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
<title>admin Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

<?php include 'admin-header.php'; ?>

<div class="row">
  <div class="side">
    <h2>admin Info</h2>
    <h3>ID:  <?php echo $_SESSION['admin_id']; ?></h3>
    <div class="box" style="height:60px;"> <?php echo $_SESSION['admin_name']; ?></div><br>
    <div class="box" style="height:60px;"> <?php echo $_SESSION['admin_email']; ?></div><br>
    <div class="box" style="height:60px;"> <?php echo $_SESSION['admin_pass']; ?></div>
  </div>
  <div class="main">
  <h1>Report</h1>
    <h3>Based On Book Added</h3>
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


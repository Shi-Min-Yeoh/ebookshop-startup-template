<?php

include 'db_conn.php';
session_start();
if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $selectUsers = mysqli_query($conn, "SELECT NamaPengguna FROM `pengguna` WHERE NamaPengguna = '$name' OR IDPengguna = '$id' ") or die('query failed');

    if (mysqli_num_rows($selectUsers) > 0) {
        echo '<script language="javascript">';
        echo 'alert("username or id already exists");';
        echo '</script>';
    } else {
        $register = mysqli_query($conn, "INSERT INTO `pengguna`(IDPengguna, NamaPengguna, EmelPengguna, KtlaluanPengguna) VALUES('$id','$name', '$email', '$cpass')") or die('query failed');

        if ($register) {
                echo '<script language="javascript">';
                echo 'alert("register successfully! pls login to continue");';
                echo '</script>';
            }else {
            echo '<script language="javascript">';
            echo 'alert("cannot register!")';
            echo '</script>';
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <!-- login-->
     <div id="register">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3>register now</h3>
                    <input type="text" name="id" placeholder="enter your id, Example P001" required class="box">
                    <input type="text" name="name" placeholder="enter your name" required class="box">
                    <input type="email" name="email" placeholder="enter your email" required class="box">
                    <input type="password" name="password" placeholder="enter your password" required class="box">
                    <input type="password" name="cpassword" placeholder="re-enter your password" required class="box">
                    <input type="submit" name="submit" value="register now" class="btn">
                    <p>already have an account?</p>
                    <a href="login.php">login now</a>
                </form>
            </div>
</body>
</html>
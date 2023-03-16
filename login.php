<?php

include 'db_conn.php';
session_start();
if (isset($_POST['submit'])) {
    // Step 3: Retrieve the username and password entered by the user
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Step 4: Query the user table to retrieve the user's information
    $user_query = mysqli_query($conn, "SELECT * FROM `pengguna` WHERE EmelPengguna = '$email' AND KtlaluanPengguna = '$password'");
    $user_row = mysqli_fetch_array($user_query);

    // Step 5: Check if the user is an admin
    if ($user_row) {
        $_SESSION['user_name'] = $user_row['NamaPengguna'];
        $_SESSION['user_email'] = $user_row['EmelPengguna'];
        $_SESSION['user_id'] = $user_row['IDPengguna'];
        $_SESSION['user_pass'] = $user_row['KtlaluanPengguna'];
        echo '<script type="text/javascript">';
        echo 'alert("login successfully");';
        echo 'window.location.href = "user-home.php";';
        echo '</script>';
        exit();
    } else {
        $admin_query = mysqli_query($conn, "SELECT * FROM `admin` WHERE EmelAdmin = '$email' AND KtlaluanAdmin = '$password'");
        $admin_row = mysqli_fetch_array($admin_query);

        if ($admin_row) {
            // Grant access to the admin area
            // Redirect the user to the admin area
            $_SESSION['admin_name'] = $admin_row['NamaAdmin'];
            $_SESSION['admin_email'] = $admin_row['EmelAdmin'];
            $_SESSION['admin_id'] = $admin_row['IDAdmin'];
            $_SESSION['admin_pass'] = $admin_row['KtlaluanAdmin'];
            echo '<script type="text/javascript">';
            echo 'alert("login successfully");';
            echo 'window.location.href = "admin-home.php";';
            echo '</script>';
            exit();
        } else {
            echo '<script language="javascript">';
            echo 'alert("invalid email address and password")';
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
     <div id="login">
                <form action="" method="post">
                    <h3>login now</h3>
                    <input type="email" name="email" placeholder="enter your email" required class="box">
                    <input type="password" name="password" placeholder="enter your password" required class="box">
                    <input type="submit" name="submit" value="login now" class="btn">
                    <p>don't have an account?</p>
                    <a href="register.php">register now</a>
                </form>
            </div>
</body>
</html>
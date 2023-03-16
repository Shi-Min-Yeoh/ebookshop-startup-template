<?php

include 'db_conn.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Import</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="css/admin-import.css">
</head>
<body>
<?php include 'admin-header.php'; ?>
     <main>
                <form action="" method="post">
                    <h3>Upload Ur File now</h3>
                    <input type="file" required class="box">
                    <input type="submit" name="submit" value="login now">
                </form>
            </main>
            <?php include 'footer.php'; ?>
</body>
</html>
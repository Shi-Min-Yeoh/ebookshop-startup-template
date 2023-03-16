<?php

include 'config.php';

session_start();
session_unset();
session_destroy();

echo '<script type="text/javascript">';
echo 'alert("logout successfully");';
echo 'window.location.href = "login.php";';
echo '</script>';

?>
<?php
if ($_SERVER['REQUEST_URI'] == '/login') {
    include 'login.php';
} else if ($_SERVER['REQUEST_URI'] == '/login-submit') {
    include 'login-submit.php';
} else {
    include 'home.php';
}
?>

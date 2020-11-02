<?php
require_once 'init.php';
$title='Đăng xuất';
unset($_SESSION['userId']);
header('Location: index.php');
<?php
session_start();
//khởi đông session



//thêm thông báo lỗi
ini_set ('display_errors', 1);  
ini_set ('display_startup_errors', 1);  
error_reporting (E_ALL);  
require_once 'function.php';

//kết nối CSDL
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'root','');

// lấy thông tin user đã đăng nhập
$currentUser = getCurentUser();
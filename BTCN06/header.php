<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cộng hai số</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Css.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Lập Trình Web 1</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="nav-item <?php echo $title=='Trang chủ' ? 'active' : '';?>"> 
      <a href="index.php">Trang chủ <?php echo $title=='Trang chủ' ?'<span class="sr-only">(curent)</span>': ' '?> </a></li>
      <?php if ($currentUser) : ?>
        <li class="nav-item <?php echo $title=='Đăng xuất' ? 'active' : '';?>">
      <a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>  Đăng xuất <?php echo $title=='Đăng xuất' ?'<span class="sr-only">(curent)</span>': ' '?></a></li>
      <li class="nav-item <?php echo $title=='Đổi mật khẩu' ? 'active' : '';?>">
      <a href="changePassword.php"> Đổi mật khẩu <?php echo $title=='Đổi mật khẩu' ?'<span class="sr-only">(curent)</span>': ' '?></a></li>
      <?php else: ?>
        <li class="nav-item <?php echo $title=='Đăng nhập' ? 'active' : '';?>">
      <a href="login.php">Đăng nhập <?php echo $title=='Đăng nhập' ?'<span class="sr-only">(curent)</span>': ' '?></a></li>
      <li class="nav-item <?php echo $title=='Đăng kí' ? 'active' : '';?>">
      <a href="registrer.php"><span class="glyphicon glyphicon-user"></span> Đăng kí
      <?php echo $title=='Đăng kí' ?'<span class="sr-only">(curent)</span>': ' '?></a></li>
      <?php endif;?>  
    </ul>
  </div>
</nav>
<h2 id="TieuDe"><?php echo $title ;?></h2>


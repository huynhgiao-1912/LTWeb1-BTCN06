<?php
    require_once 'init.php';
    $title='Đăng nhập';

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = findUserByUsername($username);
        if(!$user){
            $error = 'Không tìm thấy người dùng ';
        } else {
            if( !password_verify($password,$user['password'])){
                $error = 'Mật khẩu không chính xác';
            }else {
                //gán user vào session      
                $_SESSION['userId'] = $user['id'];
                header('Location: index.php');
                exit();
            }
        }
    }
?>
<?php  include 'header.php' ;?>
<?php if(isset($error)) : ?>
    <div class="alert alert-info">
    <?php echo $error; ?>
  </div>
<?php else: ?>    
  <form action="login.php" method="post">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="username" id="username">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" id="password">
  </div>
  <button type="submit" class="btn">Đăng nhập</button>
  <div class="container signin">
    <p>Don't have an account? <a href="registrer.php">Register now</a>.</p>
  </div>
  </form>
  <?php endif;?>
<?php  include 'footer.php' ; ?>
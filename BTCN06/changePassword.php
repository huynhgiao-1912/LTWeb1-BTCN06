<?php
    require_once 'init.php';
    $title='Đổi mật khẩu';

    if(isset($_POST['oldPassword']) && isset($_POST['newPassword']) && isset($_POST['confirmNewPassword']) && isset($_POST['username'])){
        $oldpassword = $_POST['oldPassword'];
        $newpassword = $_POST['newPassword'];
        $confirmnewpassword = $_POST['confirmNewPassword'];
        $username = $_POST['username'];
        $user = findUserByUsername($username);
        if ($oldpassword == "" || $newpassword == "" || $confirmnewpassword == "" || $username == " ") {
            $error = 'Bạn vui lòng nhập đầy đủ thông tin';
        }else{
            if(!$user){
                $error = 'Tài khoản đã tồn tại';
            } else {
                if( !password_verify($oldpassword,$user['password'])){
                    $error = 'Mật khẩu cũ không chính xác';}
                    else{
                        if($newpassword == $confirmnewpassword){
                     updateUser ($user['username'],password_hash($newpassword,PASSWORD_DEFAULT));
                     header('Location: login.php');
                     exit();}
                    else{
                      $error="Mật khẩu mới không khớp ";
                    }
                    }                 
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
  <form action="changePassword.php" method="post">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="username" id="username">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Old Password" name="oldPassword" id="oldPassword">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="New Password" name="newPassword" id="newPassword">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm New Password" name="confirmNewPassword" id="confirmNewPassword">
  </div>
  <button type="submit" class="btn">Save Change</button>
  <div class="container signin">
  </div>
  </form>
  <?php endif;?>
<?php  include 'footer.php' ; ?>
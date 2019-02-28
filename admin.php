<?php include_once "include/user_functions.php";
 if (isset($_POST['btn'])){
   $data = $_POST['frm'];
   user_login($data);
 }
?>
  

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/admin.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/hover-box.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header mt-5 mb-2">
          <h3>ورود</h3>
          <div class="d-flex justify-content-end social_icon">
            <span><i class="fa fa-facebook-square"></i></span>
            <span><i class="fa fa-google-plus-square"></i></span>
            <span><i class="fa fa-twitter-square"></i></span>
          </div>
        </div>
        <div class="card-body">
          <form method="post">
            <div class="input-group-lg input-group mb-3">
              <div class="input-group-prepend ">
                <span class="input-group-text "><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control input-lg" name="frm[username]" placeholder="username">

            </div>
            <div class="input-group-lg input-group mb-5">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div>
              <input type="password" class="form-control" name ="frm[password]" placeholder="password">
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox">مرا بخاطر بسپار
            </div>
            <div class="form-group">
              <input type="submit" name = "btn" value="Login" class="btn-lg float-right login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            عضو نیستید ثبت نام کنید؟<a href="#">ورود</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="#">فراموش کردن رمز عبور؟</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</head>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

 
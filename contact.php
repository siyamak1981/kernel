<?php
include 'include/functions.php';
if(isset($_POST['btn'])){
  include_once 'include/contact.php';
  $data=$_POST['frm'];
  addcontact($data);
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
  <link rel="stylesheet" href="css/aos.css">
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header mt-5 mb-2">
          <h3>تماس با ما</h3>
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
              <input type="text" class="form-control input-lg" name= "frm[name]" placeholder="نام کامل" value="">

            </div>
            <div class="input-group-lg input-group mb-3">
              <div class="input-group-prepend ">
                <span class="input-group-text "><i class="fa fa-ticket"></i></span>
              </div>
              <input type="email" class="form-control input-lg" name= "frm[email]" placeholder="ایمیل"value="">

            </div>
            <div class="input-group-lg input-group mb-3">
              <div class="input-group-prepend ">
                <span class="input-group-text "><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control input-lg" name= "frm[subject]" placeholder="موضوع"value="موضوع">

            </div>
            <div class="input-group-lg input-group mt-3">


                <span class="text-white">توضیحات </span>
            </div>
            <textarea type="text" class="form-control input-lg mb-3"name="frm[text]" placeholder="پیام خود را بنویسید "></textarea>
              <input type="submit" name = "btn" value="ارسال" class="btn-lg float-right login_btn">
            </div> 
          </form>
        </div>
       
        </div>
      </div>
    </div>
  </div>

</body>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/aos.js"> </script>
<script>
  AOS.init();
</script>

</html>
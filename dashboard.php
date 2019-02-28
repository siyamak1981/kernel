<?php 

include_once 'include/menu.php';
include_once 'include/functions.php';
if (!isset($_SESSION["username"])) {
  header("location:admin.php?login=first");
}
?>

<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <link rel="stylesheet" type="text/css" media="screen" href="css/dashbord.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/addmenu.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/hover-box.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning  ">
    <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <a class="navbar-brand ml-4" href="#"><i class="fa fa-home"></i></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">طراحی وبسایت <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> فروشگاه اینترنتی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-sign-out"></i></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <aside class="col-sm-2" style="background-color:#111111;height:1000px;">
        <div class="bibi" style="height:800px;">
          <!-- <div>
          </div> -->
          <div class="media ">
            <img src="images\seo-icon.png" class="mx-auto m-5 rounded-circle" style="width:70px">
          </div>
          <div class="p-2 border bg-warning pl-5"><?php echo $_SESSION['username']; ?></div>

          <div class="list-group">
            <a href="dashboard.php?m=index&p=index" class="list-group-item "><i class="fa fa-dashboard"></i>صفحه اصلی</a>
            <!-- submenue -->
            <a data-toggle="collapse" class="list-group-item" href="#collapse1">
           <i class="fa fa-cogs"></i>مدیریت منوها<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse1" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="dashboard.php?m=menu&p=list"><li class="list-group-item">لیست منو ها</li></a>
             <a class = "bibiten" href ="dashboard.php?m=menu&p=add"><li class="list-group-item">افزودن منو های جدید</li></a>
           </ul>
         </div>
        <!-- submenue -->
        <a data-toggle="collapse" class="list-group-item" href="#collapse2">
          <i class="fa fa-car"></i> دسته بندی محصولات<i class="fa fa-caret-down " style="float:left;"></i></a>
        <div id="collapse2" class="panel-collapse collapse">
          <ul class="list-group">
            <a class = "bibiten" href ="dashboard.php?m=product-cat&p=list"><li class="list-group-item">لیست دسته بندی</li></a>
            <a class = "bibiten" href ="dashboard.php?m=product-cat&p=add"><li class="list-group-item">افزودن دسته بندی جدید</li></a>
          </ul>
        </div>
                 <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse3">
            <i class="fa fa-cogs"></i>مدیریت محصولات<i class="fa fa-caret-down " style="float:left;"></i></a>
          <div id="collapse3" class="panel-collapse collapse">
            <ul class="list-group">
              <a class = "bibiten" href ="dashboard.php?m=product&p=list"><li class="list-group-item">لیست محصولات </li></a>
              <a class = "bibiten" href ="dashboard.php?m=product&p=add"><li class="list-group-item">افزودن محصولات جدید</li></a>
            </ul>
          </div>
                  <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse4">
           <i class="fa fa-list"></i>دسته بندی خبرها<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse4" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="dashboard.php?m=news_cat&p=list"><li class="list-group-item">لیست خبر ها</li></a>
             <a class = "bibiten" href ="dashboard.php?m=news_cat&p=add"><li class="list-group-item">افزودن خبر های جدید</li></a>
           </ul>
         </div>
        <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse5">
           <i class="fa fa-list"></i>مدیریت خبرها<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse5" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="dashboard.php?m=news&p=list"><li class="list-group-item">لیست  اخبار</li></a>
             <a class = "bibiten" href ="dashboard.php?m=news&p=add"><li class="list-group-item">افزودن خبر های جدید</li></a>
           </ul>
         </div>
        <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse6">
           <i class="fa fa-list"></i> تماسها<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse6" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="dashboard.php?m=contact&p=list"><li class="list-group-item">لیست  تماسها</li></a>
           
           </ul>
         </div>
         <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse7">
           <i class="fa fa-list"></i>مدیریت ویجت<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse7" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="dashboard.php?m=widget&p=list"><li class="list-group-item">لیست  ویجت</li></a>
             <a class = "bibiten" href ="dashboard.php?m=widget&p=add"><li class="list-group-item">افزودن ویجت جدید</li></a>
           </ul>
         </div>
         <!-- submenue -->
          <a data-toggle="collapse" class="list-group-item" href="#collapse8">
           <i class="fa fa-cogs"></i>تنظیمات وب<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse8" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="dashboard.php?m=settings&p=edit"><li class="list-group-item">ویرایش تنطیمات</li></a>
            </ul>
          </div>
          
             <!-- submenue -->
            <a data-toggle="collapse" class="list-group-item" href="#collapse9">
           <i class="fa fa-list"></i>مدیریت صفحه<i class="fa fa-caret-down " style="float:left;"></i></a>
         <div id="collapse9" class="panel-collapse collapse">
           <ul class="list-group">
             <a class = "bibiten" href ="dashboard.php?m=page&p=list"><li class="list-group-item">لیست صفحه</li></a>
             <a class = "bibiten" href ="dashboard.php?m=page&p=add"><li class="list-group-item">افزودن صفحه جدید</li></a>
           </ul>
         </div>
         </div>
     </div>
      </aside>

    
      <?php
      @$m = $_GET['m'] ? $_GET['m'] : 'index';
      @$p = $_GET['p'] ? $_GET['p'] : 'index';
      include_once "$m/$p.php";
      ?>
    </div>
  </div>
</body>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
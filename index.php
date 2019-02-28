<?php
include_once 'include/functions.php';

?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $settings['title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name = "description" content= "<?php echo $settings['description']; ?>">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/hover-box.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/aos.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light ml-5 mr-5">
    <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <a class="navbar-brand" href="#">لوگو</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php
        $row = listmenudefault();
        foreach ($row as $val) :
        ?>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="<?php echo $val['url']; ?>" id="navbardrop" data-toggle=""
            style="color:#ffc107;">
            <?php echo $val['title']; ?>
          </a>
          <?php
          $rows = listsubmenudefault($val['id']);
          if ($rows) :
          ?>
          <div class="dropdown-menu">
            <?php
            foreach ($rows as $value) :
            ?>
            <a class="dropdown-item" href="<?php echo $value['url']; ?>">
              <?php echo $value['title']; ?> </a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

        </li>
        <?php endforeach; ?>
      </ul>




      <!-- sign up -->

      <button type="button" class="btn btn-outline-warning mr-sm-2" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@mdo"><i class="fa fa-sign-in"></i> ورود </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background-color:transparent">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> ایجاد حساب کاربری</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"> نام نام خانوادگی:</label>
                  <input type="text" class="form-control" name="fullname" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">ایمیل</label>
                  <input type="email" class="form-control" name="email" id="recipient-name"></i>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">نام کاربری:</label>
                  <input type="text" class="form-control" name="username" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">رمز عبور:</label>
                  <input type="password" class="form-control" name="password" id="recipient-name">
                </div>

                <input type="submit" name="btn" value="ارسال" class="btn btn-outline-warning" />
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- end sign up -->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"> جستجو <i class="fa fa-search"></i></button>
      </form>
    </div>
  </nav>


  <!-- background -->
  <div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
      <source src="Video\intro.mp4" type="video/mp4">
    </video>
    </div>
  <!-- animation-->
  <div class="container">
    <div class="jumbotron">
      <h4 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000">طراحی سایت و فروشگاه اینترنتی</h4>
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8  mt-5 text-white" data-aos="fade-down-right">
          افتخار ح
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
          استفاده از طراحان گرافیک است.
          چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
          برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
          ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
          ، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
          افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
          خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید

        </div>
      </div>
      <!-- <div class="col-2"></div> -->
      <div class="container ">
        <div class="row">
          <div class="col" data-aos="zoom-in">
            <button type="button" class="btn btn-outline-warning btn">طراحی وبسایت</button>
          </div>
          <div class="col" data-aos="zoom-in">
            <button type="button" class="btn btn-outline-warning btn">طراحی فروشگاه اینترنتی</button>
          </div>
          <div class="col" data-aos="zoom-in">
            <button type="button" class="btn btn-outline-warning btn">سئو استاندارد</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 

  <div id="banner" class="section-padding">
    <!-- article -->
    <div class="container">
      <div class="tracking-in-contract-bck">
        <div class="row">
          <div class="col-md-4" data-aos="zoom-in-left">
            <div class="service-box">
              <div class="service-icon"><i class="fa fa-desktop "></i></div>
              <div class="service-text">

                <center>طراحی</center>
                <article>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است.
                  چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                  برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                  ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                  ، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                  افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                </article>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in-left">
            <div class="service-box">
              <div class="service-icon"><i class="fa fa-heart"></i></div>
              <div class="service-text">
                <center>طراحی</center>
                <article>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است.
                  چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                  برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                  ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                  ، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                  افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                </article>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in-left">
            <div class="service-box">
              <div class="service-icon"><i class="fa fa-instagram"></i></div>
              <div class="service-text">
                <center>طراحی</center>
                <article>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است.
                  چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                  برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                  ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                  ، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                  افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                  </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <!-- <slider> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images\P1.jpg" class="img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images\P1.jpg" class="img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images\P2.jpg" class="img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <script>$('.carousel').carousel({
        interval: 1000
      })</script>

    <div id="banner" class="section-padding">
      <!-- article -->
      <div class="container">
        <div class="tracking-in-contract-bck">
          <div class="row">
            <div class="col-md-4" data-aos="zoom-in-left">
              <div class="service-box">
                <div class="service-icon"><i class="fa fa-desktop "></i></div>
                <div class="service-text">

                  <center>طراحی</center>

                  <article>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                    ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                    ، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                    افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                  </article>

                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in-left">
              <div class="service-box">
                <div class="service-icon"><i class="fa fa-heart"></i></div>
                <div class="service-text">
                  <center>طراحی</center>
                  <article>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                    ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                    ، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                    افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                  </article>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in-left">
              <div class="service-box">
                <div class="service-icon"><i class="fa fa-instagram"></i></div>
                <div class="service-text">
                  <center>طراحی</center>
                  <article>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                    ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                    ، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                    افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                    </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="banner3" class="kenburns-bottom-left">
      <div class="container">
        <center>
          <h3 style="color:white; padding:50px;">نمونه کار ما </h3>
        </center>

        <div class="row ">


          <div class="col-md-4 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="profile-card text-center">

              <img class="img-responsive" src="images\redesign-website-min.png">
              <div class="profile-info">



                <h2 class="hvr-underline-from-center">Rod<span>Digital / Design Consultant</span></h2>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum
                  dolor sit amet, consectetur adipiscing elit.</div>
                <a href="#"><i class="fa fa-twitter "></i></a>
                <a href="#"><i class="fa fa-envelope-o "></i></a>
                <a href="#"><i class="fa fa-linkedin "></i></a>
              </div>

            </div>
          </div>
          <div class="col-md-4 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="profile-card text-center">

              <img class="img-responsive" src="images\seo-success-kpi-min.png">
              <div class="profile-info">



                <h2 class="hvr-underline-from-center">Adam<span>Developer</span></h2>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum
                  dolor sit amet, consectetur adipiscing elit.</div>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-envelope-o "></i></a>
                <a href="#"><i class="fa fa-linkedin "></i></a>
              </div>

            </div>
          </div>
          <div class="col-md-4 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="profile-card text-center">

              <img class="img-responsive" src="images\using-popups-rules-min.png">
              <div class="profile-info">
                <h2 class="hvr-underline-from-center">Mike Young<span>Web Designer</span></h2>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum
                  dolor sit amet, consectetur adipiscing elit.</div>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-envelope-o "></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>
          </div>


        </div>
      </div>
    </div>
    <div id="banner4" class="kenburns-bottom-left">

      <div class="container">

        <div class="row">
          <div class="col-sm-3 py-3 mt-5 ml-5" data-aos="zoom-in-left">
            <div class="hvrbox">

              <img src="images/sp3.jpg" alt="" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top hvrbox-layer_slidedown">
                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor
                  ligula
                  porttitor, lacinia sapien non.</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 py-3 m-5 ml-5" data-aos="zoom-in-left">
            <div class="hvrbox">
              <img src="images/sp1.jpg" alt="" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top hvrbox-layer_slidedown">
                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor
                  ligula
                  porttitor, lacinia sapien non.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 

  <div id="banner5" class="kenburns-bottom-left">

    <footer class="footer">
      <div class="container bottom_border">
        <div class="row">
          <div class=" col-sm-4 col-md col-sm-4  col-12 col" data-aos="fade-up" data-aos-duration="3000">
            <h5 class="headin5_amrc col_white_amrc pt2"> تماس با ما</h5>
            <!--headin5_amrc-->
            <p class="mb10">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
              است. </p>
            <p><i class="fa fa-location-arrow"></i> <?php echo $settings['address']; ?> </p>
            <p><i class="fa fa-phone"></i> <?php echo $settings['tel']; ?> </p>
            <p><i class="fa fa fa-envelope"></i> <?php echo $settings['email']; ?> </p>


          </div>


          <div class=" col-sm-4 col-md  col-6 col" data-aos="fade-up" data-aos-duration="3000">
            <h5 class="headin5_amrc col_white_amrc pt2">لینک</h5>
            <!--headin5_amrc-->
            <ul class="footer_ul_amrc">
              <li><a href="#">لید سادگی نامفهوم از</a></li>
              <li><a href="#"> لید سادگی نامفهوم از</a></li>
              <li><a href="#"> لید سادگی نامفهوم از </a></li>
              <li><a href="#">لید سادگی نامفهوم از </a></li>
              <li><a href="#"> لید سادگی نامفهوم از</a></li>
              <li><a href="#">لید سادگی نامفهوم از </a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
          </div>


          <div class=" col-sm-4 col-md  col-6 col" data-aos="fade-up" data-aos-duration="3000">
            <h5 class="headin5_amrc col_white_amrc pt2">لینک</h5>
            <!--headin5_amrc-->
            <ul class="footer_ul_amrc">
              <li><a href="#">سطرآنچنان که لازم </a></li>
              <li><a href="#">سطرآنچنان که لازم </a></li>
              <li><a href="#">سطرآنچنان که لازم</a></li>
              <li><a href="#">سطرآنچنان که لازم</a></li>
              <li><a href="#">سطرآنچنان که لازم</a></li>
              <li><a href="#">سطرآنچنان که لازم </a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
          </div>


          <div class=" col-sm-4 col-md  col-12 col" data-aos="fade-up" data-aos-duration="3000">
            <h5 class="headin5_amrc col_white_amrc pt2">ما را دنبال کنید</h5>
            <!--headin5_amrc ends here-->

            <ul class="footer_ul2_amrc">
              <li><a href="#"><i class="fa fa-instagram fright padding-left"></i> </a>
                <p>نامه و مجله در ستون و سطرآنچنان که لازم است و<a href="#"></a></p>
              </li>
              <li><a href="#"><i class="fa fa-twitter frigth padding-left"></i> </a>
                <p>امه و مجله در ستون و سطرآنچنان که لازم اس...<a href="#"></a></p>
              </li>
              <li><a href="#"><i class="fa fa-location-arrow fright padding-left"></i> </a>
                <p>.امه و مجله در ستون و سطرآنچنان که لازم اس<a href="#"></a></p>
              </li>
            </ul>
            <!--footer_ul2_amrc ends here-->
          </div>
        </div>
      </div>
      <ul class="foote_bottom_ul_amrc" data-aos="fade-up" data-aos-duration="3000">
        <li><a href="#">خانه</a></li>
        <li><a href="#">درباره ما</a></li>
        <li><a href="#">خدمات</a></li>
        <li><a href="#">قیمتها</a></li>
        <li><a href="#">وبلاگ</a></li>
        <li><a href="#">تماس</a></li>
      </ul>
      <!--foote_bottom_ul_amrc ends here-->
      <p class="text-center"><?php echo $settings['copyright']; ?> | Designed With by <a href="#">Your Company Name</a></p>

      <ul class="social_footer_ul">
        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>

      </ul>
      <!--social_footer_ul ends here-->
    </footer>
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
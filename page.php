<?php
include_once 'include/functions.php';
include_once 'include/page.php';
$id=$_GET['id'];
$result = detail_page($id);

?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $result['title'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/services.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/hover-box.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/flickity.min.css">
</head>

<body>

<div id="banner" class="section-padding">
        <!-- article -->
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
                <a class="nav-link dropdown-toggle" href="<?php echo $val['url']; ?>" id="navbardrop" data-toggle="dropdown"
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


            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"> جستجو <i class="fa fa-search"></i></button>
            </form>
        </div>
    </nav>

</div>
   <!-- ##########################################3 -->
    <div id="banner4" class="section-padding" style="height:630px;">
        <div class="cantainer-fluid">
            <div class="jumbotron ml-5 ">
                <h2><?php echo $result['keyword'];?></h2>
                <div class=" col-12 col-sm-10 col-md-8 " data-aos="zoom-in-left">
                    <spanp> شرکت <a href="#"><?php echo $result['description'];?></a>
                        <article class="text-left"><?php echo $result['body'];?>
                        </article>
                    </spanp>
                </div>
            </div>
        </div>
    </div>
    <!-- ######################################################33 -->
    <!-- <footer> -->
    <div id="banner5" class="kenburns-bottom-left">

        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class=" col-sm-4 col-md col-sm-4  col-12 col" data-aos="fade-up" data-aos-duration="3000">
                        <h5 class="headin5_amrc col_white_amrc pt2"> تماس با ما</h5>
                        <!--headin5_amrc-->
                        <p class="mb10">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان گرافیک
                            است. </p>
                        <p><i class="fa fa-location-arrow"></i> بابل </p>
                        <p><i class="fa fa-phone"></i> +989198859723 </p>
                        <p><i class="fa fa fa-envelope"></i> mywebsite.com </p>


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
            <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

            <ul class="social_footer_ul">
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>

            </ul>
            <!--social_footer_ul ends here-->
        </footer>
    </div>


    <!-- ######################################################## -->
</body>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- https://flickity.metafizzy.co/ -->
<!-- <script src="js\infinit-scroll-cocs.min.js"> </script> -->
<script src="js\flickity.pkgd.min.js"> </script>
<script src="js/aos.js"> </script>
<script>
    AOS.init();
</script>

</html>
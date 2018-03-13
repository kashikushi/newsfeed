<?php
$con=mysqli_connect("localhost","root","","dw_newsfeed");
// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$sql="SELECT * FROM `logo` WHERE `logo_id` = 1 ";

$result_logo1=mysqli_query($con,$sql);
while($row_logo1=mysqli_fetch_array($result_logo1)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['logo1'] =$row_logo1['logo_img'];
	}

$sql = "SELECT * FROM `logo` WHERE `logo_id` = 2";

$result_logo2=mysqli_query($con,$sql);
while($row_logo2=mysqli_fetch_array($result_logo2)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['logo2'] =$row_logo2['logo_img'];
	}


$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 1 ";

$result_lnews_1=mysqli_query($con,$sql_1);
while($row_lnews_1=mysqli_fetch_array($result_lnews_1)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_1'] =$row_lnews_1['lnews_img'];
		$_SESSION['lnews_1'] =$row_lnews_1['lnews'];
	}
$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 2 ";
$result_lnews_2=mysqli_query($con,$sql_1);
while($row_lnews_2=mysqli_fetch_array($result_lnews_2)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_2'] =$row_lnews_2['lnews_img'];
		$_SESSION['lnews_2'] =$row_lnews_2['lnews'];
	}
$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 3 ";
$result_lnews_3=mysqli_query($con,$sql_1);
while($row_lnews_3=mysqli_fetch_array($result_lnews_3)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_3'] =$row_lnews_3['lnews_img'];
		$_SESSION['lnews_3'] =$row_lnews_3['lnews'];
	}
$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 4 ";
$result_lnews_4=mysqli_query($con,$sql_1);
while($row_lnews_4=mysqli_fetch_array($result_lnews_4)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_4'] =$row_lnews_4['lnews_img'];
		$_SESSION['lnews_4'] =$row_lnews_4['lnews'];
	}
$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 5 ";
$result_lnews_5=mysqli_query($con,$sql_1);
while($row_lnews_5=mysqli_fetch_array($result_lnews_5)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_5'] =$row_lnews_5['lnews_img'];
		$_SESSION['lnews_5'] =$row_lnews_5['lnews'];
	}
$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 6 ";
$result_lnews_6=mysqli_query($con,$sql_1);
while($row_lnews_6=mysqli_fetch_array($result_lnews_6)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_6'] =$row_lnews_6['lnews_img'];
		$_SESSION['lnews_6'] =$row_lnews_6['lnews'];
	}
$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 7 ";
$result_lnews_7=mysqli_query($con,$sql_1);
while($row_lnews_7=mysqli_fetch_array($result_lnews_7)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_7'] =$row_lnews_7['lnews_img'];
		$_SESSION['lnews_7'] =$row_lnews_7['lnews'];
	}
$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 8 ";
$result_lnews_8=mysqli_query($con,$sql_1);
while($row_lnews_8=mysqli_fetch_array($result_lnews_8)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_8'] =$row_lnews_8['lnews_img'];
		$_SESSION['lnews_8'] =$row_lnews_8['lnews'];
	}
$sql_1="SELECT * FROM `latestnews` WHERE `lnews_id` = 9 ";
$result_lnews_9=mysqli_query($con,$sql_1);
while($row_lnews_9=mysqli_fetch_array($result_lnews_9)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['lnews_img_9'] =$row_lnews_9['lnews_img'];
		$_SESSION['lnews_9'] =$row_lnews_9['lnews'];
	}


$sql_2="SELECT * FROM `article_slider` WHERE `aslider_id` = 1 ";

$result_sl1=mysqli_query($con,$sql_2);
while($row_sl1=mysqli_fetch_array($result_sl1)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['sl_img1'] =$row_sl1['as_img'];
		$_SESSION['sl_title1'] =$row_sl1['as_title'];
		$_SESSION['sl_desc1'] =$row_sl1['as_desc'];
	}
$sql_2="SELECT * FROM `article_slider` WHERE `aslider_id` = 2 ";
$result_sl2=mysqli_query($con,$sql_2);
while($row_sl2=mysqli_fetch_array($result_sl2)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['sl_img2'] =$row_sl2['as_img'];
		$_SESSION['sl_title2'] =$row_sl2['as_title'];
		$_SESSION['sl_desc2'] =$row_sl2['as_desc'];
	}
$sql_2="SELECT * FROM `article_slider` WHERE `aslider_id` = 3 ";
$result_sl3=mysqli_query($con,$sql_2);
while($row_sl3=mysqli_fetch_array($result_sl3)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['sl_img3'] =$row_sl3['as_img'];
		$_SESSION['sl_title3'] =$row_sl3['as_title'];
		$_SESSION['sl_desc3'] =$row_sl3['as_desc'];
	}
$sql_2="SELECT * FROM `article_slider` WHERE `aslider_id` = 4 ";
$result_sl4=mysqli_query($con,$sql_2);
while($row_sl4=mysqli_fetch_array($result_sl4)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['sl_img4'] =$row_sl4['as_img'];
		$_SESSION['sl_title4'] =$row_sl4['as_title'];
		$_SESSION['sl_desc4'] =$row_sl4['as_desc'];
	}
$sql_2="SELECT * FROM `article_slider` WHERE `aslider_id` = 5 ";
$result_sl5=mysqli_query($con,$sql_2);
while($row_sl5=mysqli_fetch_array($result_sl5)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['sl_img5'] =$row_sl5['as_img'];
		$_SESSION['sl_title5'] =$row_sl5['as_title'];
		$_SESSION['sl_desc5'] =$row_sl5['as_desc'];
	}

?>



<!DOCTYPE html>
<html>
<head>
<title>KashifNewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<div class="container"> 
  <header id="header">
    <div class="row">
     <!--header-->
 
 <?php	include("header.html"); ?>
 <!--/header-->
      
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.php" class="logo"><img src="<?php echo $_SESSION['logo1']?>" alt="knewsfeed"></a></div>
          <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="#">Technology</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Android</a></li>
              <li><a href="#">Samsung</a></li>
              <li><a href="#">Nokia</a></li>
              <li><a href="#">Walton Mobile</a></li>
              <li><a href="#">Sympony</a></li>
            </ul>
          </li>
          <li><a href="#">Laptops</a></li>
          <li><a href="#">Tablets</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="404.html">404 Page</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_1']?>" alt=""><?php echo $_SESSION['lnews_1']?></a></li>
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_2']?>" alt=""><?php echo $_SESSION['lnews_2']?></a></li>
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_3']?>" alt=""><?php echo $_SESSION['lnews_3']?></a></li>
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_4']?>" alt=""><?php echo $_SESSION['lnews_4']?></a></li>
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_5']?>" alt=""><?php echo $_SESSION['lnews_5']?></a></li>
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_6']?>" alt=""><?php echo $_SESSION['lnews_6']?></a></li>
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_7']?>" alt=""><?php echo $_SESSION['lnews_7']?></a></li>
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_8']?>" alt=""><?php echo $_SESSION['lnews_8']?></a></li>
            <li><a href="#"><img src="<?php echo $_SESSION['lnews_img_9']?>" alt=""><?php echo $_SESSION['lnews_9']?></a></li>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="single_page.html"> <img src="<?php echo $_SESSION['sl_img1']?>" alt="Article Slide 1"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="single_page.html"><?php echo $_SESSION['sl_title1']?></a></h2>
              <p><?php echo $_SESSION['sl_desc1']?></p>
            </div>
          </div>
          <div class="single_iteam"> <a href="single_page.html"> <img src="<?php echo $_SESSION['sl_img2']?>" alt="Article Slide 2"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="single_page.html"><?php echo $_SESSION['sl_title2']?></a></h2>
              <p><?php echo $_SESSION['sl_desc2']?></p>
            </div>
          </div>
          <div class="single_iteam"> <a href="single_page.html"> <img src="<?php echo $_SESSION['sl_img3']?>" alt="Article Slide 3"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="single_page.html"><?php echo $_SESSION['sl_title3']?></a></h2>
              <p><?php echo $_SESSION['sl_desc3']?></p>
            </div>
          </div>
          <div class="single_iteam"> <a href="single_page.html"> <img src="<?php echo $_SESSION['sl_img4']?>" alt="Article Slide 4"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="single_page.html"><?php echo $_SESSION['sl_title4']?></a></h2>
              <p><?php echo $_SESSION['sl_desc4']?></p>
            </div>
          </div>
          <div class="single_iteam"> <a href="single_page.html"> <img src="<?php echo $_SESSION['sl_img5']?>" alt="Article Slide 5"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="single_page.html"><?php echo $_SESSION['sl_title5']?></a></h2>
              <p><?php echo $_SESSION['sl_desc5']?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Business</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="single_page.html" class="featured_img"> <img alt="" src="images/featured_img1.jpg"> <span class="overlay"></span> </a>
                    <figcaption> <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Fashion</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="single_page.html" class="featured_img"> <img alt="" src="images/featured_img2.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Technology</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="single_page.html" class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="images/photograph_img2.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span>Games</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="single_page.html"> <img src="images/featured_img1.jpg" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Games</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Life &amp; Style</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2018 <a href="index.php">KNewsFeed</a></p>
      <p class="developer">Developed By Kashif Ahmad</p>
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>
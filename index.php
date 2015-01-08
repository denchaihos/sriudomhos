<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SRIUDOM HoSPITAL</title>
    <script src="js/jquery.js"></script>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>


</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  045307032-4,045307058,045307021</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">&nbsp;&nbsp;<img src="images/logo.png" alt="logo">โรงพยาบาลทุ่งศรีอุดม</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul id="tab_menu"  class="nav navbar-nav">
                        <li id="tab_index1" class="active"><a href="index.php" >หน้าหลัก</a></li>
                        <li id="tab_index2"><a href="index.php?about-us">เกี่ยวกับเรา</a></li>
                        <li id="tab_index3"><a href="index.php?services">บริการของเรา</a></li>
                        <li id="tab_index4"><a href="index.php?portfolio">ผลงานประจักษ์</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข่าวประชาสัมพันธ์ <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">ข่าวกิจกรรม</a></li>
                                <li><a href="pricing.html">ข่าวประกวดราคา</a></li>
                                <li><a href="404.html">ข่าวสมัครงาน</a></li>
                                <li><a href="shortcodes.html">ข่าวอื่น ๆ</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="blog.html">Blog</a></li>-->
                        <li><a href="index.php?page=contact-us">ติดต่อเรา</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

<div id="tab_include">
    <?
    if(isset($_GET['about-us'])){
        include "about-us.php";
        echo "<script language='javascript'>
                $('ul#tab_menu li').removeClass('active');
                $('li#tab_index2').addClass('active');
		      </script>";
        //include "about-us.php";
    }else if(isset($_GET['services'])){
        echo "<script language='javascript'>
                $('#tab_menu li').removeClass('active');
                $('li#tab_index3').addClass('active');
			  </script>";
        include "services.php";
    }else if(isset($_GET['portfolio'])){
        echo "<script language='javascript'>
                $('#tab_menu li').removeClass('active');
                $('li#tab_index4').addClass('active');
			  </script>";
        include "portfolio.php";
    }else{
        echo "<script language='javascript'>
                $('#tab_menu li').removeClass('active');
                $('li#tab_index1').addClass('active');
			  </script>";
        include "main_page.php";
    }

    ?>


    <?
    include "foot_page.php";

    ?>

</body>
</html>
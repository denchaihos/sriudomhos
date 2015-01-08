<!DOCTYPE html>
<html lang="en">
<script>
    $(document).ready(function(){   
        $("#tabs li").click(function() {
        var department= $(this).attr("id");
        $.getJSON('officer.php',{department:department}, function(data) {
                $.each(data, function(key,value) {
                    $("div.media-body).append(
                        "<div class='col-sm-4 media testimonial-inner'>"+
                            "<div class='pull-left'>"+
                                "<img class='img-responsive img-circle' src='images/officer/"+value.officer_image+".png'>"+
                            "</div>"+
                            "<div class='media-body'>"+
                                "<p>"+value.officer_name+"</p>"+
                                "<span><strong>ตำแหน่ง</strong>"+value.officer_pos+"</span>"+
                            "</div>"+
                        "</div>"+
                    );

                });
            });
        });
    });
</script>

<P></P>
<section id="about-us">
<div class="container">
<div class="center wow fadeInDown">
    <h2>นี้คือพวกเรา</h2>
    <p class="lead">เป็นให้บริการด้านสุขภาพ  สำหรับชุมชน  ประจำอำเภอทุ่งศรีอุดม  จังหวัดอุบลราชธานี</p>
</div>

<!-- about us slider -->
<div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slider_one.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
                <img src="images/slider_two.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
                <img src="images/slider_one.jpg" class="img-responsive" alt="">
            </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>

        <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div> <!--/#carousel-slider-->
</div><!--/#about-slider-->


<!-- Our Skill -->
<div class="skill-wrap clearfix">

    <div class="center wow fadeInDown">
        <h2>ความชำนาญของเรา</h2>
        <p class="lead">ดูแล  ส่งเสริมป้องกัน  และรักษาโรค  สำหรับประชาชนในเขต  และนอกเขตบริการอย่างเสมอภาพ</p>
    </div>

    <div class="row">

        <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="joomla-skill">
                    <p><em>85%</em></p>
                    <p>ส่งเสริม</p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="html-skill">
                    <p><em>95%</em></p>
                    <p>ป้องกัน</p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="css-skill">
                    <p><em>80%</em></p>
                    <p>รักษา</p>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <div class="wp-skill">
                    <p><em>90%</em></p>
                    <p>ติดตาม</p>
                </div>
            </div>
        </div>

    </div>

</div><!--/.our-skill-->


<!-- our-team -->
<div class="team">
    <div class="center wow fadeInDown">
        <h2>ทีมงานของเรา</h2>
        <p class="lead">เรามีหน้าให้คอยให้บริการทั้งหมด 120  ท่าน</p>
    </div>

    <div class="row clearfix">
        <div class="col-md-4 col-sm-6">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="media">
                    <div class="pull-left">
                        <a href="#"><img class="media-object" src="images/director.jpg" alt=""></a>
                    </div>
                    <div class="media-body">
                        <h4>แพทย์หญิงปรมาภรณ์  ทองนุ่ม</h4>
                        <h5>ผู้อำนวยการ</h5>
                        <!--<ul class="tag clearfix">
                            <li class="btn"><a href="#">Web</a></li>
                            <li class="btn"><a href="#">Ui</a></li>
                            <li class="btn"><a href="#">Ux</a></li>
                            <li class="btn"><a href="#">Photoshop</a></li>
                        </ul>-->

                        <ul class="social_icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <p>แพทย์อายุรกรรมทั่วไป</p>
                </div><!--/.media -->

            </div>
        </div><!--/.col-lg-4 -->


        <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="media">
                    <div class="pull-left">
                        <a href="#"><img class="media-object" src="images/manager.jpg" alt=""></a>
                    </div>
                    <div class="media-body">
                        <h4>นางสาวจีระนันท์  นาคำ</h4>
                        <h5>หัวหน้าบริหาร</h5>
                        <!--<ul class="tag clearfix">
                            <li class="btn"><a href="#">Web</a></li>
                            <li class="btn"><a href="#">Ui</a></li>
                            <li class="btn"><a href="#">Ux</a></li>
                            <li class="btn"><a href="#">Photoshop</a></li>
                        </ul>-->
                        <ul class="social_icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <p>นักจัดการงานชำนาญการ</p>
                </div><!--/.media -->

            </div>
        </div><!--/.col-lg-4 -->
    </div> <!--/.row -->
    <div class="row team-bar">
        <div class="first-one-arrow hidden-xs">
            <hr>
        </div>
        <div class="first-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
        </div>
        <div class="second-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
        </div>
        <div class="third-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
        </div>
        <div class="fourth-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
        </div>
    </div> <!--skill_border-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown">
                    <h2>กลุ่มงานต่าง ๆ </h2>
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul id="tabs" class="nav nav-tabs nav-stacked">
                                    <li id="02" class=""><a href="#tab1" data-toggle="tab" class="analistic-01">องค์กรแพทย์</a></li>
                                    <li id="03" class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">กลุ่มการพยาบาล</a></li>
                                    <li id="01" class=""><a href="#tab3" data-toggle="tab" class="tehnical">บริหารงานทั่วไป</a></li>
                                    <li id="04" class=""><a href="#tab3" data-toggle="tab" class="tehnical">เทคนิกการแพทญ์</a></li>
                                    <li id="05" class=""><a href="#tab5" data-toggle="tab" class="tehnical">เภสัชกรรม</a></li>
                                    <li id="06" class=""><a href="#tab5" data-toggle="tab" class="tehnical">เวชปฏิบัติชุมชน</a></li>
                                    <li id="07" class=""><a href="#tab4" data-toggle="tab" class="tehnical">กายภาพ</a></li>
                                    <li id="08" class=""><a href="#tab5" data-toggle="tab" class="tehnical">แพทย์แผนไทย</a></li>
                                    <li id="09" class=""><a href="#tab5" data-toggle="tab" class="tehnical">งานซักฟอก</a></li>
                                    <li id="10" class=""><a href="#tab5" data-toggle="tab" class="tehnical">งานโรงครัว</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">

                                            <div class="media-body">

                                                
                                                <!--<div class="col-sm-4 media testimonial-inner">
                                                    <div class="pull-left">
                                                        <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>ทดสอบ  blog</p>
                                                        <span><strong>Admin/</strong> Administrator</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 media testimonial-inner">
                                                    <div class="pull-left">
                                                        <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>ทดสอบ  blog</p>
                                                        <span><strong>Admin/</strong> Administrator</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 media testimonial-inner">
                                                    <div class="pull-left">
                                                        <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>ทดสอบ  blog</p>
                                                        <span><strong>Admin/</strong> Administrator</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 media testimonial-inner">
                                                    <div class="pull-left">
                                                        <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>ทดสอบ  blog</p>
                                                        <span><strong>Admin/</strong> Administrator</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 media testimonial-inner">
                                                    <div class="pull-left">
                                                        <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>ทดสอบ  blog</p>
                                                        <span><strong>Admin/</strong> Administrator</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 media testimonial-inner">
                                                    <div class="pull-left">
                                                        <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>ทดสอบ  blog</p>
                                                        <span><strong>Admin/</strong> Administrator</span>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images/tab2.png">
                                            </div>
                                            <div class="media-body">
                                                <h2>โรคท้องเสีย ท้องร่วง</h2>
                                                <p> อ.พญ.มณฑิรา มณีรัตนะพร
                                                    ภาควิชาอายุรศาสตร์                                            </p>
                                                <section id="main-slider" class="no-margin">
                                                    <div class="carousel slide">
                                                        <a class="btn-slide animation animated-item-4" href="http://haamor.com/th/%E0%B8%97%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%AA%E0%B8%B5%E0%B8%A2/" target="_blank">อ่านต่อ..</a>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images/tab3.png">
                                            </div>
                                            <div class="media-body">
                                                <p>ไข้หวัดใหญ่ (Influenza)
                                                    ศาสตราจารย์เกียรติคุณ แพทย์หญิง พวงทอง ไกรพิบูลย์
                                                    วว.รังสีรักษา และเวชศาสตร์นิวเคลียร์.</p>
                                                <section id="main-slider" class="no-margin">
                                                    <div class="carousel slide">
                                                        <a class="btn-slide animation animated-item-4" href="http://haamor.com/th/%E0%B9%84%E0%B8%82%E0%B9%89%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88/" target="_blank">อ่านต่อ..</a>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab4">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images/tab4.png">
                                            </div>
                                            <div class="media-body">
                                                <p>เบาหวานเป็นโรคที่พบได้สูงในคนทุกอายุและทั้งสองเพศ แต่จะพบได้สูงขึ้นเมื่อสูงอายุ ปัจจุบันเนื่องจากจำนวนผู้สูงอายุมีมากขึ้น ทั่วโลกจึงพบเบาหวานสูงขึ้นเรื่อยๆ คาดว่าจำนวนผู้ ป่วยเบาหวานทั่วโลกจะเพิ่มขึ้นจาก 366 ล้านคนในปี ค.ศ. 2011 (พ.ศ. 2554) เป็น 552 ล้านคนในปีค.ศ. 2030 (พ.ศ. 2573)</p>
                                                <section id="main-slider" class="no-margin">
                                                    <div class="carousel slide">
                                                        <a class="btn-slide animation animated-item-4" href="http://haamor.com/th/%E0%B9%80%E0%B8%9A%E0%B8%B2%E0%B8%AB%E0%B8%A7%E0%B8%B2%E0%B8%99/" target="_blank">อ่านต่อ..</a>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab5">
                                        <div class="media">
                                            <div class="col-sm-4 media testimonial-inner">
                                                <div class="pull-left">
                                                    <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                </div>
                                                <div class="media-body">
                                                    <p>ทดสอบ  blog</p>
                                                    <span><strong>Admin/</strong> Administrator</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 media testimonial-inner">
                                                <div class="pull-left">
                                                    <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                </div>
                                                <div class="media-body">
                                                    <p>ทดสอบ  blog</p>
                                                    <span><strong>Admin/</strong> Administrator</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 media testimonial-inner">
                                                <div class="pull-left">
                                                    <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                </div>
                                                <div class="media-body">
                                                    <p>ทดสอบ  blog</p>
                                                    <span><strong>Admin/</strong> Administrator</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 media testimonial-inner">
                                                <div class="pull-left">
                                                    <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                </div>
                                                <div class="media-body">
                                                    <p>ทดสอบ  blog</p>
                                                    <span><strong>Admin/</strong> Administrator</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 media testimonial-inner">
                                                <div class="pull-left">
                                                    <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                </div>
                                                <div class="media-body">
                                                    <p>ทดสอบ  blog</p>
                                                    <span><strong>Admin/</strong> Administrator</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 media testimonial-inner">
                                                <div class="pull-left">
                                                    <img class="img-responsive img-circle"src="images/blog/boy.png">
                                                </div>
                                                <div class="media-body">
                                                    <p>ทดสอบ  blog</p>
                                                    <span><strong>Admin/</strong> Administrator</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--/.tab-content-->
                            </div> <!--/.media-body-->
                        </div> <!--/.media-->
                    </div><!--/.tab-wrap-->
                </div><!--/.col-sm-6-->



            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->
</div><!--section-->
</div><!--/.container-->
</section><!--/about-us-->


</body>
</html>
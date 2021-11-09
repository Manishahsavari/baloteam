<!--
=========================================================
* Balohub - v2.0.0
=========================================================

* Copyright 2021 Balo team (https://balohub.ir)

Coded by Balo team

=========================================================
-->
<?php
include('database/db.php');
echo $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <title>
       Balohub - بالوهاب
    </title>
 <?php
 include ("link.php");
 ?>
</head>

<body class="index-page">
<!-- Navbar -->
<?php include("header.php"); ?>
                <!-- End Navbar -->
<div class="wrapper">
    <div class="section section-hero section-shaped">
        <div class="shape shape-style-1 shape-primary">
            <span class="span-150"></span>
            <span class="span-50"></span>
            <span class="span-50"></span>
            <span class="span-75"></span>
            <span class="span-100"></span>
            <span class="span-75"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
        </div>
        <div class="page-header">
            <div class="container shape-container d-flex align-items-center py-lg">
                <div class="col px-0">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <img src="./assets/img/brand/photo5096362143250491810-removebg-preview.png" style="width: 200px;" class="img-fluid">
                            <p class="lead text-white">پاتوق برنامه نویسا
                                <br>
                            آموزش و یادگیری - سورس کدو قالب - پرسش و پاسخ</p>
                            <div class="btn-wrapper mt-5">
                                <a href="javascript:void(0)" onclick="scrollToDownload()" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                                    <span class="btn-inner--icon"><i class="ni ni-button-power"></i></span>
                                    <span class="btn-inner--text">همین الان شروع کن</span>
                                </a>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <div class="section features-1 section-download">
        <div class="container" >
            <div class="row">
                <div class="col-md-8 mx-auto text-center">

                    <h3 class="display-3">! به بالوهاب خوش اومدی</h3>
                    <p class="lead"> "وبسایتی برای تمام برنامه نویسان" </p>
                </div>
            </div>
            <div class="row" dir="rtl">


                <div class="col-md-4">
                    <div class="info" style="text-align: right">
                        <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                            <i class="ni ni-hat-3"></i>
                        </div>
                        <h6 class="info-title text-uppercase text-success">کالج</h6>
                        <p class="description opacity-8">این بخش خودش دو بخشه : تک ویدیوها ، دوره های آنلاین . تو بخش اول میتونی به صورت خصوصی یا نیمه خصوصی به صورت آنلاین و فیلمی (ترکیبی) به همراه برنامه ریزی و ارتباط مستقیم با مدرس و تمرین و کوییز آموزش ببینی. تو بخش دوم هم میتونی از کلی ویدیو های رایگان که آموزش های متنوعی توش هست استفاده کنی .</p>
                        <a href="javascript:;" class="text-primary">مشاهده
                            <i class="ni ni-bold-left text-primary"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info" style="text-align: right">
                        <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                            <i class="ni ni-chat-round"></i>
                        </div>
                        <h6 class="info-title text-uppercase text-primary">پرسش و پاسخ</h6>
                        <p class="description opacity-8">تو بالوهاب هم میتونی سوال بپرسی و جوابتو بگیری و هم میتونی بری تو دسته ی برنامه نویسان مهربان و دلسوز (که همه ما مدیونشونیم)و به سوالات بقیه جواب بدی</p>
                        <a href="javascript:;" class="text-primary">مشاهده
                            <i class="ni ni-bold-left text-primary"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info" style="text-align: right">
                        <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                            <i class="ni ni-align-left-2"></i>
                        </div>
                        <h6 class="info-title text-uppercase text-warning">سورس کد و قالب</h6>
                        <p class="description opacity-8">این بخش هم که برای همه برنامه نویسا ضروریه چون پر از سورس کد و قالبه که میتونه تو کار خیلی بهت کمک کنه</p>
                        <a href="javascript:;" class="text-primary">مشاهده
                            <i class="ni ni-bold-left text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section features-1">
        <div class="container" >
            <div class="row" dir="rtl">

                <div class="col-md-4">
                    <div class="info" style="text-align: right">
                        <div class="icon icon-lg icon-shape icon-shape-info shadow rounded-circle">
                            <i class="ni ni-single-copy-04"></i>
                        </div>
                        <h6 class="info-title text-uppercase text-info">بلاگ</h6>
                        <p class="description opacity-8">مثل اکثر سایت ها ، بالوهاب هم یه بلاگ داره که توش مقاله میزاره</p>
                        <a href="javascript:;" class="text-primary">مشاهده
                            <i class="ni ni-bold-left text-primary"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info" style="text-align: right">
                        <div class="icon icon-lg icon-shape icon-shape-danger shadow rounded-circle">
                            <i class="ni ni-app"></i>
                        </div>
                        <h6 class="info-title text-uppercase text-danger">برای تولید کنندگان محتوا</h6>
                        <p class="description opacity-8">تو این بخش هم اونایی که میتون تدریس کنن یا سورس کد و قالب و از این چیز پیزا... تولید کنن میتونن بعد از ثبت نام از طریق پنل کاربری اکانت خودشون ررو ارتقا بدن</p>
                        <a href="javascript:;" class="text-primary">مشاهده
                            <i class="ni ni-bold-left text-primary"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>



<!--

<div class="section section-js-components">
    <div class="container">
        <h2 style="text-align: center">
            <span>همین الان عضو شو</span>
        </h2>
        <br>
            <div  style="text-align: center">
                <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modal-form">عضویت</button>
                <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card bg-secondary shadow border-0 mb-0">
                                    <div class="card-header bg-white pb-5">
                                        <div class="text-muted text-center mb-3">
                                            <small>عضویت از طریق</small>
                                        </div>
                                        <div class="btn-wrapper text-center">
                                            <a href="javascript:;" class="btn btn-neutral btn-icon">
                          <span class="btn-inner--icon">
                            <img src="./assets/img/icons/common/github.svg">
                          </span>
                                                <span class="btn-inner--text">Github</span>
                                            </a>
                                            <a href="javascript:;" class="btn btn-neutral btn-icon">
                          <span class="btn-inner--icon">
                            <img src="./assets/img/icons/common/google.svg">
                          </span>
                                                <span class="btn-inner--text">Google</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body px-lg-5 py-lg-5">
                                        <div class="text-center text-muted mb-4">
                                            <small>یا</small>
                                        </div>
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="شماره موبایل" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="ایمیل" type="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="رمز" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="تکرار رمز" type="password">
                                                </div>
                                            </div>
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                                <label class="custom-control-label" for=" customCheckLogin">
                                                    <span>من رو به یاد داشته باش</span>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary my-4">عضویت</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        -->
        <!-- Tooltips and Popovers -->

    </div>
</div>


<section class="section section-lg section-shaped">
    <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="container py-md">
        <div class="row row-grid justify-content-between align-items-center">
            <div class="col-lg-6" style="text-align: right">
                <h3  class="display-3 text-white">همین الان عضو بالوهاب شو</h3>
                <p class="lead text-white">با عضویت در بالوهاب از تمام سرویس های بالا بهره مند شو. یادت باشه برای ارتقا اکانت به مدرس ، تولید کننده محتوا، بلاگر و... هم باید اول تو سایت ثبت نام کنی
                   <!-- <br>
                    &#128071;یا به زبان خودمون (PHP) اگه بخوام بگم
                    <br>
                    <div class="lead text-white" style="text-align: left !important;">

                    if( $usetarget == "learn" || $usetarget == "teach" || $usetarget == "ask & answer" || $usetarget == "read blog" ||$usetarget == "write blog" || $usetarget == "buy source,template,..." || $usetarget == "make source,template,..." )
                    { <br>
                    <br>
                    echo "باید عضو یا وارد سایت بشی"; <br>
                    <br>
                    }
                    <br>
                    else{
                    <br>
                    echo "کلا راه نداره باید عضو بشی";
                    <br>
                    }

                </div>
                -->
                </p>
                <div class="btn-wrapper">
                    <a href="login.php" class="btn btn-white">ورود</a>
                    <a href="signup.php" class="btn btn-primary">عضویت</a>
                </div>
            </div>
            <div class="col-lg-5 mb-lg-auto">
                <div class="transform-perspective-right">
                    <div class="card bg-secondary shadow border-0">

                        <div class="card-body px-lg-5 py-lg-5">

                            <form role="form">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="شماره موبایل" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="ایمیل" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="رمز" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="تکرار رمز" type="password">
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span>من رو به یاد داشته باش</span>
                                    </label>
                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                            <label class="custom-control-label" for="customCheckRegister"><span>من قوانین بالوهاب را میپذیرم<a href="license.php">(قوانین)</a></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary my-4">عضویت</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SVG separator -->
    <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</section>

<?php include("footer.php"); ?>

</div>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/moment.min.js"></script>
<script src="./assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
<script src="./assets/js/plugins/bootstrap-datepicker.min.js"></script>
<!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="./assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
<script>
    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 800);
        }
    }
</script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
    });
</script>
</body>

</html>
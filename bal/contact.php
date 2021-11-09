<!--
=========================================================
* Balohub - v2.0.0
=========================================================

* Copyright 2021 Balo team (https://balohub.ir)

Coded by Balo team

=========================================================
--><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Balohub - بالوهاب
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="./assets/css/font-awesome.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/css/argon-design-system.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="landing-page">
<!-- Navbar -->
<?php include("header.php") ?>
<!-- End Navbar -->
<div class="wrapper">
    <div class="section section-hero section-shaped">
        <div class="shape shape-style-3 shape-default">

            <span class="span-50"></span>

            <span class="span-100"></span>


            <span class="span-100"></span>
            <span class="span-50"></span>

        </div>
        <div class="page-header">
            <div class="container shape-container d-flex align-items-center py-lg">
                <div class="col px-0">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1 class="text-white display-1">تماس با ما</h1>

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
    <div class="section features-6 " dir="rtl">
        <div class="container" style="text-align: right">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="info info-horizontal info-hover-primary">
                        <div class="description pl-4">
                            <h5 class="title">شماره موبایل و ایمیل</h5>
                            <p>09196589644</p>
                            <p>09309797203</p>
<p> ترجیحا از طریق واتساپ یا تلگرام پیام دهید</p>
                            <br>

                            <p>-  balohub.ir@gmail.com</p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>




    <div style="text-align: right"  class="alert alert-primary container" role="alert" dir="rtl">
        درصورتی که سوال شما مربوط به برنامه نویسی است ، لطفا از بخش پرسش و پاسخ یا تیکت آن را بپرسید
    </div>
    <br>
    <br>



    <form class="container" dir="rtl">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="نام">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="ایمیل">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="tel" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="شماره موبایل">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="عنوان (اختیاری)">
                </div>
            </div>
        </div>


            <textarea class="form-control form-control-alternative" rows="3" placeholder="پیام خود را اینجا بنویسید"></textarea>
        <br>
        <button  type="button" class="btn btn-primary">ارسال   <i class="ni ni-send"></i></button>




    </form>










    <br /><br />
    <?php include("footer.php") ?>

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
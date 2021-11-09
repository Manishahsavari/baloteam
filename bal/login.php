<?php
include('database/db.php');
$successmessage = null;
$errormessage = null;
if (isset($_POST['sub'])) {
    global $conn;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gt = $conn->prepare("SELECT * FROM bh_user WHERE email=? AND password=?");
    $gt->bindValue(1, $email);
    $gt->bindValue(2, $password);
    $gt->execute();
    if($gt->rowCount()>=1){
        $rows = $gt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['login'] = true;
        $_SESSION['id'] = $rows['id'];
        $_SESSION['email'] = $rows['email'];
        $_SESSION['password'] = $rows['password'];
        $_SESSION['role'] = $rows['role'];
        $_SESSION['phone'] = $rows['phone'];
        $_SESSION['username'] = $rows['username'];

        header('location:index.php');
        $successmessage = true;

    }elseif ($gt->rowCount()<=0){
        $errormessage = true;
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/icons/photo5096362143250491811-removebg-preview.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>
        ورود
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <link href="./assets/css/font-awesome.css" rel="stylesheet"/>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="./assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="register-page">
<!-- Navbar -->
<?php include("header.php"); ?>
<!-- End Navbar -->
<div class="wrapper">
    <section class="section section-shaped section-lg">
        <div class="shape shape-style-1 bg-gradient-primary">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container pt-lg-7">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card bg-secondary shadow border-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <form method="POST" >

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input name="email" class="form-control" placeholder="ایمیل" type="email"
                                              >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input name="password" class="form-control" placeholder="رمز" type="password"
                                             >
                                    </div>
                                </div>

                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span>من رو به یاد داشته باش</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <input class="btn btn-primary my-4" name="sub" type="submit" value="ورود">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12" style="text-align: center">
                                        <a href="signup.php"><small>عضویت در سایت</small></a>
                                    </div>
                                    <div class="col-12" style="text-align: center">
                                        <a href="forgotpass.php"><small>فراموشی رمز عبور</small></a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
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

<?php if ($successmessage) { ?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'شما با موفقیت وارد شدید'
        })
    </script>
<?php } ?>

<?php if ($errormessage) { ?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'error',
            title: 'ایمیل یا رمز عبور شما اشتباه است'
        })
    </script>
<?php } ?>

</body>

</html>
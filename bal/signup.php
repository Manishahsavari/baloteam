

<?php
include("database/db.php");
include("PHPMailer/class.phpmailer.php");
$errorfild = null;
$errorpass = null;
$successsingh = null;
$hasemail = null;
if (isset($_POST['sub'])) {
    global $conn;
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];
    $active = rand(10000, 99999);
    if (!empty($_POST['username']) & !empty($_POST['phone']) & !empty($_POST['email']) & !empty($_POST['password']) & !empty($_POST['repass'])) {
        if ($password == $repass) {
$gt = $conn->prepare("SELECT * FROM bh_user WHERE email=?");
$gt->bindValue(1,$email);
$gt->execute();
            if($gt->rowCount()>=1){
                $hasemail = true;
            }elseif ($gt->rowCount()<=0){

                $gt = $conn->prepare("INSERT INTO bh_user SET username=? , phone=? , email=? , password=? , active=?");
                $gt->bindValue(1, $username);
                $gt->bindValue(2, $phone);
                $gt->bindValue(3, $email);
                $gt->bindValue(4, $password);
                $gt->bindValue(5, $active);
                $gt->execute();


                $email = $_POST['email'];
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                try {
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = "ssl";
                    $mail->Port = 465;
                    $mail->Username = "balohub.ir@gmail.com";
                    $mail->Password = "12345678910203040506070";
                    $mail->AddAddress("$email");
                    $mail->SetFrom("balohub.ir@gmail.com");
                    $mail->Subject = "فعالسازی حساب کاربری";
                    $mail->CharSet = "UTF-8";
                    $mail->ContentType = "text/htm";
                    $mail->MsgHTML($active);
                    $mail->Send();
                } catch (phpmailerException $e) {
                    echo $e->errorMessage();
                }
                $successsingh= true;

                $_SESSION['login'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['phone'] = $phone;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;





                header('location:checkemail.php?success=true');



            }

        } else {
            $errorpass = true;
        }


    } else {
        $errorfild = true;
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

    <title>
        عضویت
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="register-page">
<!-- Navbar -->
<?php include("header.php");

?>

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


                            <form role="form" method="POST">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input name="username" class="form-control" placeholder="نام کاریری"
                                               type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                        </div>
                                        <input name="phone" class="form-control" placeholder="شماره موبایل" type="text">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input name="email" class="form-control" placeholder="ایمیل" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input name="password" class="form-control" placeholder="رمز" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input name="repass" class="form-control" placeholder="تکرار رمز"
                                               type="password">
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
                                            <input class="custom-control-input" id="customCheckRegister"
                                                   type="checkbox">
                                            <label class="custom-control-label" for="customCheckRegister"><span>من قوانین بالوهاب را میپذیرم <a
                                                            href="license.php">(قوانین)</a></span></label>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center">
                                    <input class="btn btn-primary my-4" name="sub" type="submit" value="عضویت">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12" style="text-align: center">
                                        <a href="login.php"><small>ورود به سایت</small></a>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php if ($errorfild) { ?>    <script>
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
        title: 'لطفا تمامی فیلد ها را پر کنید'
    })
</script>
    <script>toastr.error("لطفا تمامی فیلد ها را پر کنید")</script>
<?php } ?>
<?php if ($errorpass) { ?>
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
            title: 'رمز انتخابی با تکرار آن یکسان نیست'
        })
    </script>
<?php } ?>
<?php if ($successsingh) { ?>
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
            title: 'کد فعالسازی به ایمیل شما ارسال شد'
        })
    </script>
<?php } ?>
<?php if ($hasemail) { ?>
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
            title: 'ایمیل یا شماره تلفن قبلا در سیستم ثبت شده است'
        })
    </script>
<?php } ?>
</body>
سا
</html>
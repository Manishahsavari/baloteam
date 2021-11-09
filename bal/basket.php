<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="./assets/img/icons/photo5096362143250491811-removebg-preview.png">

    <title> Balohub - بالوهاب/ سبد خرید</title>
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
<body>
<?php include ("header.php")?>
<br>
<div>
    <h1 style="text-align: center">
        سبد خرید
    </h1>
</div>
<table class="table" dir="rtl">
    <thead>
    <tr>
        <th class="text-center">ردیف</th>
        <th > نام و نام خانوادگی</th>
        <th>نام محصول</th>
        <th>کد محصول</th>
        <th class="text-right">قیمت </th>
        <th class="text-right">ویرایش</th>
    </tr>
    </thead>

</table>
<br>
<div class="container">
    <a href="">
        <button type="button" class="btn btn-white">
            افزودن
        </button>
    </a>
    <a href="">
        <button type="button" class="btn btn-danger ">
            حذف
        </button>
    </a>
</div>
<br>
<div>
    <?php
    include ("footer.php")
    ?>
</div>
</body>
</html>

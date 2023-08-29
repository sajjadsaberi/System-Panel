
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./styles/bootstrap/bootstrap.rtl.css"> -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./font-awesome/font-awesome.css">

    <title>Welcome To Panel</title>
</head>
<body>
    
<div id="container">

<!-- Panel -->

<section id="panel">

    <ul id="panel-items">
    <li class="logo">
        
        <span>سامانه مدیریت</span>
    </li>
    <li class="profile">
        <img src="./images/prof.jpg" alt="Profile">
        <span>امیرحسین صادقی</span>
    </li>
    <li>
        
        <a href="#"><i class="fa fa-home"></i> داشبورد </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-message"></i> پیام ها </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-users"></i> مدیریت کاربران </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-cog"></i> تنظیمات </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-hashtag"></i> رویداد ها </a>
    </li>
    <li>
        <a href="#"><i class="fa fa-sign-out"></i> خروج از حساب </a>
    </li>
    </ul>

</section>

<!-- Content Page -->

<section id="content-box">  

    <!-- Header -->

<header>
        <section class="head-menu">
            <i class="fa fa-bars" onclick="menubtn()"></i>
        </section>
        <section class="head-items">
            <a href="#"><i class="fa fa-arrow-right"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
            <span class="head-prof">
                <img src="./images/prof.jpg" alt="Profile">
            </span>
        </section>
</header>

    <!-- End Header -->


    <!-- Content  -->

<div id="content">

    <!-- Root User -->

    <div class="title-box">
    <div class="icon-box"><i class="fa fa-home"></i></div>
    <h4>صفحه اصلی</h4>
    <div class="icon-box2"><i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    </div>



    <section id="info">

    <div class="info-box box-users">
    <div class="info">
        <span class="about">تعداد مدد جویان</span>
        <span class="number">253</span>
    </div>
    <div class="icon"><i class="fa fa-users"></i></div>
    </div>
    <div class="info-box box-coin">
    <div class="info">
        <span class="about">هزینه ی دوره</span>
        <span class="number">321</span>
    </div>
    <div class="icon"><i class="fa fa-coin"></i></div>
    </div>
    <div class="info-box box-sign">
    <div class="info">
        <span class="about">تعداد ثبت نام ها</span>
        <span class="number">1864</span>
    </div>
    <div class="icon"><i class="fa fa-sign-in"></i></div>
    </div>
    <div class="info-box box-user">
    <div class="info">
        <span class="about">تعداد پرسنل</span>
        <span class="number">154</span>
    </div>
    <div class="icon"><i class="fa fa-user"></i></div>
    </div>




    </section>



    <!-- Charts -->

    <div class="Chart1">
    <canvas id="myChart" width="1000" height="500" style="border: 1px solid #eee;"></canvas>
    <canvas id="myChart1" width="1000" style="border: 1px solid #eee;"></canvas>
    </div>

    <!-- End Charts -->

        <!-- Start Activity -->

    <div id="activity">

<div class="activity-box tables">


</div>
<div class="activity-box news">

<ul>
    <li>این یک تست است</li>
    <li>این یک تست است</li>
    <li>این یک تست است</li>
</ul>


</div>

    </div>




    </div>

    <!-- End Content -->


</section>

</div>

</body>
<script src="../node_modules/chart.js/dist/chart.umd.js"></script>
<script src="./scripts/charts.js"></script>
<script src="./font-awesome/all.js"></script>
<script src="./scripts/script.js"></script>
<!-- <script src="./scripts/bootstrap/bootstrap.min.js.map"></script> -->
</html>
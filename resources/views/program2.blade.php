<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Elang</title>
    <!--Link -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--menyisipkan javascript-->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .body-bg {
            width: 100%;
            background: url(/images/bg-kagaminext.jpg) no-repeat;
            background-size: cover;
            background-color: #ffe803;
            background-blend-mode: soft-light;
        }

        .bd-title {
            width: 300px;
        }

        .desc-title {
            margin-top: 50px;
            font-size: 23px;
            font-weight: 400;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .desc-img {
            width: 420px;
            margin-top: -30px;
        }
    </style>
</head>
<body class="body-bg">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: 231815;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">
            <img class="img-thumbnail" style="width: 100px;" src="/images/kagaminext-logo.png">
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container">
        <div class="jumbotron" style="background-color: ffffb8;">
            <div class="row">
                <div class="col-md-4">
                    <img class="bd-title" src="/images/kagaminext-mini.png">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p style="width: 295px; font-size: 10px; text-align: right;">featuring Kagamine Rin and Kagamine Len</p>
                </div>
                <div class="col-md-8">
                    <h6 style="text-align: right;">Created by Elang</h6>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-top: 30px;">
                <img src="/images/banner-ip.jpg" class="d-block w-100">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="desc-title">What is kagaminext?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p style="text-align: justify;">
                        <span style="font-weight: bold;">"Kagaminext"</span> is a 2-disc complation album created by EXIT TUNES to commemorate Kagamine Rin and Len's 10th anniversary. 
                        Notable songs on the album include rerulili and Moja's "Seisou Bakuretsu Boy", Neru's "Lost One no Goukoku", 
                        Nori-P's "Migikata no Chou", iroha(sasaki)'s "Roshin Yuukai", and HoneyWorks' "Suki Kirai". 
                    </p>
                </div>
                <div class="col-md-8" style="text-align: center;">
                    <img class="desc-img rounded-circle" src="/images/rinlen.jpg">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/plane.gif" type="">
    <title>TelepoRT|24/7</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="frontend/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="frontend/css/responsive.css" rel="stylesheet" />
    <link href="frontend/css/1st_page.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        @include('home.header')
        @include('home.slider')
    </div>
    <!-- why section -->
    @include('home.why')
    @include('home.services')
    @include('home.customer')
    @include('home.footer')

    <!-- jQery -->
    <script src="frontend/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="frontend/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="frontend/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="frontend/js/custom.js"></script>
</body>

</html>
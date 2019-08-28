<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/client/layout.js')}}"></script>
    <title>Document</title>
</head>
<body>
<div class="row  header-style mr-5">
    <div class="col-2 col-md-3 col-sm-4 logo-header mt-2 mb-2 ">
        <img src="https://my-pt.online/wp-content/uploads/2017/11/alleen-mypt-text-2.png" alt="..."
             class="img-thumbnail logo-image">
    </div>
    <div class="col-8 col-md-7 col-sm-7 navbar-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light layout-nav-bar ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav dropdown link-header ml-2 text-title-header">
                    <a class="navbar-brand nav-link " href="#">Trang chủ </a>
                    <a class="navbar-brand nav-link " href="#">Tập luyện trực tuyến</a>
                    <a class="navbar-brand nav-link " href="#">Blog</a>
                    <a class="navbar-brand nav-link " href="#">Liên hệ</a>

                </div>
            </div>
        </nav>
    </div>
    <div class="col-2 col-md-2 col-sm-1  d-flex justify-content-end icon-user-header">
        <a href="#"><i class="fas fa-user fa dropdown-toggle"></i></a>
    </div>


</div>
<div>
    @section('content')
    @show()
</div>
<footer class="page-footer font-small unique-color-dark footer-layout">


    <!-- Footer Links -->
    <div class="container text-center text-md-left ">

        <!-- Grid row -->
        <div class="row mt-1">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">My pt online</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Chúng tôi luôn mang lại sự hài lòng và những bài hướng dẫn tốt nhất cho các bạn với dịch vụ tập luyện trực tuyến mới mẻ và bổ ích của My PT Online.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-footer-control">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">liên kết</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#">Trang chủ</a>
                </p>
                <p>
                    <a href="#">Gói tập</a>
                </p>
                <p>
                    <a href="#">Blog</a>
                </p>
                <p>
                    <a href="#">Liên hệ</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-footer-control">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Dịch vụ</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#">Điều khoản</a>
                </p>
                <p>
                    <a href="#">Cookies</a>
                </p>
                <p>
                    <a href="#">Gửi phản hồi</a>
                </p>
                <p>
                    <a href="#">Trợ giúp</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 ">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Liên hệ</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i> Số 8 Tôn Thất Thuyết</p>
                <p>
                    <i class="fas fa-envelope mr-3 mt-3"></i> mypt@gmail.com</p>
                <p>
                    <i class="fas fa-phone mr-3 mt-3"></i> + 0987654321</p>

            </div>
        </div>

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <!-- Footer -->


    <div class="social-icon d-flex justify-content-center">

        <!-- Grid row-->
        <div class="row ">

            <!-- Grid column -->
            <div class="col-md-12  py-5 social-icon-layout" >
                <div class=" flex-center">

                    <!-- Facebook -->
                    <a class="fb-ic" href="#">
                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic"href="#" >
                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic"href="#">
                        <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic"href="#">
                        <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="#">
                        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Pinterest-->
                    <a class="pin-ic" href="#">
                        <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>

    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/client/layout.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 120,
        delay: 1,

        easing: 'ease',

        duration: 1000,

        disable: false,

        once: true,

        mirror: true, // whether elements should animate out while scrolling past them

        startEvent: 'DOMContentLoaded'
    });
</script>
<script>function inViewport($el) {
        var H = $(window).height(),
            r = $el[0].getBoundingClientRect(), t = r.top, b = r.bottom;
        return Math.max(0, t > 0 ? H - t : (b < H ? b : H));
    }

    $(window).on("scroll resize", function () {
        var window_offset = inViewport($('.intro'));
        $(".overlay").height(window_offset);
        $(".caption").css("bottom", (window_offset / 4));
    });

    class ShapeOverlays {
        constructor(elm) {
            this.elm = elm; // Parent SVG element.
            this.path = elm.querySelectorAll('path'); // Path elements in parent SVG. These are the layers of the overlay.
            this.numPoints = 18; // Number of control points for Bezier Curve.
            this.duration = 600; // Animation duration of one path element.
            this.delayPointsArray = []; // Array of control points for Bezier Curve.
            this.delayPointsMax = 300; // Max of delay value in all control points.
            this.delayPerPath = 60; // Delay value per path.
            this.timeStart = Date.now();
            this.isOpened = false;

        }
    }

</script>

</body>
</html>

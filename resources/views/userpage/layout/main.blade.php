<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('userpage/img/logo.png') }}" type="image/x-icon">
    <title>Starsbug Coffee</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('userpage/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('userpage/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('userpage/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('userpage/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('userpage/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('userpage/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('userpage/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('userpage/css/style.css') }}" type="text/css">
</head>

<body>
    @include('userpage.partials.navbar')
    <!-- Breadcrumb Section Begin -->
    @yield('banner')
    <!-- Breadcrumb Section End -->

    @yield('upper-content')
    @yield('content')
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="/"><img src="{{ asset('userpage/img/logo.png') }}"
                                    alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 offset-lg-5">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img
                                src="{{ asset('userpage/') }}img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('userpage/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('userpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('userpage/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('userpage/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('userpage/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('userpage/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('userpage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('userpage/js/main.js') }}"></script>

</body>

</html>

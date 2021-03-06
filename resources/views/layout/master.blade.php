
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>BiShop</title>
    <meta name="description" content="Here goes description" />
    <meta name="author" content="author name" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Style CSS + Google Fonts -->
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/nouislider.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/screen.css" />


</head>
<body>
@section('header')
        <!-- Mobile View -->
        <div class="quick-view-mobile hidden-sm hidden-md hidden-lg">
            <p>We are sorry but Quick View is available on larger devices only.</p>
            <a href="single-product.html">Go to product page</a>

            <i class="close-mobile-quick-view"></i>
        </div>

    <!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Main Content -->
    <div class="content-wrapper boxed">

        <!-- Header -->
        <!-- Header -->
        <header class="style-3">
            <!-- Upper Block -->
            <div class="upper-block">
                <div class="container">

                    <div class="row row-fit">

                        <div class="col-sm-2 col-md-1">
                            <!-- Currecy -->
                            <div class="currency">
                                <div class="custom-select">
                                    <div class="input">
                                        <span data-select="USD">USD</span>
                                    </div>
                                    <ul class="select-options">
                                        <li>GBP</li>
                                        <li>EUR</li>
                                        <li>CAD</li>
                                        <li>RON</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-10 col-md-11">
                            <!-- Phone Details -->
                            <div class="phone">
                                <i class="icon-phone"></i>
                                <p>Gọi cho chúng tôi: 0126 357 246</p>
                            </div>

                            <!-- Login -->
                            <div class="login">
                                <a href="my-account.html">Tài khoản của tôi</a>
                                <a href="checkout.html">Lịch sử mua hàng</a>
                                <a href="login.html">Đăng ký/Đăng nhập</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Logo & Banner -->
            <div class="logo-banner">
                <div class="container">
                    <div class="row row-fit">

                        <!-- Logo -->
                        <div class="col-md-3 col-xs-6">
                            <div class="logo">

                                <!-- Site Brand -->
                                <a class="brand" href="index.html">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="140px" height="40px" viewBox="0 0 140 40" enable-background="new 0 0 140 40" xml:space="preserve">
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#051D25" d="M120.601,9.362c1.095-0.26,2.276-0.433,3.543-0.519
                                                c1.269-0.087,2.522-0.129,3.76-0.129c1.324,0,2.671,0.129,4.04,0.388c1.368,0.26,2.614,0.735,3.738,1.427
                                                c1.124,0.692,2.038,1.642,2.745,2.852c0.705,1.209,1.058,2.751,1.058,4.623c0,1.843-0.332,3.399-0.994,4.667
                                                c-0.662,1.268-1.54,2.297-2.636,3.09c-1.095,0.792-2.348,1.361-3.76,1.706c-1.411,0.347-2.867,0.52-4.364,0.52
                                                c-0.144,0-0.381,0-0.713,0c-0.331,0-0.676-0.007-1.037-0.023c-0.36-0.014-0.712-0.037-1.058-0.064
                                                c-0.345-0.03-0.591-0.058-0.735-0.087v11.494h-3.587V9.362L120.601,9.362z M127.991,11.826c-0.748,0-1.47,0.014-2.162,0.043
                                                c-0.689,0.028-1.238,0.101-1.641,0.216v12.531c0.144,0.057,0.374,0.094,0.691,0.108c0.318,0.014,0.649,0.028,0.994,0.043
                                                c0.347,0.015,0.678,0.023,0.995,0.023c0.317,0,0.547,0,0.692,0c0.979,0,1.951-0.094,2.917-0.281
                                                c0.965-0.187,1.837-0.526,2.614-1.016c0.777-0.49,1.405-1.182,1.881-2.074c0.475-0.893,0.712-2.031,0.712-3.414
                                                c0-1.181-0.223-2.168-0.67-2.961c-0.445-0.791-1.037-1.426-1.772-1.901c-0.735-0.476-1.563-0.814-2.484-1.016
                                                C129.834,11.925,128.913,11.826,127.991,11.826z"/>
                                            <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#051D25" points="78.851,25.437 64.331,25.437 64.331,39.308
                                                60.744,39.308 60.744,9.058 64.331,9.058 64.331,22.239 78.851,22.239 78.851,9.058 82.436,9.058 82.436,39.308 78.851,39.308   "/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#051D25" d="M51.458,31.616c0-1.209-0.36-2.196-1.081-2.96
                                                c-0.72-0.763-1.621-1.44-2.701-2.03c-1.08-0.592-2.253-1.146-3.522-1.665c-1.267-0.517-2.442-1.145-3.522-1.88
                                                c-1.08-0.734-1.98-1.642-2.701-2.722c-0.719-1.081-1.08-2.456-1.08-4.127c0-2.361,0.821-4.235,2.463-5.618
                                                c1.641-1.383,3.975-2.075,7-2.075c1.756,0,3.357,0.13,4.797,0.389c1.44,0.26,2.563,0.592,3.37,0.995l-1.08,3.198
                                                c-0.663-0.325-1.635-0.64-2.918-0.936c-1.282-0.296-2.729-0.447-4.343-0.447c-1.901,0-3.327,0.426-4.278,1.275
                                                c-0.95,0.85-1.426,1.851-1.426,3.003c0,1.122,0.361,2.06,1.081,2.81c0.719,0.748,1.62,1.418,2.701,2.008
                                                c1.08,0.591,2.255,1.175,3.522,1.751c1.268,0.576,2.441,1.247,3.521,2.01c1.082,0.763,1.981,1.678,2.702,2.744
                                                c0.72,1.066,1.081,2.391,1.081,3.975c0,1.297-0.231,2.463-0.692,3.5c-0.46,1.039-1.138,1.93-2.031,2.679
                                                c-0.892,0.749-1.973,1.325-3.241,1.729c-1.268,0.404-2.708,0.605-4.321,0.605c-2.161,0-3.948-0.166-5.359-0.497
                                                c-1.412-0.331-2.506-0.698-3.283-1.101l1.209-3.198c0.662,0.367,1.643,0.719,2.939,1.073c1.296,0.353,2.751,0.525,4.363,0.525
                                                c0.951,0,1.845-0.093,2.68-0.281c0.834-0.186,1.556-0.49,2.161-0.907c0.604-0.418,1.087-0.944,1.448-1.578
                                                C51.277,33.229,51.458,32.48,51.458,31.616z"/>
                                            <rect x="26.053" y="9.058" fill-rule="evenodd" clip-rule="evenodd" fill="#051D25" width="3.586" height="30.25"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#051D25" d="M113.612,39.308V9.058c-7.943,0-15.889,0-23.833,0v30.25
                                                C97.723,39.308,105.669,39.308,113.612,39.308L113.612,39.308z M109.672,36.116H93.72c0-7.954,0-15.907,0-23.86h15.953
                                                C109.672,20.21,109.672,28.162,109.672,36.116z"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#051D25" d="M18.236,15.974c0,0.719-0.115,1.453-0.347,2.204
                                                c-0.229,0.748-0.576,1.448-1.036,2.096c-0.462,0.648-1.052,1.217-1.772,1.706c-0.721,0.49-1.57,0.864-2.55,1.124v0.173
                                                c0.865,0.145,1.692,0.389,2.484,0.735c0.793,0.345,1.492,0.821,2.096,1.426c0.605,0.604,1.095,1.339,1.469,2.205
                                                c0.375,0.864,0.562,1.887,0.562,3.066c0,1.556-0.324,2.903-0.973,4.041c-0.648,1.138-1.497,2.066-2.549,2.787
                                                c-1.052,0.719-2.255,1.252-3.608,1.598c-1.354,0.347-2.738,0.52-4.148,0.52c-0.49,0-1.065,0-1.728,0
                                                c-0.663,0-1.354-0.023-2.075-0.065c-0.72-0.044-1.44-0.101-2.161-0.173C1.182,39.344,0.547,39.236,0,39.092V9.318
                                                c1.066-0.173,2.304-0.317,3.716-0.432C5.127,8.771,6.67,8.714,8.339,8.714c1.125,0,2.27,0.093,3.435,0.28
                                                c1.168,0.188,2.227,0.547,3.178,1.081c0.951,0.532,1.735,1.274,2.354,2.225C17.926,13.251,18.236,14.475,18.236,15.974
                                                L18.236,15.974z M8.21,36.542c0.922,0,1.815-0.108,2.679-0.324c0.865-0.217,1.628-0.563,2.29-1.039
                                                c0.663-0.475,1.189-1.057,1.577-1.749c0.39-0.692,0.584-1.512,0.584-2.462c0-1.182-0.238-2.132-0.713-2.852
                                                c-0.476-0.72-1.094-1.283-1.858-1.686c-0.763-0.404-1.62-0.678-2.57-0.82c-0.951-0.144-1.902-0.216-2.853-0.216h-3.76V36.24
                                                c0.203,0.058,0.49,0.101,0.865,0.129c0.375,0.029,0.778,0.058,1.21,0.087c0.432,0.028,0.878,0.05,1.34,0.064
                                                C7.461,36.536,7.865,36.542,8.21,36.542L8.21,36.542z M5.833,22.369c0.49,0,1.081-0.014,1.773-0.043
                                                c0.691-0.03,1.266-0.072,1.728-0.129c0.692-0.231,1.34-0.513,1.945-0.844c0.605-0.331,1.145-0.719,1.621-1.166
                                                c0.475-0.446,0.849-0.965,1.123-1.556c0.274-0.591,0.411-1.231,0.411-1.923c0-0.95-0.179-1.736-0.54-2.356
                                                c-0.36-0.618-0.843-1.116-1.446-1.491c-0.607-0.373-1.297-0.64-2.075-0.798c-0.777-0.158-1.57-0.237-2.377-0.237
                                                c-0.951,0-1.823,0.02-2.614,0.064c-0.792,0.043-1.391,0.108-1.794,0.195v10.284H5.833z"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#051D25" d="M101.731,0c3.436,0,6.226,2.775,6.249,6.207l0.02,11.798h-3.337
                                                l-0.04-11.775c-0.01-1.589-1.301-2.874-2.892-2.874c-1.592,0-2.883,1.285-2.893,2.874L98.82,18.005h-3.337L95.482,6.231
                                                C95.491,2.788,98.285,0,101.731,0z"/>
                                        </g>
                                        </svg>
                                </a>

                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="col-md-7 hidden-xs hidden-sm">
                            <div class="banner">
                                <img src="img/tesla_banner.jpg" alt="banner" />
                            </div>
                        </div>

                        <!-- Bag & Social -->
                        <div class="col-md-2 col-xs-6">
                            <div class="bag-social">

                                <!-- Social Block -->
                                <div class="social">
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </div>

                                <!-- Shopping Bag -->
                                <div class="shopping-bag">
                                    <div class="bag-container">
                                        <div class="bag-counter">
                                            <i class="icon icon-bag"></i>
                                            <span class="number">1</span>
                                        </div>
                                        <span class="total">450.000 đ</span>
                                    </div>

                                    <!-- Bag Items -->
                                    <div class="cart-items-wrapper">
                                        <div class="cart-items">
                                            <h4>Giỏ hàng</h4>
                                            <ul>
                                                <li>
                                                    <div class="image">
                                                        <img src="imgimg/chuot-razer.png" alt="shopping cart image" />
                                                    </div>
                                                    <p><a href="single-product">Chuột Razer Abyssus V2</a></p>
                                                    <p class="color">Đen</p>
                                                    <p>Số lượng: 1</p>

                                                    <div class="remove">
                                                        <a href="#" class="remove-item"><i class="icon-cross"></i></a>
                                                        <p class="price">450.000 đ</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="sub-total">Thành tiền: 450.000 đ--</p>
                                            <a href="cart.html" class="view-bag">Xem giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Categories & Navigation -->
            <div class="categories-nav">
                <div class="container">
                    <div class="row row-fit">

                        <!-- Categories -->
                        <div class="col-md-3 hidden-xs hidden-sm">

                            <div class="categories">

                                <p>Danh mục sản phẩm</p>

                                <ul class="dropdown">
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">Bàn phím</a></li>
                                    <li><a href="#">Chuột</a></li>
                                </ul>

                            </div>

                        </div>

                        <!-- Main Nav -->
                        <div class="col-md-7 col-xs-6">

                            <!-- Menu Toggle -->
                            <span class="open-mobile-nav hidden-md hidden-lg"><i class="icon-menu"></i></span>

                            <div class="navigation">
                                <nav>
                                    <!-- Horizontal Nav Toggle -->
                                    <i class="go-back-icon icon-chevron-thin-left hidden-md hidden-lg hidden-sm"></i>

                                    <!-- Close Icon -->
                                    <i class="close-menu hidden-md hidden-lg"></i>

                                    <ul>
                                        <li>
                                            <a href="./">Trang chủ</a>
                                        </li>
                                        <li>
                                            <a href="shop">Của hàng</a>
                                        </li>
                                        <li>
                                            <a href="contact">Liên hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>

                        <!-- Search Form -->
                        <div class="col-md-2 col-xs-6">

                            <form class="search-form">
                                <input type="search" class="search-input placeholders" placeholder="Search" />
                                <input type="submit" class="search-submit" value="" />
                                <i class="icon icon-search"></i>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </header>

        <!-- Features -->
        <div class="features">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-3">
                        <div class="feature">

                            <i class="icon fa fa-globe"></i>
                            <p>Giao hàng trên toàn quốc</p>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="feature">

                            <i class="icon fa fa-usd"></i>
                            <p>Đảm bảo hoàn tiền</p>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="feature">

                            <i class="icon fa fa-truck"></i>
                            <p>Giao hàng miễn phí</p>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="feature">

                            <i class="icon fa fa-clock-o"></i>
                            <p>Hỗ trợ 24/7</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    <!-- Day la phan rieng -->

        @yield('content')


     <!-- Footer -->
    @section('footer')
    <footer class="footer">
        <div class="container">

            <!-- Scroll Up Toggle -->
            <div class="scroll-up">
                <i class="icon icon-chevron-thin-up"></i>
            </div>

            <!-- Social Block -->
            <div class="social-block">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>

            <!-- Footer sections -->
            <div class="footer-sections">
                <div class="row">

                    <div class="col-md-4">
                        <div class="footer-section menu">

                            <ul>
                                <li><a href="#">Danh mục sản phẩm</a></li>
                                <li><a href="#">Trợ giúp</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Giảm giá</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Sản phẩm</a></li>
                                <li><a href="#">Giao hàng</a></li>
                                <li><a href="#">Tài khoản của tôi</a></li>
                                <li><a href="#">Yêu thích</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-section subscribe tags">

                            <ul>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Chuột gaming</a></li>
                                <li><a href="#">Bàn phím cơ</a></li>
                                <li><a href="#">Lót chuột</a></li>
                                <li><a href="#">Quạt tản nhiệt</a></li>
                                <li><a href="#">HDD/SDD</a></li>
                                <li><a href="#">Màn hình</a></li>
                                <li><a href="#">Loa</a></li>
                                <li><a href="#">Thẻ nhớ</a></li>
                                <li><a href="#">USB</a></li>
                                <li><a href="#">Cable</a></li>
                                <li><a href="#">Ram</a></li>
                            </ul>

                            <form class="subscribe-form">
                                <input type="email" class="subscribe-input" placeholder="Nhập đỉa chỉ email" />
                                <input type="submit" class="subscribe-submit" value="Đăng ký" />
                            </form>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-section contact">

                            <p>CatShop, 123 Nguyễn Văn Cừ Tp.Hồ Chí Minh</p>
                            <p>Email: <a href="mailto:bishop@gmail.com">bishop@gmail.com</a></p>
                            <p>SĐT: 0126 357 246</p>
                            <p>SĐT: 0121 121 121</p>

                            <div class="cards">
                                <img src="img/card-1.png" alt="currency-card" />
                                <img src="img/card-2.png" alt="currency-card" />
                                <img src="img/card-3.png" alt="currency-card" />
                                <img src="img/card-4.png" alt="currency-card" />
                                <img src="img/card-5.png" alt="currency-card" />
                                <img src="img/card-6.png" alt="currency-card" />
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Coptrights -->
            <div class="copyrights">
                <p>Copyright 2016. Designed by <a href="#" target="blank">Châu Hoài Đức</a></p>
            </div>

        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bxslider.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/masonry.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/flexslider.js"></script>
    <script src="js/wNumb.js"></script>
    <script src="js/nouislider.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/placeholder.js"></script>
    <script src="js/options.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</body>
</html>

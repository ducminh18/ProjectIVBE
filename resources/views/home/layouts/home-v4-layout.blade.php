<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thời trang MANDO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="//theme.hstatic.net/1000401164/1000509982/14/favicon.png?v=486" type="image/png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/home/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/home/css/main.css">
    <!--===============================================================================================-->
    <script src="/assets/angular.min.js"></script>
    @yield('css-link')
    <style>
        .isotope-grid {
            height:auto !important;
        }
    </style>
</head>

<body class="animsition" ng-app="myApp" ng-controller="myController">

    <!-- Header -->
    
    <header class="header-v4">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        Miễn phí vận chuyển cho đơn hàng từ 499K
                    </div>

                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            VN
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            VND
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop how-shadow1">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="/" class="logo">
                        <img src="/assets/home/images/icons/logo.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="/">Trang chủ</a>
                            </li>

                            <li class="">
                                <a href="/products">Sản phẩm</a>
                            </li>

                            <li>
                                <a href="/track-order">Đơn hàng</a>
                            </li>

                            <li>
                                <a href="/contact">Liên hệ</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="@{{ cart.length }}">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="/"><img src="/assets/home/images/icons/logo.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                    data-notify="@{{ cart.length }}">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Miễn phí vận chuyển đơn hàng từ 499K
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            VN
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            VND
                        </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="/">Trang chủ</a>
                </li>

                <li>
                    <a href="/products">Sản phẩm</a>
                </li>

                <li>
                    <a href="/track-order">Đơn hàng</a>
                </li>

                <li>
                    <a href="/contact">Liên hệ</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="/assets/home/images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form action="/products" class="wrap-search-header flex-w p-l-15">
                    <button type="submit" class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Giỏ hàng của bạn
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <li ng-repeat="c in cart track by $index" class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img" ng-click="deleteCart(c.product)">
                            <img ng-if="c.product.image" src="@{{ baseUrl + '/api/files/' + c.product.image.file_path }}" alt="IMG">
                            <img ng-if="!c.product.image" src="@{{ baseUrl + '/api/files/' + c.product.product.image.file_path }}" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                @{{ c.product.product.name }}
                            </a>

                            <span class="header-cart-item-info">
                                @{{ c.quantity * c.product.out_price | number }}₫
                            </span>
                        </div>
                    </li>
                </ul>

                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Tổng : @{{ totalCart | number }}₫
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="/cart"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            Xem giỏ hàng
                        </a>

                        <a href="/checkout"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Thanh toán
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')



    @include('home/partial/footer')


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>


    <!--===============================================================================================-->
    <script src="/assets/home/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/bootstrap/js/popper.js"></script>
    <script src="/assets/home/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
        // var $grid;
        // var $topeContainer = $(".isotope-grid");
        // var $filter = $(".filter-tope-group");

        // // filter items on button click
        // $filter.each(function() {
        //     $filter.off("click");
        //     $filter.on("click", "button", function() {
        //         var filterValue = $(this).attr("data-filter");
        //         $topeContainer.isotope({
        //             filter: filterValue
        //         });
        //     });
        // });

        // var isotopeButton = $(".filter-tope-group button");

        // $(isotopeButton).each(function() {
        //     $(this).off("click");
        //     $(this).on("click", function() {
        //         for (var i = 0; i < isotopeButton.length; i++) {
        //             $(isotopeButton[i]).removeClass("how-active1");
        //         }
        //         $(this).addClass("how-active1");
        //     });
        // });
        // $(window).on("load", function() {
        //     $grid = $topeContainer.each(function() {
        //         $(this).isotope({
        //             itemSelector: ".isotope-item",
        //             layoutMode: "fitRows",
        //             percentPosition: true,
        //             animationEngine: "best-available",
        //             masonry: {
        //                 columnWidth: ".isotope-item",
        //             },
        //             getSortData: {
        //                 price: "[data-price]",
        //                 createTime: "[data-ct]",
        //             },
        //         });
        //     });
        // });
    </script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/daterangepicker/moment.min.js"></script>
    <script src="/assets/home/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/slick/slick.min.js"></script>
    <script src="/assets/home/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/sweetalert/sweetalert.min.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/home/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="/assets/home/js/main.js"></script>
    @yield('scripts')
</body>

</html>

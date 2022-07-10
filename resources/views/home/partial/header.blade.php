    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> juice@tt.com</li>
                                <li>Miễn phí ship cho đơn từ 250K</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            {{-- <div class="header__top__right__auth">
                                <a href="/assets/home/#"><i class="fa fa-user"></i> Login</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/"><img src="/assets/home/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li><a href="/products">Sản phẩm</a></li>
                            <li><a href="/contact">Liên hệ</a></li>
                            <li><a href="/invoice">Đơn hàng</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="/cart"><i class="fa fa-shopping-bag"></i>
                                    <span>@{{ cart.length }}</span></a></li>
                        </ul>
                        <div class="header__cart__price">ST: <span>@{{ totalCart | number }}đ</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <script>
        const currentHref = window.location.href.replace(window.location.origin, '').replace(location.search, '');
        document.querySelector('a[href="' + currentHref + '"]')?.parentElement.classList.add('active');
    </script>

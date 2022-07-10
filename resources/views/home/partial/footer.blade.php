    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Công ty TNHH đầu tư và phát triển Mando
                    </h4>
                    <ul>
                        <li ng-reqeat="cate in categories" class="p-b-10">
                            <a href="/products?category=@{{ cate.id }}" class="stext-107 cl7 hov-cl1 trans-04">
                                @{{ cate.name }}                           
                            </a>
                            <p>Thời trang MANDO Mã số doanh nghiệp: 0108403540 do sở Kế hoạch và Đầu tư TP Hà Nội cấp ngày 14/08/2018</p>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Liên kết
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="/track-order" class="stext-107 cl7 hov-cl1 trans-04">
                                Theo dõi đơn hàng
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="/contact" class="stext-107 cl7 hov-cl1 trans-04">
                                Liên hệ
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="/cart" class="stext-107 cl7 hov-cl1 trans-04">
                                Giỏ hàng
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Thông tin liên hệ                        
                    </h4>
                    <ul>
                        <li class="stext-107 cl7 size-201">
                            Văn phòng Công ty TNHH Đầu tư và Phát triển Mando - Số 5, ngõ 18, đường Phạm Hùng, phường Mỹ Đình 2, quận Nam Từ Liêm, thành phố Hà Nội, Việt Nam</a>
                        </li>
                        <br>
                        <li class="stext-107 cl7 size-201">
                            0948541032
                        </li>    
                        <br>                   
                        <li class="stext-107 cl7 size-201">cskh@mandofashion.vn</li>
                    </ul>
                    

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Đăng ký nhận tin
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                placeholder="Nhập email để nhận tin ngay!">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Đăng ký 
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-01.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-02.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-03.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-04.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-05.png" alt="ICON-PAY">
                    </a>
                </div>

                {{-- <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="/assets/home/https://colorlib.com"
                        target="_blank">Colorlib</a> &amp; distributed by <a href="/assets/home/https://themewagon.com"
                        target="_blank">ThemeWagon</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p> --}}
            </div>
        </div>
    </footer>

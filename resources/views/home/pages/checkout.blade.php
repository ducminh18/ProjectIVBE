@extends('home.layouts.home-v4-layout')
@section('title')
    Thanh toán
@endsection
@section('page-title')
    Thanh toán
@endsection
@section('css-link')
    <link rel="stylesheet" href="/assets/home/css/style.css">
@endsection
@section('content')
    @include('home/partial/extend_header')
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div> --}}
            <div class="checkout__form">
                <h4>Thông tin đơn hàng</h4>
                <form onsubmit="event.preventDefault()" ng-submit="saveInvoice()">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Tên khách hàng<span>*</span></p>
                                <input required type="text" name="name" ng-model="customer.name">
                            </div>
                            <div class="checkout__input">
                                <p>Số điện thoại<span>*</span></p>
                                <input required type="text" name="phone_number" ng-model="customer.phone">
                            </div>
                            <div class="checkout__input">
                                <p>Tỉnh/Thành phố<span>*</span></p>
                                <input required type="text" name="town" ng-model="customer.town">
                            </div>
                            <div class="checkout__input">
                                <p>Quận/Huyện<span>*</span></p>
                                <input required type="text" name="district" ng-model="customer.district">
                            </div>
                            <div class="checkout__input">
                                <p>Xã/Phường<span>*</span></p>
                                <input required type="text" name="commune" ng-model="customer.commune">
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input required type="text" name="address" ng-model="customer.address">
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <input name="note" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Tiền</span></div>
                                <ul>
                                    <li ng-repeat="c in cart track by $index">@{{ c.product.product.name + ' ' + c.product.size }}
                                        <span>@{{ c.quantity * c.product.out_price | number }}₫</span>
                                    </li>
                                </ul>
                                <div class="checkout__order__subtotal">Tạm tính <span>@{{ totalCart | number }}₫</span></div>
                                <div class="checkout__order__total">Tổng tiền <span>@{{ totalCart | number }}₫</span></div>
                                <p>Cảm ơn bạn đã tin tưởng sử dụng dịnh vụ của chúng tôi.</p>
                                <button style="font-family: 'Roboto'" type="submit" class="site-btn">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
@section('scripts')
    <script src="/assets/home/js/checkoutController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection

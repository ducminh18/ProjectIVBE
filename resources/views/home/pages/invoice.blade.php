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
                <h4>Tìm kiếm đơn hàng</h4>
                <form onsubmit="event.preventDefault()" class="row">
                    <div class="col-12">
                        <div class="checkout__input">
                            <p>Mã hóa đơn<span>*</span></p>
                            <div class="d-flex">
                                <input type="text" placeholder="Mã hóa đơn" ng-model="invoiceId">
                                <button ng-click="find()" class="btn btn-outline-success" type="submit"
                                    style="white-space: nowrap">Tìm kiếm</button>
                            </div>
                            <span class="text-danger">@{{ message }}</span>
                        </div>
                    </div>
                </form>
            </div>
            <div ng-if="invoice" class="checkout__form">
                <h4>Thông tin đơn hàng</h4>
                <form onsubmit="event.preventDefault()">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="checkout__input">
                                <p>Tên khách hàng<span>*</span></p>
                                <input readonly type="text" ng-model="invoice.customer_name">
                            </div>
                            <div class="checkout__input">
                                <p>Số điện thoại<span>*</span></p>
                                <input readonly type="text" ng-model="invoice.phone_number">
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input readonly type="text" ng-model="invoice.address">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="checkout__input">
                                <div class="checkout__input">
                                    <p>Tình trạng<span>*</span></p>
                                    <input readonly type="text" ng-model="invoice.status_name">
                                </div>
                                <div class="checkout__input">
                                    <p>Đã thanh toán<span>*</span></p>
                                    <input readonly type="text" value="@{{ invoice.paid | number }}₫">
                                </div>
                                <div class="checkout__input">
                                    <p>Tổng<span>*</span></p>
                                    <input readonly type="text" value="@{{ invoice.total | number }}₫">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="checkout__input">
                                <div class="checkout__input">
                                    <p>Ghi chú<span>*</span></p>
                                    <input readonly type="text" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Size</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="item in invoice.details track by $index">
                                    <td class="shoping__cart__item">
                                        <img ng-if="item.product_detail.image" height="100" width="100"
                                            src="@{{ baseUrl + 'api/files/' + item.product_detail.image.file_path }}" alt="">
                                        <img ng-if="!item.product_detail.image" height="100" width="100"
                                            src="@{{ baseUrl + 'api/files/' + item.product_detail.product.image.file_path }}" alt="">
                                        <h5>@{{ item.product_detail.product.name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        @{{ item.product_detail.size }}
                                    </td>
                                    <td class="shoping__cart__price">
                                        @{{ item.price | number }}₫
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" readonly ng-model="item.quantity"
                                                    class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        @{{ item.quantity * item.price | number }}₫
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
@section('scripts')
    <script src="/assets/home/js/invoiceController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection

@extends('home.layouts.home-v4-layout')
@section('title')
    Sản phẩm
@endsection
@section('page-title')
    Sản phẩm
@endsection

@section('content')
    @include('home/partial/extend_header')
    <!-- Shoping Cart -->
    <form class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-12 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <table class="table table-striped">
                            <thead class="table-danger">
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th></th>
                                    <th>Size</th>
                                    <th>Màu sắc</th>
                                    <th>Giá bán</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="c in cart">
                                    <td>
                                        <div class="how-itemcart1">
                                            <img ng-if="c.product" src="@{{ baseUrl + '/api/files/' + c.product.image.file_path }}" alt="IMG">
                                            <img ng-if="!c.product" src="@{{ baseUrl + '/api/files/' + c.product.product.image.file_path }}" alt="IMG">
                                        </div>
                                    </td>
                                    <td>@{{ c.product.product.name }}</td>
                                    <td>@{{ c.product.size }}</td>
                                    <td>@{{ c.product.color }}</td>
                                    <td>@{{ c.product.out_price | number }}₫</td>
                                    <td style="width: 150px">
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div ng-click="deleteCart(c.product)"
                                                class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input ng-model="c.quantity" class="mtext-104 cl3 txt-center num-product"
                                                type="number" name="num-product1">

                                            <div ng-click="addCart(c.product)"
                                                class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>@{{ c.product.out_price * c.quantity | number }}₫</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Tổng giỏ hàng
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Tạm tính:
                                </span>
                            </div>

                            <div class="size-209">
                                <span class="mtext-110 cl2">
                                    @{{ totalCart | number }}₫
                                </span>
                            </div>
                        </div>

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Tổng:
                                </span>
                            </div>

                            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    @{{ totalCart | number }}₫
                                </span>
                            </div>
                        </div>

                        <a href="/checkout" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Thanh toán
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script src="/assets/home/js/cartController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection

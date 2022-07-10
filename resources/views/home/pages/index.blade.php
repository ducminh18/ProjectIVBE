@extends('home.layouts.home-layout')
@section('title')
    Trang chủ
@endsection
@section('page-title')
    Trang chủ
@endsection
@section('content')
    @include('home/partial/slider')
    @include('home/partial/banner')
    <section class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Sản phẩm mới
                </h3>
            </div>
            <div class="row isotope-grid">
                <div data-price="@{{ item.min_price }}" data-ct="@{{ item.created_time }}" ng-repeat="item in data"
                    class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item @{{ item.category_id }}">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img height="400px" style="object-fit: cover" src="@{{ baseUrl + '/api/files/' + item.image.file_path }}" alt="IMG-PRODUCT">

                            <a href="products/@{{ item.id }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Xem ngay
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    @{{ item.name }}
                                </a>

                                <span class="stext-105 cl3">
                                    @{{ item.min_price | number }}₫
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a ng-click="item.default_detail.product = item;addCart(item.default_detail)"
                                    href="javascript:;" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    style="font-size: 20px">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="/assets/home/js/homeController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection

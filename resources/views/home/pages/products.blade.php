@extends('home.layouts.home-v4-layout')
@section('title')
    Sản phẩm
@endsection
@section('page-title')
    Sản phẩm
@endsection

@section('content')
    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Tất cả
                    </button>

                    <button ng-repeat="cate in categories" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                        data-filter="@{{ cate.id }}">
                        @{{ cate.name }}
                    </button>
                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Lọc
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Tìm kiếm
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04" ng-click="search(searchValue)">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input ng-model="searchValue" class="mtext-107 cl2 size-114 plh2 p-r-15" type="text"
                            name="search-product" placeholder="Tìm kiếm">
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sắp xếp
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="javascript:;" class="filter-link stext-106 trans-04">
                                        Mặc định
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a ng-click="sortByTime()" href="javascript:;" class="filter-link stext-106 trans-04">
                                        Ngày ra mắt
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a ng-click="ascPrice()" href="javascript:;" class="filter-link stext-106 trans-04">
                                        Giá : Tăng dần
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a ng-click="descPrice()" href="javascript:;" class="filter-link stext-106 trans-04">
                                        Giá : Giảm dần
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row isotope-grid" style="height: auto !important;">
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
                                    @{{ item.min_price | number }}đ
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
    </div>
@endsection
@section('scripts')
    <script src="/assets/home/js/productExtend.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection

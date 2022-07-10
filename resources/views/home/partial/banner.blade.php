    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <div ng-repeat="cate in categories.slice(0,3)" class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- block -->
                    <div class="block wrap-pic-w h-100" >
                        <img style="height: 100%; object-fit: cover;" src="@{{baseUrl +'/api/files/'+cate.image.file_path}}" alt="">
                        <a href="/products?category=@{{ cate.id }}"
                            class="block-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block-txt-child1 flex-col-l">
                                <span class="block-name ltext-102 trans-04 p-b-8" style="font-weight: 700">
                                    @{{ cate.name }}
                                </span>
                            </div>

                            <div class="block-txt-child2 p-b-4 trans-05">
                                <div class="block-link stext-101 cl0 trans-09">
                                    Xem ngay
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

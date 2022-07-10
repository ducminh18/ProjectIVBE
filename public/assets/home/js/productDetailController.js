const route = "products";
var scope;
extendController = function ($scope, $http, $location) {
    scope = $scope;
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    const paths = location.pathname.trim("/").split("/");
    const productId = paths[paths.length - 1];
    if (!isNaN(Number(productId))) {
        $http.get(baseUrl + "/api/admin/products/" + productId).then((res) => {
            if (res.data.status == true) {
                $scope.product = res.data.data;
                $scope.sizes = $scope.product.details
                    .map((i) => i.size)
                    .filter(onlyUnique);
                $scope.colors = $scope.product.details
                    .map((i) => i.color)
                    .filter(onlyUnique);
                colorSelect.append(document.createElement("option"));
                $scope.colors.forEach((c) => {
                    const opt = document.createElement("option");
                    opt.value = c;
                    opt.innerHTML = c;
                    colorSelect.append(opt);
                });
                sizeSelect.append(document.createElement("option"));
                $scope.sizes.forEach((s) => {
                    const opt = document.createElement("option");
                    opt.value = s;
                    opt.innerHTML = s;
                    sizeSelect.append(opt);
                });
                $scope.search($scope.product.name);
                $scope.href = $scope.product.name;
                $scope.detail = $scope.product.details.find(
                    (d) => d.out_price == $scope.product.min_price
                );
                setTimeout(() => {
                    $(".wrap-slick3").each(function () {
                        $(this)
                            .find(".slick3")
                            .slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                fade: true,
                                infinite: true,
                                autoplay: false,
                                autoplaySpeed: 6000,

                                arrows: true,
                                appendArrows: $(this).find(
                                    ".wrap-slick3-arrows"
                                ),
                                prevArrow:
                                    '<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
                                nextArrow:
                                    '<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

                                dots: true,
                                appendDots: $(this).find(".wrap-slick3-dots"),
                                dotsClass: "slick3-dots",
                                customPaging: function (slick, index) {
                                    var portrait = $(slick.$slides[index]).data(
                                        "thumb"
                                    );
                                    return (
                                        '<img src=" ' +
                                        portrait +
                                        ' "/><div class="slick3-dot-overlay"></div>'
                                    );
                                },
                            });
                    });
                }, 200);
            }
        });
    }
    $scope.categories = [];
    {
        const categoryId = params.category;
        if (categoryId) $scope.extendQuerys = "category=" + categoryId;
    }
    $scope.quantity = 1;
    $scope.page = 1;
    $scope.limit = 5;
    $scope.column = "created_at";
    $scope.sort = "desc";
    $scope.href = "Sản phẩm";
    $scope.extendQuerys = "visible_only=true&consumable_only=true";
    $scope.$watch("quantity", function (value) {
        if (value < 1) {
            $scope.quantity = 1;
        }
    });
    $scope.$watch("data", function (value) {
        const index = $scope.data.findIndex((v) => v.id == productId);
        if (index >= 0) $scope.data.splice(index, 1);
        else $scope.data.pop();
    });
    $scope.$watch("detail", function (value) {
        $scope.price = value?.out_price ?? 0;
    });
    $scope.setDetail = (d) => {
        $scope.detail = d;
    };
    $scope.item = {};
    $scope.sizes = [];
    $scope.colors = [];

    const colorSelect = document.getElementById("color");
    const sizeSelect = document.getElementById("size");

    $scope.selectSize = function (size) {
        $scope.item.size = size;
        if (size) {
            $scope.colors = $scope.product.details
                .filter((p) => p.size == size)
                .map((p) => p.color)
                .filter(onlyUnique);
            findDetail();
        } else {
            $scope.colors = $scope.product.details
                .map((p) => p.color)
                .filter(onlyUnique);
        }
        colorSelect.innerHTML = "";
        colorSelect.append(document.createElement("option"));
        $scope.colors.forEach((c) => {
            const opt = document.createElement("option");
            opt.value = c;
            opt.innerHTML = c;
            colorSelect.append(opt);
        });
        colorSelect.value = $scope.item.color;
    };

    $scope.selectColor = function (color) {
        $scope.item.color = color;
        if (color) {
            $scope.sizes = $scope.product.details
                .filter((p) => p.color == color)
                .map((p) => p.size)
                .filter(onlyUnique);
            findDetail();
        } else {
            $scope.sizes = $scope.product.details
                .map((p) => p.size)
                .filter(onlyUnique);
        }
        sizeSelect.innerHTML = "";
        sizeSelect.append(document.createElement("option"));
        $scope.sizes.forEach((s) => {
            const opt = document.createElement("option");
            opt.value = s;
            opt.innerHTML = s;
            sizeSelect.append(opt);
        });
        sizeSelect.value = $scope.item.size;
    };
    function findDetail() {
        if ($scope.item.size && $scope.item.color) {
            $scope.selectedDetail = $scope.product.details.find(
                (d) =>
                    d.size == $scope.item.size && d.color == $scope.item.color
            );
            if ($scope.selectedDetail) {
                $scope.selectedDetail.product = { ...$scope.product };
                $scope.selectedDetail.product.details = null;
                document.querySelector(`.slick3-dots img[src=' ${$scope.baseUrl + '/api/files/' + $scope.selectedDetail.image.file_path} ']`)?.click();
            }
        }
    }
};

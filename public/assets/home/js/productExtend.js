const route = "products";
var $grid;
var $topeContainer;
var $filter;
extendController = function ($scope, $http, $location) {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    $scope.categories = [];
    $scope.extendQuerys = "visible_only=true&consumable_only=true";
    const categoryId = params.category;
    $http
        .get(baseUrl + "/api/admin/categories?page=1&limit=1000")
        .then((res) => {
            if (res.data.status == true) {
                $scope.categories = res.data.data;
            }
        });
    $scope.page = 1;
    $scope.limit = 12;
    $scope.column = "created_at";
    $scope.sort = "desc";
    $scope.href = "Shop";
    $scope.searchValue = params.search ?? "";
    $scope.$watchCollection(
        "data",
        function () {
            if ($scope.data) {
                $topeContainer = $(".isotope-grid");
                $filter = $(".filter-tope-group");

                // filter items on button click
                $filter.each(function () {
                    $filter.off("click");
                    $filter.on("click", "button", function () {
                        var filterValue = $(this).attr("data-filter");
                        $topeContainer.isotope({
                            filter: filterValue,
                        });
                    });
                });

                var isotopeButton = $(".filter-tope-group button");

                $(isotopeButton).each(function () {
                    $(this).off("click");
                    $(this).on("click", function () {
                        for (var i = 0; i < isotopeButton.length; i++) {
                            $(isotopeButton[i]).removeClass("how-active1");
                        }
                        $(this).addClass("how-active1");
                    });
                });
                $(window).on("load", function () {
                    $grid = $topeContainer.each(function () {
                        $(this).isotope({
                            itemSelector: ".isotope-item",
                            layoutMode: "fitRows",
                            percentPosition: true,
                            animationEngine: "best-available",
                            masonry: {
                                columnWidth: ".isotope-item",
                            },
                            getSortData: {
                                price: "[data-price]",
                                createTime: "[data-ct]",
                            },
                        });
                    });
                });
                setTimeout(() => {
                    document
                        .querySelectorAll("[data-filter]")
                        .forEach((elemnt) => {
                            elemnt.onclick = function (e) {
                                document
                                    .querySelectorAll(
                                        "[data-filter].how-active1"
                                    )
                                    .forEach((el) =>
                                        el.classList.remove("how-active1")
                                    );
                                elemnt.classList.add("how-active1");
                            };
                        });
                    if (categoryId)
                        document
                            .querySelector(`[data-filter="${categoryId}"]`)
                            .click();
                }, 500);
            }
        },
        true
    );
    $scope.showModal = (item) => {
        $scope.currentProd = item;
        $http
            .get(
                baseUrl + "/api/product-details?limit=999&product_id=" + item.id
            )
            .then((res) => {
                if (res.data.status == true) {
                    $scope.currentProd.details = res.data.data;
                }
            });
        $(".js-modal1").addClass("show-modal1");
    };
    $scope.hideModal = () => {
        $(".js-modal1").removeClass("show-modal1");
    };
    $scope.sortByTime = function () {
        $grid.isotope({ sortBy: "createTime", sortAscending: false });
    };
    $scope.ascPrice = function () {
        $grid.isotope({ sortBy: "price", sortAscending: true });
    };
    $scope.descPrice = function () {
        $grid.isotope({ sortBy: "price", sortAscending: false });
    };
};

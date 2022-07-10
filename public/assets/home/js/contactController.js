const route = "";
extendController = function ($scope, $http, $location) {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    if (params.message == 1)
    {
        $scope.message = "Cảm ơn bạn được tin dùng dịch vụ của chúng tôi. Đơn hàng của bạn đang được xử lý.";
        $scope.invoiceId = params.id;
    }
    $scope.page = 0;
    $scope.limit = 0;
    $scope.href = "Liên hệ";
};

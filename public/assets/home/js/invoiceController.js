const route = "invoices";
extendController = function ($scope, $http, $location) {
    $scope.href = "Đơn đặt hàng";
    $scope.getDataOnInit = false;
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    const invoiceId = params.invoice;
    $scope.invoiceId = invoiceId;
    $scope.invoice = undefined;
    $scope.find = () => {
        $scope.data = [];
        $scope.getById($scope.invoiceId).then(() => {
            if ($scope.data.length == 0) {
                alert("Đơn hàng không tồn tại!");
            }
        });
    };
    $scope.$watchCollection("data", function (value) {
        if (value.length > 0) {
            $scope.message = undefined;
            $scope.invoice = value[0];
        } else {
            $scope.invoice = undefined;
        }
    });
    if (invoiceId) {
        setTimeout(() => {
            $scope.find();
        }, 200);
    }
};

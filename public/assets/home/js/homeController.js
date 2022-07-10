const route = "products";
extendController = function ($scope, $http) {
    $scope.page = 1;
    $scope.limit = 8;
    $scope.column = "created_at";
    $scope.sort = "desc";
    $scope.extendQuerys = "visible_only=true&consumable_only=true";
};

const route = "categories";
extendController = ($scope, $http) => {
    $scope.fields = [
        { field: "name", display: "Tên loại", default: "", type: "text" },
        { field: "image.file_path", column:"blob_id", display: "Ảnh", default: "", type: "file" },
        {
            field: "visible",
            display: "Hiển thị",
            default: true,
            type: "checkbox",
        },
    ];
    $scope.item = {};
    for (let field of $scope.fields) {
        $scope[field.field] = field.default;
    }

    for (let field of $scope.fields.filter((v) => !v.readonly)) {
        $scope.item[field.field] = field.default;
    }

    $scope.showEdit = (item) => {
        for (let field of $scope.fields.filter((v) => !v.readonly)) {
            $scope.item[field.field] = item[field.field];
        }
        $scope.id = item.id;
        $scope.editting = true;
        $scope.deleting = false;
    };

    $scope.showAddNew = () => {
        $scope.item.name = "";
        $scope.visible = true;
        $scope.editting = false;
        $scope.deleting = false;
    };
    $scope.save = () => {
        let item = {};
        for (let field of $scope.fields.filter((v) => !v.readonly)) {
            item[field.field] = $scope.item[field.field];
        }
        const fileUplaod = document.querySelector('input[type="file"]');
        if (fileUplaod && fileUplaod.files.length) {
            const file = fileUplaod.files[0];
            $scope
                .upLoadFile(file, $scope.baseUrl + "/api/upload")
                .then((res) => {
                    if (res.data.status == true) {
                        item.blob_id = res.data.data.id;
                    }
                    if ($scope.editting) {
                        $scope.update($scope.id, item);
                    } else if ($scope.deleting) {
                        $scope.delete($scope.id);
                    } else {
                        $scope.create(item);
                    }
                });
        } else if ($scope.editting) {
            $scope.update($scope.id, item);
        } else if ($scope.deleting) {
            $scope.delete($scope.id);
        } else {
            $scope.create(item);
        }
    };

    $scope.showDelete = (id) => {
        $scope.id = id;
        $scope.deleting = true;
        $scope.editting = false;
    };
};

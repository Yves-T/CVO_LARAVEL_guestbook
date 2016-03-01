var app = angular.module('commentApp', []);

app.controller('mainController', function ($scope, $http) {
    $scope.comments = [];
    $scope.loading = false;

    $scope.init = function () {
        $scope.loading = true;
        $http({url:'/api/comment',method:'GET'})
            .success(function (data) {
                $scope.comments = data;
                $scope.loading = false;
            });
    };

    $scope.submitComment = function () {
        $scope.loading = true;
        // $http.post('/api/comment', $scope.commentData)
            $http({url: '/api/comment',data: $scope.commentData})
            .success(function (data) {
                $scope.comments.push(data);
                $scope.commentData = '';
                $scope.loading = false;
            })
            .error(function (data) {
                console.log(data);
            });
    };


    $scope.deleteComment = function(index) {
        $scope.loading = true;
        var comment = $scope.comments[index];
        $http.delete('/api/comment/'+comment.id)
            .success(function(data) {
                $scope.comments.splice(index, 1);
                $scope.loading = false;
            })
            .error(function(data) {
                console.log(data);
            });
    }


    $scope.init();
});
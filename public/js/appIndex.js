var myApp = angular.module("myApp", []);
myApp.controller("StudentController", function ($scope, $http) {
    $scope.student = {};
    $scope.students = [];
    $http({
        method: 'GET',
        url: 'http://localhost/www/Demo/public/api/hello'
    }).then(function successCallback(response) {
        $scope.students = response.data;
    }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
    });
    $scope.add = function () {
        var req = {
            method: 'POST',
            url: 'http://localhost/www/Demo/public/api/add',
            data: $scope.student
        }

        $http(req).then(function successCallback(response) {
            console.log(response);
            var addStudent = response.data;
            console.log(addStudent);
            $scope.students.push(addStudent);
            return;
            // thuc hien push addStudent ==> $scope.students
        }, function errorCallback(error) {
            alert('Co loi')
        });
    }

    $scope.delete = function () {
        var req = {
            method: 'DELETE',
            url: 'http://localhost/www/Demo/public/api/delete/' + $scope.id,
            data: $scope.id
        }
        $http(req).then(function success(value) {


        }, function fail(reason) {

        })
    }
    $scope.edit = function () {
        var req = {
            method: 'PUT',
            url: 'http://localhost/www/Demo/public/api/update',
            data: $scope.student
        }
        $http(req).then(function success(value) {

        }, function fail(reason) {

        })
    }
});


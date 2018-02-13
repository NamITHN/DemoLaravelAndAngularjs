<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
    <script src="js/app.js"></script>

    <script src="js/appIndex.js"></script>

    <link rel="stylesheet" href="{!! asset('app/appCss.css') !!}">
</head>
<body>

<div id="bor" ng-controller="StudentController">

    <h1 class="bor1">Danh Sách Sinh Viên</h1>

    <div id="input">

        <div id="insert">
            <form action="" method="POST" role="form">
                <legend>Thêm</legend>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Input..."
                           ng-model="student.name" ng-required="true"><br>
                    <label for="">Age</label>
                    <input type="text" class="form-control" name="age" id="" placeholder="Input..."
                           ng-model="student.age" ng-required="true"><br>
                    <label for="">Adress</label>
                    <input type="text" class="form-control" name="adress" id="" placeholder="Input..."
                           ng-model="student.adress" ng-required="true"><br>
                </div>
                <button type="button" class="btn btn-primary" ng-click="add()">Thêm</button>
            </form>
        </div>

        <div id="delete">
            <form action="" method="POST" role="form">
                <legend>Xóa</legend>

                <div class="form-group">


                    <label for="">Id</label>
                    <input type="text" class="form-control" ng-model="id" id="" placeholder="Input..."><br>

                </div>


                <button type="button" class="btn btn-primary" ng-click="delete()">Xóa</button>
            </form>

        </div>

        <div id="edit">
            <form action="" method="POST" role="form">
                <legend>Sửa</legend>

                <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" class="form-control" ng-model="student.id" id="" placeholder="Input..."><br>
                    <label for="">Name</label>
                    <input type="text" class="form-control" ng-model="student.name" id="" placeholder="Input..."><br>
                    <label for="">Age</label>
                    <input type="text" class="form-control" ng-model="student.age" id="" placeholder="Input..."><br>
                    <label for="">Adress</label>
                    <input type="text" class="form-control" ng-model="student.adress" id="" placeholder="Input..."><br>

                </div>


                <button type="button" class="btn btn-primary" ng-click="edit()">Sửa</button>
            </form>
        </div>
    </div>


    </form>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Age</td>
            <td>Adress</td>
        </tr>
        <tr ng-repeat="st in students">
            <td>@{{ st.id }}</td>
            <td>@{{ st.name }}</td>
            <td>@{{ st.age }}</td>
            <td>@{{ st.adress }}</td>
        </tr>
    </table>
</div>
</body>
</html>
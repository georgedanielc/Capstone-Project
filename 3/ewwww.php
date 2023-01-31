<!DOCTYPE html>
<html lang="en">
<head>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.1.4/angular.min.js"></script>
</head>
<style>
label{
    display: block;
    margin-bottom: 30px;
}
input {
    display: block;
}
</style>
<body>
<form name="form" ng-app="myApp" ng-controller="Controller" novalidate>    
    <label>
       Password:
        <input type="password" name="uPass" maxlength="24" ng-hide="formFlags.showpass" ng-model="user.pass" ng-required validate-pass />   
        <input type="text" name="uPass" maxlength="24" ng-show="formFlags.showpass" ng-model="user.pass" ng-required validate-pass />
        <span class="message" ng-show="form.uPass.$dirty && form.uPass.$invalid">Must be from 6 to 24 symbols long ang contain at least one digit.</span> 
    </label>

    <label>
        <input type="checkbox" name="uShowPass" ng-model="formFlags.showpass" toggle-pass/>Show password
    </label>    
</form>
<script type = "text/javascript">
var app = angular.module('myApp', []);
 
//Password validation regexp
    PASS_REGEXP = /\d/;

function Controller($scope) {
    $scope.formFlags = {
        showpass: false,
        minpasslength: 6,
        tempPass: ''
    };
    
  $scope.master= {};
 
  $scope.update = function(user) {
    $scope.master= angular.copy(user);
  }; 
  $scope.reset = function() {
    $scope.user = angular.copy($scope.master);
  };
    
  $scope.reset();
}

//Validation directive
app
.directive('validatePass', function() {
    return {
        require: 'ngModel',
        link: function(scope, elm, attrs, ctrl) {
            ctrl.$parsers.unshift(function(viewValue) {
                if (viewValue.length >= scope.formFlags.minpasslength && PASS_REGEXP.test(viewValue)) {
                    // it is valid
                    ctrl.$setValidity('pass', true);
                } else {
                    // it is invalid
                    ctrl.$setValidity('pass', false);
                } 
                // update model anyway to sync password fields
                return viewValue;
            });
           ctrl.$formatters.unshift(function(viewValue) {
                if (viewValue.length >= scope.formFlags.minpasslength && PASS_REGEXP.test(viewValue)) {
                    // it is valid
                    ctrl.$setValidity('pass', true);
                } else {
                    // it is invalid
                    ctrl.$setValidity('pass', false);
                } 
                // update model anyway to sync password fields
                return viewValue;
            });
        }
    };    
});
</script>
</body>
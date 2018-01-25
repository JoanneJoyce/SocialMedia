angular.module('myApp', []).controller('myCtrl', ['$scope', function($scope) {
    $scope.searchFunction = function(num) {
        // debugger;
        if(num == 1){
            angular.element('#link' + num).addClass("active");
            angular.element('#link' + 2).removeClass("active");
            angular.element('#link' + 3).removeClass("active");
        } else if(num == 2){
            angular.element('#link' + num).addClass("active");
            angular.element('#link' + 1).removeClass("active");
            angular.element('#link' + 3).removeClass("active");
        } else{
            angular.element('#link' + num).addClass("active");
            angular.element('#link' + 1).removeClass("active");
            angular.element('#link' + 2).removeClass("active");
        }
    };
  }]);
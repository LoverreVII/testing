var favorite = element(by.binding('my.favorite'));

it('should initialize to model', function() {
  expect(favorite.getText()).toContain('unicorns');
});
it('should bind the values to the inputs', function() {
  element.all(by.model('my.favorite')).get(0).click();
  expect(favorite.getText()).toContain('pizza');
});

var app = angular.module("myApp", []);
app.controller('jobCtrl', function($scope, $http) {
    $http.get("jobajax.php")
    .then(function (response) {$scope.names = response.data.records;});
});
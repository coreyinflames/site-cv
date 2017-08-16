var app = angular.module('app-cv',['ngRoute'])

.config(['$routeProvider',function($routeProvider){
    $routeProvider.
    when('/index',{
    	templateURL: 'index.html',
    	controller: 'MainCtrl'
    })
    otherwide({redirectTo:'/index'})
}]);

.controller('MainCtrl', ['$scope', function($scope){
	$scope.nome = "João Batista Mororó Netto";

	console.log($scope)
}]);

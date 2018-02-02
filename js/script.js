// Define the `app-cv` module
var app = angular.module('app-cv', []);

// Define the `dadosFicha` controller on the `app-cv` module
app.controller('dadosFicha', function dadosFicha($scope) {

  $scope.nome = 'João Batista Mororó Netto'
  $scope.datas = '31/05/1991'
  $scope.nacionalidade = 'Brasileiro'
  $scope.endereco = 'Av. Duarte de Azevedo, 640'
  $scope.email = 'fleyefilms@gmail.com'
  $scope.fone = '+55 (83) 99602-1359'
  $scope.objetivos = 'Sou desenvolvedor back-end ASP.NET usando a linguagem C#, tambem tenho conhecimentos de front-end em HTML5, CSS3 e JQuery.'
  $scope.caracteristicas = 'Proativo, comunicativo, curioso, autodidata, inglês avançado'
  $scope.hobbies = 'Música, fotografia e esportes'

});
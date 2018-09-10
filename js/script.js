// Define the `app-cv` module
var app = angular.module('app-cv', []);

// Define the `dadosFicha` controller on the `app-cv` module
app.controller('dadosFicha', function dadosFicha($scope) {

  $scope.nome = 'João Batista Mororó Netto'
  $scope.datas = '31/05/1991'
  $scope.nacionalidade = 'Brasileiro'
  $scope.endereco = 'Rua Clelia, 1192'
  $scope.email = 'joao.netto@linkapi.com'
  $scope.fone = '+55 (11) 99718-1359'
  $scope.objetivos = 'Sou desenvolvedor web javascript.'
  $scope.caracteristicas = 'Proativo, comunicativo, curioso, autodidata, inglês avançado'
  $scope.hobbies = 'Música, fotografia e esportes'

});
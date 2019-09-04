// Define the `app-cv` module
var app = angular.module('app-cv', []);

// Define the `dadosFicha` controller on the `app-cv` module
app.controller('dadosFicha', function dadosFicha($scope) {

  $scope.nome = 'João Batista Mororó Netto'
  $scope.datas = '31/05/1991'
  $scope.nacionalidade = 'Brasileiro'
  $scope.endereco = 'Rua Clelia, 1192'
  $scope.email = 'joaonettopb@hotmail.com'
  $scope.fone = '+55 (11) 99718-1359'
  $scope.objetivos = 'Me tornar referência técnica e didática contribuindo com o desenvolvimento de sistemas bem estruturados e escaláveis, também poder contribuir com capital intelectual passando conhecimento para todo o resto da empresa.'
  $scope.caracteristicas = 'Proativo, comunicativo, curioso, autodidata, inglês avançado'
  $scope.hobbies = 'Música, fotografia e esportes'
});
// Define the `app-cv` module
var app = angular.module('app-cv', []);

// Define the `dadosFicha` controller on the `app-cv` module
app.controller('dadosFicha', function dadosFicha($scope) {

  $scope.nome = 'João Batista Mororó Netto'
  $scope.datas = '31/05/1991'
  $scope.nacionalidade = 'Brasileiro'
  $scope.endereco = 'Av. Pombal, 189 - Manaira, João Pessoa - PB'
  $scope.email = 'fleyefilms@gmail.com'
  $scope.fone = '+55 (83) 99602-1359'
  $scope.objetivos = 'Trabalhando como desenvolvedor, tenho como objetivo primário aprimorar meus conhecimentos em Front-end e iniciar o aprendizado em Back-end, tendo como objetivo final a preparação das minhas habilidades para tornar-me um desenvolvedor Fullstack.'
  $scope.caracteristicas = 'Proativo, comunicativo, curioso, autodidata, inglês avançado'
  $scope.hobbies = 'Música, fotografia e esportes'

});
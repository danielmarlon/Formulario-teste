<?php
$name = $_POST['Name'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$district = $_POST['District'];
$country = $_POST['Country'];
$email = $_POST['E-mail'];
$login = $_POST['Login'];
$password = $_POST['Password'];
$civilstatus = $_POST['op'];
$comments = $_POST['Comments'];
 ?>
 <div>
Nome do usuario: <?= $name ?> <br>
Idade: <?= $age ?> <br>
Gênero: <?= $gender ?> <br>
Endereço: <?= $address ?> <br>
Cidade: <?= $city ?> <br>
Estado: <?= $state ?> <br>
Bairro: <?= $district ?> <br>
País: <?= $country ?> <br>
E-mail: <?= $email ?> <br>
Login: <?= $login ?> <br>
Senha: <?= $password ?> <br>
Estado Civil: <?= $civilstatus ?> <br>
Comentários: <?= $comments ?>
  </div>

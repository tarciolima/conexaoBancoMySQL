
<?php

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$server = 'localhost';
$username = 'root';
$password = '';
$banco = 'test';

//$connect = @mysql_connect($server, $username, $password, $banco);
$connect = mysqli_connect('$server', '$username', '$password', '$banco');

$db = mysqli_select_db($db, $banco);

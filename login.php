
<?php

include './conexao.php';

if($connect){
    echo '<br> conectado';
}
 else {
    echo '<br> erro de conexão';
}

/*
if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        die();
    } else {
        setcookie("login", $login);
        header("Location:index.php");
    }
}
*/
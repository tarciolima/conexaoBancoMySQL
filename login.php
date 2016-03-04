
<?php

include './conexao.php';

if($connect){
    echo '<br> conectado';
}
 else {
    echo '<br> erro de conexão';
}

if (isset($entrar)) {
    
    $ComandoSQL= "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
    $verifica = mysqli_query($connect, $ComandoSQL) or die("erro ao selecionar");
    
    // teste para verificar se os dados encontram no banco de dados
    while($row = mysqli_fetch_assoc($verifica))
    {   
        echo '<br />';
        echo $row['id'] . "<br />";
        echo $row['login'] . "<br />";
        echo $row['senha'] . "<br />";
    }

    if (mysqli_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        die();
    } else {
        setcookie("login", $login);
        header("Location:home.php");
    }
    $connect = mysqli_close($connect);
}

<?php
include('conexao.php');

if(isset($_POST['login']) || isset($_POST['senha'])) {
    if(strlen($_POST['login']) == 0) {
        echo "Preencha seu login";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM contas WHERE login = '$login' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: painel.html");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
        <h1> Controle de Equipe <br>BullGods</h1>
        <img src="crud.svg" class="left-login-image" alt="servidor">
</div>
<div class="right-login">
    <div class="card-login">
        <h1>LOGIN</h1>
        <div class="textfield">
            <label for="login">Usuário</label>
            <input type="text" name="login" placeholder="Usuário" >
        </div>
        <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Senha" >
         </div>
       <a href="painel.html"> <button class="btn-login">Login</button> </a>
</div>
</body>
</html>
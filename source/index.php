<?php
include('app/connect.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "<script type='javascript'>alert(Preencha seu e-mail)";
        echo "javascript:window.location='index.php';</script>";
    } else if(strlen($_POST['senha']) == 0) {
        echo " <script type='javascript'>alert(Preencha sua senha)";
        echo "javascript:window.location='index.php';</script>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            die
            echo '<script language="javascript">';
            echo 'alert("Login ou Senha Incorretos!")';
            echo '</script>';
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
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
        <h1> Controle de Equipe <br>"NOME DA EQUIPE"</h1>
        <img src="assets/image/crud.svg" class="left-login-image" alt="servidor">
</div>
<div class="right-login">
    <div class="card-login">
        <h1>LOGIN</h1>
        <div class="textfield">
            <label for="login">Login</label>
            <input type="text" name="email" placeholder="Usuário" >
        </div>
        <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Senha" >
         </div>
       <a href="painel.html"> <button class="btn-login">Login</button> </a>
</div>
</body>
</html>
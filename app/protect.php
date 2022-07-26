<!-- ARQUIVO DE PROTEÇÃO A ACESSO SEM SESSÃO! -->
<?php

// VERIFICA SE A SESSÃO FOI INICIADA
if(!isset($_SESSION)) {
    session_start();
}
// SCRIPT DE ALERTA PARA CASO NÃO TENHA INICIADO SESSÃO
if(!isset($_SESSION['id'])) {
    die("<script>alert('Você não pode acessar esta página porque não está logado.');</script>");
}


?>
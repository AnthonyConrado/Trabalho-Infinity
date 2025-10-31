<?php
// Configuração da conexão com banco de dados InfinityFree
// Substitua pelos seus dados do painel InfinityFree:
$servidor = "sqlXXX.epizy.com"; // Host do banco (ex: sql307.epizy.com)
$usuario  = "epiz_XXXXXXXX";    // Usuário do banco
$senha    = "SENHA_DO_BANCO";   // Senha do banco
$banco    = "epiz_XXXXXXXX_banco_teste"; // Nome do banco

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
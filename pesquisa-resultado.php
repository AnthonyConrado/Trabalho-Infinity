<?php
include('conectar.php');

$sexo = $_POST['Sexo'];
$sql = "SELECT * FROM cadastro WHERE Sexo = '$sexo'";
$resultado = mysqli_query($conexao, $sql);

echo "<link rel='stylesheet' type='text/css' href='estilos.css'>";
echo "<table border='1'>
<tr><th>Nome</th><th>Sobrenome</th><th>Sexo</th></tr>";

while($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>{$linha['NomeCliente']}</td><td>{$linha['SobrenomeCliente']}</td><td>{$linha['Sexo']}</td></tr>";
}

echo "</table>";
mysqli_close($conexao);
?>
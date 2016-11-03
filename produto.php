<?php
$link = mysqli_connect('localhost','root','');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
$produto_id = $_GET['p'];
echo 'Conexão bem sucedida';

mysqli_select_db($link, 'teste');
    
$resultado = mysqli_query($link, "select * from produtos where id = $produto_id");

while ( $linha = mysqli_fetch_assoc($resultado) ) {
    echo"<h1>$linha[nome]</h1>";
    echo"<h2>R$ $linha[valor]</h2>";
    echo"<small>$linha[qnt] unidade disponiveis</small>";
    echo "<p>$linha[descricao]</p>";
    
}
?>
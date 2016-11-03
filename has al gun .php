<?php
$link = mysqli_connect('localhost','root','');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';

mysqli_select_db($link, 'teste');
    
$resultado = mysqli_query($link, "select * from produtos");

while ( $linha = mysqli_fetch_assoc($resultado) ) {
   
    echo "<a href='produto.php?p=$linha[id]'>";
    
    echo "nome: $linha[nome]<br>";
    echo "valor: $linha[valor]<br>";
    echo "<a/><br>";
}
?>
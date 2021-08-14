<?php
include_once('banco_de_dados/conexao.php');

$busca = $_POST['busca'];

$nome = "SELECT * FROM cadastro WHERE nome LIKE '%$busca%'";
$resultado_nomes = mysqli_query($link, $nome);

if (mysqli_num_rows($resultado_nomes) <= 0) {
  echo "Nenhum pipeiro encontrado";
} else {
  while ($rows = mysqli_fetch_assoc($resultado_nomes)) {
    echo "<li>" . $rows['nome'] . "</li>";
  }
}

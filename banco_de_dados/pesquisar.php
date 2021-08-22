<?php

include_once 'conexao.php';

function busca_nome($pesquisar)
{
  if ($pesquisar == '') {
    return ExecutarConsulta("SELECT * FROM cadastro order by nome");
  } else {
    return ExecutarConsulta("SELECT * FROM cadastro where nome like '%$pesquisar%'");
  }
}

$dados = busca_nome(strtoupper(@$_POST['busca']));

print '<table>';
foreach ($dados as $k) {
  echo  "<tr>";
  echo "<td>{$k['nome']}</td><td>{$k['cpf_cnpj']}</td><td>{$k['munic_atu']}</td><td>{$k['uf']}<td>{$k['volume']}</td><td>{$k['sit_vist']}</td><td>{$k['operador']}</td>";
  echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
  echo "<td><a href='#' onClick='apagar($id)'><i class='material-icons'>delete</i></a></td>";
  echo "</tr>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Document</title>
</head>
<section>
  <form method="POST">

    <div class="input-field col s4">

      <label>Buscar Nome</label>
      <input type="text" name="busca" id="nome" class="form-control">
    </div>

    <div class=" input-field col s4">
      <input type="submit" value="pesquisar" class="btn blue">

    </div>


  </form>
</section>

</html>
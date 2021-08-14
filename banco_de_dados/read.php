<?php

include_once 'conexao.php';


$querySelect = $link->query("select * from cadastro");
while ($registros = $querySelect->fetch_assoc()) :
  $id = $registros['id'];
  $nome = $registros['nome'];
  $munic_atu = $registros['munic_atu'];
  $uf = $registros['uf'];
  $marca_veic = $registros['marca_veic'];
  $modelo_veic = $registros['modelo_veic'];
  $ano_fabricacao_veic = $registros['ano_fabricacao_veic'];
  $placa_veic = $registros['placa_veic'];
  $chassi_veic = $registros['chassi_veic'];
  $telefone = $registros['telefone'];
  $banco = $registros['banco'];
  $agencia = $registros['agencia'];
  $conta = $registros['conta'];
  $endereco = $registros['endereco'];
  $cep = $registros['cep'];
  $nit = $registros['nit'];
  $cat_cnh = $registros['cat_cnh'];
  $val_cnh = $registros['val_cnh'];
  $idt = $registros['idt'];
  $org_emi = $registros['org_emi'];
  $cpf_cnpj = $registros['cpf_cnpj'];
  $sit_doc = $registros['sit_doc'];
  $motivo = $registros['motivo'];
  $data_anal = $registros['data_anal'];
  $cadastrador = $registros['cadastrador'];
  $lacre = $registros['lacre'];
  $volume = $registros['volume'];
  $sit_vist = $registros['sit_vist'];
  $data_vist = $registros['data_vist'];
  $operador = $registros['operador'];



  echo "<tr>";
  echo "<td>$nome</td><td>$cpf_cnpj</td><td>$munic_atu</td><td>$uf<td>$volume</td><td>$sit_vist</td><td>$operador</td>";
  echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
  echo "<td><a href='#' onClick='apagar($id)'><i class='material-icons'>delete</i></a></td>";
  echo "</tr>";

endwhile;

include_once 'pesquisar.php';

?>

<!DOCTYPE html>
<html lang="en">

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
      <input type="text" name="busca" class="form-control" value="<?php $busca ?>">
    </div>

    <div class=" input-field col s4">
      <input type="submit" value="Pesquisar" class="btn blue">

    </div>


  </form>
</section>

<body>
  <script language="JavaScript">
    function apagar(id) {
      if (window.confirm('Deseja apagar este registro?')) {
        window.location.href = `banco_de_dados/delete.php?id=${id}`

      } else {
        window.alert('Ok, nenhuma ação foi feita!')
      }
    }
  </script>

</body>

</html>
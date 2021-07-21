<?php
session_start();
include_once 'conexao.php';

$nome = $_POST['nome'];
$munic_atu = $_POST['munic_atu'];
$uf = $_POST['uf'];
$marca_veic = $_POST['marca_veic'];
$modelo_veic = $_POST['modelo_veic'];
$ano_fabricacao_veic = $_POST['ano_fabricacao_veic'];
$placa_veic = $_POST['placa_veic'];
$chassi_veic = $_POST['chassi_veic'];
$telefone = $_POST['telefone'];
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$nit = $_POST['nit'];
$cat_cnh = $_POST['cat_cnh'];
$val_cnh = $_POST['val_cnh'];
$idt = $_POST['idt'];
$org_emi = $_POST['org_emi'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$sit_doc = $_POST['sit_doc'];
$motivo = $_POST['motivo'];
$data_anal = $_POST['data_anal'];
$cadastrador = $_POST['cadastrador'];
$lacre = $_POST['lacre'];
$volume = $_POST['volume'];
$sit_vist = $_POST['sit_vist'];
$data_vist = $_POST['data_vist'];
$operador = $_POST['operador'];

$querySelect = $link->query("select cpf_cnpj from cadastro");
$array_cpf_cnpjs = [];

while ($cpf_cnpjs = $querySelect->fetch_assoc()) :
  $cpf_cnpjs_existentes = $cpf_cnpjs['cpf_cnpj'];
  array_push($array_cpf_cnpjs, $cpf_cnpjs_existentes);
endwhile;

if (in_array($cpf_cnpj, $array_cpf_cnpjs)) :
  $_SESSION['msg'] = "<p class='center red-text'>" . 'Ja existe um cliente cadastrado com esse CPF/CNPJ' . "</p>";
  header("Location:../");
else :
  $queryInsert = $link->query("insert into cadastro values (default, '$nome', '$munic_atu', '$uf', '$marca_veic','$modelo_veic','$ano_fabricacao_veic','$placa_veic','$chassi_veic','$telefone','$banco','$agencia','$conta','$endereco','$cep','$nit','$cat_cnh','$val_cnh','$idt','$org_emi','$cpf_cnpj','$sit_doc','$motivo','$data_anal','$cadastrador','$lacre','$volume','$sit_vist','$data_vist','$operador' )");
  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0) :
    $_SESSION['msg'] = "<p class='center green-text'>" . 'Cadastrado com Sucesso!' . "</p>";
    header("Location:../");
  endif;
endif;

<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];


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

$querySelect = $link->query("update cadastro set nome='$nome', munic_atu='$munic_atu', uf='$uf', marca_veic='$marca_veic',modelo_veic='$modelo_veic',ano_fabricacao_veic='$ano_fabricacao_veic',placa_veic='$placa_veic',chassi_veic='$chassi_veic',telefone='$telefone',banco='$banco',agencia='$agencia',conta='$conta',endereco='$endereco',cep='$cep',nit='$nit',cat_cnh='$cat_cnh',val_cnh='$val_cnh',idt='$idt',org_emi='$org_emi',cpf_cnpj='$cpf_cnpj',sit_doc='$sit_doc',motivo='$motivo',data_anal='$data_anal',cadastrador='$cadastrador',lacre='$lacre',volume='$volume',sit_vist='$sit_vist',data_vist='$data_vist', operador='$operador' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if ($affected_rows > 0) :
  header("Location:../consultas.php");
endif;

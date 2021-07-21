<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
  <div class="col s12">
    <h5 class="light">Edição de Registros</h5>
    <hr>
  </div>
</div>

<?php
include_once 'banco_de_dados/conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $link->query("select * from cadastro where id='$id'");

while ($registros = $querySelect->fetch_assoc()) :
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
endwhile;
?>

<!--Formulario de cadastro-->
<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/update.php" method="POST" class="col s12">
    <fieldset class="formulario">
      <!--<legend>Dados Pessoais</legend>-->
      <h5 class="light center">Alteração</h5>

      <!--CAMPO NOME-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength=" 60" required>
        <label for="nome">Nome Completo</label>
      </div>

      <!--MUNICIPIO DE ATUAÇÃO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">location_on</i>
        <input type="text" name="munic_atu" id="munic_atu" value="<?php echo $munic_atu ?>" maxlength="40" required>
        <label for="munic_atu">Município de Atuação</label>
      </div>

      <!--UF-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">location_on</i>
        <input type="text" name="uf" id="uf" value="<?php echo $uf ?>" maxlength=" 20" required>
        <label for="uf">UF</label>
      </div>
      <!--MARCA DO VEICULO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">local_shipping</i>
        <input type="text" name="marca_veic" id="marca_veic" value="<?php echo $marca_veic ?>" maxlength="20" required>
        <label for="marca_veic">Marca do Veículo</label>
      </div>
      <!--MODELO DO VEICULO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">local_shipping</i>
        <input type="text" name="modelo_veic" id="modelo_veic" value="<?php echo $modelo_veic ?>" maxlength="20" required>
        <label for="modelo_veic">Modelo do Veículo</label>
      </div>
      <!--ANO DE FABRICAÇÃO DO VEICULO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">local_shipping</i>
        <input type="text" name="ano_fabricacao_veic" id="ano_fabricacao_veic" value="<?php echo $ano_fabricacao_veic ?>" maxlength="10" required>
        <label for="ano_fabricacao_veic">Ano de Fabricação do Veículo</label>
      </div>
      <!--PLACA DO VEICULO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">local_shipping</i>
        <input type="text" name="placa_veic" id="placa_veic" value="<?php echo $placa_veic ?>" maxlength="20" required>
        <label for="placa_veic">Placa do Veículo</label>
      </div>
      <!--CHASSI DO VEICULO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">local_shipping</i>
        <input type="text" name="chassi_veic" id="chassi_veic" value="<?php echo $chassi_veic ?>" maxlength="50" required>
        <label for="chassi_veic">Chassi do Veículo</label>
      </div>
      <!--TELEFONE-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">phone</i>
        <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required>
        <label for="telefone">Contato</label>
      </div>
      <!--BANCO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">account_balance</i>
        <input type="text" name="banco" id="banco" value="<?php echo $banco ?>" maxlength="20" required>
        <label for="banco">Banco</label>
      </div>
      <!--AGÊNCIA -->
      <div class="input-field" col s12>
        <i class="material-icons prefix">account_balance</i>
        <input type="text" name="agencia" id="agencia" value="<?php echo $agencia ?>" maxlength="20" required>
        <label for="agencia">Agência</label>
      </div>
      <!--CONTA-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">account_balance</i>
        <input type="text" name="conta" id="conta" value="<?php echo $conta ?>" maxlength="20" required>
        <label for="conta">Conta</label>
      </div>
      <!--ENDEREÇO COMPLETO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">location_on</i>
        <input type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>" maxlength="100" required>
        <label for="endereco">Endereço Completo</label>
      </div>
      <!--CEP -->
      <div class="input-field" col s12>
        <i class="material-icons prefix">location_on</i>
        <input type="text" name="cep" id="cep" value="<?php echo $cep ?>" maxlength="20" required>
        <label for="cep">CEP</label>
      </div>
      <!--NIT/NIS/CI/PIS/PASEP-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">folder</i>
        <input type="text" name="nit" id="nit" value="<?php echo $nit ?>" maxlength="30" required>
        <label for="nit">NIT/NIS/CI/PIS/PASEP</label>
      </div>
      <!--CATEGORIA CNH-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">credit_card</i>
        <input type="text" name="cat_cnh" id="cat_cnh" value="<?php echo $cat_cnh ?>" maxlength="10" required>
        <label for="cat_cnh">Categoria da CNH</label>
      </div>
      <!--VALIDADE DA CNH-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">credit_card</i>
        <input type="text" name="val_cnh" id="val_cnh" value="<?php echo $val_cnh ?>" maxlength="15" required>
        <label for="val_cnh">Validade da CNH</label>
      </div>
      <!--IDENTIDADE-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">credit_card</i>
        <input type="text" name="idt" id="idt" value="<?php echo $idt ?>" maxlength="15" required>
        <label for="idt">Identidade</label>
      </div>

      <!--ORGÃO EMISSOR/UF-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">credit_card</i>
        <input type="text" name="org_emi" id="org_emi" value="<?php echo $org_emi ?>" maxlength="15" required>
        <label for="org_emi">Orgão Emissor/UF</label>
      </div>

      <!--CPF/CNPJ-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">credit_card</i>
        <input type="text" name="cpf_cnpj" id="cpf_cnpj" value="<?php echo $cpf_cnpj ?>" maxlength="40" required>
        <label for="cpf_cnpj">CPF/CNPJ</label>
      </div>
      <!--SIT DOC-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">check_box</i>
        <input type="text" name="sit_doc" id="sit_doc" value="<?php echo $sit_doc ?>" maxlength="20" required>
        <label for="sit_doc">SIT DOC</label>
      </div>
      <!--MOTIVO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">close</i>
        <input type="text" name="motivo" id="motivo" value="<?php echo $motivo ?>" maxlength="15">
        <label for="motivo">Motivo da Reprovação</label>
      </div>
      <!--DATA DA ANÁLISE DOCUMENTAL-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">date_range</i>
        <input type="date" name="data_anal" id="data_anal" value="<?php echo $data_anal ?>" maxlength="15" required>
        <label for="data_anal">Data da Ánalise Documental</label>
      </div>
      <!--CADASTRADOR-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">person</i>
        <input type="text" name="cadastrador" id="cadastrador" value="<?php echo $cadastrador ?>" maxlength="45" required>
        <label for="cadastrador">Cadastrador</label>
      </div>
      <!--LACRE-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">gesture</i>
        <input type="number" name="lacre" id="lacre" value="<?php echo $lacre ?>" maxlength="10" required>
        <label for="lacre">Lacre</label>
      </div>
      <!--VOLUME-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">local_shipping</i>
        <input type="text" name="volume" id="volume" value="<?php echo $volume ?>" maxlength="10" required>
        <label for="volume">Volume</label>
      </div>
      <!--SITUAÇÃO VISTORIA-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">check_box</i>
        <input type="text" name="sit_vist" id="sit_vist" value="<?php echo $sit_vist ?>" maxlength="20" required>
        <label for="sit_vist">Situação da Vistoria</label>
      </div>
      <!--DATA DA VISTORIA-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">date_range</i>
        <input type="date" name="data_vist" id="data_vist" value="<?php echo $data_vist ?>" maxlength="15" required>
        <label for="data_vist">Data da Vistoria</label>
      </div>
      <!--OPERADOR-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">person</i>
        <input type="text" name="operador" id="operador" value="<?php echo $operador ?>" maxlength="45" required>
        <label for="operador">Operador</label>
      </div>

      <!--BOTOES-->
      <div class="input-fiels col 12s">
        <input type="submit" value="Alterar" class="btn blue">
        <a href="consultas.php" class="btn red">Cancelar</a>
      </div>

    </fieldset>
  </form>


</div>


<?php include_once 'includes/footer.inc.php' ?>
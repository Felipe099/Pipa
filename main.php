<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>

<nav class="green">
  <div class="nav-wrapper container">
    <div class="brand-logo light">Sistema de Credenciamento</div>
  </div>
</nav>

<!--Formulario de cadastro-->
<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/create.php" method="POST" class="col s12">
    <fieldset class="formulario">
      <legend><img src="imagens/logo-28bc-site2.png" alt="imagem" width="70"></legend>
      <!--<legend>Dados Pessoais</legend>-->
      <h5 class="light center">Entrada do Processo</h5>

      <?php
      if (isset($_SESSION['msg'])) :
        echo $_SESSION['msg'];
        session_unset();
      endif;
      ?>

      <!--CAMPO NOME-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nome" id="nome" maxlength="60" required>
        <label for="nome">Nome Completo</label>
      </div>
      <!--MUNICIPIO DE ATUAÇÃO-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">location_on</i>
        <input type="text" name="munic_atu" id="munic_atu" maxlength="40" required>
        <label for="munic_atu">Município de Atuação</label>
      </div>

      <!--UF-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">location_on</i>
        <input type="text" name="uf" id="uf" maxlength="20" required>
        <label for="uf">UF</label>
      </div>

      <!--CPF/CNPJ-->
      <div class="input-field" col s12>
        <i class="material-icons prefix">credit_card</i>
        <input type="text" name="cpf_cnpj" id="cpf_cnpj" maxlength="40" required>
        <label for="cpf_cnpj">CPF/CNPJ</label>
      </div>

      <!--BOTOES-->
      <div class="input-fiels col 12s">
        <input type="submit" value="Cadastrar" class="btn blue">
        <input type="submit" value="Limpar" class="btn red">
      </div>

    </fieldset>
  </form>


</div>

<?php include_once 'includes/footer.inc.php' ?>
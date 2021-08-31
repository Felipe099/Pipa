<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
<?php include_once 'banco_de_dados/conexao.php' ?>


<div class="row container">
  <div>
    <h5 class="light">Consultas</h5>
    <hr>


    <table class="striped centered">

      <thead>
        <tr>
          <th>Nome</th>
          <th>CPF/CNPJ</th>
          <th>Município</th>
          <th>Situação DOC</th>
          <th>Volume</th>
          <th>Situação</th>
          <th>Operador</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include_once 'banco_de_dados/read.php';
        ?>

      </tbody>
    </table>
  </div>
</div>


<?php include_once 'includes/footer.inc.php' ?>
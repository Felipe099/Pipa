<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>



<div class="row container">
  <div class="col s12">
    <h5 class="light">Consultas</h5>
    <hr>
    <section>
      <form method="GET">

        <div class="input-field valign-wrapper col s6">

          <label>Buscar Nome</label>
          <input type="text" name="busca" class="form-control" value=<?php ?>>
        </div>
        <input type="submit" value="Pesquisar" class="btn blue">

      </form>
    </section>



    <table class="striped">

      <thead>
        <tr>
          <th>Nome</th>
          <th>CPF/CNPJ</th>
          <th>Município</th>
          <th>Estado</th>
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
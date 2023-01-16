
<div class="container">
<form class="row g-3" action="<?php echo site_url('note/store') ?>" method="POST">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Nome:</label>
    <input name="title" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">CPF:</label>
    <input type="text" name="description" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Função:</label>
    <input type="text" name="empresa" class="form-control" id="inputPassword4">
  </div> <br>

  <!--<div class="col-md-2">
    <label for="inputPassword4" class="form-label">Local Visita:</label>
    <input type="text" name="local_visita" class="form-control" id="inputPassword4">
  </div>-->

  <div class="col-md-2">
    <label for="inputState" class="form-label">local Visita:</label>
    <select id="inputState" class="form-select" name="local_visita">
    <?php foreach ($inquilinos as $empresa) : ?>
      <option selected>Choose...</option>

      <option selected value="<?php echo $empresa->nome_empresa?>"><?php echo $empresa->nome_empresa ?></option>
     
      <?php endforeach; ?>
    </select>
  </div>

  <div class="col-4" style="margin-bottom:20px">
    <button type="submit" class="btn btn-primary">SALVAR</button>
  </div><br>
</form> 

</div>
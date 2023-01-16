<div class="container">
  
<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Novo Usuário</h2>
        </div>
    </div>
</div><br>
<form class="row g-3" action="<?php echo site_url('note/store') ?>" method="POST">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Nome:</label>
    <input name="title" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">CPF:</label>
    <input type="text" name="description" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Empresa:</label>
    <input type="text" name="empresa" class="form-control" id="inputPassword4">
  </div> <br>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">SALVAR</button>
  </div>
</form> 
</div>




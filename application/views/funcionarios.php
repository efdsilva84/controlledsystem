<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="row">
    <div class="col-lg-12 mt20">
        <div class="pull-left">
            <h2>Buscar Credencial</h2>
        </div>
    </div>
</div><br>

<form action="<?php echo site_url('note/pesquisar') ?>" method="POST" >
<div class="col-md-4">
    <label for="inputEmail4" class="form-label">Nº Credencial:</label>
    <input name="busca" id="busca" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-4" style="margin-top:45px;">
    <button type="submit" class="btn btn-primary">BUSCAR</button>
  </div><br>
</form>

<div class="row">
    <div class="col-lg-12 mt30">
        <div class="pull-left">
            <h2>Novo Registro Funcionários</h2>
        </div>
    </div>
</div>


<form class="row g-3" action="<?php echo site_url('note/novoFuncionarioPost') ?>" method="POST">

<div class="col-md-2">
    <label for="inputEmail4" class="form-label">Nº Credencial:</label>
    <input name="n_credencial" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Nome:</label>
    <input name="usu_credencial" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">CNH:</label>
    <input type="text" name="cnh_credencial" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Tipo Veículo:</label>
    <input type="text" name="tipo_veiculo" class="form-control" id="inputPassword4">
  </div> 

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Modelo:</label>
    <input type="text" name="modelo" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Cor:</label>
    <input type="text" name="cor" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Placa:</label>
    <input type="text" name="placa" class="form-control" id="inputPassword4">
  </div>

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Tipo de Acesso:</label>
    <input type="text" name="tipo_acesso" class="form-control" id="inputPassword4">
  </div><br><br>
  <div class="col-4" style="margin-top:28px;">
    <button type="submit" class="btn btn-primary">SALVAR</button>
  </div><br>
</form> 
<hr>
<table class="table table-striped table-hover">
       <thead>
          <tr>
             <th>Nº Credencial</th>
             <th>Nome</th>
             <th>CNH</th>
             <th>Tipo Veículo</th>
             <th>Modelo</th>
             <th>Cor</th>
             <th>Placa</th>
             <th>Tipo de Acesso</th>
          </tr>
       </thead>
       <tbody>
          <?php if($credenciais): ?>
          <?php foreach($credenciais as $note): ?>
          <tr>
             <td><?php echo $note->n_credencial; ?></td>
             <td><?php echo $note->usu_credencial; ?></td>
             <td><?php echo $note->cnh_credencial; ?></td>
             <td><?php echo $note->tipo_veiculo; ?></td>
             <td><?php echo $note->modelo; ?></td>
             <td><?php echo $note->cor; ?></td>
             <td><?php echo $note->placa; ?></td>
             <td><?php echo $note->tipo_acesso; ?></td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
    </table>
    <hr>
</main>



<div class="container-fluid">

<!--BUSCAR POR CREDENCIAL-->





<!--BUSCAR POR CREDENCIAL-->






<br>
<hr>



    </div>
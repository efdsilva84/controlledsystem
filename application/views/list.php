<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Registros</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h3 class="h2">Novo Registro</h3>
	</div>

  <form class="row g-3" action="<?php echo site_url('note/store') ?>" method="POST">
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Nome:</label>
      <input name="title" type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-2">
      <label for="inputPassword4" class="form-label">CPF:</label>
      <input type="text" name="description" class="form-control" id="inputPassword4">
    </div>

    <div class="col-md-2">
      <label for="inputPassword4" class="form-label">Empresa:</label>
      <input type="text" name="empresa" class="form-control" id="inputPassword4">
    </div> <br>

    <div class="col-md-2">
      <label for="inputPassword4" class="form-label">Local Visita:</label>
      <input type="text" name="local_visita" class="form-control" id="inputPassword4">
    </div>


    <div class="col-4" style="margin-top:27px">
      <button type="submit" class="btn btn-primary">SALVAR</button>
    </div><br>
  </form> 

	<div class="table-responsive" style="margin-top:30px;">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
            <th>DATA</th>
             <th>NOME</th>
             <th>CPF</th>
             <th>EMPRESA</th>
             <th>ENTRADA</th>
             <th>SAÍDA</th>
             <th>LOCAL VISITA</th>
				</tr>
			</thead>
      <tbody>
          <?php if($notes): ?>
          <?php foreach($notes as $note): ?>
          <tr>
             <td><?php echo $note->data_entrada; ?></td>
             <td><?php echo $note->title; ?></td>
             <td><?php echo $note->description; ?></td>
             <td><?php echo $note->empresa; ?></td>
             <td><?php echo $note->hora_entrada; ?></td>             <td></td>
             <td><?php echo $note->local_visita; ?></td>



          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
		</table>
	</div>
</main>

    
<div class="container-fluid">



<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Novo Registro</h2>
        </div>
    </div>
</div><br>


    <div class="row mt40">


 
    
    
</div>
 
</div>
     

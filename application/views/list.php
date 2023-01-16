
    
<div class="container">
<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Novo Registro</h2>
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

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Empresa:</label>
    <input type="text" name="empresa" class="form-control" id="inputPassword4">
  </div> <br>

  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Local Visita:</label>
    <input type="text" name="local_visita" class="form-control" id="inputPassword4">
  </div>


  <div class="col-4" style="margin-bottom:20px">
    <button type="submit" class="btn btn-primary">SALVAR</button>
  </div><br>
</form> 
    <div class="row mt40">

   <div class="col-md-10">
    <h2>Pedestres</h2>
   </div>
   <br><br>
 
    <table class="table table-striped table-hover" style="width:100%">
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
 
</div>
     

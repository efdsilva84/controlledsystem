
    
<div class="container">
    <div class="row mt40">
   <div class="col-md-10">
    <h2>Usuários do Sistema</h2>
   </div>
   <br><br>
 
    <table class="table table-bordered">
       <thead>
          <tr>
             <th>Data Cadastro</th>
             <th>Nome</th>
             <th>CPF</th>
             <th>Matrícula</th>
             <th>Função</th>
             <th>Líder</th>

          </tr>
       </thead>
       <tbody>
          <?php if($usuarios): ?>
          <?php foreach($usuarios as $usuario): ?>
          <tr>
          <td><?php echo $usuario->data_cadastro; ?></td>

             <td><?php echo $usuario->nome; ?></td>
             <td><?php echo $usuario->cpf; ?></td>
             <td><?php echo $usuario->matricula; ?></td>
             <td><?php echo $usuario->funcao; ?></td>

             <td><?php echo $usuario->nome_lider; ?></td>

          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
    </table>
    
</div>
 
</div>
     

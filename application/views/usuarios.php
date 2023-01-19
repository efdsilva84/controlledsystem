<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-40">
<h1>Usuários do Sistema</h1 class="mt-20">

   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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

</main>





    
     

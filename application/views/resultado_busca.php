<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div class="table-responsive" style="margin-top:20px;">
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
          <?php if($resultado): ?>
          <?php foreach($resultado as $note): ?>
          <tr>
             <td><?=$note['n_credencial'] ?></td>
             <td><?=$note['usu_credencial'] ?></td>
             <td><?=$note['modelo'] ?></td>
             <td><?=$note['cor'] ?></td>
             <td><?=$note['placa'] ?></td>
             <td><?=$note['tipo_acesso'] ?></td>
 



          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
		</table>
	</div>
          </main>
<h1 class="text-center text-light">
  Todas as Tarefas
</h1>

<div class="row bg-white p-3 mb-4 rounded-4" style="width: 80%;">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Conluida</th>
      <th scope="col">Data criação</th>
    </tr>
  </thead>
  <tbody >
    
      <?php  
      $retorno = $_SESSION['retorno'] ?? '';   
      unset($_SESSION['retorno']);    
      foreach($retorno as $tarefa){?>
        <tr>
          <th scope="row"><?=$tarefa['id']?></th>
          <td><?=$tarefa['titulo']?></td>
          <td><?=substr($tarefa['descricao'],0,60)?></td>
          <td><?php echo $tarefa['concluida'] == false ? "Não":"Sim";?></td>
          <td><?=$tarefa['created_at']?></td>
        </tr> 
      <?php  } ?>    
       
  </tbody>
</table>
</div>
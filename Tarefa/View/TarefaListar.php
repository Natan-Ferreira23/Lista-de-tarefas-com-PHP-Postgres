<h1 class="text-center text-light">
  Todas as Tarefas
</h1>

<div class="row bg-white p-3 mb-4 rounded-4" style="width: 80%;">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"class="bg-secondary">ID</th>
      <th scope="col"class="bg-secondary text-center">Titulo</th>
      <th scope="col"class="bg-secondary text-center">Descrição</th>
      <th scope="col" class="bg-secondary">Concluida</th>
      <th scope="col" class="bg-secondary ">Data criação</th>
      <th scope="col" class="bg-secondary text-center">Ações</th>
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
          <td><?= $tarefa['concluida'] == false ? "Não":"Sim"?></td>
          <td><?=substr($tarefa['created_at'],0,10)?></td>          
             <td class="text-center">
                <a href="./Tarefa/Routes/TarefaRoutes.php?rota=4"
                  class="btn btn-success">
                    <i class="bi bi-check"></i>
                </a>               
                 <a href="./Tarefa/Routes/TarefaRoutes.php?rota=6&id=<?=$tarefa['id']?>"  class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i>
                 </a>
                <a href="./Tarefa/Routes/TarefaRoutes.php?rota=4&id=<?=$tarefa['id']?>" class="btn btn-danger">
                  <i class="bi bi-trash-fill"></i>
                </a>                
              </td>          
        </tr> 
      <?php  } ?>    
       
  </tbody>
</table>
</div>
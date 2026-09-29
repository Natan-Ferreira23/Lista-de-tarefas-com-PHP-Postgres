<?php 
    $retorno = $_SESSION['retorno'] ?? '';
    unset($_SESSION['retorno']);
?>
<div class="alert alert-light text-center rounded-3 align-items-center d-flex justify-content-center flex-column" role="alert" style="min-width: 600px;min-height:200px">  
    <h5><?=$retorno?>  </h5>
    
    <a href="./Tarefa/Routes/TarefaRoutes.php?rota=2" class="btn btn-primary mt-2">Pagina Inicial</a>
</div>


    
    
    

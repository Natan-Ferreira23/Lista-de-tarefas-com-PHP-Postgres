

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>To-do List</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="row d-flex justify-content-between " >
                    <!-- MENU -->
            <div class=" bg-white container-fluid col-md-12 mb-5" style="height: 8vh;">
                <?php require_once './View/menu.php'; ?>
            </div>         
            
            <!-- CONTEÚDO -->
            <main class="col-md-12 d-flex bg-dark  flex-column justify-content-center align-items-center" style="min-height: 87vh;" >
                <?php 
                    session_start();
                    $rota= $_SESSION['rota'] ?? '';
                    unset($_SESSION['rota']);   

                    if(empty($rota) || $rota=="0"){
                        require_once './View/Home.php';      
                        //require_once './Tarefa/View/TarefaNotFound.php';                  
                    }elseif($rota=="1"){
                        require_once './Tarefa/View/TarefaCadastrar.php';   
                    }elseif($rota=='2'){
                        require_once './Tarefa/View/TarefaListar.php'; 
                    }
                    elseif($rota=='3'){
                        require_once './Tarefa/View/TarefaInfo.php';                                                    
                    }elseif($rota=='4'){
                        require_once './Tarefa/View/TarefaDeletar.php';                                                    
                    }elseif($rota=='5'){
                        require_once './Tarefa/View/TarefaEditar.php';                                                    
                    }
                    else{
                        require_once './Tarefa/View/TarefaNotFound.php';
                    }                
                ?> 
           
            </main>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
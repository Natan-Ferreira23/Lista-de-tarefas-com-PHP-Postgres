<?php
    require_once __DIR__ . '/../Controller/TarefaController.php';    

    $rota = filter_input(INPUT_GET,'rota',FILTER_DEFAULT);   
    if($rota =='0'){
        session_start();
        $_SESSION['rota'] = $rota;
        header('Location: ../../index.php');
    }elseif($rota=='1'){
        session_start(); //
        $_SESSION['rota'] = $rota;
        header('Location: ../../index.php');
    }
    elseif ($rota == "3"){ //criar tarefa
        $titulo = filter_input(INPUT_POST,'titulo',FILTER_DEFAULT);
        $descricao= filter_input(INPUT_POST,'descricao',FILTER_DEFAULT);
        $tarefa = new Tarefa();
        $tarefa->CriarTarefa($titulo,$descricao);

    }elseif($rota == "2"){ //listar tarefa
        $tarefa = new Tarefa();
        $retorno = $tarefa->ListarTarefas();        
    }elseif($rota=="4"){ // exclusao
        $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);  
        $tarefa = new Tarefa();
        $retorno = $tarefa->ListarTarefa($id);       
    }
        
    
    
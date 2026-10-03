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
        $retorno = $tarefa->CriarTarefa($titulo,$descricao);
        $tarefa->mostrarInfo($retorno,$rota);
    }elseif($rota == "2"){ //listar tarefa
        $tarefa = new Tarefa();
        $retorno = $tarefa->ListarTarefas();    
        $tarefa->mostrarInfo($retorno,$rota);

    }elseif($rota=="4"){ // listar a tarefa 
        $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);  
        $tarefa = new Tarefa();
        $retorno = $tarefa->ListarTarefa($id);     
        $tarefa->mostrarInfo($retorno,$rota);  
    }elseif($rota=="5"){ // deletar a tarefa 
        $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);         
        $tarefa = new Tarefa();
        $retorno = $tarefa->DeletarTarefa($id);     
        $tarefa->mostrarInfo($retorno,"3");        
    }elseif($rota=="6"){ // editar a tarefa 
        $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);         
        $tarefa = new Tarefa();
        $retorno = $tarefa->ListarTarefa($id);     
        $tarefa->mostrarInfo($retorno,"5");
    }elseif($rota=="7"){ // salvar a tarefa editada
        $id = filter_input(INPUT_POST,'idHidden',FILTER_DEFAULT);  
        $titulo = filter_input(INPUT_POST,'titulo',FILTER_DEFAULT);
        $descricao= filter_input(INPUT_POST,'descricao',FILTER_DEFAULT);
        var_dump($id,$titulo,$descricao);
        $tarefa = new Tarefa();
        $retorno = $tarefa->EditarTarefa($id,$titulo,$descricao);     
        $tarefa->mostrarInfo($retorno,"3");
    }
    
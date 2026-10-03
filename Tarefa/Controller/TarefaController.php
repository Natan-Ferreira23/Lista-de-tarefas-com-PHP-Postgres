<?php
require_once __DIR__ . '/../Model/TarefaModel.php';


Class Tarefa {
    private int $id;
    private string $titulo;
    private string $descricao;
    private bool $concluida;
    private string $created_at;

    // public function __construct(int $id, string $titulo, string $descricao, bool $concluida, string $created_at) {
    //     $this->id = $id;
    //     $this->titulo = $titulo;
    //     $this->descricao = $descricao;
    //     $this->concluida = $concluida;
    //     $this->created_at = $created_at;
    // }
    public function getId(): int {
        return $this->id;
    }
    public function getTitulo(): string {
        return $this->titulo;
    }
    public function getDescricao(): string {
        return $this->descricao;
    }
    public function isConcluida(): bool {
        return $this->concluida;
    }
    public function getCreatedAt(): string {
        return $this->created_at;
    }
    public function setId(int $id): void {
        $this->id = $id;
    }
    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }
    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }
    public function setConcluida(bool $concluida): void {
        $this->concluida = $concluida;
    }
    public function setCreatedAt(string $created_at): void {
        $this->created_at = $created_at;
    }

    public function CriarTarefa($titulo,$descricao){
         if (!empty($titulo) && !empty($descricao)){
            $tarefa = new TarefaDatabase();
            $retorno = $tarefa->insertTarefa($titulo, $descricao);   
         }else{
            $retorno = "Titulo ou descricao vazio !!!";
         }            
        
         //$this->mostrarInfo($retorno,"3");
         return $retorno;
    }
    public function ListarTarefas(){
        $tarefa  = new TarefaDatabase();
        $retorno = $tarefa->selectTarefa();     
        //$this->mostrarInfo($retorno,"2");
        return $retorno;        
    }
    
    public function ListarTarefa(string $id){
        $tarefa  = new TarefaDatabase();
        $retorno = $tarefa->selectTarefa($id);             
        return $retorno;
    }
    public function DeletarTarefa(string $id){
        $tarefa  = new TarefaDatabase();
        $retorno = $tarefa->deleteTarefa($id);             
        return $retorno;
    }
    public function mostrarInfo($dados, $rota){
        session_start();
        $_SESSION['retorno'] = $dados;
        $_SESSION['rota'] = $rota;
        header('Location: ../../index.php');
        exit;
    }
   public function EditarTarefa(string $id, string $titulo, string $descricao){
        
        if(Empty($id)){
            $retorno = "ID vazio !!!";
        }elseif (!empty($titulo) && !empty($descricao)){
            $tarefa  = new TarefaDatabase();
            $retorno = $tarefa->updateTarefa($id,$titulo,$descricao);             
        }else{
            $retorno = "Titulo ou descricao vazio !!!";
        }            
        return $retorno;
    }
}

/*
Criar tarefa
Listar tarefas
Marcar como concluída
Excluir
Filtrar:
Todas
Pendentes
Concluídas

Banco:

tarefas
----------------
id
titulo
descricao
concluida
created_at


*/
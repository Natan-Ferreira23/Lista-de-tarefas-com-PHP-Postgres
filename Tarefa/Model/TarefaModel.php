<?php

 require __DIR__ .'/../../Database/Database.php';

 Class TarefaDatabase{
    public function insertTarefa(string $nome,string $descricao):string{       
        
        $pdo = $this->conecct();
        $concluida = FALSE;        
        
        try{

            $sql= 'INSERT INTO  "tarefas"(titulo,descricao,concluida)  VALUES (:titulo,:descricao, :concluida )';
            $stmt = $pdo->prepare($sql);            

            $stmt->bindValue(':titulo', $nome, PDO::PARAM_STR);
            $stmt->bindValue(':descricao', $descricao, PDO::PARAM_STR);
            $stmt->bindValue(':concluida', $concluida, PDO::PARAM_BOOL);
            $stmt->execute();
            $retorno = "A classe com titulo " . $nome . " e descrição " . $descricao ." foi includia com sucesso !!";
        }catch(PDOException $e){   
            $retorno = "aconteceu um erro:" . $e->getMessage();
            
            //exit();
        }
        return $retorno;
    }

    public function selectTarefa(string $id=""){  
        $pdo = $this->conecct();
        try{
            if(empty($id)){
              $sql= 'SELECT id, titulo, descricao, concluida, created_at FROM tarefas ';  
              $stmt = $pdo->prepare($sql);     
              $stmt->execute();
              $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            }else{
               $sql= 'SELECT id, titulo, descricao, concluida, created_at FROM tarefas WHERE ID = :id';
              
               $stmt = $pdo->prepare($sql);       
               $stmt->bindValue(':id', $id, PDO::PARAM_INT);
               $stmt->execute();
               $retorno = $stmt->fetch(PDO::FETCH_ASSOC); 
            }        
        }catch(PDOException $e){   
            $retorno = "aconteceu um erro:" . $e->getMessage();            
            //exit();
        }
        return $retorno;
    }
    public function deleteTarefa(string $id){  
        $pdo = $this->conecct();
        try{
            $sql= 'DELETE FROM tarefas WHERE ID = :id';
            $stmt = $pdo->prepare($sql);       
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $retorno = "A tarefa com id " . $id ." foi deletada com sucesso !!";
        }catch(PDOException $e){   
            $retorno = "aconteceu um erro:" . $e->getMessage();            
            //exit();
        }
        return $retorno;
    }

    private function conecct(){
        try{
           $pdo = Database::getInstance();
        }
        catch (PDOException $e)
        {
            $pdo = "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
        return $pdo;
    }
}
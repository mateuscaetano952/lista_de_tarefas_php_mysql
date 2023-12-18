<?php

class Tarefa_service{
    private $tarefa;
    private $conexao;
    public function __construct(Tarefa $tarefa,Conexao $conexao){
        $this->tarefa = $tarefa;
        $this->conexao = $conexao->conectar();
        
    }

    public function inserir(){
        $query = "insert into tb_tarefas(tarefa)values(:tarefa)";
        try {
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
            echo "cheguei";
            header('Location:http://localhost/nova_tarefa.php?sucesso=1');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function recuperar(){
        
        $query = "
            select 
                id, id_status, tarefa
            from
                tb_tarefas
        ";
        try {
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
    
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }

    public function atualizar(){
            $query = "
            UPDATE tb_tarefas
            SET tarefa = :tarefa 
            WHERE id = :id
        "; 

        try{
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'),);
            $stmt->bindValue(':id', $this->tarefa->__get('id'),);
            $stmt->execute();
        
            }catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        
            header('Location:http://localhost/todas_tarefas.php?sucesso=1');

    }

    public function excluir(){
        
    }
}

?>
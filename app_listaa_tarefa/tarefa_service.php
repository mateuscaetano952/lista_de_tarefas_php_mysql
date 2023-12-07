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
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
    }

    public function recuperar(){
        
    }

    public function modifica(){
        
    }

    public function excluir(){
        
    }
}

?>
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
        header('Location:http://localhost/nova_tarefa.php?sucesso=1');
    }

    public function recuperar(){
        
    }

    public function modifica(){
        
    }

    public function excluir(){
        
    }
}

?>
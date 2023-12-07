<?php 
 
    class Tarefa{
        private $id;
        private $id_status;
        private $tarefa;
        private $data_cadastro;

        public function __get($nome){
            return $this->$nome;
        }

        public function __set($nome, $valor){
            $this->$nome = $valor;
        }
    }

?>
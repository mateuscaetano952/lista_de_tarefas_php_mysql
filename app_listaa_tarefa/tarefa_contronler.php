<?php
    
    require('./../app_listaa_tarefa/conexao.php');
    require('./../app_listaa_tarefa/tarefa_model.php');
    require('./../app_listaa_tarefa/tarefa_service.php');
    
   

    if (isset($_GET['acao'])) {
        $acao = $_GET['acao'];
    }

    if ($acao == 'inserir'){
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $conexao = new Conexao();

        $tarefa_service = new Tarefa_service($tarefa, $conexao);
        $tarefa_service->inserir();
    }

    else if($acao == 'recuperar'){
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefa_service = new Tarefa_service($tarefa, $conexao);
        $lista = $tarefa_service->recuperar();

    }

    else if($acao == 'atualizar'){
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefaNova']);
        $tarefa->__set('id', $_POST['idInput']);
        
        $conexao = new Conexao();

        $tarefa_service = new Tarefa_service($tarefa, $conexao);
        $tarefa_service->atualizar();


    }
    
    
    


?>

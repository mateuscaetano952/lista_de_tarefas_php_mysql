<?php
    
    require('./../app_listaa_tarefa/conexao.php');
    require('./../app_listaa_tarefa/tarefa_model.php');
    require('./../app_listaa_tarefa/tarefa_service.php');
    
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);
    print_r($tarefa->__get('tarefa'));
    $conexao = new Conexao();

    $tarefa_service = new Tarefa_service($tarefa, $conexao);

    $tarefa_service->inserir();
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Font awesome-->
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--Meu estilo-->
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    
    <div class="container">
        <header class="mt-4">
        <img src="/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <h2 class="d-inline-block">App lista de tarefas</h2>
        </header>
        <?php if($_GET["sucesso"] == 1){  ?>
            <div class="alert alert-success" role="alert">
                Tarefa salva com sucesso.
            </div>
 
        <?php } ?>




       

        <div class="row content mt-5">
            <aside class="col-md">
                <ul class="list-group">
                    <li class="list-group-item p-3 ">
                        <a class="linkPersonalizado" href="index.php">Tarefas concluidas</a>
                    </li>
                    <li class="list-group-item active p-3">
                        <a class="linkPersonalizado"  href="nova_tarefa.php">Novas tarefas</a>
                    </li>
                    <li class="list-group-item p-3">
                        <a class="linkPersonalizado" href="todas_tarefas.php">Todas as tarefas</a>
                    </li>
                </ul>
            </aside>
            <section class="col-md-9">
                <div class="mt-5">
                    <h2 class="text-success font-weight-bold mb-5">Novas tarefas</h2>
                    <form method="post" action="tarefa_controler.php?acao=inserir">
                        <div class="form-group">
                                <label for="input">Descrição da tarefa:</label>
                                <input name="tarefa" type="text" class="form-control" id="input" placeholder="Exemplo: Ir ao mercado">
                                <button type="submit" class="btn btn-success mt-4">Cadastra</button>
                            </div>
                       </form>
                </div>
            </section>
        </div>
        </div>

   

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
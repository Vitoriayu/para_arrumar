<?php

    include("conexao.php");

    $id_mensagem = intval($_GET['id']); //obriga a ser inteiro usando intval
    if(count($_POST) > 0) {
        
        $sql_editar = "DELETE FROM mensagem WHERE id_mensagem = '$id_mensagem'";
        $deucerto = $mysqli->query($sql_editar) or die ($mysqli->error);
    }


    $sql = "SELECT * FROM mensagem WHERE id_mensagem = '$id_mensagem'"; //comando SQL para listar a tabela desenhos
    $query_mensagem = $mysqli->query($sql) or die ($mysqli->error); //comando para dar o star query
    $mensagem = $query_mensagem->fetch_assoc();
    

    if($mensagem == null){ 
        $mensagem['id_mensagem'] = "Já foi apagado";

        $mensagem['nome'] = "Já foi apagado";

        $mensagem['email'] = "Já foi apagado";
        $mensagem['mensagem'] = "Já foi apagado";
        $mensagem['log'] = "Já foi apagado"; 
    }

    //var_dump($mensagem);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="boo1\css\bootstrap.min.css">
        <link rel="stylesheet" href="cor.css">
        <title>Deletar Mensagem</title>
    </head>
    <body>

        <?php
          include("menu.php")
        ?>
            <div class="container">
        <h1>Tem certeza que deseja deletar esta mensagem?</h1>
            <div class="table-responsive">
    <table class="table table-hover">
            <thead>

                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Mensagem</th>
                <th>Data</th>

            </thead>
    <tbody>
        <tr>
                <td><?php echo $mensagem['id_mensagem']; ?></td>
                <td><?php echo $mensagem['nome']; ?></td>
                <td><?php echo $mensagem['email']; ?></td>
                <td><?php echo $mensagem['mensagem']; ?></td>
                <td><?php echo $mensagem['log'];  ?></td>
                <td>
        </tr>  

    </tbody>    
    </table>
            </div>

        <form action="" method="post">
            <button name="confirmar" value="1" class="btn btn-danger">Sim</button>
            <a href="central_mensagem.php" class="btn btn-default">Não</a>
        </form>
    <?php
        if(isset($deucerto)){ ?>
          <h1>Mensagem deletada com sucesso.</h1>
        <p><a href="central_mensagem.php">Clique aqui para voltar.</a></p>
    <?php

    }
    ?>
            </div>

        <script src="boo1\jquery.js"></script>
        <script src="boo1/js/bootstrap.min.js"></script>
    </body>
</html>
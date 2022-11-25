<?php
    include("conexao.php");

    $sql_mensagens = "SELECT * FROM mensagem";
    $consulta_mensagens = $mysqli->query($sql_mensagens) or die($mysqli->error);
    $quantidade_mensagens = $consulta_mensagens->num_rows; //retomar quantidade de linhas

     


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="boo1/css/bootstrap.min.css">
        <title>Central de Mensagem</title>
    </head>
    <body>
        <!--menu começa-->
        <nav class="navbar navbar-default">
        <div class="container-fluid">

        <!--brand and toggle get grouped for better mobile display-->

        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
            <a id="link_Menu" class="navbar-brand" href="desenho.html">Menu</a>
            <a id="link_Menu" class="navbar-brand" href="central_mensagem.php">Central</a>
            <a id="link_Menu" class="navbar-brand" href="contato.php">Contato</a>
        </div>                     

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        </ul>
        </div> <!--/.navbar-collapse-->
        </div> <!--/.container-fluid-->
        </nav>

        <!--fim começa-->

        <div class="container">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <th> ID </th>
                <th> Nome </th>
                <th> Email </th>
                <th> Mensagem </th>
                <th> Data </th>
                <th> Ações </th>
            </thead>
            <tbody>
                <?php if ( $quantidade_mensagens == 0){ ?>
                <tr>
                    <td colspan="6"> Nenhuma mensagem foi cadastrada.</td>
                </tr>
                <?php    } else {
                    while ($mensagem = $consulta_mensagens -> fetch_assoc()){
                    $data = date("d/m/y h:i", strtotime($mensagem['log']));
                ?>
                    <tr>

                    <td><?php echo $mensagem['id_mensagem']; ?></td>
                    <td><?php echo $mensagem['nome']; ?></td>
                    <td><?php echo $mensagem['email']; ?></td>
                    <td><?php echo $mensagem['mensagem']; ?></td>
                    <td><?php echo $data; ?></td>
                    <td>
                        
                    <a class="btn btn-default" href="editar.php?id=<?php echo $mensagem['id_mensagem']; ?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                    <a class="btn btn-default" href="deletar.php?id=<?php echo $mensagem['id_mensagem']; ?>" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Deletar</a>
        </td>
        </tr>
                
            <?php
            }
            ?>

        <?php
            }
            ?>
        </tbody>


        
        </table>
        </div>
        </div>

        <script src="boo1\jquery.js"></script>
        <script src="boo1/js/bootstrap.min.js"></script>
    </body>
</html>
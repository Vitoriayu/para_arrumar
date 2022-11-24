<?php
    include ("conexao.php");
    if(isset($_GET['id'])){
        $id_mensagem = intval($_GET['id']);
        $sql = "SELECT * FROM mensagem WHERE id_mensagem ='$id_mensagem'";
        $query_mensagem = $mysqli->query($sql) or die ($mysqli->error);
        $mensagem = $query_mensagem->fetch_assoc();


    }else{
        echo "Não tem dados para alterar";
    }

    if(isset($_POST['nome'])){
        $nome = "teste";
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        $sql_editar = "UPDATE mensagem SET nome = '$nome', email= '$email',
             mensagem = '$mensagem'
             WHERE id_mensagem = $id_mensagem'";
             $deucerto = $mysqli->query($sql_editar) or die ($mysqli->error);
    }  
    
      
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coraline-Contato</title>
        <link rel="stylesheet" href="boo1/css/bootstrap.min.css">
        <link rel="stylesheet" href="cor.css">
    </head>
    <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid"> 
        <div class="navbar-header">
            <button id="bt_tres"type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapase-1" aria-expanded="false">
        <span class="sr-only"> Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
            </button>

           <div class="collapse navbar-collapse" id="bs-example-navbar-collapase-1">
         <ul class="nav navbar-nav">
            <a id="link_Menu" class="navbar-brand" href="desenho.html">Menu</a>
            <a id="link_Menu" class="navbar-brand" href="central_mensagem.php">Central</a>
            <a id="link_Menu" class="navbar-brand" href="contato.html">Contato</a>
         </ul>

    </div>
        </div>
           </div>

    </nav>
        <div class="container">

            <h1>Editar:</h1>
            <form action="cadastrar.php" method="post"> 
                <div class="form-group">
                    <label for="">Nome:</label> 
                    <input value="<?php echo $mensagem['nome']?>" name="nome" required type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label> Email:</label>
                    <input value="<?php echo $mensagem['email']?>" name= "email" required type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mensagem:</label>
                    <textarea name="mensagem" required class="form-control" rows="3"><?php echo $mensagem['mensagem'] ?></textarea>
                </div>
                    <button name="envio" type="submit" class="btn btn-default"> Enviar</button>
                    <button type="reset" class="btn btn-default"> Limpar </button>
                </div>
            </form>

        

   <?php

    if(isset ($deucerto)){
    echo "<h2> Mensagem atualizada com sucesso. </h2>";
    unset($_POST);
   }
   ?>

   <script src="boo1\jquery.js"></script>
   <script src="boo1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    include ("conexao.php");

    if(!isset($_SESSION)){
        session_start();
    }
    
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $mysqli->query("INSERT INTO mensagem (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')") or die ($mysqli->error);

        $_SESSION['msg'] = "<div class='alert alert-success'> Mensagem enviado com sucesso. </div>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coraline-Contato</title>
        <link rel="stylesheet" href="boo1\css\bootstrap.min.css">
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
                            <a id="link_Menu" class="navbar-brand" href="contato.php">Contato</a>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1>Entre em contato:</h1>
            <form action="" method="post"> 
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input name="nome" class="form-control" type="text" required>
                </div>
                <div class="form-group"> 
                    <label for="">Email:</label>
                    <input name="email" class="form-control" type="text" required>
                </div>
                <div class="form-group"> 
                    <label for="">Mensagem:</label>
                    <textarea name="mensagem" class="form-control" type="text" cols="30" rows="10" required></textarea>
                </div>
                <br>
                <div class="form-grup">
                    <button type="submit" class="btn btn-default">Enviar</button>
                    <button type="reset" class="btn btn-default">Limpar</button>
                </div>
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];                        
                        
                        unset($_SESSION['msg']);                   
                    }
                ?> 
            </form>
        </div> 
        <script src="boo1\jquery.js"></script>
        <script src="boo1/js/bootstrap.min.js"></script>

    </body>
</html>

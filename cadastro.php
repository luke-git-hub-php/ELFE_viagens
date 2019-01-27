<!DOCTYPE html>
<html>
    <head>
    <title>Cadastro</title>
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <!-- adicionar CSS Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="css/estilo.css" rel="stylesheet" media="all">
        
    </head>

    <body> 
    
        <div class="page-header">
        
        <h1><center>Cadastro</center></h1>
        </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
<form class="form-horizontal" method="POST" action="cadastro.php">
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Nome Completo: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                                
                            </div>
                       </div>
                        <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">CPF: </label>
                            <div class="col-xs-10">
                                   <input type="text" class="form-control" id="nome" placeholder="CPF" name="cpf">
                                <span class="help-block">Texto de ajuda para o campo. Por exemplo: xxx.xxx.xxx-xx</span> 
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Telefone fixo: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Telefone" name="telefone" >
                                <span class="help-block">Texto de ajuda para o campo. Por exemplo: (xx) xxxxx-xxxx</span> 
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Celular: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Celular" name="celular">
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Cidade: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Cidade" name="cidade">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Estado: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Estado" name="estado">
                                
                            </div>
                       </div>
                       
                       
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">E-mail: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="E-mail" name="email">
                                
                            </div>

                       <div class="form-group">
                           <br><div class="col-xs-offset-2 col-xs-10">
                               <button type="submit" class="btn btn-default">Enviar formulário</button>
                           </div>
                       </div>
                   </form>
                        </div>
                    </div>
                </div>
                  <script src="js/jquery-3.2.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
<?php
                    $conect=mysqli_connect('localhost','root','','viagens') or die (mysqli_error());
                    ?>
                    <?php
                   @$nome=$_POST['nome'];
                   @$cpf=$_POST['cpf'];
                    @$estado=$_POST['estado'];
                   @$telefone=$_POST['telefone'];
                   @$celular=$_POST['celular'];
                  @$cidade=$_POST['cidade'];
                  @$email=$_POST['email'];
                
   $query = mysqli_query($conect, "insert into cliente values('','$nome','$cpf','$cidade','$estado','$email','$telefone','$celular')");


?>
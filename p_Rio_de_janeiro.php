
<html>
    <head>
    <title>Passagem para Rio de janeiro</title>
  
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <!-- adicionar CSS Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="css/estilo.css" rel="stylesheet" media="all">
        
    </head>

    <body> 
    
        <div class="page-header">
        
        <h1><center>Passagem para Rio de janeiro Cadastro</center></h1>
        </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
<form class="form-horizontal"  method="POST" action="p_Rio_de_janeiro.php">
  <div class="form-group">
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
                            <label for="nome" class="col-xs-2 control-label">Cidade onde resida: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Cidade" name="cidade">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Estado onde reside: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Estado" name="estado">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Número da acompanhantes: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="Estado" name="numero_acompanhantes">
                                
                            </div>
                       </div>
                       
                       
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">E-mail: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="E-mail" name="email">
                                
                            </div></div>

                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Data de  saida: </label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" id="cidade" placeholder="Data de  saida" name="data_saida">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Data de chegada: </label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" id="estado" placeholder="Data de chagada" name="data_chegada" >
                                
                            </div>
                             </div>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Qual a qualidade do Hotel </label>
                         
                           


<select name="select">  
  
   <option value="estela_1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>

    
   </div>
                        </div>
  <br>


</form>
</select>
<br>
</body>
</html>
                       </div>
                       <div class="form-group">
                           <br><div class="col-xs-offset-2 col-xs-10">
                               <input type="submit" value="Enviar Formulario">
                           </div>
                       </div>

                   </form>
                    </div>
                    </div>
                </div>
               
              

<br>
  
                  
                       
                  <script src="js/jquery-3.2.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
         </body>
</html>
    
<?php
  
                   @$numero_acompanhantes=$_POST['numero_acompanhantes'];
                  
                   @$data_saida=$_POST['data_saida'];
                  @$data_chagada=$_POST['data_chegada'];
                   @$nome=$_POST['nome'];
                   @$cpf=$_POST['cpf'];
                    @$estado=$_POST['estado'];
                   @$telefone=$_POST['telefone'];
                   @$celular=$_POST['celular'];
                  @$cidade=$_POST['cidade'];
                  @$email=$_POST['email'];
                
   




$valor_passagem=300;
$cidade_destino="Rio de janeiro";
$hotel=$_POST['select'];

@$pacote= $valor_passagem + ($numero_acompanhantes * $valor_passagem)+($numeros_dias * 75.0);
  
 $con=mysqli_connect('localhost','root','','cliente') or die(mysqli_error());


@$query=mysqli_query($con, "insert into cliente values('','$nome','$cpf','$email','$telefone','$celular','$cidade_destino','$cidade','$estado','$data_saida','$data_chagada','$valor_passagem','$numero_acompanhantes','$pacote','$hotel')");  

                   ?>           
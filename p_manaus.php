
<html>
    <head>
    <title>Cadastro</title>
  
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
<form class="form-horizontal"  method="POST" action="cadastro_viagem.php">
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Número de  acompanhantes: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="nome" placeholder="nome" name="numero_acompanhantes">
                                
                            </div>
                       </div>
                        <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Tempo de viagem: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="cpf" placeholder="cpf" name="numeros_dias">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Destino: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="telefone" placeholder="telefone" name="cidade_destino" >
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Qualidade do hotel: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="celular" placeholder="celular" name="qualidade_hotel">
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Data de  saida: </label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" id="cidade" placeholder="cidade" name="data_saida">
                                
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Data de chagada: </label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" id="estado" placeholder="estado" name="data_chagada" >
                                
                            </div>
                            <div class="form-group">
                            <label for="nome" class="col-xs-2 control-label">Hotel </label>
                           <br><br> <input type="checkbox" name="hotel" value="estrela_1"> 1 estrelas
 

  
  <input type="checkbox" name="hotel" value="estrela_2"> 2 estrelas
 
  
     <input type="checkbox" name="hotel" value="estrela_3"> 3 estrelas

    
  <input type="checkbox" name="hotel" value="estrela_4">4  estrelas

   <input type="checkbox" name="hotel" value="estrela_5"> 5 estrelas

  
  
<br><br>

</form>
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
               

  
                  
                       
                  <script src="js/jquery-3.2.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
         </body>
</html>
    
<?php

@$estrela_1 = $_POST['estrela_1'];
@$estrela_2 = $_POST['estrela_2'];
@$estrela_3 = $_POST['estrela_3'];
@$estrela_4 = $_POST['estrela_4'];
@$estrela_5 = $_POST['estrela_5'];



if ("hotel" == $estrela_1) {

 @$valor_passagem=300;
  @$pacote= $valor_passagem + ($numero_acompanhantes * $valor_passagem)+($numeros_dias * 75);
  mysqli_query($con, "insert into viagem values('','$cpf',$numero_acompanhantes','$numeros_dias','$cidade_destino','$estrela_1','$data_saida','$data_chagada','$valor_passagem','$pacote')");

} else if ("hotel" == $estrela_2) {
 @$pacote=$valor_passagem + ($numero_acompanhantes * $valor_passagem) + $valor_passagem + ($numeros_dias * 150);
    mysqli_query($con, "insert into viagem values('','$cpf',$numero_acompanhantes','$numeros_dias','$cidade_destino','$estrela_2','$data_saida','$data_chagada','$valor_passagem','$pacote')");

} else if ("hotel" == $estrela_3) {

@$pacote=$valor_passagem + ($numero_acompanhantes * $valor_passagem)+ $valor_passagem +( $numeros_dias  * 200);
  mysqli_query($con, "insert into viagem values('','$cpf','$numero_acompanhantes','$numeros_dias','$cidade_destino','$estrela_3','$data_saida','$data_chagada','$valor_passagem','$pacote')");

} else if ("hotel" == $estrela_4) {
@$pacote=$valor_passagem + ($numero_acompanhantes * $valor_passagem)+ $valor_passagem +( $numeros_dias  * 370);
  mysqli_query($con, "insert into viagem values('','$cpf',$numero_acompanhantes','$numeros_dias','$cidade_destino','$estrela_4','$data_saida','$data_chagada','$valor_passagem','$pacote')");

} else if ("hotel" == $estrela_5) {

@$pacote= $valor_passagem + ($numero_acompanhantes * $valor_passagem)+$valor_passagem +( $numeros_dias *  550);
    mysqli_query($con, "insert into viagem values('','$cpf',$numero_acompanhantes','$numeros_dias','$cidade_destino','$estrela_5','$data_saida','$data_chagada','$valor_passagem','$pacote')");


                    $con=mysqli_connect('localhost','root','','viagens') or die(mysqli_error());
                 
 
  
                     
                   @$numero_acompanhantes=$_POST['numero_acompanhantes'];
                  @$numeros_dias=$_POST['numeros_dias'];
                  @$cidade_destino=$_POST['cidade_destino'];
                   @$data_saida=$_POST['data_saida'];
                  @$data_chagada=$_POST['data_chagada'];
                  @$pacote=$_POST['email'];
                  @$quantidade_passagem=$_POST['pasagem'];
                

                 
       

                   ?>

                  
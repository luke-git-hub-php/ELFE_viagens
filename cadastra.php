<?php
                    $con=mysqli_connect('localhost','root','','viagens') or die(mysqli_error());
                   $nome=$_POST['nome'];
                   $cpf=$_POST['cpf'];
                   $telefone=$_POST['telefone'];
                   $celular=$_POST['celular'];
                  $cidade=$_POST['cidade'];
                  $estado=$_POST['estado'];
                  $email=$_POST['email'];
                   
$query = mysqli_query($con,"insert into cliente values('','$nome','$cpf','$cidade','$estado','$email','$telefone','$celular')");

                   ?>
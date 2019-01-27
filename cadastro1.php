<html>
<head>
</head>
<body>
<form method="POST" action="cadastro1.php">
nome:<input type="text" name="nome">
CPF:<input type="text" name="cpf">
<input type="submit" value="cadastra">

</form>

</body>
</html>




 <?php
$conect=mysqli_connect("localhost","root","","teste") or die (mysqli_error());

  $nome=$_POST['nome'];
  $cpf=$_POST['cpf'];
    mysqli_query($conect,"insert into cliente values('','$nome','$cpf')");
?>
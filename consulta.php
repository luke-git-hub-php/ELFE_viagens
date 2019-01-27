<?php
 @$con=mysqli_connect('localhost','root','','viagens') or die(mysqli_error());
 ?>
 <html>
 <body>
 <select name="select">

	<?php
	$seleciona = mysqli_query($con,"select * from cliente");
		while ($consulta = mysqli_fetch_assoc($seleciona)){
	?>
		<option value='<?php echo $consulta["id"] ?>'>
	<?php
			
				echo $consulta['id_cliente']."-".$consulta['nome']; 
		?>
	 	</option>
	 <?php } ?>

</body>
</html>
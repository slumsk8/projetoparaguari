<?php 		
	session_start();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>
		<h2>RELATÓRIO</h2>
		<form>
			<table border="1">
				<tr>
					<td>Aluno</td>
					<td>Idade</td>
					<td>Nome da Mãe</td>					
					<td>Nome do Pai</td>					
					<td>Sexo</td>					
					<td>escola</td>					
					<td>serie</td>					
					<td>Observações</td>					
				</tr>
				<tr>
					<td><input type="text" value="<?php echo $_SESSION['nome']; ?>"/></td>
					<td><input type="text" value="<?php echo $_SESSION['idade']; ?>"/></td>
					<td><input type="text" value="<?php echo $_SESSION['mae']; ?>"/></td>					
					<td><input type="text" value="<?php echo $_SESSION['pai']; ?>"/></td>					
					<td><input type="text" value="<?php echo $_SESSION['sexo']; ?>"/></td>					
					<td><input type="text" value="<?php echo $_SESSION['escola']; ?>"/></td>					
					<td><input type="text" value="<?php echo $_SESSION['serie']; ?>"/></td>															
					<td><textarea><?php echo $_SESSION['obs']; ?></textarea></td>					
				</tr>
			</table><br/>
			<a href="index.php">Página Incial</a>
		</form>
	</body>
</html>
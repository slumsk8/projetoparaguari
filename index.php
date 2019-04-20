<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">		
		<script type="text/javascript" src="validacampos.js"></script>
		<link rel="stylesheet" type="text/css" href="estilos.css">			
	</head>
	<body>			
		<h2>--- Cadastro de Alunos - Projeto Paraguari Nova Vida ---</h2>
		<form id="idform" action="valida.php" method="get" onsubmit="return false">				
			<table border="1">			
				<tr>					
					<td colspan="2">---- Dados Pessoais ----</td>					
				</tr>								
				<tr>					
					<td>Nome*:</td>
					<td><input type="text" id="idnome" name="Nome" onmousedown="mudarCor(this)"/></td>															
				</tr>							
				<tr>
					<td>Ano de Nascimento*:</td> 
					<td><input type="number" min="1985" max="2019" id="idano" name="Ano" onChange="calculaIdade()" onmousedown="mudarCor(this)"></td>					
				</tr>
				<tr>					
					<td>Idade:</td> 
					<td><input type="text" id="ididade" name="Idade" readonly="true"/></td>
				</tr>
				<tr>
					<td>Sexo:</td>
					<td>
						<input type="radio" name="Sexo" value="M" checked="checked"/>Masculino</input>
						<input type="radio" name="Sexo" value="F"/>Feminino</input></td>
					</td>
				</tr>				
				<tr>
					<td>Mãe*:</td>
					<td><input type="text" id="idmae" name="Mae" onmousedown="mudarCor(this)"></td>					
				</tr>
				<tr>
					<td>Pai:</td> 
					<td><input type="text" id="idpai" name="Pai"/></td>
				</tr>
				<tr>
					<td colspan="2">---- Dados Escolares ----</td>					
				</tr>	
				<tr>
					<td>Escola:</td> 
					<td>
						<select id="idescola" name="Escola">
							<option>Escola A</option>
							<option>Escola B</option>
							<option>Escola C</option>
							<option>Escola D</option>
							<option>Escola E</option>
						</select>
					</td>					
				</tr>
				<tr>
					<td>Série:</td> 
					<td><input type="text" id="idserie" name="Serie"/></td>
				</tr>
				<tr>
					<td>Obs.:</td>
					<td><textarea name="Obs" id="idobs"></textarea></td>
				</tr>								
			</table>						
			<input type="submit" id="idbotao" value="Cadastrar" name="enviar" onClick="validaCampos(this,Nome)"/>
			<input type="reset" value="Limpar Campos" name="btnlimpar" onClick="limparCampos()"/>
		</form>				
	</body>
</html>
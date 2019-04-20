<?php			
	session_start();
	// Validando dados do formulário. Verificando se foram todos recebidos.			
	if($nome = isset($_REQUEST['Nome']) && $ano = isset($_REQUEST['Ano']) && $idade = isset($_REQUEST['Idade']) && $mae = isset($_REQUEST['Mae']) && $pai = isset($_REQUEST['Pai']) 
		&& $sexo = isset($_REQUEST['Sexo']) && $escola = isset($_REQUEST['Escola']) && $serie = isset($_REQUEST['Serie'])){		
		$nomeA = ($_REQUEST['Nome']);
		$anoA = ($_REQUEST['Ano']);
		$idadeA = ($_REQUEST['Idade']);
		$maeA = ($_REQUEST['Mae']);
		$paiA = ($_REQUEST['Pai']);
		$sexoA = ($_REQUEST['Sexo']);
		$escolaA = ($_REQUEST['Escola']);
		$serieA = ($_REQUEST['Serie']);
		$obsA = ($_REQUEST['Obs']);
		
		// Verificando se não estão vazios.
		if($nomeA != "" && $anoA != "" && $maeA != ""){
			$msg = "Cadastro realizado com Sucesso!";
			$_SESSION['nome'] = $nomeA;
			$_SESSION['idade'] = $idadeA;
			$_SESSION['mae'] = $maeA;
			$_SESSION['pai'] = $paiA;
			$_SESSION['sexo'] = $sexoA;
			$_SESSION['escola'] = $escolaA;
			$_SESSION['serie'] = $serieA;
			$_SESSION['obs'] = $obsA;
			echo "<script>";							
			echo "alert('$msg');";	
			echo "window.location.href = 'relatorio.php';";				
			echo "</script>";						
		// Verifico aqui se os campos obrigatórios foram preenchidos.
		}else{
			$msg = "Preencha os campos corretamente!";												
		}			
	}
?>
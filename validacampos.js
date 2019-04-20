function validaCampos(){								
	var formulario = document.getElementById('idform');
	var nome = formulario.idnome;
	var ano = formulario.idano;
	var mae = formulario.idmae;
	
	if(nome.value == "" ){		
		alert("O campo nome é obrigatório");										
		nome.focus();		
		nome.style.background = '#FF0000';			
		return false;
	}else if(ano.value == ""){
		alert("O campo ano de nascimento é obrigatório");										
		ano.focus();				
		ano.style.background = '#FF0000';
		return false;		
	}else if(idmae.value == ""){
		alert("O campo nome da mãe é obrigatório");										
		mae.focus();				
		mae.style.background = '#FF0000';
		return false;		
	}else if(nome.value != "" && ano.value != "" && mae.value != ""){		
		formulario.onsubmit = "return true";		
	}
}

function calculaIdade(){	
	var formulario = document.getElementById('idform');
	var nasc = formulario.idano.value;
	var idadeAluno = formulario.ididade;
	var anoAtual = new Date();	
	var idade = anoAtual.getFullYear() - nasc;	
	idadeAluno.value = idade;
	return idade;
}

function mudarCor(obj){
	obj.style.background = '#FFFFFF';
}

function limparCampos(){
	idnome.style.background = '#FFFFFF';
	idano.style.background = '#FFFFFF';
	idmae.style.background = '#FFFFFF';
}
	



			
	





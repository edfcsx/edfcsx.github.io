<?php
/*
Codigo PHP para validação do formulario de Login com o Banco de dados.
Autor : Manga Softs
DBA : PHPMYADMIN
*/
session_start();

//---------------Inclusão do codigo de conexão-------------------
include_once 'conexao.php';
//======Limitação de acesso pelo botão ignorando a url===========
//---------------Variaveis---------------------------------------
$btlogin = $_POST['btlogin'];
//---------------Tratamento--------------------------------------
	if ($btlogin == 1) {
//__________Variaveis de Login e Senha___________________________
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
//__________Seleção dos campos no banco de dados.		
		$result_usuario = "SELECT id,usuario,senha,nome FROM usuarios WHERE usuario='{$usuario}' LIMIT 1";
		echo $result_usuario;
//__________Conexão do banco com a seleção informada_____________
		$resultado_usuario = mysqli_query($con, $result_usuario);
//__________Verificando o retorno da solicitação_________________	
		$row_usuario = mysqli_fetch_assoc($resultado_usuario);
		if(password_verify($senha,$row_usuario['senha'])){
			header("Location:admin.php");
		}else{
			echo "Login ou senha incorretos";
		}
}		
else{
		header("Location:_tratamentos/erro01.html");
}
?>

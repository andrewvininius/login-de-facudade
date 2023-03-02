<?php
session_start();

// Verifica se o usuário já está logado
if(isset($_SESSION['username'])){
	header("Location: dashboard.php");
	exit();
}

// Verifica se o formulário de login foi submetido
if(isset($_POST['username']) && isset($_POST['password'])){
	// Realiza a validação do login
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Aqui você deve realizar uma consulta ao banco de dados para verificar se o usuário e a senha estão corretos.
	// Por exemplo:
	if($username == "admin" && $password == "12345"){
		// Se as credenciais estiverem corretas, salva o nome de usuário na sessão e redireciona para a página do dashboard
		$_SESSION['username'] = $username;
		header("Location: dashboard.php");
		exit();
	}else{
		// Caso contrário, exibe uma mensagem de erro
		echo "Usuário ou senha incorretos.";
	}
}
?>

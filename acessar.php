<?php

$user = $_POST["usuario"];
$pwd  = $_POST["senha"];

if($user=="leandro" && $pwd=="uninove"){
	session_start();
	$_SESSION["nome"] = $user;
	header("location:restrita.php");	
}else{
	echo "Usuário ou senha inválida!<br>";
	echo "<a href='index.php'>Voltar</a>";
}

?>
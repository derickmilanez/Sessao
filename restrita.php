<?php
session_start();

if(!isset($_SESSION["nome"])){
  echo "<script>";
  	echo "alert('Faça o login!');";
  	echo "document.location='index.php';";
  echo "</script>";
  header("location:index.php");
}

?>

<html>
<head></head>
<body>

Olá <?php echo $_SESSION["nome"]; ?>,

Parabéns você está logado!<br><br>
Está é uma area restrita!<br><br>

<a href="logout.php">Sair</a>

</body>
</html>
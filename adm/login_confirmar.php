<?php
include "../conexao.php"; 
 
 $email = $_POST["inputEmail"];
 $senha = $_POST["inputPassword"];
 
 $sql = "select * from administrador where email= :email and senha= :senha";

 $result = $conexao->prepare($sql);
 $result ->bindValue(":email", $email);
 $result ->bindValue(":senha", $senha);
 $result ->execute();
 
 $qtde = $result->rowCount();
 
 if ($qtde == 1)
 {
	 session_start();
	 $linha = $result->fetch(PDO::FETCH_ASSOC);
	 $_SESSION["CodAdmin"] = $linha ["CodAdmin"];
	 $_SESSION["NomeAdmin"] = $linha ["NomeAdmin"];
	 header("location: ver_feira.php");

 }
	
else
{
	header("location: index.php?erro=E-mail/username ou senha invalidos.");
}
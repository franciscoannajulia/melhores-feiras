<?php
	include "../conexao.php";
		
		$Codigo = $_POST["codigo"];
		
		 $sql = "delete from administrador where CodAdmin = :Codigo";
		 $result = $conexao->prepare($sql);
		 $result->bindValue(":Codigo", $Codigo);
		 $result->execute();
		 
		 echo "O registro de $Codigo foi excluido com sucesso !";
		 
		 header("location: index.php");
	
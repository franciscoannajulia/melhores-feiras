<?php
	include "../conexao.php";
	
		$Codigo = $_POST["codigo"];
		
		 $sql = "delete from feira where CodFeira = :Codigo";
		 $result = $conexao->prepare($sql);
		 $result->bindValue(":Codigo", $Codigo);
		 $result->execute();

		 echo "O registro de $Codigo foi excluido com sucesso !";
		 
		 header("location: ver_feira.php");
	
	
  ?>
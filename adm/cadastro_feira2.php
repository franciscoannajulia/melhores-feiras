<?php
	  include "../conexao.php";
		
		$NomeFeira =$_POST["nome"];
		$Estado=$_POST["estado"];
		$Cidade=$_POST["cidade"];
		$Setor =$_POST["setor"];
		$DataInicio=$_POST["datainicio"];
		$DataFim=$_POST["datafim"];
		$Descricao =$_POST["descricao"];
		$Site =$_POST["site"];
		$Realizador =$_POST["realizador"];
		$Contato =$_POST["contato"];

		//SE ESTIVER ERRO LEMBR-SE colocar no form ->enctype="multipart/form-data"

		//diretorio para salvar
		$diretorio1 = '../img/capa/';
		$salvarcapa = $diretorio1.basename($_FILES["capa"]["name"]);

		//para preencher a tabela
		$url1 = 'img/capa/';
		$linkcapa = $url1.basename($_FILES["capa"]["name"]);
		
		
	if (move_uploaded_file($_FILES["capa"]["tmp_name"], $salvarcapa))
	{
	
	
		$sql="insert into feira values ( null, :NomeFeira, :Estado, :Cidade, :Setor, :DataInicio, :DataFim, :Descricao, :linkcapa, :Contato, :Realizador, :Site)";
		  
		  $result= $conexao->prepare($sql); 
		  $result->bindValue(":NomeFeira", $NomeFeira); 
		  $result->bindValue(":Estado", $Estado); 
		  $result->bindValue(":Cidade", $Cidade); 
		  $result->bindValue(":Setor", $Setor); 
		  $result->bindValue(":DataInicio", $DataInicio); 
		  $result->bindValue(":DataFim", $DataFim); 
		  $result->bindValue(":Descricao", $Descricao); 
		  $result->bindValue(":linkcapa", $linkcapa); 
		  $result->bindValue(":Contato", $Contato); 
		  $result->bindValue(":Realizador", $Realizador); 
		  $result->bindValue(":Site", $Site); 

	      $result->execute();

		 header("location: ver_feira.php");
		
	}
	else {
		echo "Desculpe, ocorreu um erro ao fazer upload do seu arquivo..";
	}
?>
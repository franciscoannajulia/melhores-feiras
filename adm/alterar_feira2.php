<?php
    include "../conexao.php";	
    $CodFeira= $_POST["codigo"];	
    $nome= $_POST["nome"];
    $cidade= $_POST["cidade"];
    $estado= $_POST["estado"];
    $setor= $_POST["setor"];
    $datainicio= $_POST["datainicio"];
    $datafim= $_POST["datafim"];
    $descricao= $_POST["descricao"];
    $site =$_POST["site"];
    $realizador =$_POST["realizador"];
    $contato =$_POST["contato"];

        

    if (isset($_FILES["capa"]["name"])){

        $diretorio1 = '../img/capa/';
        $novacapa = $diretorio1.basename($_FILES["capa"]["name"]);	
        $url1 = 'img/capa/';
        $linknovo = $url1.basename($_FILES["capa"]["name"]);

        if (move_uploaded_file($_FILES["capa"]["tmp_name"], $novacapa))
        {

        $sql1="update feira set NomeFeira =:nome, Estado =:estado, Cidade=:cidade, Setor=:setor, DataInicio=:datainicio, DataFim=:datafim, Descricao=:descricao, Capa= :linknovo, Contato = :contato, Realizador = :realizador, Site= :site where CodFeira =:CodFeira";

        $result1= $conexao->prepare($sql1); 
        $result1->bindValue(":CodFeira", $CodFeira); 
        $result1->bindValue(":nome", $nome); 
        $result1->bindValue(":estado", $estado); 
        $result1->bindValue(":cidade", $cidade); 
        $result1->bindValue(":setor", $setor); 
        $result1->bindValue(":datainicio", $datainicio); 
        $result1->bindValue(":datafim", $datafim); 
        $result1->bindValue(":descricao", $descricao); 
        $result1->bindValue(":linknovo", $linknovo); 
        $result1->bindValue(":contato", $contato); 
        $result1->bindValue(":realizador", $realizador); 
        $result1->bindValue(":site", $site); 
        $result1->execute();

        header("location: ver_feira.php");
        }
        }
    //NAO FAZ A SEGUNDA OPCAO A BAIXO
        else {
            $sql2="select * from feira where CodFeira = :CodFeira";
        $result2= $conexao->prepare($sql2); 
        $result2->bindValue(":CodFeira", $CodFeira); 
        $result2->execute();
        $linha2 = $result2->fetch(PDO::FETCH_ASSOC);

        $linkcapa = $linha2["Capa"];
        
        $sql="update feira set NomeFeira =:nome, Estado =:estado, Cidade=:cidade, Setor=:setor, DataInicio=:datainicio, DataFim=:datafim, Descricao=:descricao, Capa= :linkcapa,  Contato = :contato, Realizador = :realizador, Site= :site where CodFeira =:CodFeira";
		  
		  $result= $conexao->prepare($sql); 
		  $result->bindValue(":CodFeira", $CodFeira); 
          $result->bindValue(":nome", $nome); 
          $result->bindValue(":estado", $estado); 
          $result->bindValue(":cidade", $cidade); 
          $result->bindValue(":setor", $setor); 
          $result->bindValue(":datainicio", $datainicio); 
          $result->bindValue(":datafim", $datafim); 
          $result->bindValue(":descricao", $descricao); 
          $result->bindValue(":linkcapa", $linkcapa); 
          $result->bindValue(":contato", $contato); 
          $result->bindValue(":realizador", $realizador); 
          $result->bindValue(":site", $site); 
	      $result->execute();
          
		  header("location: ver_feira.php");
        }
?>
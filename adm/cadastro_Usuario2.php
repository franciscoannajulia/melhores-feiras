<?php   
      include "../conexao.php";	

     $nome = $_POST["nome"];
     $login = $_POST["login"];
     $senha1 = $_POST["senha1"];
     $senha2 =$_POST["senha2"];     
     $email =$_POST["email"];

              if($senha1 != $senha2)
              {
              
                echo "<script>
                alert('Senhas Não Coincidem');
                history.go(-1);
                </script>
                ";
                header("location: ../../erro.php?erro=Ocorreu o seguinte erro: ".$erro->getMessage());
                exit;
                  
              }
              else {
		$sql="insert into administrador values ( null, :nome, :email, :login, :senha1)";
		  
		  $result= $conexao->prepare($sql);
		  $result->bindValue(":nome", $nome); 
		  $result->bindValue(":login", $login); 
		  $result->bindValue(":senha1", $senha1); 
		  $result->bindValue(":email", $email); 
	      $result->execute();

		  		  header("location: perfil_Usuario.php");

			  }
?>
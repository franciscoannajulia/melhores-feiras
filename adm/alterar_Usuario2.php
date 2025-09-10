     <?php   
         include "../conexao.php";	

     $nome = $_POST["nome"];
     $login = $_POST["login"];
     $senha1 = $_POST["senha1"];
     $senha2 =$_POST["senha2"];     
     $email =$_POST["email"];
	
    $Codigo = $_POST["codigo"];
 
    if($senha1 == $senha2)
    {
    $sql="update administrador set NomeAdmin =:nome, Email =:email, Login=:login, Senha=:senha1 where CodAdmin =:Codigo";
    $result= $conexao->prepare($sql); 
    $result->bindValue(":Codigo",$Codigo);
    $result->bindValue(":nome",$nome);
    $result->bindValue(":email",$email);
    $result->bindValue(":senha1",$senha1);
    $result->bindValue(":login",$login);
    $result->execute();
    header("location: perfil_Usuario.php");

    }
    else 
    {
      
      header("location: ../../erro.php?erro=Ocorreu o seguinte erro: ");
      exit;
    }
?> 
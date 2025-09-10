<?php 
    include("../conexao.php");
		session_start();
        if (isset($_SESSION["CodAdmin"]))
        {
            $CodAdmin = $_SESSION["CodAdmin"];
            $NomeAdmin = $_SESSION["NomeAdmin"];
            include ("menu_adm.php");
        }
        else
        {
        
            header("Location: ../index.php");
        
        }
        ?>
<!doctype html>
<html lang="en">

<head>
<link href="img/logo.ico" rel="shortcut icon"/>

    <!--Multipurpose: Modelo grátis por FreeHTML5.co Autor: https://freehtml5.co Facebook: https://facebook.com/fh5co Twitter: https://twitter.com/fh5co -->
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Título do documento -->
<title>Melhores Feiras</title>
    <!-- Folhas de estilo e fontes -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700" rel="stylesheet">
    <!-- Plugins de Folhas de estilo -->
    <link rel="stylesheet" href="../assets/css/loader/loaders.css">
    <link rel="stylesheet" href="../assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/aos/aos.css">
    <link rel="stylesheet" href="../assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="../assets/css/lightgallery.min.css">
    <!-- Template Folhas de estilo -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Responsive Folhas de estilo -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!--Glyphicon-->
    <link rel="stylesheet" href="../assets/css/glyphicon.css">
    <!--Carrossel
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <style>
    /* Make the image fully responsive */
    .page-info-section{
		background-image: url(../assets/images/page-bg/2.jpg);
		background-repeat:no-repeat;
    }
    /*-----------------------------------
    IMPORTANTE NAO TIRAR - Cabeçalho paginas (sem ser index)
    ------------------------------------*/
    .page-info-section {
        height: 443px;
    }
    .set-bg {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }
    .site-breadcrumb {
        padding-top: 20%;
    }

    .site-breadcrumb a,
    .site-breadcrumb span {
        display: inline-block;
        margin-right: 2%;
        padding-right: 10px;
        font-weight: 600;
        font-size: 18px;
    }

    .site-breadcrumb a {
        color: #fff;
        position: relative;
    }

    .site-breadcrumb a:after {
        position: absolute;
        content: "/";
        right: -6px;
        top: 0;
        color: #fff;
    }

    .site-breadcrumb span {
        color: #208fef;
    }

    @media (min-width: 1200px) {
        .ccontainer {
            max-width: 1180px;
            margin-left: 5%;
        }
    }
    .form-control{
    display:block;
    width:100%;
    height:calc(1.5em + .75rem + 2px);
    padding:.375rem .75rem;
    font-size:1rem;
    font-weight:400;
    line-height:1.5;
    color:#495057;
    background-clip:padding-box;
    border:1px solid #ced4da;
    border-radius:.25rem;
    transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out
}
@media (prefers-reduced-motion:reduce){
    .form-control{
        transition:none
    }
}
    /*-----------------------------------
    IMPORTANTE NAO TIRAR - FORMULARIO DA PAGINA PARTIPE (sem ser index)
    ------------------------------------*/
.form-control::-ms-expand{
    background-color:transparent;
    border:0
}
.form-control:focus{
    color:#495057;
    border-color:#80bdff;
    outline:0;
    box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.form-control::-webkit-input-placeholder{
    color:#6c757d;
    opacity:1
}
.form-control::-moz-placeholder{
    color:#6c757d;
    opacity:1
}
.form-control:-ms-input-placeholder{
    color:#6c757d;
    opacity:1
}
.form-control::-ms-input-placeholder{
    color:#6c757d;
    opacity:1
}
.form-control::placeholder{
    color:#6c757d;
    opacity:1
}
.form-control:disabled,.form-control[readonly]{
    opacity:1
}
select.form-control:focus::-ms-value{
    color:#495057;
}

    </style>
</head>
<body>
<?php 

		if (isset($_REQUEST["id"]))
	{	
		$CodAdmin = $_REQUEST["id"];
		
		$sql = "select * from administrador where CodAdmin = :CodAdmin";
		$result = $conexao -> prepare($sql);
		$result->bindValue(":CodAdmin", $CodAdmin);
		$result->execute();
		$linha = $result->fetch(PDO::FETCH_ASSOC);
       
	}
?>
    <!-- Loader Inicio -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader Fim -->
    <!-- Fim do cabeçalho e Menu -->
	<div class="page-info-section set-bg">
		<div class="ccontainer">
			<div class="site-breadcrumb">
            <a href="index.php">Início</a>
				<a href="#">Expositores</a>
				<span>Cadastro</span>
			</div>
		</div>
	</div>    
    <!-- Início dos serviços (Postagens) -->
    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">Alterar Usuario</h1>
            </div>
            <div class="container">
            <form action="alterar_Usuario2.php" method="post">                        
            <div class="form-row">
                          <div class="form-group col-md-2">
                            <label for="inputEmail4">Código do Usuario: <span style="color:red">*não pode alterar</span></label>
                            <input class="form-control"  name="codigo" type="text" id="codigo" value="<?php echo $linha["CodAdmin"]?>">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome:</label>
                            <input value="<?php echo $linha["NomeAdmin"]?>" type="text" class="form-control" id="nome" name="nome" placeholder="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">E-mail:</label>
                            <input value="<?php echo $linha["Email"]?>" type="email" class="form-control" id="email" name="email" placeholder="">
                          </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">Login:</label>
                            <input value="<?php echo $linha["Login"]?>" type="text" class="form-control" id="login" name="login">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputCity">Senha:</label>
                            <input value="<?php echo $linha["Senha"]?>" type="password" class="form-control" id="senha1" name="senha1">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputState">Digite Novamente:</label>
                            <input value="<?php echo $linha["Senha"]?>" type="password" class="form-control" id="senha2" name="senha2" placeholder="">
                            </select>
                          </div>
                      </div>
                     
                        <button type="submit" class="btn btn-primary">Alterar</button>
                      </form>  

          </div>
        </div>
        
    </section>
    <!-- Fim dos serviços (Postagens) -->

    <!-- Footer Incio -->
    <?php include ("footer.php"); ?>
    <!-- FooterFim -->
    <!--jQuery-->
    <script src="../assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/loaders.css.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/swiper.min.js"></script>
    <script src="../assets/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="../assets/js/main.js"></script>
    <!--Botão Subir-->
    <script>
    var mybutton = document.getElementById("myBtn");
    //Quando o usuário rolar 20 px da parte superior do documento, mostre o botão
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
    }
    //Quando o usuário clicar no botão, role para a parte superior do documento
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
</body>

</html>
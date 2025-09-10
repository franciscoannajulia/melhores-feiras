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
		background-image: url(../assets/images/page-bg/01.jpg);
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
/* BOTAO */
.botao-info{
    color:#fff;
    background-color:#5bc0de;
    border-color:#46b8da
}
.botao-info.focus,.botao-info:focus{
    color:#fff;
    background-color:#31b0d5;
    border-color:#1b6d85
}
.botao-info:hover{
    color:#fff;
    background-color:#31b0d5;
    border-color:#269abc
}
.botao-info.active,.botao-info:active,.open>.dropdown-toggle.botao-info{
    color:#fff;
    background-color:#31b0d5;
    background-image:none;
    border-color:#269abc
}
.botao-info.active.focus,.botao-info.active:focus,.botao-info.active:hover,.botao-info:active.focus,.botao-info:active:focus,.botao-info:active:hover,.open>.dropdown-toggle.botao-info.focus,.open>.dropdown-toggle.botao-info:focus,.open>.dropdown-toggle.botao-info:hover{
    color:#fff;
    background-color:#269abc;
    border-color:#1b6d85
}
.botao-info.disabled.focus,.botao-info.disabled:focus,.botao-info.disabled:hover,.botao-info[disabled].focus,.botao-info[disabled]:focus,.botao-info[disabled]:hover,fieldset[disabled] .botao-info.focus,fieldset[disabled] .botao-info:focus,fieldset[disabled] .botao-info:hover{
    background-color:#5bc0de;
    border-color:#46b8da
}
.botao-info .badge{
    color:#5bc0de;
    background-color:#fff
}

.botao-link{
    font-weight:400;
    color:#337ab7;
    border-radius:0
}
.botao-link,.botao-link.active,.botao-link:active,.botao-link[disabled],fieldset[disabled] .botao-link{
    background-color:transparent;
    -webkit-box-shadow:none;
    box-shadow:none
}
.botao-link,.botao-link:active,.botao-link:focus,.botao-link:hover{
    border-color:transparent
}
.botao-link:focus,.botao-link:hover{
    color:#23527c;
    text-decoration:underline;
    background-color:transparent
}
.botao-link[disabled]:focus,.botao-link[disabled]:hover,fieldset[disabled] .botao-link:focus,fieldset[disabled] .botao-link:hover{
    color:#777;
    text-decoration:none
}
.botao{
    display:inline-block;
    margin-bottom:0;
    font-weight:400;
    text-align:center;
    white-space:nowrap;
    vertical-align:middle;
    -ms-touch-action:manipulation;
    touch-action:manipulation;
    cursor:pointer;
    background-image:none;
    border:1px solid transparent;
    padding:6px 12px;
    font-size:14px;
    line-height:1.42857143;
    border-radius:4px;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none
}
.botao.active.focus,.botao.active:focus,.botao.focus,.botao:active.focus,.botao:active:focus,.botao:focus{
    outline:5px auto -webkit-focus-ring-color;
    outline-offset:-2px
}
.botao.focus,.botao:focus,.botao:hover{
    color:#333;
    text-decoration:none
}
.botao.active,.botao:active{
    background-image:none;
    outline:0;
    -webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);
    box-shadow:inset 0 3px 5px rgba(0,0,0,.125)
}
.botao.disabled,.botao[disabled],fieldset[disabled] .botao{
    cursor:not-allowed;
    filter:alpha(opacity=65);
    opacity:.65;
    -webkit-box-shadow:none;
    box-shadow:none
}
a.botao.disabled,fieldset[disabled] a.botao{
    pointer-events:none
}
.botao-default{
    color:#333;
    background-color:#fff;
    border-color:#ccc
}
.botao-default.focus,.botao-default:focus{
    color:#333;
    background-color:#e6e6e6;
    border-color:#8c8c8c
}
.botao-default:hover{
    color:#333;
    background-color:#e6e6e6;
    border-color:#adadad
}
.botao-default.active,.botao-default:active,.open>.dropdown-toggle.botao-default{
    color:#333;
    background-color:#e6e6e6;
    background-image:none;
    border-color:#adadad
}
.botao-default.active.focus,.botao-default.active:focus,.botao-default.active:hover,.botao-default:active.focus,.botao-default:active:focus,.botao-default:active:hover,.open>.dropdown-toggle.botao-default.focus,.open>.dropdown-toggle.botao-default:focus,.open>.dropdown-toggle.botao-default:hover{
    color:#333;
    background-color:#d4d4d4;
    border-color:#8c8c8c
}
.botao-default.disabled.focus,.botao-default.disabled:focus,.botao-default.disabled:hover,.botao-default[disabled].focus,.botao-default[disabled]:focus,.botao-default[disabled]:hover,fieldset[disabled] .botao-default.focus,fieldset[disabled] .botao-default:focus,fieldset[disabled] .botao-default:hover{
    background-color:#fff;
    border-color:#ccc
}
.botao-default .badge{
    color:#fff;
    background-color:#333
}

.botao-success{
    color:#fff;
    background-color:#5cb85c;
    border-color:#4cae4c
}
.botao-success.focus,.botao-success:focus{
    color:#fff;
    background-color:#449d44;
    border-color:#255625
}
.botao-success:hover{
    color:#fff;
    background-color:#449d44;
    border-color:#398439
}
.botao-success.active,.botao-success:active,.open>.dropdown-toggle.botao-success{
    color:#fff;
    background-color:#449d44;
    background-image:none;
    border-color:#398439
}
.botao-success.active.focus,.botao-success.active:focus,.botao-success.active:hover,.botao-success:active.focus,.botao-success:active:focus,.botao-success:active:hover,.open>.dropdown-toggle.botao-success.focus,.open>.dropdown-toggle.botao-success:focus,.open>.dropdown-toggle.botao-success:hover{
    color:#fff;
    background-color:#398439;
    border-color:#255625
}
.botao-success.disabled.focus,.botao-success.disabled:focus,.botao-success.disabled:hover,.botao-success[disabled].focus,.botao-success[disabled]:focus,.botao-success[disabled]:hover,fieldset[disabled] .botao-success.focus,fieldset[disabled] .botao-success:focus,fieldset[disabled] .botao-success:hover{
    background-color:#5cb85c;
    border-color:#4cae4c
}
.botao-success .badge{
    color:#5cb85c;
    background-color:#fff
}
.botao-info{
    color:#fff;
    background-color:#5bc0de;
    border-color:#46b8da
}
.botao-info.focus,.botao-info:focus{
    color:#fff;
    background-color:#31b0d5;
    border-color:#1b6d85
}
.botao-info:hover{
    color:#fff;
    background-color:#31b0d5;
    border-color:#269abc
}
.botao-info.active,.botao-info:active,.open>.dropdown-toggle.botao-info{
    color:#fff;
    background-color:#31b0d5;
    background-image:none;
    border-color:#269abc
}
.botao-info.active.focus,.botao-info.active:focus,.botao-info.active:hover,.botao-info:active.focus,.botao-info:active:focus,.botao-info:active:hover,.open>.dropdown-toggle.botao-info.focus,.open>.dropdown-toggle.botao-info:focus,.open>.dropdown-toggle.botao-info:hover{
    color:#fff;
    background-color:#269abc;
    border-color:#1b6d85
}
.botao-info.disabled.focus,.botao-info.disabled:focus,.botao-info.disabled:hover,.botao-info[disabled].focus,.botao-info[disabled]:focus,.botao-info[disabled]:hover,fieldset[disabled] .botao-info.focus,fieldset[disabled] .botao-info:focus,fieldset[disabled] .botao-info:hover{
    background-color:#5bc0de;
    border-color:#46b8da
}
.botao-info .badge{
    color:#5bc0de;
    background-color:#fff
}.botao-danger{
    color:#fff;
    background-color:#d9534f;
    border-color:#d43f3a
}
.botao-danger.focus,.botao-danger:focus{
    color:#fff;
    background-color:#c9302c;
    border-color:#761c19
}
.botao-danger:hover{
    color:#fff;
    background-color:#c9302c;
    border-color:#ac2925
}
.botao-danger.active,.botao-danger:active,.open>.dropdown-toggle.botao-danger{
    color:#fff;
    background-color:#c9302c;
    background-image:none;
    border-color:#ac2925
}
.botao-danger.active.focus,.botao-danger.active:focus,.botao-danger.active:hover,.botao-danger:active.focus,.botao-danger:active:focus,.botao-danger:active:hover,.open>.dropdown-toggle.botao-danger.focus,.open>.dropdown-toggle.botao-danger:focus,.open>.dropdown-toggle.botao-danger:hover{
    color:#fff;
    background-color:#ac2925;
    border-color:#761c19
}
.botao-danger.disabled.focus,.botao-danger.disabled:focus,.botao-danger.disabled:hover,.botao-danger[disabled].focus,.botao-danger[disabled]:focus,.botao-danger[disabled]:hover,fieldset[disabled] .botao-danger.focus,fieldset[disabled] .botao-danger:focus,fieldset[disabled] .botao-danger:hover{
    background-color:#d9534f;
    border-color:#d43f3a
}
.botao-danger .badge{
    color:#d9534f;
    background-color:#fff
}
/* LEIA MAIS*/ 
.leiamais{
  max-width: 10ch;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
    </style>
</head>
<body>
<?php 

        include ("../conexao.php");

		if (isset($_REQUEST["id"]))
	{	
		$CodFeira = $_REQUEST["id"];
		
		$sql = "select * from feira where CodFeira = :CodFeira";
		$result = $conexao -> prepare($sql);
		$result->bindValue(":CodFeira", $CodFeira);
		$result->execute();
		$linha = $result->fetch(PDO::FETCH_ASSOC);
        
    

	}
?>
    <!-- Loader Inicio -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader Fim -->
    <div class="page-info-section set-bg">
		<div class="ccontainer">
			<div class="site-breadcrumb">
				<a href="ver_feira.php">Início</a>
                <a  href="#">Feira</a>
			</div>
		</div>
	</div>  
    <!-- Início dos serviços (Postagens) -->
    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue"><?php echo $linha["NomeFeira"]?></h1>
                <p>Setor/Área: <?php echo $linha["Setor"]?>.<br/>
               Estado: <?php echo $linha["Estado"]?>. <br/>Cidade: <?php echo $linha["Cidade"]?><br/>
            Realizador da Feira: <?php echo $linha["Realizador"]?><br/>
            Site: <?php echo $linha["Site"];?> </br>
            Contato: <?php echo $linha["Contato"]?><br/>
               <a class="botao botao-danger" href="alterar_feira.php?id=<?php echo $CodFeira?>" role="button">Alterar Feira</a><br/></p>

            </div>
            
 
  
 
        </div>
        
    </section>
    <!-- Fim dos serviços (Postagens) -->
    <!-- Modal -->
   
            </div>
            </div>
            </div>

            </div><!--/tab-pane-->
            </div><!--/tab-content-->
            </div>
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
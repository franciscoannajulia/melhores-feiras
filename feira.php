<!DOCTYPE html>
<html lang="en">
<head>
	<title>Melhores Feiras</title>
	<meta charset="UTF-8">
	<meta name="description" content="Arcade - Architecture Template">
	<meta name="keywords" content="arcade, architecture, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/logo.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>
/* LEIA MAIS*/ 
.leiamais{
  max-width: 40ch;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
</style>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<?php
		include "menu.php";	
        include ("conexao.php");
        $sql = "select * from feira";
        $result = $conexao->prepare($sql);	
		$result->execute();   
		
	?>


	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="img/header-bg.jpg">
		<div class="container">
			<h1 class="header-title">As Melhores Feiras<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->



	&nbsp;&nbsp;&nbsp;
	<!-- Projects section start -->
	<div class="container">
                <div class="row">
                <?php	
                    while ($linha = $result->fetch(PDO::FETCH_ASSOC))
                    {	
                    $CodFeira = $linha["CodFeira"];
                    $DataInicio =  $linha["DataInicio"];
                    $DataFim =  $linha["DataFim"];
                ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <div class="media-body">
                            <img class="medidacatalago" src="<?php echo $linha["Capa"]?>">
                              <h5><?php echo $linha["NomeFeira"]?></h5>
                              <div class="leiamais"><?php echo $linha["Descricao"]?></div>                            </br>
                            <a href="visualizar.php?id=<?php echo $linha["CodFeira"]?>" style="background-color: #baff00;color: black">Ver Mais</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
	<!-- Projects section end -->

	&nbsp;&nbsp;&nbsp;
	

	<?php
		include "rodape.php";	
	?>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.owl-filter.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
	<!-- GTranslate: https://gtranslate.io/ -->
	<style type="text/css">
	a.gflag {vertical-align:middle;font-size:24px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/24.png);}
	a.gflag img {border:0;}
	a.gflag:hover {background-image:url(//gtranslate.net/flags/24a.png);}
	#goog-gt-tt {display:none !important;}
	.goog-te-banner-frame {display:none !important;}
	.goog-te-menu-value:hover {text-decoration:none !important;}
	body {top:0 !important;}
	#google_translate_element2 {display:none!important;}
	</style>

	<div id="google_translate_element2"></div>
	<script type="text/javascript">
	function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'pt',autoDisplay: false}, 'google_translate_element2');}
	</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


	<script type="text/javascript">
	/* <![CDATA[ */
	eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createFeirabject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
	/* ]]> */
	</script>
	<!-- GTranslate FIM -->
</body>
</html>
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
	<!-- Hero section start -->
	<section class="hero-section">
		<!-- left social link ber 
		<div class="left-bar">
			<div class="left-bar-content">
				<div class="social-links">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>-->
		<!-- hero slider area -->
		<div class="hero-slider">
			<div class="hero-slide-item set-bg" data-setbg="img/bg.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Melhores <br>Feiras <br> do Brasil</h2>
					<a href="#MF" class="site-btn sb-light">Veja a Baixo</a>
					</div>	
				</div>
			</div>	
			<div class="hero-slide-item set-bg" data-setbg="img/bg.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Calendário <br>do <br> Agronegócio</h2>
					<a href="http://www.calendariodoagronegocio.com.br/" target="_blank" class="site-btn sb-light">Ir</a>
					</div>	
				</div>
			</div>	
			<div class="hero-slide-item set-bg" data-setbg="img/bg.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Cátalogo <br>dos <br> Expositores</h2>
					<a href="http://www.catalogodosexpositores.com.br/" target="_blank" class="site-btn sb-light">Ir</a>
					</div>	
				</div>
			</div>	
		</div>
	</section>
	<!-- Hero section end -->

	&nbsp;&nbsp;&nbsp;
	<!-- Projects section start -->
	<div class="projects-section pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="section-title">
						<h1 id="MF">Conheça...</h1>
					</div>
				</div>
				<!--<div class="col-lg-9">
					<ul class="projects-filter-nav">
						<li class="btn-filter" data-filter="*">Todas</li>
						<li class="btn-filter" data-filter=".rest">Agronegócio</li>
						<li class="btn-filter" data-filter=".build">Tecnologia</li>
						<li class="btn-filter" data-filter=".apart">Saúde</li>
					</ul>
				</div>-->
			</div>
		</div>                      
		<div id="projects-carousel" class="projects-slider">
		<?php	
          while ($linha = $result->fetch(PDO::FETCH_ASSOC))
          {	
            $CodFeira = $linha["CodFeira"];
            $DataInicio =  $linha["DataInicio"];
            $DataFim =  $linha["DataFim"];
        ?>  
			<div class="single-project set-bg rest" data-setbg="<?php echo $linha["Capa"]?>">
				<div class="project-content">
					<h2><?php echo $linha["NomeFeira"]?></h2>
					<p><?php echo date('d/m/Y', strtotime($DataInicio))?> à <?php echo date('d/m/Y', strtotime($DataFim))?></p>
					<a href="visualizar.php?id=<?php echo $CodFeira?>" class="seemore">Veja mais </a>
				</div>
			</div>
		<?php 
			}
		?>
		</div>
	</div>
	<!-- Projects section end -->


	<!-- CTA section start -->
	<section class="cta-section pt100 pb50">
		<div class="cta-image-box"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
					<h2 class="sp-title">Conheça mais sites patrocionado pelo <span>IBCE</span></h2>
					<p>Acesse o <a href="http://www.calendariodoagronegocio.com.br/" target="_blank" style="color: #baff00"  title="Clique" >Calendario do Agronecio</a> e fique por dentro dos eventos e suas datas. 
					<br>O <a href="http://www.catalogodosexpositores.com.br/" target="_blank" style="color: #baff00"  title="Clique" >Catálogo dos Expositores</a> apresenta as diversas feiras do agronegócio. 
					<br>Conheça mais sobre o <a href="http://ibce.com.br/" target="_blank" style="color: #baff00"  title="Clique" >IBCE</a>.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- CTA section end -->

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
	eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
	/* ]]> */
	</script>
	<!-- GTranslate FIM -->
</body>
</html>
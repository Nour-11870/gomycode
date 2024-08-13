






﻿


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
	<link rel="canonical" href="https://www.samomoi.com/cours/l-architecture-d-un-syst-me-radio-mobile-34.php"/> 
<link rel="icon" type="image/png" href="https://www.samomoi.com/favicon.png">
<link type="text/css" rel="stylesheet" href="https://www.samomoi.com/Styles/SyntaxHighlighter.css">
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>  
<script type="text/javascript" src="bbcode/jquery.js"></script>
<link rel="stylesheet" href="bbcode/minified/themes/default.min.css" type="text/css" media="all" />
<script src="bbcode/minified/jquery.sceditor.bbcode.min.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushCpp.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shAutoloader.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushAppleScript.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushAS3.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushBash.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushColdFusion.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushCSharp.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushDelphi.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushDiff.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushErlang.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushGroovy.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushJava.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushJavaFX.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushPerl.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushPlain.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushPowerShell.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushPython.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushRuby.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushSass.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushScala.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushVb.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shLegacy.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushPhp.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushSql.js"></script>
<script type="text/javascript" src="SyntaxHighlighter/scripts/shBrushXml.js"></script>
<link type="text/css" rel="stylesheet" href="SyntaxHighlighter/styles/shCore.css">
<link type="text/css" rel="stylesheet" href="SyntaxHighlighter/styles/shThemeDefault.css">
<script type="text/javascript">
SyntaxHighlighter.all();
// obligatoire
SyntaxHighlighter.config.clipboardSwf =
'scripts/clipboard.swf'
;
//affiche le flash permettant de voir,imprimer le code
SyntaxHighlighter.config.stripBrs =
true
;
//Permet de ne pas afficher les sauts de lignes

SyntaxHighlighter.config.tagName =
"pre"
;
// Encadrement du code dans les balises <pre>...</pre>

SyntaxHighlighter.defaults[
'smart-tabs'
] =
true
;
//affichage du nombre de ligne

SyntaxHighlighter.config.strings.viewSource =
"Voir la source"
;
// traduction de viewSource

SyntaxHighlighter.config.strings.print =
"imprimer"
;
//traduction de Print 

</script>

 

<title> L’architecture d’un système radio mobile </title>
 <link rel="icon" type="image/png" href="https://www.samomoi.com/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="https://www.samomoi.com/includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://www.samomoi.com/css/modern-business.css" rel="stylesheet">
	<link href="https://www.samomoi.com/css/style-ancien.css" rel="stylesheet">
	
	</head>

﻿<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="https://www.samomoi.com">SAMOMOI</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="https://www.samomoi.com">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.samomoi.com/forum">Forum</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://www.samomoi.com/cours" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Cours
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
			   <a class="dropdown-item" href="http://www.samomoi.com/electroniqueanalogique">Electronique analologique</a>
 <a class="dropdown-item" href="https://www.samomoi.com/electroniquenumerique">Electronique numérique</a>
 <a class="dropdown-item"href="https://www.samomoi.com/electroniquedepuissance">Electronique de Puissance</a>
 <a class="dropdown-item" href="https://www.samomoi.com/microprocesseur">Microprocesseur</a>
 <a class="dropdown-item" href="https://www.samomoi.com/reseauxinformatiques">Réseaux Informatiques</a>
 <a class="dropdown-item" href="https://www.samomoi.com/html">Html/css</a>
 <a class="dropdown-item" href="https://www.samomoi.com/javascript">Javascript</a>
 <a class="dropdown-item" href="https://www.samomoi.com/php">PHP/ Mysql</a>
 <a class="dropdown-item" href="https://www.samomoi.com/c">C/C++</a>
 <a class="dropdown-item" href="https://www.samomoi.com/java">Java</a>
 <a class="dropdown-item" href="https://www.samomoi.com/sql">SQL</a>
 <a class="dropdown-item" href="https://www.samomoi.com/oracle">ORACLE</a>
 <a class="dropdown-item" href="https://www.samomoi.com/ordinateur">L'ordinateur</a>
 <a class="dropdown-item" href="https://www.samomoi.com/windows">Windows</a>
 <a class="dropdown-item" href="https://www.samomoi.com/linux">Linux</a>
 <a class="dropdown-item" href="https://www.samomoi.com/teleinformatique">Téléinformatique</a>
 <a class="dropdown-item" href="https://www.samomoi.com/reseauxtelecoms">Réseaux Télécoms</a>
 <a class="dropdown-item" href="https://www.samomoi.com/systemedecommunication">Système de Communication</a>
              </div>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="http://www.samomoi.com/logiciels">Logiciels</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tutos
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="https://www.samomoi.com/astuces">Archives des astuces</a>
                         <a  class="dropdown-item" title="Informatique" href="https://www.samomoi.com/cours/categorie.php?id=15">Informatique</a><a  class="dropdown-item" title="Electronique" href="https://www.samomoi.com/cours/categorie.php?id=17">Electronique</a><a  class="dropdown-item" title="Télécommunication" href="https://www.samomoi.com/cours/categorie.php?id=18">Télécommunication</a><a  class="dropdown-item" title="Téléinformatique" href="https://www.samomoi.com/cours/categorie.php?id=19">Téléinformatique</a><a  class="dropdown-item" title="Réseaux télécoms" href="https://www.samomoi.com/cours/categorie.php?id=20">Réseaux télécoms</a><a  class="dropdown-item" title="Electronique analogique" href="https://www.samomoi.com/cours/categorie.php?id=21">Electronique analogique</a><a  class="dropdown-item" title="Electronique numÃ©rique" href="https://www.samomoi.com/cours/categorie.php?id=22">Electronique numÃ©rique</a><a  class="dropdown-item" title="Electronique de puissance" href="https://www.samomoi.com/cours/categorie.php?id=23">Electronique de puissance</a><a  class="dropdown-item" title="Windows" href="https://www.samomoi.com/cours/categorie.php?id=24">Windows</a><a  class="dropdown-item" title="Linux" href="https://www.samomoi.com/cours/categorie.php?id=25">Linux</a><a  class="dropdown-item" title="ORACLE" href="https://www.samomoi.com/cours/categorie.php?id=26">ORACLE</a><a  class="dropdown-item" title="SQL" href="https://www.samomoi.com/cours/categorie.php?id=27">SQL</a><a  class="dropdown-item" title="SGBD" href="https://www.samomoi.com/cours/categorie.php?id=28">SGBD</a><a  class="dropdown-item" title="CMS" href="https://www.samomoi.com/cours/categorie.php?id=29">CMS</a><a  class="dropdown-item" title="Internet" href="https://www.samomoi.com/cours/categorie.php?id=30">Internet</a><a  class="dropdown-item" title="Site web" href="https://www.samomoi.com/cours/categorie.php?id=31">Site web</a><a  class="dropdown-item" title="Programmation" href="https://www.samomoi.com/cours/categorie.php?id=32">Programmation</a><a  class="dropdown-item" title="Langage C" href="https://www.samomoi.com/cours/categorie.php?id=33">Langage C</a><a  class="dropdown-item" title="Langage C++" href="https://www.samomoi.com/cours/categorie.php?id=34">Langage C++</a><a  class="dropdown-item" title="PHP MySQL" href="https://www.samomoi.com/cours/categorie.php?id=35">PHP MySQL</a><a  class="dropdown-item" title="HTML CSS JavaScript" href="https://www.samomoi.com/cours/categorie.php?id=36">HTML CSS JavaScript</a><a  class="dropdown-item" title="Java" href="https://www.samomoi.com/cours/categorie.php?id=37">Java</a>              </div>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="https://www.samomoi.com/contact.php">Nous contacter</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Mon compte
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
			   
<h3>Me connecter</h3>
<form method="post" action="https://www.samomoi.com/forum/connexionyes.php">
<pre>
<label for="pseudo">  Pseudo :</label><input name="pseudo" type="text" id="pseudo" />
<label for="password">MD Passe :</label><input type="password" name="password" id="password" />
              <input type="submit" value="Connexion" />
<pre></form>
Si vous n'avez pas un compte,<br/>cliquez ici pour vous <a href="https://www.samomoi.com/forum/register.php"> inscrire</a>              </div>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Partenaires
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
			 <a class="dropdown-item" href="http://maths.samomoi.com/" target="_blank">Cours de Maths</a>
                      <a class="dropdown-item"href="http://physique-chimie.samomoi.com/" target="_blank">Cours de Physique chimie</a>
                       <a class="dropdown-item" href="http://svt.samomoi.com/" target="_blank">Cours de SVT</a>
                        <a class="dropdown-item" href="http://cours-externes.samomoi.com/" target="_blank">Cours externes</a>
                         <a class="dropdown-item" href="http://coursdemorale.samomoi.com/" target="_blank">Cours de morale</a>
                        <a class="dropdown-item" href="http://www.samomoi-technos.com" target="_blank">Samomoi technos</a>
                         <a class="dropdown-item" href="https://www.123.fr" target="_blank">Hébergement des sites web</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
 <br/>
 <center>
<style>
.example_responsive_2 { width: 320px; height: 100px; }
@media(min-width: 500px) { .example_responsive_2 { width: 320px; height: 100px; } }
@media(min-width: 800px) { .example_responsive_2 { width: 800px; height: 100px; } }
</style>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- samohaut -->
<ins class="adsbygoogle example_responsive_2"
     style="display:block"
     data-ad-client="ca-pub-9913882976696347"
     data-ad-slot="2326670004"
     ></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>      <br/>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
					
							<h2>L’architecture d’un système radio mobile</h2>
							<p>
	<span style="font-size:18px;"><strong>1.   Introduction</strong></span></p>
<p>
	Dans un réseau radio mobile, on a les émetteurs radio qui sont fixes, et les récepteurs radio qui sont mobiles.</p>
<br/>
							﻿<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- pub1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-9913882976696347"
     data-ad-slot="4863255347"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
							
						<p>
	<img alt="" src="http://www.samomoi.com/cours/upload/telecoms/radio-mobile.PNG" /></p>
<p>
	On a l’antenne émettrice pour le côté operateur et les terminaux mobiles (récepteurs) pour le côté usagers.</p>
<p>
	<span style="font-size:18px;"><strong>1.   Les éléments d’un système radio mobile</strong></span></p>
<p>
	Un système radio mobile est constitué de trois sous-systèmes :</p>
<ul>
	<li>
		<strong> Le sous-système réseau</strong></li>
	<li>
		<strong>Le sous-système radio</strong></li>
	<li>
		<strong>Le sous-système de contrôle</strong></li>
</ul>
<p>
	<strong><img alt="Architecture d'un système radio mobile : Les differents éléments d'un système de communication radio" src="http://www.samomoi.com/cours/upload/telecoms/sous-systemes-radio.PNG" style="width: 532px; height: 212px;" /></strong></p>
<ul>
	<li>
		<strong>Le sous-système  réseau</strong> (<strong>Network and Switching sub-system</strong> (<strong>NSS</strong>))  assure la commutation et le routage. Il gère aussi la mobilité des usagers.</li>
	<li>
		<strong>Le sous-système radio </strong>(<strong>Base Station Système</strong> (<strong>BSS</strong>)) est constitué d’émetteur(s) et récepteur(s) qui assurent l’émission et la réception des signaux.  Sa fonction principale est d’assurer la transmission radioélectrique et la gestion des ressources radio.</li>
	<li>
		<strong>Sous-système de contrôle</strong> [ou <strong>sous-système de  commande</strong> ou bien <strong>sous-système d’exploitation et de maintenance</strong> (<strong>Operating Sub-system</strong>(<strong>OS</strong>))] permet à l’opérateur  d’assurer  l’administration, le contrôle et la maintenance du réseau.</li>
</ul>
<br/>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- samobas -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9913882976696347"
     data-ad-slot="5575649878"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
					
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=234399719914104";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="http://www.facebook.com/pages/Samomoicom-Cours-technologique/253567471326416" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
				
			</div>

        ﻿
<!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
		  <div id="sidebar">
<div class="sidebar1">
			<h2 style="text-align:center">Auteur: <a href="../forum/voirprofil.php?m=1427&action=consulter"> said</a></h2>
			 <img style="float:left" src="../forum/images/avatars/1382658919.jpg" alt="" />                  &quot;Le savant n&#039;est pas l&#039;homme qui fournit de vraies r&eacute;ponses ; c&#039;est celui qui pose les vraies questions.&quot;<br />
Claude L&eacute;vi-Straus<br/>
       <a href="http://www.reponserapide.com/ " target="_blank"><strong>Visiter son site web</strong></a> 
	</div>					
<div class="sidebar1">	  

	<h3> Posez une question</h3>
					Les réponses sont généralement disponibles en quelques minutes
					
				<form target="_blank" action="https://www.reponserapide.com/poster.php" method="post">
				<textarea name="contenu" rows="8" cols="37" ></textarea>
				<input name="Valider" value="Envoyez votre question" type="submit"/>
                <input name="Effacer" value="Effacer" type="reset"/>
				</form>
</div>	

				<div class="sidebar1">
					<h2>Participez à ces discussions</h2>
					  <ul><li>
  <a href="https://www.samomoi.com/forum/voirtopic.php?t=6535">Carte mère </a></li></ul>
  <ul><li>
  <a href="https://www.samomoi.com/forum/voirtopic.php?t=6534">Gestionnaire de disque Windows 8 </a></li></ul>
  <ul><li>
  <a href="https://www.samomoi.com/forum/voirtopic.php?t=6533">Transférer une photo sur un iphone vers pc gratuit </a></li></ul>
  <ul><li>
  <a href="https://www.samomoi.com/forum/voirtopic.php?t=6532">windows/system32/logfiles/srt/srttrail.txt windows 10 </a></li></ul>
  <ul><li>
  <a href="https://www.samomoi.com/forum/voirtopic.php?t=6531">Compresser un fichier sous ubuntu </a></li></ul>
  <ul><li>
  <a href="https://www.samomoi.com/forum/voirtopic.php?t=6530">Whatsapp sans carte sim dans un ipad </a></li></ul>
  <ul><li>
  <a href="https://www.samomoi.com/forum/voirtopic.php?t=6529">Tablette acer: bloqué sur effacement en cours </a></li></ul>
  <ul><li>
  <a href="https://www.samomoi.com/forum/voirtopic.php?t=6528">Gestionnaire d&#039;archive Ubuntu </a></li></ul>
 	
				</div>






<div class="star">
 
                                    <span style="font-size: 22px;"> <center><strong>Notre star du moment</strong></center></span>  
<center>( Vous ici ? <a href="https://www.samomoi.com/forum/register.php"> Devenez membre </a>)</center>  <br/>


                                         <a href="https://www.samomoi.com/forum/voirprofil.php?m=2243&action=consulter">
                                       <strong> fredy</strong></a><br/><img style="float:left" src="https://www.samomoi.com/forum/images/avatars/noavatar.png" alt="" /></div><div>
<h3 class="bouton"><a href="https://www.samomoi.com/contribution/creer-un-tuto.php">Publier un cours ou un tutoriel</a></h3>
</div>		

					
</div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    ﻿<script language="javascript" src="https://www.samomoi.com/includes/Scripts/shCore.js"></script>
<script language="javascript" src="https://www.samomoi.com/includes/Scripts/shBrushPhp.js"></script>
<script language="javascript" src="https://www.samomoi.com/includes/Scripts/shBrushXml.js"></script>
<script language="javascript" src="https://www.samomoi.com/includes/Scripts/shBrushCpp.js"></script>
<script language="javascript" src="https://www.samomoi.com/includes/Scripts/shBrushSql.js"></script>
<script language="javascript" src="https://www.samomoi.com/includes/Scripts/shBrushCss.js"></script>
<script language="javascript" src="Scripts/shBrushJScript.js"></script>

<script language="javascript">
dp.SyntaxHighlighter.ClipboardSwf = 'https://www.samomoi.com/includes/Scripts/clipboard.swf';
window.onload=function() {
  dp.SyntaxHighlighter.HighlightAll('code');
}
</script>
	
	
	
	
	 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
     <div class="row">
    <div class="col-md-4">
<div class="m-0  text-white">
				<h4>Statistiques</h4>
				<ul>
					<li class="statistique">
					Plus de 500 cours et astuces
					</li>
					<li class="statistique">
				Plus de 418 logiciels
					</li>

											
					
					<li class="statistique">plus de <strong> Messages sur le forum</strong><br />Plus de <strong>1797</strong> membres.<br />	 
</li>







					<li class="statistique">
16 visiteurs en ligne					</li>
					<br/><br/>
					
				</ul>
				
			</div>




	</div>
	<div class="col-md-4 text-white">
				<h4>Cookies</h4>				
			<ul>	
En poursuivant votre navigation, vous acceptez l'utilisation de cookies. <a  href="https://www.samomoi.com/termes.php" target="_blank">En savoir plus</a> 

</ul>	
	</div>
	
	<div class="col-md-4 text-white"><span class="pull-right">			<div class="connect">
				<h4>Autres </h4>
<a target="_blank" href="https://www.facebook.com/pages/Samomoicom-Cours-technologique/253567471326416" id="facebook">Facebook</a> <a target="_blank" href="https://twitter.com/infoelectronik" id="twitter">Twitter</a> <a target="_blank" href="https://plus.google.com/b/115474447166548690390/115474447166548690390/posts" id="googleplus">Google+</a>
			</div>
	<div>
			<ul>
				<li>
					<a href="https://www.123.fr" target="_blank">Hébergeur : 123.FR</a>
				</li>
				<li>
					<a href="https://www.samomoi.com/termes.php">Chartes</a>
				</li>
				<li>
					<a href="https://www.samomoi.com/csite.php">Nous confier votre projet</a>
				</li>
				<li>
					<a href="https://www.samomoi.com/contact.php">Nous Contacter</a>
				</li>
				<li>
					<a href="https://www.samomoi.com/forum">Forum</a>
				</li>
			</ul>
		
		</div>
	</span></div>
  </div>

      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://www.samomoi.com/includes/jquery/jquery.min.js"></script>
    <script src="https://www.samomoi.com/includes/popper/popper.min.js"></script>
    <script src="https://www.samomoi.com/includes/bootstrap/js/bootstrap.min.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50120275 = new Ya.Metrika2({
                    id:50120275,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50120275" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

  </body>

</html>
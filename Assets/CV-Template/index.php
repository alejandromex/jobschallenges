<!DOCTYPE html>
<html>
<head>
<title>Alejandro Velazquez - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="http://localhost/labratscoders/CV-Template/curriculum.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="<?=$url?><?=$usuario->imagen?>" alt="Alan Smith" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?=$usuario->nombre?> <?=$usuario->apellido?></h1>
			<h2 class="quickFade delayThree"><?=$usuario->profesion?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>e: <a href="" target="_blank"><?=$usuario->email?></a></li>
				<li>w: <a href="<?=$usuario->pagina?>" target="_blank">My web Page</a></li>
				<li>m: <?=$usuario->celular?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Informacion Personal</h1>
				</div>
				<div class="sectionContent">
					<?php if($usuario->personal != null) : ?>
						<?=$usuario->personal?>
					<?php endif ?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Experiencia Laboral</h1>
			</div>

			<?php
				 $experiencia = $usuario->trabajoexp;
				 $escuela = $usuario->educacion;
			 ?>
			<?php

				$experiencia_array = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $experiencia), true );
				$educacion_array = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $escuela), true );
				$skills = $usuario->skills;
				$skills_sep = explode(" ",$skills);

			?>

			<div class="sectionContent">
				<article>
					<h2><?=$experiencia_array['titulo1']?></h2>
					<p class="subDetails"><?=$experiencia_array['fecha1']?></p>
					<p><?=$experiencia_array['labores1']?></p>
				</article>
				
				<article>
					<h2><?=$experiencia_array['titulo2']?></h2>
					<p class="subDetails"><?=$experiencia_array['fecha2']?></p>
					<p><?=$experiencia_array['labores2']?></p>
				</article>
				
				<article>
					<h2><?=$experiencia_array['titulo3']?></h2>
					<p class="subDetails"><?=$experiencia_array['fecha3']?></p>
					<p><?=$experiencia_array['labores3']?></p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<?php foreach($skills_sep as $key => $value) : ?>
					<li><?=$value?></li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
	
		<section>
			<div class="sectionTitle">
				<h1>Educacion</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2><?=$educacion_array['nombre']?></h2>
					<p class="subDetails"><?=$educacion_array['fecha']?></p>
					<p><?=$educacion_array['carrera']?></p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
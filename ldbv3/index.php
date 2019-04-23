<?php
$title = "Lee Bennett | Portfolio";
$page_desc = "Welcome to my portfolio! I am a web developer / designer located in Pittsburgh, PA. It contains my web projects I have created and developed for myself and others. Need a new website for your new business? Or maybe you need some emails coded for an upcoming marketing campaign. Either way, I've got your back! I have extensive experience creating web pages and am an HTML email ninja!";
$page_kw = "Lee Bennett, Portfolio, HTML, PHP, Developer, Ninja, marketing, campaign, Email, Django, Python, Laravel, Ruby, Rails, CSS, Javascript, jquery, Bootstrap, Materialize, image editing, web design, web development, designer, Photoshop, InDesign, SQL, mySQL, Database, Administrator, AJAX, Campaigns, DigitalNinjaLee, Xbox, Gaming, Korean, Adoptee, Acting, Video, Youtube, web developer, web designer, development, designer";
$url = "http://www.ldbennett.com";
$preview = "http://www.ldbennett.com/img/fb_logo.png";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--


                     ██████████
                   ██          ██
                 ████  ████      ██
             ████        ████    ██
           ██          ██████      ██
           ████████                ██
             ██                    ██
               ██████████        ██
                 ████        ██  ██
               ██  ██      ██      ██
               ██████      ██████  ██
                   ████        ██    ██
               ████    ████████      ██
             ██  ██    ██  ██  ██  ██  ██
             ████████████  ██████████████

	 Thanks for looking at my source code!
	 If you have any questions about it, or want
	 work done yourself, don't hesitate to 
	 contact me at LDBennett@gmail.com !


					 
-->
		<title><?= $title; ?></title>
		
		<meta name="description" content="<?= $page_desc ?>">
		<meta name="keywords" content="<?= $page_kw ?>">
		<meta name="author" content="Lee Bennett">
		
		<!--FACEBOOK META-->
		<meta property='og:title' content="<?= $title; ?>">
		<meta property='og:image' content="<?= $preview ?>"/>    
		<meta property='og:url' content= "<?= $url ?>"/>    
		<meta property='og:description' content="<?= $page_desc ?>">
		<meta property='og:type' content='website' />
		<meta property='og:type' content='portfolio' />

		<!--TWITTER META-->
		<meta name='twitter:card' content='summary' />
		<meta name='twitter:title' content="<?= $title; ?>" />
		<meta name='twitter:description' content="<?= $page_desc ?>"/>  
		<meta name='twitter:url' content="<?= $url ?>" />
		<meta name='twitter:image' content="<?= $preview?>" />

		<!--
		**********FAVICONS************
		-->
		<link rel='apple-touch-icon' sizes='57x57' href='img/f/apple-icon-57x57.png'>
		<link rel='apple-touch-icon' sizes='60x60' href='img/f/apple-icon-60x60.png'>
		<link rel='apple-touch-icon' sizes='72x72' href='img/f/apple-icon-72x72.png'>
		<link rel='apple-touch-icon' sizes='76x76' href='img/f/apple-icon-76x76.png'>
		<link rel='apple-touch-icon' sizes='114x114' href='img/f/apple-icon-114x114.png'>
		<link rel='apple-touch-icon' sizes='120x120' href='img/f/apple-icon-120x120.png'>
		<link rel='apple-touch-icon' sizes='144x144' href='img/f/apple-icon-144x144.png'>
		<link rel='apple-touch-icon' sizes='152x152' href='img/f/apple-icon-152x152.png'>
		<link rel='apple-touch-icon' sizes='180x180' href='img/f/apple-icon-180x180.png'>
		<link rel='icon' type='image/png' sizes='192x192'  href='img/f/android-icon-192x192.png'>
		<link rel='icon' type='image/png' sizes='32x32' href='img/f/favicon-32x32.png'>
		<link rel='icon' type='image/png' sizes='96x96' href='img/f/favicon-96x96.png'>
		<link rel='icon' type='image/png' sizes='16x16' href='img/f/favicon-16x16.png'>
		<meta name="msapplication-TileColor" content="#006beb">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#006beb">  

		<!--CSS Main-->
		<link rel="stylesheet" href="css/materialize.css">
		<link href="css/main.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
		
		<!--Font CSS-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Raleway:300,400,700,900" rel="stylesheet">
		<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
		<style>
			#skills .chip{
				background-color: #eb8000 !important;
				font-weight: bold;
			}
		</style>
	</head>
	
	<body id="top">
		<?php include 'partials/_nav.php';
					include 'partials/_header.php';
		?>
		
		<main>

		<?php 
			include 'sections/about.php';
			include 'sections/portfolio.php';
			include 'sections/skills.php';
		?>
			
		</main>
		<?php include 'partials/_footer.php'?>

		<!--JQuery-->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<!--Materialize JS-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
		<script src="js/ext.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>

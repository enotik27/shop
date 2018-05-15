<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>		<!--<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	-->
	
		
	
	
<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?$APPLICATION->ShowTitle();?></title>
		<?$APPLICATION->ShowHead();?>
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
	<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<div id="page-wrapper">
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<header id="header">
								<h1><a href="#" id="logo">Minimaxing</a></h1>
								<nav id="nav">
                                <a href="/shop/" class="current-page-item">Homepage</a>

									<a href="/freeshop/">Three Column</a> 
								</nav>
							</header>

						</div>
					</div>
				</div>
			</div>
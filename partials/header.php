<?php
    require '_inc/menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Conquer</title>
<!--
Conquer Template
http://www.templatemo.com/tm-476-conquer
-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>   
			<div class="single-page-nav sticky-wrapper" id="tmNavbar">
				<ul class="nav navbar-nav">
					<?php
            $pages = array('Homepage' => '#section1', 'About Us' => '#section2', 'Services' => '#section3', 'Contact' => '#section4', 'External' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley');
            echo(getMenu($pages));
            ?>
				</ul>
			</div>   
		</div>
	</nav>    

	<div id="section1">
		<header id="header-area" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="header-content">
							<h1>CONQUER</h1>
							<h4>Simple Bootstrap Template</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
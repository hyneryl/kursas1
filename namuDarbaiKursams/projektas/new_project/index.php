<!DOCTYPE html>
<html <?php include('lang.php'); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/intro.css">
  <link rel="stylesheet" href="css/style.css">
<!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->
  <title><?php include('title.php'); ?></title>
</head>

<body>

<header>
	<nav class="navbar">
			<span class="open-slide">
				<a href="#" onclick="openSlideMenu()">
					<svg width="30" height="30">
							<path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
							<path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
							<path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
					</svg>
				</a>
			</span>

			<ul class="navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="about.php">About me</a></li>
				<li><a href="work.php">My Work</a></li>
				<li><a href="contact.php">How to reach me</a></li>
				<li><a href="#">EN</a></li>
				<li><a href="#">FR</a></li>
				<li><a href="#">LT</a></li>
			</ul>
	</nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="#">Home</a>
    <a href="about.php">About me</a>
    <a href="work.php">My Work</a>
    <a href="contact.php">How to reach me</a>
    <a href="#">EN</a>
    <a href="#">FR</a>
    <a href="#">LT</a>
  </div>
</header>
<main class="container">
<section class="row">
	<video src="video/smoke.MP4" muted autoplay loop ></video>   
	<h1>
		<span>C</span>
		<span>H</span>
		<span>R</span>
		<span>I</span>
		<span>S</span>
		<span>&nbsp;</span>
		<span>M</span>
		<span>A</span>
		<span>R</span>
		<span>I</span>
		<span>E</span>
	</h1>
	<h3><p>Web Developer, Programmer, Designer & Entrepreneur</p></h3>
</section>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
	<script>
		function openSlideMenu(){
			document.getElementById('side-menu').style.width = '250px';
			document.getElementById('main').style.marginLeft = '250px';
		}

		function closeSlideMenu(){
			document.getElementById('side-menu').style.width = '0';
			document.getElementById('main').style.marginLeft = '0';
		}
	</script>
</main>
</body>
</html>

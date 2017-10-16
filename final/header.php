<?php
error_reporting(0); 

session_start();

$_SESSION['cart'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>e-commerce website </title>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>  
	<link href="lib/css/stylesheet.css" rel="stylesheet" type="text/css">	
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
<body>

<header>
  <div id="header">
  <nav>
  	<ul class="nav">
			<li><a  href="index.php"><img class="home" src="lib/img/home.png" alt="navbar home"></a></li>
			<li><a  href="Products.php"><img src="lib/img/product.png" alt="navbar products"></a></li>
			<li><a  href="Contact.php"><img src="lib/img/contact.png" alt="navbar contact"></a></li>
			<li><a  href="Search.php"><img src="lib/img/search.png" alt="navbar search"></a></li>
			<li><a  href="#"><img src="lib/img/cart.png" alt="navbar cart"></a></li>
			<li class="cartCount"><?php echo $_SESSION['cart']; ?></li>
		</ul>
	</nav>
	</div>
</header>

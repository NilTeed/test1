<?php 
$info = file_get_contents('https://api.cryptonator.com/api/ticker/btc-usd');
$info = json_decode($info, true);
$info = array_shift($info);
$price = $info['price'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Привет</title>
	<meta charset="utf-8">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" type="text/css" href="CSS/index.css">
	<link rel="stylesheet" type="text/css" href="CSS/reset.css">
</head>
<body class="body_hide">
	<header class="header">
		<div class="header-content">
			<span class="link-hover-center header-navigation-spans"><a href="#">FAQ</a></span>
		</div>
	</header>

	<main class="main">
		<div class="h1-block">
			<h1 style="font-size: 50px;padding: 20px;font-family: sans-serif;"></h1>
				</div>
			<div class="navigaonusing">
  <div class="gaonutosal">
  	
  	<div class="pesontedan">
  		<input id="pesontedan-one" type="checkbox" name="pesontedans">
  		<label for="pesontedan-one">Выпадающая навигация</label>
  		<div class="pesontedan-content">
  			<p id="btc-usd-price"> 
  			<br>
  			<br>
  			<br>
  			<span style="font-size: 15px;">ВНИМАНИЕ!</span>
  			</p>
  			<span id="demo"></span>
  		</div>
  	</div>
  
  <div class="pesontedan">
  		<input id="pesontedan-two" type="checkbox" name="pesontedans">
  		<label for="pesontedan-two">Чистый CSS-аккордеон</label>
  		<div class="pesontedan-content">
  			<p>Второй мануал</p>
  		</div>
  </div>
  
  <div class="pesontedan">
  		<input id="pesontedan-three" type="checkbox" name="pesontedans">
  		<label for="pesontedan-three">Раскрывающуюся навигацию</label>
  		<div class="pesontedan-content">
  			<p>Третье описание по материалу</p>
  		</div>
  	</div>
  </div>


	
	</main>



<script src="JS/index.js"></script>
<script src="jquery-3.6.0.min.js"></script>
</body>
</html>

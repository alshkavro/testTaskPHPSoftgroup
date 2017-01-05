<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel='stylesheet' href='style.css' type='text/css' />
		<title>Test</title>
	</head>
	<body>
		<div id="wrapper">
			<img src="img/logo_softgroup.png">
			<div>
				<nav id="top_menu">
					<ul>
						<li><a href="index.php">Головна</a></li>
						<li><a href="author.php">Автор</a></li>
						<li><a href="http://softgroup.ua/">Softgroup</a></li>
					</ul>
				</nav>
			</div>
			<div id="sidebar">
				<nav>
					<ul id="left_menu">
						<li><a href="1.php">Завдання 1</a></li>
						<li><a href="2.php">Завдання 2</a></li>
						<li><a href="3.php">Завдання 3</a></li>
						<li><a href="4.php">Завдання 4</a></li>
						<li><a href="5.php">Завдання 5</a></li>
						<li><a href="6.php">Завдання 6</a></li>
					</ul>
				</nav>
			</div>
			<div id="content">
				<div id="title">
					<h1>Softgroup</h1>
					<h2>Тестове завдання</h2>
				</div>
				<h3>Завдання 2 </h3>
				<p>У форму вводиться текст, слова в якому розділені пробілами і 
					довжини. (Слів найбільшої довжини може бути декілька).
				</p>
				<div>
					<h3>Розв'язок</h3>
					<form action="2.php" method="get">
						<p>Введіть текст: <input type="text" size="50" name="item" /></p>
						<p><input type="submit" /></p>
					</form>
					<?php
						$item = $_GET["item"];  
						$array = explode(" ",$item);  
						$max["length"] = 0;  
						$max["word"] = "";  
						    for($i=0;$i < count($array);$i++)  
						    {  
						        if(strlen($array[$i]) > $max["length"])  
						        {  
						        $max["word"] = $array[$i];  
						        $max["length"] = strlen($array[$i]);  
						        }  
						    }  
						echo "Слово найбільшої довжини: <b>" . $max["word"] . " " . "[ " . $max["length"] . " ]</b>";
					?>				
				</div>
			</div>
		</div>
	</body>
</html>
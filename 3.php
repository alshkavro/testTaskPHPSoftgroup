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
				<h3>Завдання 3 </h3>
				<p>	Вводяться N натуральних чисел більше 2. Підрахувати, скільки серед них простих чисел.</p>
				<div>
					<h3>Розв'язок</h3>
					<form action="3.php" method="get">
						<p>Введіть числа через кому(наприклад: 3, 2, 6, 5, 4): <input type="text" size="50" name="nums" /></p>
						<p><input type="submit" /></p>
					</form>
					<?php
						$nums = $_GET["nums"];
						function isNatural($n){
						    if($n==1 or $n==0)return false;
						    for($d=2; $d*$d<=$n; $d++)
						    	{ 
						        if($n%$d==0)return false;
						        }
						    return true;
						    }
						$array = explode(', ', $nums);
						foreach($array as $key => $value)
						    {
						        if(!isNatural($value)) unset($array["$key"]);
						    }
						$result = implode(', ', $array);
						echo "Введені числа:" . " " . $nums . "</br>";
						echo "Натуральні числа:" . " " . $result;
					?>				
				</div>
			</div>
		</div>
	</body>
</html>
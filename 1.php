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
				<h3>Завдання 1 </h3>
				<p>У форму вводиться число N. Знайти всі досконалі числа до N.
					Досконале число - це таке число, що дорівнює сумі всіх своїх дільників,
					крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе
					самого ділиться на числа 1, 2 і 3, які в сумі дають 6.
				</p>
				<div>
					<h3>Розв'язок</h3>
					<form action="1.php" method="get">
						<p>Введіть число: <input type="text" name="number" /></p>
						<p><input type="submit" /></p>
					</form>	
					<?php
    					$number = $_GET['number'];
    					echo $value;

    					function isPerfect($num) {
						        for ($n = 2; $n <= sqrt($num); $n++)
						        	{
						            if (!($num % $n))
							            {
							                $d += $n;
							                if ($n <> $num / $n)
							                    $d += $num / $n;
							            }
						        	}
						        return ++$d == $num;
						    }  	

						    echo 'Досконалі числа до' . ' ' . $number . ':</br>';

						    for ($n = 1; $n < $number; $n++)

						        if (isPerfect($n))
						            echo $n . '<br />';        
					?>				
				</div>
			</div>
		</div>
	</body>
</html>
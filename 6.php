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
				<h3>Завдання 6 </h3>
				<p>Змагання з гри «Тетріс-онлайн» проводяться за такими правилами:</br>
					Кожен учасник реєструється на сайті гри під певним ігровим ім'ям. Імена учасників не повторюються.</br>
					Чемпіонат проводиться протягом певного часу. У будь-який момент цього часу будь-який зареєстрований учасник може зайти на сайт чемпіонату і 
					почати залікову гру. Після закінчення гри її результат (кількість балів) фіксується і заноситься до протоколу.</br>
					Учасники мають право грати кілька разів. Кількість спроб одного учасника не обмежується. Остаточний результат учасника визначається по одній грі, 
					кращою для даного учасника. Більш високе місце в змаганнях займає учасник, що показав кращий результат. При рівності результатів більш 
					високе місце займає учасник, раніше показав кращий результат.</br> 
					В ході змагань заповнюється протокол, кожен рядок якого описує одну гру і містить результат учасника і його ігрове ім'я. Протокол формується в 
					реальному часі по ходу проведення чемпіонату, тому рядки в ньому розташовані в порядку проведення ігор: чим раніше зустрічається рядок у 
					протоколі, тим раніше закінчилася відповідна цьому рядку гра.</br> 
					Напишіть програму, яка за даними протоколу визначає переможця і призерів. Гарантується, що в чемпіонаті бере участь не менше трьох гравців.
					<p>Приклад:</br>
						<table>
							<tr>
								<th>Ввід</th>
								<th>Вивід</th>
							</tr>
							<tr>
								<td>9</td>
								<td>1 місце. Qwerty (197128)</td>
							</tr>
							<tr>
								<td>69485 Jack</td>
								<td>2 місце. Alex (95715)</td>
							</tr>
							<tr>
								<td>95715 qwerty</td>
								<td>3 місце. Jack (95715)</td>
							</tr>
							<tr>
								<td>95715 Alex</td>
								<td></td>
							</tr>
							<tr>
								<td>83647 M</td>
								<td></td>
							</tr>
							<tr>
								<td>197128 qwerty</td>
								<td></td>
							</tr>
							<tr>
								<td>95715 Jack</td>
								<td></td>
							</tr>
							<tr>
								<td>93289 Alex</td>
								<td></td>
							</tr>
							<tr>
								<td>95715 Alex</td>
								<td></td>
							</tr>
							<tr>
								<td>95715 M</td>
								<td></td>
							</tr>
						</table>
					</p>
				</p>
				<div>
					<h3>Розв'язок</h3>
				</div>
			</div>
		</div>
	</body>
</html>
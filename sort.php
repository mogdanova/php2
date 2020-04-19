<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Формы-Сортировка</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="lab1.css" />
</head>

<body>
	<div class="wrapper">
		<header>
			<div class="title">
				 <span  class="fio">Кравченко Алексей Владимирович</span><br>
                <span class="tps">Учёт книг в библиотеке</span>
			</div>
		</header>
		<nav>
			<ul class="main-menu">
				<li>
					<a href="index.html">Формы</a>
				</li>
				<li>
					<a href="../lab2/add.php" class="active">Файлы</a>
				</li>
				<li>
					<a href="#">База данных</a>
				</li>
				<li>
					<a href="#">Регулярные выражения</a>
				</li>
			</ul>
		</nav>
		<ul class="sub-menu">
			<li>
				<a href="add.php">Добавить данные</a>
			</li>
			<li>
				<a href="show.php">Просмотр данных</a>
			</li>
			<li>
				<a href="sort.php">Сортировка данных</a>
			</li>
			<li>
				<a href="search.php">Поиск данных</a>
			</li>
		</ul>
		<main>
			<h3>Отделы</h3>
			<div class="sort_form">
				<form class="form-style-1" name="sortform1" action=" ">
						
						<select name="field1" autofocus>
							<option value='0'>
							Название отдела
							</option>
							<option value='1'>
							Фамилия заведующего
							</option>
							<option value='2'>
							Номер отдела
							</option>
							<option value='3'>
							Тип отдела
							</option>
</select>
<br>
<br>
					<input type="submit" value="Сортировать" name="sortform1">
				
			</form></div>
			<?php
		if (isset($_GET['sortform1'])) {
			$otdelFile = fopen("otdel.txt", 'r') or die("не удалось открыть файл 'отделы'");
			flock ($otdelFile,LOCK_SH);
			function myCmp1($a, $b)
			{
				$x = $_GET['field1'];
				if ($a[$x] == $b[$x]) return 0;
				return $a[$x] > $b[$x] ? 1 : -1;
			}
			$i = 0;
			while (!feof($otdelFile)) {
				$str = htmlentities(fgets($otdelFile));
				if (!empty($str)) {
					$mas[$i++] = explode(";", $str);
				}
			}
			flock ($otdelFile,LOCK_SH);
			fclose($otdelFile);

			usort($mas, 'myCmp1');

			$table = "<table border=3>";
			$table .= " <thead>
	<th>Название отдела</th>
    <th>Фамилия заведующего</th>
    <th>Номер отдела</th>
    <th>Тип отдела</th>
</thead>";
			foreach ($mas as $a) {
				$table .= "<tr>";



				$table .= "<td>" . $a[0] . "</td>";
				$table .= "<td>" . $a[1] . "</td>";
				$table .= "<td>" . $a[2] . "</td>";
				$table .= "<td>" . $a[3] . "</td>";
				$table .= "</tr>";

			}

			$table .= "</table> ";
			echo $table;
		}
		?>
			<h3>Книги</h3>
			<div class="sort_form">
				<form class="form-style-1" name="sortform2" action=" ">
						
						<select name="field2" autofocus>
							<option value='0'>
							Автор книги
							</option>
							<option value='1'>
							Название книги
							</option>
							<option value='2'>
							Год издания
							</option>
							<option value='3'>
							Номер
							</option>
</select>
<br>
<br>
					<input type="submit" value="Сортировать" name="sortform2">
				
			</form>
		</div>



		<?php
		if (isset($_GET['sortform2'])) {
			$bookFile = fopen("book.txt", 'r') or die("не удалось открыть файл 'владельцы'");
			flock ($bookFile,LOCK_SH);
			function myCmp2($a, $b)
			{
				$x = $_GET['field2'];
				if ($a[$x] == $b[$x]) return 0;
				return $a[$x] > $b[$x] ? 1 : -1;
			}
			$i = 0;
			while (!feof($bookFile)) {
				$str = htmlentities(fgets($bookFile));
				if (!empty($str)) {
					$mas[$i++] = explode(";", $str);
				}
			}
			flock ($bookFile,LOCK_SH);
			fclose($bookFile);

			usort($mas, 'myCmp2');

			$table = "<table border=3>";
			$table .= " <thead>
	<th>Автор книги</th>
    <th>Название книги</th>
    <th>Год издания</th>
    <th>Номер</th>
	</thead>";
			foreach ($mas as $a) {
				$table .= "<tr>";
				$table .= "<td>" . $a[0] . "</td>";
				$table .= "<td>" . $a[1] . "</td>";
				$table .= "<td>" . $a[2] . "</td>";
				$table .= "<td>" . $a[3] . "</td>";
				$table .= "</tr>";

			}

			$table .= "</table> ";
			echo $table;
		}
		?>
<h3>Читатели</h3>
<div class="sort_form">
				<form class="form-style-1" name="sortform3" action=" ">
						
						<select name="field3" autofocus>
							<option value='0'>
							Фамилия читателя
							</option>
							<option value='1'>
							Домашний адрес
							</option>
							<option value='2'>
							Email
							</option>
							<option value='3'>
							Website url
							</option>
							<option value='4'>
							Возраст
							</option>
</select>
<br>
<br>
					<input type="submit" value="Сортировать" name="sortform3">
				
			</form>
		</div>

		<?php
		if (isset($_GET['sortform3'])) {
			$readersFile = fopen("readers.txt", 'r') or die("не удалось открыть файл 'читатели'");
			flock ($readersFile,LOCK_SH);

			function myCmp3($a, $b)
			{
					$x = $_GET['field3'];
					if ($a[$x] == $b[$x]) return 0;
					return $a[$x] > $b[$x] ? 1 : -1;
			}
			$i = 0;
			while (!feof($readersFile)) {
				$str = htmlentities(fgets($readersFile));
				if (!empty($str)) {
					$mas[$i++] = explode(";", $str);
				}
			}
			flock ($readersFile,LOCK_SH);
			fclose($readersFile);
			
			usort($mas, 'myCmp3');
			$table = "<table border=3>";
			$table .= "<thead>
				  <th>Фамилия читателя</th>
				  <th>Домашний адрес</th>
				  <th>Email</th>
	              <th>Сайт</th>
	              <th>Возраст</th>
			  </thead>";
			foreach ($mas as $a) {
				$table .= "<tr>";
				$table .= "<td>" . $a[0] . "</td>";
				$table .= "<td>" . $a[1] . "</td>";
				$table .= "<td>" . $a[2] . "</td>";
				$table .= "<td>" . $a[3] . "</td>";
				$table .= "<td>" . $a[4] . "</td>";
			
				$table .= "</tr>";

			}
			$table .= "</table> ";
			echo $table;
		}
		?>
</main>


	</div>
	<footer>
		<span>Кравченко Алексей гр.ПО-21
			<sup>&#169;</sup>
		</span>
		<span>
			<a href="mailto:lyosha.kravchenko.2013@mail.ru"> E-mail: lyosha.kravchenko.2013@mail.ru</a>
		</span>
	</footer>
</body>

</html>
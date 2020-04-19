<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Формы</title>
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
			<?php

$otdelFile = fopen("otdel.txt", 'r') or die("не удалось открыть файл 'отделы'");
flock ($otdelFile,LOCK_SH);
$table = "<table border=3>";
$table.=" <thead>
	<th>Название отдела</th>
    <th>Фамилия заведующего</th>
    <th>Номер отдела</th>
    <th>Тип отдела</th>
</thead>";

while(!feof($otdelFile))
{ 
	$str = htmlentities(fgets($otdelFile));
	if (!empty($str)) 
	{
	$table .= "<tr>";
	
	$mas= explode(";", $str);
	
	$table .= "<td>".$mas[0]."</td>";
	$table .= "<td>".$mas[1]."</td>";
	$table .= "<td>".$mas[2]."</td>";
	$table .= "<td>".$mas[3]."</td>";
	$table .= "</tr>";   
	}
}
flock ($otdelFile,LOCK_SH);
fclose($otdelFile);
      $table .= "</table> ";
	  echo $table;
?>
			<h3>Книги</h3>
			<?php

$bookFile = fopen("book.txt", 'r') or die("не удалось открыть файл 'книги'");
flock ($bookFile,LOCK_SH);
$table = "<table border=3>";
$table.=" <thead>
	<th>Автор книги</th>
    <th>Название книги</th>
    <th>Год издания</th>
    <th>Номер</th>
</thead>";
while(!feof($bookFile))
{ 
	$str = htmlentities(fgets($bookFile));
	if (!empty($str)) 
	{
	$table .= "<tr>";
	
	$mas= explode(";", $str);
	
	$table .= "<td>".$mas[0]."</td>";
	$table .= "<td>".$mas[1]."</td>";
	$table .= "<td>".$mas[2]."</td>";
	$table .= "<td>".$mas[3]."</td>";
	$table .= "</tr>";   
	}
}
flock ($bookFile,LOCK_SH);
fclose($bookFile);
      $table .= "</table> ";
	  echo $table;
?>
<h3>Читатели</h3>
<?php

$readersFile = fopen("readers.txt", 'r') or die("не удалось открыть файл 'читатели'");
flock ($readersFile,LOCK_SH);
$table = "<table border=3>";
      $table.=" <thead>
      <th>Фамилия читателя</th>
      <th>Домашний адрес</th>
      <th>Email</th>
	  <th>Сайт</th>
	  <th>Возраст</th>
  </thead>";
while(!feof($readersFile))
{ 
	$str = htmlentities(fgets($readersFile));
	if (!empty($str)) 
	{
	$table .= "<tr>";
	
	$mas= explode(";", $str);
	
	$table .= "<td>".$mas[0]."</td>";
	$table .= "<td>".$mas[1]."</td>";
	$table .= "<td>".$mas[2]."</td>";
	$table .= "<td>".$mas[3]."</td>";
	$table .= "<td>".$mas[4]."</td>";
	$table .= "</tr>";   
	}
}
flock ($readersFile,LOCK_SH);
fclose($readersFile);
      $table .= "</table> ";
	  echo $table;
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
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
					<a href="form2.html">Формы</a>
				</li>
				<li>
					<a href="add.php" class="active">Файлы</a>
				</li>
				<li>
					<a href="#">База данных</a>
				</li>
				<li>
					<a href="#">Регулярные выражения</a>
				</li>
			</ul>
		</nav>

		<main>
			<?php
   if (isset($_GET['otdelForm'])) {
     
        $otdelFile = fopen("otdel.txt", 'a+') or die("Не удалось создать файл");
        $table="";
        $table .= $_GET['nazv'];
        $table .= ";".$_GET['fio'];
        $table .= ";".$_GET['number'];
        $table .= ";".$_GET['dop'];
		$table .= PHP_EOL;
        fwrite($otdelFile, $table);
        fclose($otdelFile);      
      echo "<div class='success'>Данные успешно добавлены</div>";
   }
   else   if (isset($_GET['bookForm'])) 
   {
    $bookFile = fopen("book.txt", 'a') or die("Не удалось создать файл");
    $table="";
     $table .=$_GET['Avtor'];
      $table .= ";".$_GET['Nazv'];
      $table .= ";".$_GET['year'];
      $table .= ";".$_GET['number'];  
    $table .= PHP_EOL;
    fwrite($bookFile, $table);
    fclose($bookFile);      
    echo "<div class='success'>Данные успешно добавлены</div>";
   }
   else if (isset($_GET['readersForm'])) 
   {
    $readersFile = fopen("readers.txt", 'a') or die("Не удалось создать файл");   
    $table="";
    $table .= $_GET['fio'];
    $table .= ";".$_GET['adress'];
    $table .= ";".$_GET['email'];
	$table .= ";".$_GET['website'];
	$table .= ";".$_GET['age'];
    $str="";
    if (!empty($_GET['a']))
    {
      $Nam= $_GET['a'];
      for($i=0;$i<count($_GET['a']); $i++)
          $str .= $Nam[$i].",";
    }
    $table .= ";".$str;
    $table .= PHP_EOL;
    fwrite($readersFile, $table);
    fclose($readersFile);      
    echo "<div class='success'>Данные успешно добавлены</div>";
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
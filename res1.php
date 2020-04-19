<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Формы</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="lab6.css" />
   
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <img src="images/logo4.png" usemap="#map" width="100px" />
                <map name="map">
                    <area shape="poly" alt="quote" coords="53,4, 77,20, 53,44, 29,20, 53,4" href="quote.html">
                    <area shape="poly" alt="lists" coords="85,27, 99,51, 84,76, 60,51, 85,27" href="lists.html">
                    <area shape="poly" alt="vidget" coords="53,56, 78,82, 53,98, 27,82, 53,56" href="vidget.html">
            </div>

            <div class="title">
            <span class="fio">Кравченко Алексей Владимирович</span><br>
            <span class="tps">Учёт книг в библиотеке</span>
        </div>
    </header>
    <nav>
        <ul class="main-menu">
            <li><a href="index.html" class="active">Формы</a></li>
            <li><a href="#">Файлы</a></li>
            <li><a href="#">База данных</a></li>
            <li><a href="#">Регулярные выражения</a></li>
        </ul>            
    </nav>       
    <ul class="sub-menu">
            <li>
                <a href="form1.php">Форма ОТДЕЛЫ</a>
            </li>
            <li>
                <a href="form2.php">Форма КНИГИ</a>
            </li>
            <li>
                <a href="form3.php">Форма ЧИТАТЕЛИ</a>
            </li>
        </ul>
    <main>
        <main>
               <h1>Форма ОТДЕЛЫ</h1>
               <?php
      $table = "<table border=3>";
      $table.=" <thead>
      <th>Название отдела</th>
    <th>Фамилия заведующего</th>
    <th>Номер отдела</th>
    <th>Тип отдела</th>
  </thead>";
      $table .= "<tr>";
      $table .= "<td>".$_GET['nazv']."</td>";
	  $table .= "<td>".$_GET['fio']."</td>";
      $table .= "<td>".$_GET['number']."</td>";
      $table .= "<td>".$_GET['dop']."</td>";
      $str=implode(', ',$_GET['Name']);
      $table .= "</tr>";
	  $table .= "<tr>";
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
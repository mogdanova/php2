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

                <form  class="form-style-1" name="form2" action="res2.php" >
                        <fieldset>
                        <legend>
                        КНИГИ 
                        </legend>
                        <p><label for="Avtor">Автор книги<span class="required">*</span></label> <input type="text" name="Avtor"  autofocus required></p>
                        <p><label for="Nazv">Название книги<span class="required">*</span></label> <input type="text" name="Nazv" required></p>
                        <p><label for="year">Год издания</label><input type="year" name="year" required min='1900' value="2019"></p>
                        <p><label for="number">Номер<span class="required">*</span></label><input type="number" name="number"></p>
                         </fieldset>
                        <p><input type="submit" value="Отправить">
                        <input type="reset" class="rest" value="Очистить"></p>
                        </form>
                        <?php
 if (!empty($_GET)) {
    $table = "<table border=3>";
    $table.=" <thead>
    <th>Автор книги</th>
    <th>Название книги</th>
    <th>Год издания</th>
    <th>Номер</th>
</thead>";
    $table .= "<tr>";
    $table .= "<td>".$_GET['Avtor']."</td>";
    $table .= "<td>".$_GET['Nazv']."</td>";
    $table .= "<td>".$_GET['year']."</td>";
    $table .= "<td>".$_GET['number']."</td>";
    $table .= "</tr>";
    $table .= "<tr>";
    $table .= "</table> ";
    echo $table;
 }
?>
                        <form  class="form-style-1" name="form22" action="" >
                        <fieldset>
                        <legend>
                        КНИГИ 
                        </legend>
                        <p><label for="Avtor">Автор книги<span class="required">*</span></label> <input type="text" name="Avtor"  autofocus required></p>
						<p><label for="Nazv">Название книги<span class="required">*</span></label> <input type="text" name="Nazv" required></p>
						<p><label for="year">Год издания</label><input type="year" name="year" required min='1900' value="2019"></p>
                        <p><label for="number">Номер<span class="required">*</span></label><input type="number" name="number"></p>
                         </fieldset>
                        <p><input type="submit" value="Отправить">
                        <input type="reset" class="rest" value="Очистить"></p>
                        </form>
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
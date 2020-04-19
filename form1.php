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
                <span  class="fio">Могданова Ирина Александровна</span><br>
                <span class="tps">Банки</span>
            </div>
        </header>
        <ul class="sub-menu">
                <li>
                    <a href="form1.php">Форма БАНК</a>
                </li>
                <li>
                    <a href="form2.php">Форма КНИГИ</a>
                </li>
                <li>
                    <a href="form3.php">Форма ЧИТАТЕЛИ</a>
                </li>
            </ul>
        <main>

                <form  class="form-style-1" name="form1" action="res1.php">
                        <fieldset>
                        <legend>
                        ОТДЕЛЫ
                        </legend>
                        <p><label for="nazv">Название отдела</label><select name="nazv" autofocus>
                             <option>
                             Отдел обслуживания читальных залов, статистики и контроля
                         </option>
                         <option>
                         Отдел хранения библиотечных фондов
                         </option>
                         <option>
                         Отдел научной обработки
                         </option>
                         <option>
                         Отдел научной информации
                         </option>
                         <option>
                         Центр визуальной информации
                         </option>
                         <option>
                         Отдел абонемента
                         </option>
                         <option>
                         Отдел научной библиографии
                         </option>
                         <option>
                         Отдел культурных программ
                         </option>
                         <option>
                         Отдел информационных технологий
                         </option>
                         <option>
                         Отдел комплектования
                         </option>
                        </select></p>
                        <p><label for="fio">Фамилия заведующего<span class="required">*</span></label><input type="text" name="fio"></p>
                         <p><label for="number">Номер отдела<span class="required">*</span></label><input type="number" name="number" min="1" max="100" required placeholder="Формат: 12" pattern="\d{2}-\d"></p>
                         <p><label for="dop">Тип отдела</label> <input type="radio" name="dop" value="Основной" checked>Основной
                            <input type="radio" name="dop" value="Дополнительный">Дополнительный<br/>
                        </p>

                         </fieldset>
                        <p><input type="submit" value="Отправить">
                        <input type="reset" class="rest" value="Очистить"></p>
                        </form>
                        <?php
 if (!empty($_GET)) {
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
} ?>
                        <form  class="form-style-1" name="form12" action="">
                        <fieldset>
                        <legend>
                        ОТДЕЛЫ 
                        </legend>
                        <p><label for="nazv">Марка</label><select name="nazv" autofocus>
                             <option>
                             Отдел обслуживания читальных залов, статистики и контроля
                         </option>
                         <option>
                         Отдел хранения библиотечных фондов
                         </option>
                         <option>
                         Отдел научной обработки
                         </option>
                         <option>
                         Отдел научной информации
                         </option>
                         <option>
                         Центр визуальной информации
                         </option>
                         <option>
                         Отдел абонемента
                         </option>
                         <option>
                         Отдел научной библиографии
                         </option>
                         <option>
                         Отдел культурных программ
                         </option>
                         <option>
                         Отдел информационных технологий
                         </option>
                         <option>
                         Отдел комплектования
                         </option>
                        </select></p>
                         <p><label for="fio">Фамилия заведующего<span class="required">*</span></label><input type="text" name="fio"></p>
                         <p><label for="number">Номер отдела<span class="required">*</span></label><input type="number" name="number" min="1" max="100" required placeholder="Формат: 12" pattern="\d{2}-\d"></p>
                         <p><label for="dop">Тип отдела</label> <input type="radio" name="dop" value="Основной" checked>Основной
                            <input type="radio" name="dop" value="Дополнительный">Дополнительный<br/>
                        </p>

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
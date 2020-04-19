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
            <span  class="fio">Могданова Ирина</span><br>
            <span class="tps">Банки</span>
        </div>
    </header>  
    <ul class="sub-menu">
      <li>
          <a href="form1.php">Форма БАНК</a>
      </li>
      <li>
          <a href="form2.php">Форма КЛИЕНТ</a>
      </li>
      <li>
          <a href="form3.php">Форма УСЛУГА</a>
      </li>
    </ul>
    <main>
    <?php
    if (!empty($_GET)) {
        $table = "<table border=3>";
        $table.=" <thead>
            <th>Название банка</th>
            <th>Фамилия заведующего</th>
            <th>Номер отделения</th>
            <th>Тип банка</th>
        </thead>";
        $table .= "<tr>";
        $table .= "<td>".$_GET['nazv']."</td>";
        $table .= "<td>".$_GET['fio']."</td>";
        $table .= "<td>".$_GET['number']."</td>";
        $table .= "<td>".$_GET['dop']."</td>";
        $str=@implode(', ',$_GET['Name']);
        $table .= "</tr>";
        $table .= "<tr>";
        $table .= "</table> ";
        echo $table;
    } ?>


<form  class="form-style-1" name="form1" action="">
    <fieldset>
    <legend>
        БАНК
    </legend>
    <p><label for="nazv">Название банка</label><select name="nazv" autofocus>
        <option>
            Идея Банк
        </option>
        <option>
            Банк БелВЭБ
        </option>
        <option>
            Банк Решение
        </option>
        <option>
            Банк Дабрабыт
        </option>
        <option>
            Абсолютбанк
        </option>
        <option>
            Альфа-Банк
        </option>
        <option>
            БПС-Сбербанк
        </option>
        <option>
            ВТБ Банк
        </option>
        <option>
            БелАгроПромБанк
        </option>
        <option>
            Беларусбанк
        </option>
        </select></p>
        <p><label for="fio">Фамилия заведующего</label><input type="text" name="fio"></p>
        <p><label for="number">Номер отдела<span class="required">*</span></label><input type="number" name="number" min="1" max="100" required placeholder="Формат: 12" pattern="\d{2}-\d"></p>
        <p><label for="dop">Тип банка</label> <input type="radio" name="dop" value="Основной" checked>Основной
        <input type="radio" name="dop" value="Дочерний">Дочерний<br/>
        </p>
    </fieldset>
    <p><input type="submit" value="Отправить">
    <input type="reset" class="rest" value="Очистить"></p>
    </form>
    </main>
  </div>
</body>
</html>
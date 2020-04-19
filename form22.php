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
        <span class="fio">Могданова Ирина</span><br>
        <span class="tps">БАНКИ</span>
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
          <th>ФИО клиента</th>
          <th>Наименование услуги</th>
          <th>Год рождения</th>
          <th>Номер телефона</th>
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
      <form  class="form-style-1" name="form2" action="">
        <fieldset>
          <legend>
          КЛИЕНТ 
          </legend>
          <p><label for="Avtor">ФИО клиента<span class="required">*</span></label> <input type="text" name="Avtor"  autofocus required></p>
          <p><label for="Nazv">Наименование услуги</label><select name="Nazv">
            <option>
              Система "Расчет"(ЕРИП)
            </option>
            <option>
              Перевод с карты на нарту
            </option>
            <option>
              Оплата устуг мобильного оператора
            </option>
            <option>
              Перевод по реквизитам
            </option>
            <option>
              Перевод пользователю М-Банкинга
            </option>
            <option>
              Погашение кредитов
            </option>
            <option>
              Пополнение вкладов
            </option>
            <option>
              Оплата школьного питания
            </option>
            <option>
              Штрафы ГАИ
            </option>
            <option>
              Автооплата
            </option>
          </select></p>
          <p><label for="year">Дата рождения</label><input type="date" name="year" required></p>
          <p><label for="number">Номер телефона<span class="required">*</span></label><input type="number" name="number" placeholder="375 44 5519746"></p>
        </fieldset>
        <p><input type="submit" value="Отправить">
        <input type="reset" class="rest" value="Очистить"></p>
      </form>
    </main>
  </div>
</body>
</html>
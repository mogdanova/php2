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
                <form  class="form-style-1" name="form3" action="res3.php">
                        <fieldset>
                        <legend>
                        ЧИТАТЕЛИ 
                        </legend>
                        <p><label for="fio">Фамилия читателя<span class="required">*</span></label> <input type="text" name="fio" autofocus  required></p>
                        <p><label for="adress">Домашний адрес<span class="required">*</span></label> <input type="text" name="adress"   required></p>
						<p><label for="email" >Email</label><input type="email" name="email" autocomplete="off" ></p>
                        <p><label for="website" >Website url</label><input type="url" name="website"  ></p>
                        <p><label for="discount">Возраст</label>  
                        <input type="range" name="age" min="1" max="100" step="1" value="0" onchange="updateTextInput(this.value);">
                   <span id="textInput">0</span></p>
                        <script>
                        function updateTextInput(val) {
    document.getElementById('textInput').innerHTML=val; 
  }
                        </script>
                         </fieldset>
                         <p><input type="submit" value="Отправить">  
                        <input type="reset" class="rest" value="Очистить"></p>
                        </form>
                        <?php
 if (!empty($_GET)) {
    $table = "<table border=3>";
      $table.=" <thead>
      <th>Фамилия читателя</th>
      <th>Домашний адрес</th>
      <th>Email</th>
	  <th>Сайт</th>
	  <th>Возраст</th>
  </thead>";
      $table .= "<tr>";
      $table .= "<td>".$_GET['fio']."</td>";
	  $table .= "<td>".$_GET['adress']."</td>";
	  $table .= "<td>".$_GET['email']."</td>";
	  $table .= "<td>".$_GET['website']."</td>";
      $table .= "<td>".$_GET['age']."</td>";
      $str="";
      if (!empty($_GET['a']))
      {
        $Nam= $_GET['a'];
        for($i=0;$i<count($_GET['a']); $i++)
            $str .= $Nam[$i].";";
      }
      $table .= "</tr>";
	  $table .= "<tr>";
      $table .= "</table> ";
      echo $table;
 }
?>
                        <form  class="form-style-1" name="form32" action="">
                        <fieldset>
                        <legend>
                        ЧИТАТЕЛИ 
                        </legend>
                        <p><label for="fio">Фамилия читателя<span class="required">*</span></label> <input type="text" name="fio" autofocus  required></p>
                        <p><label for="adress">Домашний адрес<span class="required">*</span></label> <input type="text" name="adress"   required></p>
						<p><label for="email" >Email</label><input type="email" name="email" autocomplete="off" ></p>
                        <p><label for="website" >Website url</label><input type="url" name="website"  ></p>
                        <p><label for="discount">Возраст</label>  
                        <input type="range" name="age" min="1" max="100" step="1" value="0" onchange="updateTextInput1(this.value);">
						<span id="textInput1">0</span></p>
                        <script>
                        function updateTextInput1(val) {
    document.getElementById('textInput1').innerHTML=val; 
  }
                        </script>
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
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
		<main class="mainflex">

			<form class="form-style-1" name="form1" action="addscript.php">
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
				<p>
					<input type="submit" value="Сохранить" name="otdelForm">
					<input type="reset" class="rest" value="Очистить">
				</p>
			</form>


			<form class="form-style-1" name="form2" action="addscript.php">
				<fieldset>
					<legend>
						КНИГИ 
                        </legend>
                        <p><label for="Avtor">Автор книги<span class="required">*</span></label> <input type="text" name="Avtor"  autofocus required></p>
                        <p><label for="Nazv">Название книги<span class="required">*</span></label> <input type="text" name="Nazv" required></p>
                        <p><label for="year">Год издания</label><input type="year" name="year" required min='1900' value="2019"></p>
                        <p><label for="number">Номер<span class="required">*</span></label><input type="number" name="number"></p>
                         </fieldset>
				<p>
					<input type="submit" value="Сохранить" name="bookForm">
					<input type="reset" class="rest" value="Очистить">
				</p>
			</form>

			<form class="form-style-1" name="form3" action="addscript.php">
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
				<p>
					<input type="submit" value="Сохранить" name="readersForm">
					<input type="reset" class="rest" value="Очистить">
				</p>
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
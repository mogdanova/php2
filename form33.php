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
                    <th>Описание</th>
                    <th>Номер договора</th>
                    <th>Email</th>
                    <th>Сайт</th>
                    <th>Оценка клиента</th>
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
                    УСЛУГА 
                    </legend>
                    <p><label for="fio">Описание<span class="required">*</span></label> <input type="text" name="fio" autofocus  required></p>
                    <p><label for="adress">Номер договора<span class="required">*</span></label> <input type="number" name="adress" required placeholder="123 456 789"></p>
                    <p><label for="email" >Email для связи</label><input type="email" name="email" autocomplete="off" ></p>
                    <p><label for="website" >Website url</label><input type="url" name="website"  ></p>
                    <p><label for="discount">Оценка Клиента</label>  
                        <input type="range" name="age" min="1" max="5" step="1" value="1" onchange="updateTextInput(this.value);">
                        <span id="textInput">1</span>
                    </p>
                    <script>
                        function updateTextInput(val) {
                            document.getElementById('textInput').innerHTML=val; 
                        }
                    </script>
                </fieldset>
                <p><input type="submit" value="Отправить">  
                <input type="reset" class="rest" value="Очистить"></p>
            </form>
        </main>
    </div>
</body>
</html>
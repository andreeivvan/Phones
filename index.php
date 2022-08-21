


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Телефоны</title>
</head>


<body>
    <!-- ввод данных в таблицы -->
     <h1>Добавления нового телефона</h1>
     <form id="phoneForm">
        <p>Введите имя</p>
        <input type="text" name="name" id="name">
        <p>Введите телефон</p>
        <input type="tel" name="tel" id="tel">
        <p>Введите дату</p>
        <input type="date" name="date" id="date">
        <button type="submit" id="sendPhone">Сохранить</button>
    </form>
    <div id="errorMess">

    </div>
    <a href="table.php">Таблица телефонов</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/formPhone.js"></script>
</body>
</html>
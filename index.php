


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Телефоны</title>
</head>


<body>

    

    <!-- ввод данных в таблицы -->
    <div class="form__contanier contanier">
        <form id="phoneForm" class="form">
            <h2>Добавления нового телефона</h2>
            <p>Введите имя</p>
            <input type="text" name="name" id="name" class="input">
            <p>Введите телефон</p>
            <input type="tel" name="tel" id="tel" class="input">
            <p>Введите дату</p>
            <input type="date" name="date" id="date" class="input">
            <button type="submit" id="sendPhone" class="button">Сохранить</button>
        </form>
    </div>
    <div id="errorMess" class="errorMess contanier"></div>
     

    <button type="submit" id="" onclick="document.location='table.php'" class="link__buttun contanier">Таблица телефонов</button>
    <button type="submit" id="" onclick="document.location='https://github.com/andreeivvan/phones'" class="link__buttun contanier">Посмотреть исходный код</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/formPhone.js"></script>
</body>
</html>
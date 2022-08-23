<?php
require_once 'config/connect.php';
?>

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
    <!-- вывод данных из таблицы -->
    <table class="table contanier">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Data</th>
        </tr>
        <?php
            $phones = mysqli_query($connect,"SELECT * FROM `phones`");
            $phones = mysqli_fetch_all($phones);
            foreach($phones as $phone) {
                ?>
                
                <tr>
                    <td><?= $phone[0]?></td>
                    <td><?= $phone[1]?></td>
                    <td><?= $phone[2]?></td>
                    <td><?= $phone[3]?></td>
                </tr>

                <?php
            }
        ?>

    </table>
    <button type="submit" id="" onclick="document.location='index.php'" class="link__buttun contanier">Добавить телефон</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
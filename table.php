<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Телефоны</title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    th {
        background-color: #E0FFFF;
    }
    td {
        background-color: #ADD8E6;
    }
</style>

<body>
    <!-- вывод данных из таблицы -->
    <table>
        <tr>
            <th>ID</th>
            <th>Phone</th>
            <th>Name</th>
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
    <a href="index.php">Добавления данных</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
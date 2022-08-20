<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phones</title>
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
</body>
</html>
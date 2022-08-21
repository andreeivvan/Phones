|<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$tel = $_POST['tel'];
$date = $_POST['date'];

mysqli_query($connect,"INSERT INTO `phones` (`id`, `name`, `tel`, `date`) VALUES (NULL, '$name', '$tel', '$date')");
?>
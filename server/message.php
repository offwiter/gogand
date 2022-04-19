<?php

require('connect.php');

$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO reviews (name, message) VALUES ('$name' , '$message')";
$result = mysqli_query($link, $sql);
header("Location: ../index.html");
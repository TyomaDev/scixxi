<?php

require_once 'connect.php';

	
	
$title = $_POST['title'];

$h1 = $_POST['h1'];

$h2 = $_POST['h2'];

$h3 = $_POST['h3'];

$p = $_POST['p'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$source = $_POST['source'];
$date = date("y.m.d");

// Главная информация
$info1 = $_POST['info1'];

$info2 = $_POST['info2'];

$info3 = $_POST['info3'];

$info4 = $_POST['info4'];



$pic1 = $_POST['pic1'];
$pic2 = $_POST['pic2'];
$mainpic = $_POST['mainpic'];




 
// Запись информации в базу даных







mysqli_query($connect, "INSERT INTO `articles` (`id`,`title`,`h1`,`h2`,`h3`,`p`,`source`,`date`,`info1`,`info2`,`info3`,`p2`,`p3`,`p4`,`info4`,`pic1`,`pic2`,`mainpic`) 
VALUES (null, '$title', '$h1', '$h2', '$h3', '$p', '$source', '$date', '$info1', '$info2', '$info3','$p2','$p3','$p4', '$info4', '$pic1', '$pic2', '$mainpic');");
header("Location: ../../index.php");
?>
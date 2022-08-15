<?php
require_once '../vendor/connect.php';
    
$articles_id = (int) $_GET['articles_id'];
$select = mysqli_query($connect, "SELECT * FROM `articles` WHERE `id` = $articles_id");
$fetch = $select->fetch_assoc();

$title = $fetch['title'];
$h1 = $fetch['h1'];
$h2 = $fetch['h2'];
$h3 = $fetch['h3'];
$p  = $fetch['p'];
$p2  = $fetch['p2'];
$p3  = $fetch['p3'];
$p4  = $fetch['p4'];
$source  = $fetch['source'];
$date = $fetch['date'];
$info1 = $fetch['info1'];
$info2 = $fetch['info2'];
$info3 = $fetch['info3'];
$info4 = $fetch['info4'];
$pic1 = $fetch['pic1'];
$pic2 = $fetch['pic2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../preloader/preloader.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../css/articless.css" rel="stylesheet" media="screen">  
    <link rel="icon" href="../../img/logo/fav1.ico" type="image/png">
    <title><?php echo($title);?></title>
</head>
<body>
<!--preloader-->
	<div class="preloader">
		<div class="preloader__row">
			<div class="preloader__item"></div>
			<div class="preloader__item"></div>
		</div>
	</div>	
<img src="../../img/icons/leftarrow.png" alt="назад" class="snapback_to_previously" onclick="javascript:history.go(-1)">
<img src="../../img/icons/uparrow.png" alt="назад" class="snapback_to_up" onclick='window.location.href="#main_head"'>
<!-- Картинка на весь экран и название статьи -->
    <header id="main_head" class="container-fluid text-center">
        <div class="row">
            <h1 class="col-12"><?php echo($h1);?></h1>
            <a href="#heading" id="next">Далее</a>
            <p><?php echo($date);?></p>
        </div>
    </header>
<!-- Заголовок -->
    <section id="heading" class="container-fluid py-2">
        <div class="row">
            <h2 class="col-12 col-lg-9 px-5"><?php echo($h2);?></h2>
            <h3 class="col-12 col-lg-9 px-5"><?php echo($h3);?></h3>
        </div>
    </section>
<!-- Раздел 1 -->
    <section id="section1" class="container-fluid py-2">
        <div class="row">
            <div class=" d-lg-flex col-lg-5 d-none  align-items-center">
                <img src="../../img/articlesIMG/<?php echo($pic1);?>" alt="Картинка не загрузилась">
            </div>
            <div class="col-12 col-lg-5">
                <h2 class="col-12"><?php echo($p);?></h2>
                <p class="col-12"><?php echo($info1);?></p>
            </div>
            <div class="col-12 d-lg-none d-flex">
                <img src="../../img/articlesIMG/<?php echo($pic1);?>" alt="Картинка не загрузилась">
            </div>
        </div>
    </section>  
<!-- раздел 2 -->
    <section id="section2" class="container-fluid py-2">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h2 class="col-12"><?php echo($p2);?></h2>
                <p class="col-12"><?php echo($info2);?></p>
            </div>
            <div class="col-12 col-lg-5 d-flex align-items-center">
                <img src="../../img/articlesIMG/<?php echo($pic2);?>" alt="Картинка не загрузилась">
            </div>
        </div>
    </section>
<!-- раздел 3 -->
    <section id="section3" class="container-fluid py-2">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h2 class="col-12"><?php echo($p3);?></h2>
                <p class="col-12"><?php echo($info3);?></p>
            </div>
            <div class="col-12 col-lg-5">
                <h2 class="col-12"><?php echo($p4);?></h2>
                <p class="col-12"><?php echo($info4);?></p>
            </div>
        </div>
    </section>
<!-- Источники-->
    <div id="source" class="container-fluid px-2 py-2">
            <div class="row px-2">
                 <div class="col-12"><p class="col-12">Источники: <?php echo($source);?></p></div>
            </div>
    </div>
<!-- footer -->
    <footer class="container-fluid">
        <div class="row">
           <p class="col-12 text-center">Artyom Musharov, scixxi.ru &copy; 2021</p>
        </div>  
    </footer>
<script src="../../preloader/preloaderclose.js"></script>      
</body>
</html>
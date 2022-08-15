<?php
// Отключать, если не используется
// require_once '../vendor/connect.php';
    
$password =  $_GET['password'];
$login =  $_GET['login'];
if($password === "KDqSw4nT5SH5" && $login === "uznlt9jc7umg"){
?>	
<!-- Создание страницы, если правильно введены данные-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SciXXI.RU | Homepage</title>
    <link href="../../preloader/preloader.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="icon" href="../../img/logo/fav1.ico" type="image/png">
   
</head>
<body>
<!--preloader-->
	<div class="preloader">
		<div class="preloader__row">
			<div class="preloader__item"></div>
			<div class="preloader__item"></div>
		</div>
	</div>
<!--section-->
	<section class="container-fluid justify-content-center d-flex">
		<div class="row col-12 col-sm-12 col-xl-6 justify-content-center d-flex">
		    <form class="col-12 d-flex justify-content-center flex-wrap" method="post" action="../vendor/addstuff.php" enctype="multipart/form-data">
		    	
		        <div class="col-12 mt-4">
					<label>Шапка</label>
					<input class="col-12" type="text" name="title" placeholder="title" required minlength="8">
					
					<label>Название статьи</label>
					<input class="col-12" type="text" name="h1" placeholder="h1" required minlength="8">
					
					<label>Заголовок</label>
					<input class="col-12" type="text" name="h2" placeholder="h2" required minlength="8">
		        </div>
		        
		        
		        <!--textarea-->
		        <div class="col-12 mt-4">
					<label>Текст после заголовока</label>
					<textarea  class="col-12" type="text" name="h3" placeholder="h3" required id="mytextarea"></textarea>
		        	
					<label>Раздел 1, название</label>
					<textarea class="col-12" type="text" name="p" placeholder="p" required id="mytextarea" ></textarea>
					
					<label>Раздел 2, название</label>
					<textarea  class="col-12" type="text" name="p2" placeholder="p2" required id="mytextarea" ></textarea>
					
					<label>Раздел 3, название</label>
					<textarea  class="col-12" type="text" name="p3" placeholder="p3" required id="mytextarea"  ></textarea>
					
					<label>Раздел 4, название</label>
					<textarea  class="col-12" type="text" name="p4" placeholder="p4" required id="mytextarea" ></textarea>
					
					<label>Раздел 1, информация</label>
					<textarea  class="col-12" type="text" name="info1" placeholder="info1" required id="mytextarea"></textarea>
					
					<label>Раздел 2, информация</label>
					<textarea  class="col-12" type="text" name="info2" placeholder="info2" required id="mytextarea"></textarea>
					
					<label>Раздел 3, информация</label>
					<textarea  class="col-12" type="text" name="info3" placeholder="info3" required id="mytextarea"></textarea>
					
					<label>Раздел 4, информацияи</label>
					<textarea  class="col-12" type="text" name="info4" placeholder="info4" required id="mytextarea"></textarea>
					
					<label>Источники, заполнять по образцу: " <а href="#СсылкаN"> Название источника N <\а>, ... " в примере "а" русская и "/", а не "\", так что внимательнее! =) </label>
					<textarea  class="col-12" type="text" name="source" placeholder="source" required id="mytextarea"></textarea>
					
				</div>
				
				<!--Картинки-->
				<div class="col-12 my-4">
					<label>Раздел 1, картинка</label>
					<input class="col-12" type="text" name="pic1" placeholder="pic1" required minlength="8">
					
					<label>Раздел 1, картинка</label>
					<input class="col-12" type="text" name="pic2" placeholder="pic2" required minlength="8">
					
					<label>Обложка</label>
					<input class="col-12" type="text" name="mainpic" placeholder="mainpic" required minlength="8">
		        </div>
				<!--!!!Чтобы добавить картинки, нужно закинуть сами картинки в /img/articlesIMG, а их название занести в базу данных  в соответствующие поля-->
				
		        <!--Отправить-->
		        <button type="submit" class="register-btn mx-auto py-2  col-6 ">Опубликовать</button>
		    </form>
		</div>
	</section>
	

<!-- footer -->
<style>footer{bottom: 0;left: 0;right: 0;width: 100%;background-color: #000;margin: 0;color: #e5e5e5;}
textarea{min-height:50px;}
label{margin-top:0.5rem;}</style>
<footer class="container-fluid mt-5">
    <div class="row">
       <p class="col-12 text-center my-0">Artyom Musharov, scixxi.ru &copy; 2021</p>
    </div>  
</footer>

</body>
<!--http://scixxi.ru/php/admin/adminiscixxi.php?password=KDqSw4nT5SH5&login=uznlt9jc7umg-->
<script src="../../preloader/preloaderclose.js"></script>
</html>
<?php
}
else{header('Location: ../../index.php');
	
}

?>
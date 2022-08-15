<?php
    require_once '../vendor/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../preloader/preloader.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../css/CertainArticles.css" rel="stylesheet" media="screen">  
    <link rel="icon" href="../../img/logo/fav1.ico" type="image/png">
    <title>SciXXI.ru | Articles</title>
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
<!-- content -->
    <section class='container-fluid content' style="min-height: 100vh;">
        <div class='row'>
            
            <div class='col-12 contents_wrapper'>
            <?php  

            $sql_query = "SELECT * FROM `articles`  ORDER BY `id`" ;
            $CertainArticles = mysqli_query($connect, $sql_query);

            while($fetch = $CertainArticles->fetch_assoc())
            { ?>
                
                <div class='content-block col-12 col-md-5 col-xl-3'>
                    <a href='../articles/?articles_id=<?php echo($fetch['id']);?>' class='content-a'></a>
                    <img src='../../img/articlesIMG/<?php echo($fetch['mainpic']);?>' class='img-content '  alt="Ошибка при загрузке фотографии">
                    <div class='content-title col-12'>
                        <h3> <?php echo($fetch['title']); ?></h3>
                    </div> 
                    <div class='content-data col-12'>   
                        <span> <?php echo($fetch['date']);?></span>
                    </div>
                </div>
            <?php  
            }
            ?>
            </div>
        </div>
    </section>
<!-- footer -->
    <footer class="container-fluid">
        <div class="row">
            <p class="col-12 text-center">Artyom Musharov, scixxi.ru &copy; 2021</p>
        </div>  
    </footer>
<script src="../../preloader/preloaderclose.js"></script>   
</body>
</html>
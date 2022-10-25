<?php
//get page
if (isset($_GET['page']) && file_exists('inc/pages/'.$_GET['page'].'.php')) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>PHP - պարզ, դինամիկ վեբ կայք</title>
</head>
<body>
    <div id="wrapper">
        <div id="header"></div>
        <div id="container">
            <div id="side" class="white">
                <div class="nav">
                    <h3>Մենյու</h3>
                    <ul>
                        <li><a href="index.php">Գլխավոր</a></li>
                        <li><a href="?page=news">Նորություններ</a></li>
                        <li><a href="?page=about">Մեր մասին</a></li>
                        <li><a href="?page=feedback">Հետադարձ կապ</a></li>
                    </ul>
                </div>
            </div>
            <div id="content" class="white">
                <?php include_once ('inc/pages/'.$page.'.php'); ?>
            </div>
        </div>
        <div id="footer">&#169; 2022: PHP &#38; MySql</div>
    </div>
</body>
</html>
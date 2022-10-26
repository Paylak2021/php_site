<?php
// DB connection
require_once('inc/connect.php');
//get page
if (isset($_GET['page']) && file_exists('inc/pages/'.$_GET['page'].'.php')) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
// page data
if ($page != 'item') {

    $sql = mysqli_query($con, "SELECT * FROM `pages` WHERE `name`='$page'");
    $row = mysqli_fetch_assoc($sql);
    $title = $row['title'];
    $meta_d = $row['meta_d'];
    $descr = $row['meta_d'];
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$meta_d ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title><?=$title; ?></title>
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
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oksanna</title>
    <meta name="description" content="oksanna.com.ua"/>
    <meta name="keywords" content="oksanna"/>
    <meta name="author" content="dean"/>

    <link rel="shortcut icon" href="../favicon.ico">

    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <link rel="stylesheet" type="text/css" href="css/common/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/header/style.css"/>

    <link rel="stylesheet" type="text/css" href="css/animation/mainPage/normalize1.css">
    <link rel="stylesheet" type="text/css" href="css/animation/mainPage/style1.css" media="screen"/>

    <script src="js/modernizr.js"></script>
    <script src="js/modernizr.custom.25376.js"></script>
</head>
<body>

<div id="perspective" class="perspective effect-rotateleft">
    <div class="container">
        <div class="wrapper">
            <div class="columnMain columnMainL ">
                <div class="logo">
                    <img src="images/logos/logo.png"/>
                </div>
                <div class="menuButtonDiv"><button id="showMenu" class="menuButton">Меню</button></div>
                <div class="slogan">
                    <img src="images/logos/slogan.png"/>
                </div>
            </div>
            <div class="columnMain  columnMainR">
                <?php include('pages/gallery/gallery.html'); ?>
            </div>
        </div>
    </div>

    <nav class="outer-nav right vertical">
        <a href="#" class="icon-home">Главная</a>
        <a href="pages/gallery/gallery.php" class="icon-news">Галерея</a>
    </nav>
</div>


<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
<script src="js/index1.js"></script>
<script src="js/classie.js"></script>
<script src="js/menu.js"></script>

</body>
</html>
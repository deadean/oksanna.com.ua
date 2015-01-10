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

    <link rel="stylesheet" type="text/css" href="../../css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/component.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/common/common.css"/>

    <script src="../../js/modernizr.custom.25376.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/animation/gallery/demo.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/animation/gallery/component.css"/>
</head>
<body>

<div id="perspective" class="perspective effect-rotateleft">
    <div class="container">

        <div class="wrapper">
            <header class="clearfix">
                <div>
                </div>
            </header>

            <div id="grid-gallery" class="grid-gallery">

                <section class="grid-wrap">
                    <ul class="grid">
                        <li class="grid-sizer"></li>
                        <li>
                            <figure>
                                <img src="models/1.jpg" alt="img01"/>
                                <figcaption>
                                    <h3>Text1</h3>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="models/6.jpg" alt="img02"/>
                                <figcaption>
                                    <h3>Text1</h3>
                                </figcaption>
                            </figure>
                        </li>

                    </ul>
                </section>

                <section class="slideshow">
                    <ul>
                        <li class="verticalPhoto">
                            <figure>
                                <div>
                                    <img src="models/1.jpg" alt="img01"/>
                                </div>
                            </figure>
                        </li>
                        <li class="horizontalPhoto">
                            <figure>
                                <div>
                                    <img src="models/6.jpg" alt="img02"/>
                                </div>
                            </figure>
                        </li>
                    </ul>
                    <nav>
                        <span class="icon nav-prev"></span>
                        <span class="icon nav-next"></span>
                        <span class="icon nav-close"></span>
                    </nav>
                </section>

            </div>

        </div>

        <button id="showMenu">Show Menu</button>
    </div>

    <nav class="outer-nav right vertical">
        <a href="../../index.php" class="icon-home">Главная</a>
        <a href="#" class="icon-news">Галерея</a>
    </nav>

</div>

<script src="../../js/gallery/imagesloaded.pkgd.min.js"></script>
<script src="../../js/gallery/masonry.pkgd.min.js"></script>
<script src="../../js/gallery/classie.js"></script>
<script src="../../js/gallery/cbpGridGallery.js"></script>
<script>
    new CBPGridGallery(document.getElementById('grid-gallery'));
</script>

<script src="../../js/classie.js"></script>
<script src="../../js/menu.js"></script>

</body>
</html>
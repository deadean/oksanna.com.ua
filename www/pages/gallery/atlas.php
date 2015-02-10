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
    <link rel="stylesheet" type="text/css" href="../../css/header/style.css"/>

    <script src="../../js/modernizr.custom.25376.js"></script>
    <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>

    <script>
        $(document).ready(function () {

            return;

            var native_width = 0;
            var native_height = 0;

            //Now the mousemove function
            $(".magnify").mousemove(function (e) {
                //When the user hovers on the image, the script will first calculate
                //the native dimensions if they don't exist. Only after the native dimensions
                //are available, the script will show the zoomed version.
                if (!native_width && !native_height) {
                    //This will create a new image object with the same image as that in .small
                    //We cannot directly get the dimensions from .small because of the
                    //width specified to 200px in the html. To get the actual dimensions we have
                    //created this image object.
                    var image_object = new Image();
                    image_object.src = $(".small").attr("src");

                    //This code is wrapped in the .load function which is important.
                    //width and height of the object would return 0 if accessed before
                    //the image gets loaded.
                    native_width = image_object.width;
                    native_height = image_object.height;
                }
                else {
                    //x/y coordinates of the mouse
                    //This is the position of .magnify with respect to the document.
                    var magnify_offset = $(this).offset();
                    //We will deduct the positions of .magnify from the mouse positions with
                    //respect to the document to get the mouse positions with respect to the
                    //container(.magnify)
                    var mx = e.pageX - magnify_offset.left;
                    var my = e.pageY - magnify_offset.top;

                    //Finally the code to fade out the glass if the mouse is outside the container
                    if (mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0) {
                        $(".large").fadeIn(50);
                    }
                    else {
                        $(".large").fadeOut(50);
                    }
                    if ($(".large").is(":visible")) {
                        //The background position of .large will be changed according to the position
                        //of the mouse over the .small image. So we will get the ratio of the pixel
                        //under the mouse pointer with respect to the image and use that to position the
                        //large image inside the magnifying glass
                        var rx = Math.round(mx / $(".small").width() * native_width - $(".large").width() / 2) * -1;
                        var ry = Math.round(my / $(".small").height() * native_height - $(".large").height() / 2) * -1;
                        var bgp = rx + "px " + ry + "px";

                        //Time to move the magnifying glass with the mouse
                        var px = mx - $(".large").width() / 2;
                        var py = my - $(".large").height() / 2;
                        //Now the glass moves with the mouse
                        //The logic is to deduct half of the glass's width and height from the
                        //mouse coordinates to place it with its center at the mouse coordinates

                        //If you hover on the image now, you should see the magnifying glass in action
                        $(".large").css({left: px, top: py, backgroundPosition: bgp});
                    }
                }
            })
        })
    </script>

</head>

<style>
    /*Some CSS*/
    * {
        margin: 0;
        padding: 0;
    }

    .magnify {
        width: 200px;
        margin: 10px auto;
        position: relative;
    }

    /*Lets create the magnifying glass*/
    .large {
        width: 350px;
        height: 350px;
        position: absolute;
        border-radius: 100%;

        /*Multiple box shadows to achieve the glass effect*/
        box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85),
        0 0 7px 7px rgba(0, 0, 0, 0.25),
        inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

        /*Lets load up the large image first*/
        background: url('../../images/models/1.jpg') no-repeat;

        /*hide the glass by default*/
        display: none;
    }

    /*To solve overlap bug at the edges during magnification*/
    .small {
        display: block;
    }
</style>
<body>

<div id="perspective" class="perspective effect-rotateleft">
    <div class="container">
        <div class="wrapper">

            <div class="columnMain" style="width: 15%; text-align: center">
                <div class="logo1">
                    <button id="showMenu" class="menuButton">Меню</button>
                </div>
            </div>

            <div>
                <a href="#"><button class="category">Атлас</button></a>
                <a href="shifon.php"><button class="category">Шифон</button></a>
                <a href="trikotazhskruzhevom.php"><button class="category">Трикотаж (кружево)</button></a>
                <a href="trikotazhzvetnoi.php"><button class="category">Трикотаж (цвет)</button></a>
                <a href="pljazh.php"><button class="category">Пляж</button></a>
                <a href="majki.php"><button class="category">Майки</button></a>
                <a href="kombidress.php"><button class="category">Комбидресс</button></a>
            </div>

            <?php include('gallerymodels_atlas.html'); ?>

        </div>
    </div>

    <nav class="outer-nav right vertical textMenu">
        <a href="../../index.php" class="icon-home">Главная</a>
        <a href="../aboutus/aboutus.php" class="icon-news">О нас</a>
        <a href="#" class="icon-image">Галерея</a>
        <a href="../contacts/contacts.php" class="icon-mail">Контакты</a>
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
<?php
include_once "DB_connect.php";

$db=$GLOBALS['db'];
$images = $db->getImages();
$contents = $db->getContent();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Character Responsive HTML5 Template</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css">
</head>

<body class="tm-bg-dark">
    <main class="tm-container masonry">

        <div class="item tm-bg-white tm-block tm-block-left" data-desktop-seq-no="1" data-mobile-seq-no="1">
            <p class="tm-hero-text">&ldquo;Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                himenaeos. Maecenas vel lacinia ipsum, nec fermentum diam. Nulla nec gravida odio, eget vestibulum urna.&rdquo;</p>
            <header class="tm-block-brand">
                <div class="tm-bg-primary-dark tm-text-white tm-block-brand-inner">
                    <i class="fas fa-braille fa-3x"></i>
                    <h1 class="tm-brand-name">Character</h1>
                </div>
            </header>
        </div>

        <?php

        foreach ($images as $image) {

        ?>

        <div class="item" data-desktop-seq-no="<?php echo $image['desktop_no']; ?>" data-mobile-seq-no="<?php echo $image['mobile_no']; ?>">
            <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" class="tm-img-left">
        </div>

        <?php }

        ?>

        <?php

        foreach ($contents as $content) {
            echo $content['content'];

        }
        ?>



    </main>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script>

        let callAdjustLayout;
        let currentLayout = "desktop",
            nextLayout = "desktop";

        /**
         * detect IE
         * returns version of IE or false, if browser is not Internet Explorer
         */
        function detectIE() {
            var ua = window.navigator.userAgent;

            var msie = ua.indexOf('MSIE ');
            if (msie > 0) {
                // IE 10 or older => return version number
                return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            }

            var trident = ua.indexOf('Trident/');
            if (trident > 0) {
                // IE 11 => return version number
                var rv = ua.indexOf('rv:');
                return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
            }

            var edge = ua.indexOf('Edge/');
            if (edge > 0) {
                // Edge (IE 12+) => return version number
                return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
            }

            // other browser
            return false;
        }

        // Adjust layout based on the browser width
        function adjustLayout() {
            let block1, block2, block3, block4, block5, block6, block7, block8, block9;

            if (window.innerWidth <= 1199) {
                // Mobile layout
                nextLayout = "mobile";
                block1 = $("div[data-mobile-seq-no='1']");
                block2 = $("div[data-mobile-seq-no='2']");
                block3 = $("div[data-mobile-seq-no='3']");
                block4 = $("div[data-mobile-seq-no='4']");
                block5 = $("div[data-mobile-seq-no='5']");
                block6 = $("div[data-mobile-seq-no='6']");
                block7 = $("div[data-mobile-seq-no='7']");
                block8 = $("div[data-mobile-seq-no='8']");
                block9 = $("div[data-mobile-seq-no='9']");
            } else {
                // Desktop layout
                nextLayout = "desktop";
                block1 = $("div[data-desktop-seq-no='1']");
                block2 = $("div[data-desktop-seq-no='2']");
                block3 = $("div[data-desktop-seq-no='3']");
                block4 = $("div[data-desktop-seq-no='4']");
                block5 = $("div[data-desktop-seq-no='5']");
                block6 = $("div[data-desktop-seq-no='6']");
                block7 = $("div[data-desktop-seq-no='7']");
                block8 = $("div[data-desktop-seq-no='8']");
                block9 = $("div[data-desktop-seq-no='9']");
            }

            if (nextLayout !== currentLayout) {
                // Reorder blocks based on their seq no
                block1.after(block2.detach());
                block2.after(block3.detach());
                block3.after(block4.detach());
                block4.after(block5.detach());
                block5.after(block6.detach());
                block6.after(block7.detach());
                block7.after(block8.detach());
                block8.after(block9.detach());
                currentLayout = nextLayout;
            }
        }

        // Adjust layout upon window resize
        window.onresize = function () {
            clearTimeout(callAdjustLayout);
            callAdjustLayout = setTimeout(adjustLayout, 100);
        }

        // DOM is ready
        $(function () {
            if (detectIE()) {
                alert('Please use the latest version of Chrome or Firefox for best browsing experience.');
            }

            adjustLayout();
        })
    </script>
</body>

</html>
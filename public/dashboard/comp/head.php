<?php

function getHtmlHead($title = "Fresh Flow", $cssArr = array()) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A simple, fresh take on a Content Management System">

        <link rel="icon" href="./assets/logo.ico">
        <title><?php echo ($title) ?></title>

        <link rel="stylesheet" href=<?php echo ROOT . "style/normalize.css" ?>>
        <?php

        if (sizeof($cssArr) > 0) {
            foreach ($cssArr as $css) {
                ?>

                <link rel="stylesheet" href="<?php echo ROOT . "style/$css" ?>"></script>
                
                <?php
            }
        }

        ?>

    </head>
    <body id="body">


    <?php
}
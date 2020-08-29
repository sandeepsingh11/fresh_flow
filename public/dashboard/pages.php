<?php

require_once('./config.php');
require_once(ROOT . 'comp/head.php');
require_once(ROOT . 'comp/footer.php');





getHtmlHead("Pages | Fresh Flow", ["main-dash.css"]);



include_once(ROOT . 'comp/nav-dash.php')
?>

<h1>Pages</h1>

<?php

include_once(ROOT . '/site_info/scripts.php');

$pagesArr = getCurrentPages();

?>

<ul>
    <?php

    foreach ($pagesArr as $page => $filename) {
        ?>

        <li>
            <?php echo htmlentities($page) . ' - ' . htmlentities($filename) ?>
            <a href="<?php echo ROOT . "editor.php?page=" . rtrim($filename, ".php") ?>"><?php echo $filename ?></a>
        </li>

        <?php
    }

    ?>
</ul>

<?php

getHtmlFooter([]);
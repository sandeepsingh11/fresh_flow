<?php

require_once('./config.php');
require_once(ROOT . 'comp/head.php');
require_once(ROOT . 'comp/footer.php');



if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    header("Location: ./dashboard.php");
    exit();
}





getHtmlHead("Editor | Fresh Flow", ["main-dash.css"]);



include_once(ROOT . 'comp/nav-dash.php');


include_once(ROOT . 'inc/ff-module.php');
$module_content = getModuleContent($page);
?>




<form action="./inc/ff-module-validate.php" method="post">
    <h2>Editor - <?php echo $page ?></h2>

    <input type="hidden" name="page_name" value="<?php echo $page ?>">

    <?php

    foreach ($module_content as $index => $content) {
        ?> 

        <div class="editor-container">
            <input type="text" name="<?php echo $index ?>" id="content-<?php echo $index ?>" value="<?php echo $content ?>">
        </div>

        <?php
    }

    ?>

    <input type="submit" value="Update">
</form>





<!-- https://github.com/markedjs/marked -->
<div id="content"></div>





<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
    document.getElementById('content').innerHTML =
        marked('# Marked in browser\n\nRendered by **marked**.');
</script>

<?php

getHtmlFooter([]);
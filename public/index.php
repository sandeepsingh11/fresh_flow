<?php

require_once('./config.php');
require_once(ROOT . 'comp/head.php');
require_once(ROOT . 'comp/footer.php');





getHtmlHead("Fresh Flow", ["main.css"]);

?>

<!-- nav -->




<!-- main -->
<main>

    <!-- hero -->
    <div id="hero-container">
        <div id="hero-content">
            <h1 class="hero-title">Fresh Flow</h1>
            <h3 class="hero-subtitle">The freshest CMS you'll ever swim by</h3>

            <a href="#" class="button">Get Fresh!</a>
        </div>
    </div>



    <!-- stats -->
    <div id="stats-container">
        <div id="stats-content">
            <div class="stat">
                <img src="" alt="" class="">

                <h3 class="stat-title"></h3>
                <p class="stat-desc"></p>
            </div>

            <div class="stat">
                <img src="" alt="" class="">

                <h3 class="stat-title"></h3>
                <p class="stat-desc"></p>
            </div>
        </div>
    </div>



    <!-- about -->
    <div id="about-container">
        <div id="about-content">

        </div>
    </div>



    <!-- github -->
</main>



<?php

getHtmlFooter([]);
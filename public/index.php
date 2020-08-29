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
            <h1 class="hero-title ff-module">Fresh Flow</h1>
            <h3 class="hero-subtitle ff-module">The freshest CMS you'll ever swim by</h3>

            <a href="#" class="button ff-module">Get Fresh!</a>
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
            <p class="ff-module">Integer ullamcorper lorem et libero imperdiet, sed eleifend turpis gravida. Quisque risus urna, eleifend non tristique at, placerat sit amet ligula. Quisque iaculis ut diam quis pharetra. Etiam rutrum ac purus a dapibus. Mauris ut sagittis orci. Vestibulum id justo non dui mollis vehicula. Duis vitae est orci. Aenean porttitor commodo vehicula. Quisque eu sapien vitae justo vestibulum tristique. Fusce facilisis lacus eros, ornare commodo metus tempor vel.</p>
        </div>
    </div>



    <!-- github -->
    <div id="demo"></div>
</main>



<?php

getHtmlFooter(["ff_module.js"]);
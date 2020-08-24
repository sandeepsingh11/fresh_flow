<?php

function getHtmlFooter($extraJs = array()) {
    ?>

        <footer id="footer" class="grid grid-col-3">
            <div class="grid-item">
                <p>© <?php echo date("Y") ?> Sandeep S</p>
            </div>

            <!-- <div class="grid-item">
                <div id="social">
                    <a href="https://linkedin.com/in/sandeep-singh-vegan/"><img src="./assets/linkedin.png" alt="linked in" target="_blank"></a>
                    <a href="https://github.com/sandeepsingh11"><img src="./assets/github.png" alt="github" target="_blank"></a>
                </div>
            </div>

            <div class="grid-item">
                <p><span>Run on <a href="https://www.kualo.com/webhosting/green-web-hosting" target="_blank">green energy</a></span></p>
            </div> -->
        </footer>


        <!-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> -->
        <script src="<?php echo ROOT . "js/main.js" ?>"></script>
        <?php

        if (sizeof($extraJs) > 0) {
            foreach ($extraJs as $js) {
                ?>

                <script src="<?php echo ROOT . "js/$js" ?>"></script>
                
                <?php
            }
        }

        ?>
    </body>
    </html>

    <?php
}
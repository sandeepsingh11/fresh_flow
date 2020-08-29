<?php

// PHP GLOBALS
define("WEBSITE_DIR", "../");









if ($_SERVER["SERVER_NAME"] == "localhost") {
    // define absolute root
    define("ROOT", "./");


    $GLOBALS["WEBSITE_ROOT"] = $_SERVER["DOCUMENT_ROOT"] . "/fresh_flow/public/";
}
else {
    // define absolute root
    define("ROOT", "./");


    $GLOBALS["WEBSITE_ROOT"] = $_SERVER["DOCUMENT_ROOT"];
}
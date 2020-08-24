<?php

// echo "doc root: " . $_SERVER["DOCUMENT_ROOT"] . "\n";
// echo "server name: " . $_SERVER["SERVER_NAME"] . "\n";


if ($_SERVER["SERVER_NAME"] == "localhost") {
    // define absolute root
    define("ROOT", "./");


    $GLOBALS["WEBSITE_ROOT"] = $_SERVER["DOCUMENT_ROOT"] . "/fresh_flow/public/";
}
else {
    // define absolute root
    // define("ROOT", __DIR__ . "/");
    // define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
    define("ROOT", "./");


    $GLOBALS["WEBSITE_ROOT"] = $_SERVER["DOCUMENT_ROOT"];
}
<?php

function getCurrentPages() {
    $pages = [];

    // $json = file_get_contents("../ff-map.json");
    // $jsonObj = json_decode($json);

    // foreach ($jsonObj->pages as $page => $link) {
    //     $pages[$page] = $link;
    // }



    $dir = "../";
    $dirFiles = scandir($dir);
    foreach ($dirFiles as $filename) {
        if ( (strpos($filename, ".php") !== false) || (strpos($filename, ".html") !== false) ) {
            if ($filename !== "config.php") {
                array_push($pages, $filename);
            }
        }
    }

    return $pages;
}

// $pagesArr = getCurrentPages();
// print_r($pagesArr);
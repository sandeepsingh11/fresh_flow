<?php
include_once("../config.php");

if (empty($_POST)) {
    header("Location: dashboard.php?err=no_post_vals");
    exit();
}
else {
    // print_r($_POST);
    $moduleLen = sizeof($_POST);

    $updateModuleObj = ["update"=>true];

    foreach ($_POST as $index => $content) {
        if ($index === "page_name") {
            $pageArr = [$content=>[]];
            $currentPage = $content;

            $updateModuleObj["pages"] = $pageArr;
        }
        else {
            array_push($updateModuleObj["pages"][$currentPage], $content);
        }
    }

    // print_r($updateModuleObj);
    $updateModule_JSON = json_encode($updateModuleObj, JSON_PRETTY_PRINT);




    // write json to file (website's /js dir)
    $outputFile = fopen(WEBSITE_DIR . "../js/updateModule.json", "w");
    fwrite($outputFile, $updateModule_JSON);
    fclose($outputFile);
}


// JSON Structure
// {
//     "update": true,
//     "pages": [
//         "index": [
//             0: "",
//             1: "",
//             2: "",
//         ],
//         "about": {
//             ...
//         }
//     ]
// }
<?php

// print_r(file_get_contents('php://input'));
// $data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
if (empty($_POST)) {
    header("Location: dashboard.php?err=no_post_vals");
    exit();
}
else {
    print_r($_POST);
    $moduleLen = sizeof($_POST);

    foreach ($_POST as $content) {
        // HOW TO PASS VARS FROM PHP TO JS??? GOAL: INJECT HTML WITH NEW VALS
    }
}
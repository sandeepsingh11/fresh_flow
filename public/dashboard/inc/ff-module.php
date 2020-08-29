<?php
// get editing page
// parse html for "ff-module" class
// provide Marked editor for each ff-module

function getModuleContent($page_name) {
    $htmlStr = file_get_contents("../$page_name.php");

    
    $module_content = [];
    $index = 0;
    $htmlStrLen = strlen($htmlStr);
    while ( ($index <= $htmlStrLen) && ($pos = strpos($htmlStr, "ff-module", $index)) ) {
        
        // get the (sub)string / $content between <class="ff-module"></>
        if ($pos = strpos($htmlStr, ">", $pos)) {
            if ($posEnd = strpos($htmlStr, "</", $pos)) {
                $substrLen = $posEnd - $pos - 1;
                $content = substr($htmlStr, $pos + 1, $substrLen);
                array_push($module_content, $content);
                // echo $content . "-";

                $index = $posEnd;
            }
            else {
                $index = $pos + 1;
            }
        }
        else {
            $index = $pos + 1;
        }

    }



    return $module_content;
}
<?php

// get editing page
// parse html for "ff-module" class
// provide Marked editor for each ff-module

function getModuleContent($page_name) {
    $moduleJson_path = WEBSITE_DIR . "js/updateModule.json";
    $moduleJson_file = fopen($moduleJson_path, "r");
    $moduleJson_content = fread($moduleJson_file, filesize($moduleJson_path));

    if ($moduleJson_content == true) {
        // if file contains content, pull from it

        $moduleArr = json_decode($moduleJson_content, true);


        $module_content = [];
        foreach ($moduleArr["pages"][$page_name] as $content) {
            array_push($module_content, $content);
        }

        return $module_content;
    }
    else {
        // otherwise pull from the page itself
        
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



                    $index = $posEnd;
                }
                else {
                    $index++;
                }
            }
            else {
                $index++;
            }

        }


        return $module_content;
    }

}
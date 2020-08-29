var jsDir = "./js/";



// get update-module json to update webpage text
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var updateModule_json = JSON.parse(this.responseText);
        var ffModules = document.getElementsByClassName("ff-module");
        // console.log(ffModules);

        var i = 0;
        for (i = 0; i < ffModules.length; i++) {
            ffModules[i].innerHTML = updateModule_json.pages["index"][i];
            // console.log(updateModule_json.pages["index"][i]);
        }
        
    }
};

xmlhttp.open("GET", `${jsDir}updateModule.json`, true);
xmlhttp.send();
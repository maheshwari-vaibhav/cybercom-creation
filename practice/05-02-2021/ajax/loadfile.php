<?php
    /*
        author  : vaibhav maheshwari
        date    : 05-02-2021
        
        video - 172 - Loading in file Contents to a DIV Part 1
        video - 173 - Loading in file Contents to a DIV Part 2
        video - 174 - Loading in file Contents to a DIV Part 3


    */

?>


<html>
    <head>
        <title>
            Loaad file to div
        </title>
        <script>
            function load()
            {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhtttp = new ActiveXObject('Microsoft.XMLHttp');
                }

                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                      document.getElementById('div1').innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'data.inc.php', true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        
        <input type="submit" value="Load" onClick="load()">
        <div id="div1"></div>
    </body>
</html>
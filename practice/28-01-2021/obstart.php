
<?php

    /*
        author  : vaibhav maheshwari
        date    : 28-01-2021
    */

    // Video - 64 - ob_start

    function callback($buffer)
    {
    // replace all the apples with oranges
    return (str_replace("apples", "oranges", $buffer));
    }

    ob_start("callback");

?>
<html>
    <body>
    <p>It's like comparing apples to oranges.</p>
    </body>
</html>
<?php

    ob_end_flush();

?>
<?php

header('Content-Type: text/html; charset=utf-8');

// Get the proper language for the client
$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($language){
    case "es": // Spanish
        include("Locale/Spanish.php");
        break;
    case "en": //English
        include("Locale/English.php");
        break;
    default: // It will be english for default
        include("Locale/English.php");
        break;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo Error404Title;?>
        </title>
        <link rel="icon" type="image/png" href="/Images/favicon16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/Images/favicon32.png" sizes="32x32" />
    </head>
    <body>
        <div id="errorPage" class="matrix" backgroung="/Images/404Error/matrix.gif">
            <img id="morpheus" class="" src="/Images/404Error/".errorPhoto />
            <?php
                echo Error404Message;
            ?>
        </div>
    </body>
</html>

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

//include 'myfile.php';
?>

<html>
    <head>
        <title>
            <?php echo GameSystemTitleHome;
            echo ", Soy una pantalla en blanco"?>
        </title>
        <link rel="icon" type="image/png" href="/Images/favicon16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/Images/favicon32.png" sizes="32x32" />
    </head>
    <body>
        <?php
            echo CheckingConection;
            echo '<br/>';
        ?>
    </body>
</html>

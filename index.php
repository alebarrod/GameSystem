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

<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo GameSystemTitleHome;?>
        </title>
        <link rel="icon" type="image/png" href="/Images/favicon16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/Images/favicon32.png" sizes="32x32" />
    </head>
    <body>
        <?php ?>
        <div id="header" class="">
            <div id="topHeader" class="">
                <img id="logo" class="" src="/Images/logo.png" />
                <div id="search" class="">
                    <div id="searchBox" class="">

                    </div>
                    <div id="searchButton" class="">

                    </div>
                </div>
                <div id="clientBox" class="">
                    <div id="account" class="">

                    </div>
                    <div id="cart" class="">

                    </div>
                </div>
            </div>
            <div id="menu" class="">

            </div>
        </div>

        <div id="main" class="">
            <div id="slider" class="">

            </div>
            <div id="listProducts" class="">

            </div>
        </div>

        <div id="footer" class="">
            <div id="topHeader" class="">

            </div>
            <div id="copyright" class="">
                Copyright © 2017 Gamesystem
            </div>
            <div id="divider" class="">
                -----------------------
            </div>
            <div id="finalIcons" class="">

            </div>
        </div>
    </body>
</html>

<?php
   
    $commands = array('cd c:\gamesystem', 'git checkout -f', 'git pull GameSystem HEAD'); // Los dos comandos git que se ejecutan

    // exec commands
    foreach($commands AS $command){
        $tmp = shell_exec($command);
    }
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Actualizando la pagina web</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<div style="width:700px">
    <div style="float:left;width:350px;">
    <p style="color:white;">Comandos git usados</p>
    <?php echo $tmp; ?>
    </div>
</div>
</body>
</html>

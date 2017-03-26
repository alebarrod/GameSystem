<?php
   
    $commands = array('checkout', 'pull'); // These are both bash with the config of git

    // exec commands
    foreach($commands AS $command){
       $tmp = shell_exec($command);
       // tmp now holds the proper command to execute
       $tmp = shell_exec($tmp);
    }
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Updating the git project</title>
</head>
<body>
<div>
    <div>
       <p>What git says</p>
       <?php echo $tmp ?>
    </div>
</div>
</body>
</html>

<?php
/*
---------- Superglobals --------------
Build in variables that are always available in all scopes

$_GET = contains information about variables passed through a URL or a form

$_POST - Contains information about variables passed through a form

$_COOKIE - Contains information about variables passed through a cookie

$_SESSION - containns information about variables passed through a 
session.

$_SERVER = contians information about th e server enviroment.

$_ENV - contains information  about the enviroment variables.

$_FILES - Contains information about variables passed through the 
form or URL.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li> HostL <?php echo $_SERVER['HTTP_HOST'];?></li>

        <li>Document Root : <?php echo $_SERVER['SERVER_NAME'];?></li>
      
        <li>server port : <?php echo $_SERVER['SERVER_PORT'];?></li>
        
        <li>Current file dir : <?php echo $_SERVER['PHP_SELF']; ?></li>
        
        <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
        
        <li> Server Software : <?php echo $_SERVER['SERVER_SOFTWARE'] ?></li>
        
        <li>Client info: <?php echo $_SERVER['HTTP_USER_AGENT'];?></li>
       
        <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR'];?></li>

    </ul>
</body>
</html>

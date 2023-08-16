<?php
/*
------------- File Handling --------------
 File handling is the ability to read and write files on the 
 server.

 PHP has build in functions for reading and writting files.

*/

$file = 'extras/user.txt';
if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}else{
    $handle = fopen($file, 'w');
    $contents = 'Brads' .PHP_EOL .'Sara' .PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
}
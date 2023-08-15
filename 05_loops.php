<?php
/*
------------- FOR LOOP ------------

*/

// for($x = 0; $x <=10; $x++){
//     echo $x.'<br>';
// }

//------------ while loop -----------------
// $x = 1;
// while($x<=15){
//     echo 'Number '.$x.'<br>';
//     $x++;
// }

//------- for each ----------
$posts = ['first post', 'second post', 'third post'];
//  for($x = 0;$x<count($posts);$x++){
//     echo $posts[$x].'<br>';
//  }

foreach($posts as $index => $post){
    echo $index.' - '.$post.'<br>';
}
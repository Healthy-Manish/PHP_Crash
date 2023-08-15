<?php
 $age = 20;
 if($age>=18){
    echo 'You can vote';
 }
 else{
    echo 'Sorry you are not eligible for voting';
 }

$t = date("H");


if($t<12){
    echo 'Good Morning ';
}
elseif($t<17){
    echo 'Good Afternoon ';
}
else{
    echo 'Good Evening ';
}

$posts = ['First Post'];

// if(!empty($posts)){
//     echo $posts[0];
// }else{
//     echo 'No Posts';
// }

//Using ternary operator

echo !empty($posts)? $posts[0] :'No Posts';

$favcolor = 'red';

switch($favcolor){
    case 'red':
        echo 'your fav color is red';
        break;
    case 'blue':
        echo 'fav color is blue';
        break;
    case 'green':
        echo 'your fav color is green';

    default:
    echo 'your fav color is not red , green or blue';

}
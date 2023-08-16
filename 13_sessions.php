<?php

/*
----------- Sessions --------------
Sessions are a way to store information (in variable) to be 
used across multiple pages.
Unlike cookies, sessions are stored on the  server.
*/
session_start();
if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
   
    $password = $_POST['password'];

    if($username == 'john' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location:/extras/dashboard.php');
    }else{
        echo 'Incorrect Login';
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <div>
       <label for=username">Name:</label>
       <input type="text" name="username" id="">
   </div>
   
   <div>
       <label for="age">Password:</label>
       <input type="password" name="password" id="">
   </div>
   <input type="submit" name="submit" id="" value="Submit">
</form>
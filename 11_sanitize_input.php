<?php

/*
-----------$_GET & $_POST Superglobals ---------------
we can pass data through urls and forms using th e$_GET and 
$_POST superglobals

*/
if(isset($_POST['submit'])){
     $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
     $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);

     echo $name;
}
echo $_GET['name'];
echo $_GET['age'];
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="">
    </div>
    
    <div>
        <label for="age">age:</label>
        <input type="text" name="age" id="">
    </div>
    <input type="submit" name="submit" id="" value="Submit">
</form>
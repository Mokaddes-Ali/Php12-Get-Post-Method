<?php

if($_POST["name"] || $_POST["age"])
{
    echo "Welcome" . $_POST["name"] . "<br />";
    echo "You are" . $_POST["age"]. "Years Old";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
        Name: <input name="name" type="text" />
        Age: <input name="age" type="text" />
        <input type ="submit" />
    </form>
    
</body>
</html>
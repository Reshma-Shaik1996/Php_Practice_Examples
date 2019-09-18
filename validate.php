<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Demo</title>
</head>
<body>
    <?php 
    
    $usernames = array("root");


    if(strlen($_POST ['password'])<8){
echo "The password is less than 8 characters";
//<p style=\"color:red;\">
    }
    else{
        array_push($usernames , $_POST[ 'username']);
        echo $_POST[ 'username'] ."<br>";
        echo $_POST ['password'];
        echo $_POST[ 'username'] ."<is now Registered>";
    }
    foreach($usernames as $n){
        echo $n;
    }
    ?>
</body>
</html>
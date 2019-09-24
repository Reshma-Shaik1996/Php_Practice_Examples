<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php </title>
</head>
<body>
    <?php 
    
    $usernames = array("root");


    
        $sum=0;
   for($i=1;$i<8; $i++){
$sum += $_POST['balance'.$i];
   }
   $intrest = ($sum * ($_POST['rate'])/100)/365;
   echo $intrest;
    ?>
</body>
</html>

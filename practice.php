
<?php
$var = "Php Tutorial";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php 
    echo $var;
   
    ?>- W3</title>
  </head>
  
  <?php
class Myclass {

public function factorialCaluclation($number){
$i=1;
$result = 1;
while($i<=$number){

 $result = $result * $i;
 $i++;
}

echo $result;
}
 
}


$m1 = new Myclass();
$m1->factorialCaluclation(5);
?>
    



   
  </body>
</html>

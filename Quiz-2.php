<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <body>
   <?php 
   //=========================++Question 1=================
   //a) For Loop
   function array_product1($array){
$product = 1;
    for ($x= 0 ; $x < sizeof($array) ; $x++) {
  $product  = $product * $array[$x];
    }
    return $product;
   }
  //b) Foreach Loop
   function array_product2($array){
    $product = 1;
    foreach ($array as $x){
        $product *= $x;
    }
    return $product;
   }
   
   //c) Recursion

function array_product3($array,$index =0){
    
  
    if($index < count($array)){
        
   return  $array[$index] * array_product3($array, $index+1);
  
    }
}

echo "a)<br>";
echo "<br>";
   $prod = array_product1([2,2,2,2]);
   
   echo $prod;
   echo "<br>";
   echo "b)<br>";
  
   $prod2 = array_product2(array(2,2,2,2,2));
   echo $prod2;
   echo "<br>";
   echo "c)<br>";
   
   $array = [2,2,2,2,2];
   $prod3 = array_product3($array);
   echo $prod3;
  
  //=========================++Question 2=================
  echo "Question 2:<br>";
  

function array_foreach($array, $operation){

  
   
        $sum = $array[0];
        for($i = 1; $i< sizeof($array) ; $i++){
            //return $array[i];
       
            
            $sum = $operation($sum, $array[$i]);
   
    }
    return $sum;
    
}

echo array_foreach(array(4, 2, 2), function($a, $b){
   return $a * $b;
});

 //=========================++Question 3=================



function caluclateIntrest($Balance, $IntrestRate){
    $sum = $Balance[0];
    for($i=1 ; $i<sizeof($Balance) ; $i++){
        
        $sum +=  $Balance[$i] ;
    }

$intrest = ($sum * ($IntrestRate)/100)/365;
return $intrest;
}

echo "Question 3:<br>";

echo caluclateIntrest([5000,5000,5000] , 36.5);


 //=========================++Question 4=================

 echo "Question 4:<br>";

 




   ?>

   
<form method="POST" action="validateQuiz2.php">
  
      <input type="number" name="balance1" placeholder="Enter your Balance for day1 " /><br>
      <input type="number" name="balance2" placeholder="Enter your Balance for day2 " /><br>
      <input type="number" name="balance3" placeholder="Enter your Balance for day3" /><br>
      <input type="number" name="balance4" placeholder="Enter your Balance for day4" /><br>
      <input type="number" name="balance5" placeholder="Enter your Balance for day5" /><br>
      <input type="number" name="balance6" placeholder="Enter your Balance for day6" /><br>
      <input type="number" name="balance7" placeholder="Enter your Balance for day7" /><br>

      <input type="number" name="rate" placeholder="Enter the Annual Intrest" /><br>
      <input type="submit" value="Calulate Intrest" />
    </form>


  </body>
</html>

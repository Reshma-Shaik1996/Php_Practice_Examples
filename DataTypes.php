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
  //Functions
  function test(){
      $numbers = 10; //local variable
      echo "<p>Print the number $numbers</p>";
  }
 test();
 function Increment(){
     static $counter =0;
echo "<p>The counter is : $counter</p>";
 $counter++ ;
 }

 Increment();
Increment();
Increment();  

//Global Variables
$num1 =5;
$num2 = 10;
function sum(){
    //Force the local variables to be global variables
    global $num1, $num2;
    $num1 = $num1+$num2;
}
sum();
echo "The result is : $num1";

function sub(){
    $GLOBALS ['$num1'] = $GLOBALS['$num1']- $GLOBALS['$num2'];
}
sub();
echo "The result is : $num1";
echo "<br>";
//Var_dump //prints the type and value of the variable
$num = array(1,2,3,4,'hi');
var_dump($num);

///////////////////////////////String FUNCTIONS
echo "<br>";
$Hello = "Hello, world!";
echo "The lenght of the sting hello is ".strlen($Hello);

echo "<br>";
//Word Count
echo "The number of words in the string hello is".str_word_count($Hello);

echo "<br>";
//String reverse

echo "The reverse of the string is ".strrev($Hello) ;

//String position
echo "<br>";
echo strpos($Hello , "o"); // 6 is offset (saying that starting from 6)  echo strpos($Hello , "o", 6)



echo "<br>";
function strposall($haystack, $needle) {
    $offset = 0;
    $positions = array();
    while(($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
        array_push($positions, $pos);
        $offset = $pos + 1;  // try with |$offset = $pos + strlen($needle);| to check the difference
    }
    return $positions;
}



CheckLetter($Hello, "o");

/////////////////////
$StrA = "aa aaaa aa aaaa aa";
echo str_replace("aa", "xx", "aa  a aaaa aaa aaaa a aa");
///////////////////////////////////
echo "<br>";
echo str_shuffle($Hello);

echo "<br>";
echo str_repeat("hi!", 5);

//

while(TRUE){
    
}


  ?>

  </body>
</html>

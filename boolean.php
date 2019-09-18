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
    //case- insensitive

    $day = true;
    $night = false;
    //Logical Operators  (and  or &&, or  , Xor , not)
if($day){
    echo "Its Day";
}
//Number as a Condition (0 and 1)
echo "<br>";
$num = -1 ;
if($num){
    echo "Its not a zero";
}
    if(num !=0){
        echo "Its not a zero";  
    }
    echo "<br>";
    /////////////Casting Numbers to Boolean
var_dump((bool)2);


echo "<br>";
//////////////////Casting Strings
$sentence = "h";
if($sentence){
    echo "Its not a zero";  
}
echo "<br>";
var_dump((bool)array());
var_dump((bool)array(0));

echo "<br>";
if("0"){
    echo "false";

}
else{
    echo"not false";
}
echo "<br>";
$x = true and false;
if(true or false){
    echo "Wow";
}
// Funcrtion to remove an element from an array




//Constants in Php==============================================================
echo "<br>";
define("x", 4);
//$x = 5;
echo x;
echo "<br>";
//=================FUNCTIONS
function sum($a, $b){
    return $a+$b;
}

echo sum(4,5);

//Inner Function = defining function inside function
function foo(){
    echo "Inside Foo";
    function goo(){
        echo "Inside goo"; 
    }
}
echo "<br>";
foo();
goo();

// Recursive Functions
function my_array_sum($array){
$sum = 0;
foreach($array as $num){
    $sum += $num;
}
return $sum;
}
echo my_array_sum(array(1,2,34,5,6));






    ?>

   
   </ul>
  </body>
</html>

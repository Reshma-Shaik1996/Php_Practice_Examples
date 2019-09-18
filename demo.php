<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php demo</title>
  </head>
  <body>
      <center>
    <?php 
   echo "Hello<br>";
   echo "hey";
   ?>
   </center>
   <!-- Variables -->
   <?php
   $x = 10; //Integer
  $name = "Shaik";
  $holiday = false;
  echo "$x<br>";
  echo "My name is $name and ".$x."<br>";
  //Adding Two numbers
  $y =15;
echo "The addition of $x+$y is " .($x+$y);

$z = $x+$y;
if($z>20){
    echo "<br>We are old<br>";
}
else{
    echo "We are young<br>";
}
//Loops :While
$num =5;
while($num>0){
    echo $num .",";
    $num--;
}
//For Loops
echo "<br>";
for($row=0; $row<10; $row++){
echo $row .",";
}
//Arrays   
          echo "<br>";
$Names = ["Alex","Jack", "Lily", "Peter"];
for($i=0; $i<4; $i++){
    echo $Names[$i].",";
}
// Add, Append, Push
                 echo "<br>";
array_push($Names, "Shaik");
foreach($Names as $n){
    echo $n.",";
}
// Print the even Number

echo "<br>";
echo "Print the even Number";
echo "<br>";
for($i=0; $i<10; $i++){
if($i%2 ==0){
    echo "<span style =\"color:red;\">$i</span>,";
}
else{
    echo "<span style =\"color:green;\">$i</span>,";
}
}
//searching
echo "<br>";
$numbers= array(1,5,4,3,6,9,8,2,0);
$search =4;
for($i=0; $i<10; $i++){
if($numbers[$i]== $search){
    echo "$search is found with index $i";
}
}
//sorting
echo "<br>";
sort($Names);
for($i=0; $i<5; $i++){
    echo $Names[$i]." ,";
}
//Arrays with Keys
$city = array("Montreal", "Mont");
$people = array ("Alex" => "Montreal", "Jack" => "Mont" );
echo "<br>";
foreach($people as $n=> $c){
echo "$n lives in $c, ";
}
//Else if

$price = 23.22;
echo "$price>120 ? "positive" : "Not expensive" ";
if($price >250){
    echo "Too Expensive";
}
elseif($price >120 ){
    echo "Not Too Expensive";
}
elseif($price >0 && $price<25){
    echo "Cheap";
}
else{
    echo "hey"; 
}

?>
  </body>
</html>

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
    //Reshma Shaik
    //===========================++Question 5 ==============
    $records = array(
        array(
        'Student ID' => 1001,
        'Student Name' => 'Mir',
        'Department' => 'Computer Science'
        ),
        array(
        'Student ID' => 1002,
        'Student Name' => 'Alex',
        'Department' => 'Fasion Design'
        )
        );

echo "<table>";
echo "<tr>";

for($i=0; $i< 1; $i++){
foreach (array_keys($records[$i]) as $header){
    echo "<th> $header</th>";
}
}
echo "</tr>";     

                 for($i=0; $i< count($records); $i++){
    echo "<tr>";

    foreach($records[$i] as $j => $value){
                

echo "<td>".$value."</td>";
    }
    echo "</tr>";
}


        echo "</table>";


        //========================Question 4 =============

function ReadingArray($num){
    echo"<ul>";
foreach ($num as $i){
 
if($i%2  ==0)
{
    echo '<li style="color:red;">' . $i . "</li>";
}
else{
    echo '<li style= "color:green;" >'.$i."</li>"; 
}

}//end for loop
echo"</ul>";
}
$x = array(1,3,4,5,8,11,54);

ReadingArray($x);

    //=======================Question 3:=============

$Numbers = array(0,1,2,3,4,5,6,7,8,9);
//Using For Loop
echo "Using For loop:  ";
for($i=0; $i<count($Numbers); $i++){
   
    
    echo $Numbers[$i];
}
//Using Foreach Loop
echo "<br>Using Foreach loop:  ";
foreach ($Numbers as $i){
echo $i;
}
echo "<br>";
//=======================Question 1=============

$string = " I love programming specially using PHP language. PHP is a powerful programming language which enables us to develop web applications.";

echo strpos($string, "PHP");
echo "<br>";
//=======================Question 2=============


echo "Question 2: <br>";
$letter = "PHP";
$Found = array();
$count =0;

// while(($pos = strpos($string, $letter, $count)) !== FALSE) {
//     array_push($Found, $pos);
//     $count = $pos + 1;  
// }


while($count< strlen($string)){
  $pos =   strpos($string, $letter, $count) ;
 
  array_push($Found, $pos);
  $count = $pos + 1; 

}


foreach($Found as $f){
echo "<br>$f";
}



    ?>
   
  </body>
</html>

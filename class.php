<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OOp</title>
  </head>
  <body>
   <?php 
   class demo{
       //field variables and, can also define functions
public $name = "Reshma";
public $age = 23;
//functions
function PrintName()
{
    echo "Name is:". $this->name;
}

   }
   
   $person = new demo();
   $person->PrintName();
   echo "<br>Age is :". $person->age. "<br>";
   var_dump($person);
   
   
   class point {
      public $x=0;
    public   $y=0;
       function distance($p){
$deltax = abs($this ->x - $p->x);
$deltay = abs($this ->y - $p->y);
return sqrt(pow($deltax,2)+ pow($deltay,2));
       }
   }
   //root(x1-x2)2 + (y1-y2)2
   $p1 = new point();
   $p2 = new point();
   
   $p1->x = 10;
   $p1->y = 10;
   echo "<br>distance". $p1->distance($p2);
   
   // Line two points distance:lenght
   //Composition class
  
   class line{
    public $start;

    //object of point 
    
    public $end;

   public function __constructor(){
       $start = new point();
       $end = new point();
   }
function lenghtOfLine(){
   
    $deltax = abs($this->start->x - $p->end->x);
$deltay = abs($this->start->y - $p->start->y);
return sqrt(pow($deltax,2)+ pow($deltay,2));;
}
  
}

   
   $myline = new line();
   $myline->start->x= 3;

     $myline->end->y= 4;
   echo "<br>lenght" .$myline->lenghtOfLine();
   
   
   
   public class Animal (){
       public function  __construct($name){
           $this->name = $name;

       }
       function printname(){
           echo $this->name;
       }
   }

   $lion = new Animal("Reshma");
   echo $lion->printname();
   ?>

   
  </body>
</html>

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

$table = array(
"Student ID" => array(1111 ,1122),
"Student Name" => array("Reshma", "Pilli"),
"Department" => array('Software','Bussiness' )

);

echo "<table>";
echo "<tr>";
foreach(array_keys($table) as $header)
  {
      echo "<th>".$header."</th>";
  }
 // for($row=0; $row< count($table[array_keys($table[0])]); $row++){
    for($row=0; $row< count($table["Student ID"]); $row++){
    echo "<tr>";
foreach(array_column($table, $row) as $entity)
{
    echo "<td>".$entity."</td>";
}
    echo "</tr>";
  }
  echo "</tr>";
echo "</table>";  
      ?>
 
  </body>
</html>

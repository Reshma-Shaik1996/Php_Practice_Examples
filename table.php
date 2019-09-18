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

     // arayy[n]["","",""];
     $headers = array("Student Id","Student Name","Department");
      $students = array(
        array(1111,'Reshma', 'Software'), array(1122, 'Pilli', 'Bussiness')
      );
      echo "<table>";
      echo "<tr>";
      foreach($headers as $header) {
          echo "<th>".$header."</th>" ;
      }
      echo "</tr>";
      
        for($row =0 ; $row < count($students) ; $row++){

                       echo "<tr>";
        for($col =0 ; $col < count($students[$row])  ; $col++){
         
         
               echo "<td>".$students[$row][$col]."</td>";
       
         
          }
          echo "</tr>";
       
      }
    echo "</table>";
      ?>
  <table>
      <caption></caption>
      <tr>
        <th>Student Id</th>
        <th>Student Name</th>
        <th>Department</th>
      </tr>
      <tr>
        <td>1111</td>
        <td>Reshma</td>
        <td>Software</td>
      </tr>
      <tr>
        <td>1122</td>
        <td>Pilli</td>
        <td>Bussiness</td>
      </tr>
    </table>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>九九乘法表</title>
</head>

<body>
     <h2>九九乘法表</h2>
     <img src="99乘法表.png" alt="">
     <style>
          .table1 {
               border-collapse;
          }

          .table1 td {
               border: 1px solid black;
               padding: 5px 10px;
          }
     </style>


     <?php
     echo "<table class='table1'>";
     echo "<tr style="background-color:#eee">";
     echo "<td></td>"
     echo "</tr>";
     for ($j = 1; $j <= 9; $j++) {
          echo "<tr>";
          for ($i = 1; $i <= 9; $i++) {
               echo "<td>";
               echo $i . " x 1 = " . (1 * $i) . " , ";
               echo "</td>";
          }
          echo "</tr>";
     }
     echo "</table>";
     ?>
     <hr>




     <p>&nbsp;</P>
     <p>&nbsp;</P>
     <p>&nbsp;</P>



</body>

</html>
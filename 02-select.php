<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>選擇結構</title>
</head>
<body>
     <h4>選擇結構的練習說明</h4>
 <?php
$score=45;

echo "成績為" . $score . "分 <br>";

if($score>60){
     echo "及格";
     }else{
          echo "不及格";
     }
 ?>   
 
 <h3>多選結構練習說明</h3>
<?php

$level="A";

echo "成績等級為：" . $level . "<br>";

echo "評語：";

switch($level){
     case "A":
        echo "非常棒，請繼續保持";
     break;
     case "B":
         echo "很不錯，請再稍微努力一下就達標！";
     break;
     case "C":
         echo "還不錯，但還有進步空間！";
     break;
     case "D":
         echo "不太好，請加油！"; 
     break;
     case "E":
         echo "很差，請再加把勁！";
     }
?>




</body>
</html>
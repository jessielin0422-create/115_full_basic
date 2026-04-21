<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>重覆結構</title>
</head>
<body>
     
<h3>for...loop練習</h3>
<?php
for($i=1;$i<=10;$i=$i+1){
     echo "$i =>";
     echo $i * 10 . "<br>";
}

echo $i;

?>
<h3>for...loop練習(遞增為2)</h3>
<?php
for($i=1;$i<=10;$i=$i+2){
     echo "$i =>";
     echo $i * 10 . "<br>";

}

echo $i;

?>


<h3>for...loop練習(顯示為奇數/偶數)</h3>
<?php
for($i=0;$i<10;$i=$i+1){
     echo "$i =>";
     echo $i * 2 + 1 . "<br>";
     if($i*2>=10){
          break;
     }
}
?>


</body>
</html>
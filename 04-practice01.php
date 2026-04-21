<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>練習題</title>
</head>
<body>
<h3>分配成績的等級</h3>
<ul>
     <li>0~59 => E</li>
     <li>60~69 => D</li>
     <li>70~79 => C</li>
     <li>80~89 => B</li> 
     <li>90~100 => A</li>

</ul>
<?php
$score=95;
$level="";

if($score>=0 && $score<60){
     $level="E";
}else if($score>60 && $score<70){
     $levellevel="D";
}else if($score>=70 && $score<80){
     $level="C";
}else if($score>=80 && $score<90){
     $level="B";
}else if($score>=90 && $score<=100){
     $level="A";
}else{
     $level="成績輸入錯誤";
}

echo "成績為:" . $score . "" . "分<br>";
echo "屬於為:" . $level . "" . "等級<br>";
?>

<h3>簡化寫法</h3>
<dis class="code-output">
<?php
$score=82;
$level="";

if($score<0 || $score>100){
     $level="成績輸入錯誤";
}else if($score<60){
     $level="E";
}else if($score<70){
     $level="D";
}else if($score<80){
     $level="C";
}else if($score<90){
     $level="B";
}else if($score<=100){
     $level="A";
}


?>
</div>

     
</body>
</html>
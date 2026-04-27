<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>尋找字元</title>
</head>

<body>
     <h3>尋找字元(使用while)</h3>
     <ul>
          <li>給定一個字串句子</li>
          <li>給定一個單字或字母</li>
          <li>尋找相符的內容</li>
          <li>印出尋找到的單字或字母所在句子中的位置</li>
     </ul>
     <?php
$str="使用文字提示即可快速且輕鬆生成與轉換圖像，現在更具備更高品質、更細緻細節，以及更出色的光影";
$target="品質";     

echo "字串: " . $str . "<br>";
echo "尋找字元: " . $target . "<br>";     

$pos=0;
/*1.怎麼知道字串有多長?
2.怎麼只取兩個字?
3.如何算位置?
*/
$count=0;
$flag=false;
while($pos < mb_strlen($str)-mb_strlen($target)+1){
     $tmp=mb_substr($str,$pos,mb_strlen($target)+1);
     if($tmp==$target){
          echo "找到了,位置在: " . ($pos+1) . "<br>";
          $flag=true;
     }
     $pos++;
     $count++;
}
if(!$flag){
     echo "沒有找到<br>";
}
echo "總共尋找了: " . $count . "次<br>";

?>

</body>

</html>
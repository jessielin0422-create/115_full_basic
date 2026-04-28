<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>畫星星</title>
     <style>
     * {
          font-family: 'Courier New', Couier, monospace;
     }
     </style>
</head>

<body>
     <h3>以 * 符號為基礎在網頁上排列出下列圖形:</h3>

     <ul>
          <li>直角三角型</li>
          <li>倒直角三角型</li>
          <li>正三角型</li>
          <li>菱型</li>
          <li>矩形</li>
          <li>內含對角線的矩形</li>
     </ul>
     <img src="srars.png" alt="" style="width:300px;">
     <h3>直角三角型</h3>
     <?php
     for($i=0;$i<5;$i++){
          for($j=0;$j<=$i;$j++){
                    echo "*";
               }
          echo"<br>";
     }
     ?>

     <h3>倒直角三角型</h3>
     <?php
     for ($i = 5; $i > 0; $i--) {
          for ($j = 0; $j < $i; $j++) {
               if ($i >= $j) {
                    echo "*";
               }
          }
          echo "<br>";
     }
     ?>

     <h3>正三角型</h3>
     <?php
     for($i=0;$i<5;$i++){
          for($j=0;$j<4-$i;$j++){
echo "&nbsp;";
          }
          for($k=0;$k<2*$i+1;$k++){
     echo "*";
}
echo "<br>";          
}
?>

     <h3>菱型</h3>
     <?php
     //兩個正反的正三角型組合成菱形
     for($i=0;$i<5;$i++){
          for($j=0;$j<4-$i;$j++){
               echo "&nbsp;";
          }
          for($k=0;$k<2*$i+1;$k++){
               echo "*";
          }
          echo "<br>";
     }
     for($i=3;$i>=0;$i--){
          for($j=0;$j<4-$i;$j++){
               echo "*";
          }
          echo "<br>";
     }
     ?>
     <hr>
     <?php
     for($i=0;$i<9;$i++){
          if($i<=4){
               $t=$i;
          }else{
               $t=8-$i;
          }
          echo $i;
          echo ",";
          echo $t;
          echo ",";
          echo 4-$t;
          echo ",";
          echo 2*$t+1;
          echo ",";
          for($j=0;$j<4-$t;$j++){
               echo "&nbsp;";
          }
          for($k=0;$k<2*$t+1;$k++){
               echo "*";
          }
          echo "<br>";
     }
     ?>

     <h3>矩形</h3>
     <?php
for($i=0;$i<7;$i++){
     for($j=0;$j<7;$j++){
          if($j==0 || $j==6){
               echo "*";
          }else{
               echo "&nbsp;";
          }
     }
     echo "<br>";
}
     ?>
     
     <h3>內含對角線的矩形</h3>
     <?php
     $n=11;
     for($i=0;$i<11;$i++){
          for($j=0;$j<11;$j++){
               if($i==0 || $i==10){
                    echo "*";
               }else if($j==0 || $j==10 || $i==$j || $i==10-$j){
                    echo "*";
               }else{
                  echo "&nbsp;";
          }
     }
     echo "<br>";

     }

     ?>
     <h3>參數化圖形-可任意變更大小</h3>

     <?php
     $n="afdsfs";
     if(!is_numeric($n)){
          echo "n 必須為數字<br>";
          $n=5;
     }
     if($n<3){
          echo "n 必須大於等於 3<br>";
          $n=5;
     }
     if($n%2==0){
          $n=$n+1;
     }
     for($i=0;$i<$n;$i++){

        for($j=0;$j<$n;$i++){

          if($i==0 || $i==$n-1)}
               echo "*";
          }else if($j==0 || $j==$n-1 || $i==$j || $i==$n-1-$j )}
        echo "*";}
        }else}
        echo "&nbsp;";
        }


     ?>


     <a href="index.html" class="back-button">返回首頁</a>
     </div>

</body>

</html>
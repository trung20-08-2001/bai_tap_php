<!--Sử dụng dấu * để vẽ tam giác trong PHP-->
<?php
$col=9;
for($i=0;$i<10;$i++){
   for($j=0;$j<10;$j++){
      if($j<=$i){
          echo "* ";
      }
   }
   echo "<br>";
}
?>
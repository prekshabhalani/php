<!-- nested for loop -->

<?php
for($a=0;$a<2;$a++){
    for($b=0;$b<3;$b++){
          for($c=0;$c<4;$c++){
              for($d=0;$d<5;$d++){
                echo $a.$b.$c.$d.", ";
              }
           }
      }
}
?>
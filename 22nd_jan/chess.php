<style>
.black_square {
  height: 50px;
  width: 50px;
  background-color: black;
}
.white_square {
  height: 50px;
  width: 50px;
  background-color: white;
}
</style>
<?php
    $flag = 0;
    echo "<table border='1'>";
    for ($i=0; $i < '8' ; $i++) { 
        echo "<tr>";    
        for ($j=0; $j < '8' ; $j++) { 
           if ($i % 2==0) {
                if($j % 2==0)
                {
                     echo "<td class='white_square'></td>";
                }
                else
                {
                    echo "<td class='black_square'></td>"; 
                }
            }
           else{ 
                if($j % 2==0)
                {
                    echo "<td class='black_square'></td>";
                }
                else
                {
                    echo "<td class='white_square'></td>"; 
                }
            }
        }
        echo "</tr>";
    }
?>
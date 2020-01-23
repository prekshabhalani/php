<?php
    require('take_row_column_input.php');
    echo "<table border='1'>";
    for ($i=1; $i <= $row ; $i++) { 
        echo "<tr>";
        for ($j=$i; $j <= $row*$column ; $j+=$row)
        { 
            echo "<td>$j</td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
?>
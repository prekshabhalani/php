<?php
    require('take_row_column_input.php');
    echo "<table border='1'>";
    $number = 1;
    for ($i=1; $i <= $row ; $i++) { 
        echo "<tr>";
        for ($j=1; $j <= $i ; $j++)
        { 
            echo "<td>$number</td>";
            $number ++; 
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
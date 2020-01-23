<?php
    require('take_row_column_input.php');

    echo "<table border='1'>";
    for ($i=1; $i <= $row ; $i++) { 
        echo "<tr>";
        for ($j=1; $j <= $column ; $j++)
        { 
            if ($i == 1 || $i == $row || $j == 1 || $j == $column) {
                echo "<td> * </td>";
            }
            else
            {
                echo "<td> </td>"; 
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>
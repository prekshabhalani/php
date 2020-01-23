<?php
    require("take_row_column_input.php");
    echo "<table border='1'>";
    for ($i=1; $i <= $row ; $i++) { 
        echo "<tr>";
        for ($j=1; $j <= $column ; $j++) { 
            $value = $i * $j ;
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
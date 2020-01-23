<?php
    require('take_row_column_input.php');
   // echo $row . $column;
    $number = 1;
    echo "<table border='1'>";
    $n=1;
    $j=1;
    // print row
    for ($i=1; $i <= $row ; $i++) { 
        echo "<tr>";
        //print * in pattern
        for($x = 1; $x < $n+$j ; $x++ )
        {
            echo ("<td>*</td>");
        }
        $n=$x; //store no. of *
        //print 0 in pattern
        for ($j=1; $j <= $i ; $j++)
        { 
            echo ("<td>0</td>"); 
        }
        
        echo "</tr>";
    }
    echo "</table>";
?>
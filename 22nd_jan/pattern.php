<!-- pattern  -->
<center><h1><u>* ALL THE PATTERN *</u></h1></center>
<hr>
<?php
//  PATTERN 1
    echo "<h3>PATTERN 1</h3>";
    for($i=16; $i>=1; $i-= 2)
    {
        for ($j=$i; $j>1 ; $j--) { 
            echo "*";    
        }
        echo "<br>";
    }

//  PATTERN 2
    echo "<h3>PATTERN 2</h3>";
    for($i=8; $i>=1; $i--)
    { 
        //PRINT ROW
        for ($j=1; $j<=$i ; $j++) 
        { 
            echo "$j";    
        }
        echo "<br>";
    }

//  PATTERN 3 
    echo "<h3>PATTERN 3</h3>";
    for ($i =1; $i < 10 ; $i++) { 
        for ($j =1; $j <= $i ; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
//  PATTERN 4 
echo "<h3>PATTERN 4</h3>";
for ($i =1; $i < 10 ; $i++) { 
    for ($j =1; $j <= $i ; $j++) { 
        echo "*";
    }
    echo "<br>";
}

?>
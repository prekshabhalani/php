<!-- Example of multidimension array -->
<?php
    $department = ['computer','mechanical','civil','electrical'];
    $department[0] = ['php','html','java','wdm'];
    $department[1] = ['md','de','cad'];
    $department[2] = ['structure mach','still structure','surveying'];
    $department[3] = ['microprocessor','microcontrolar'];

for ($i=0; $i < count($department); $i++) { 
    echo "<select>";
    for($j=0; $j < count($department[$i]); $j++) 
    {
        echo "<option>". $department[$i][$j]."</option>";
    }
    echo "</select>";

}

?>
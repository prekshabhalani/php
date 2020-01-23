<!-- practical 2 : it find fibonacci series -->
<h3>it print fibonacci series</h3>
<?php
require("takeinput.php");
if(isset($_POST["enterNumber"]))
{
    $number = $_POST["enterNumber"];
    $first_number = 0;
    $consicutive_number = 1;
    $series_number = 0;
    //logic to find fibonacci series
    for ($i = 0; $i < $number ; $i++) { 
        echo "<strong> $series_number  </strong>";       
        $series_number = $first_number + $consicutive_number; 
        $consicutive_number = $first_number  ;
        $first_number = $series_number ; 
    }

}
?>
<!-- factor -->
<h3>---- Program to find factor of enter number----</h3>
<?php

    require("takeinput.php");
    if(isset($_POST["enterNumber"]))
    {
        $number = $_POST["enterNumber"];
        echo "factor of $number is : ";
        for($i = 1; $i <= $number; $i++)
        {
            //check is factor or not
            echo (($number % $i) == 0)? "  $i  " : "" ;
        }    
    }
?>
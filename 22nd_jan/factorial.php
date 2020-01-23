<h3 >---- FIND FACTORIAL ----</h3>
<?php
    require('takeinput.php');
    if( isset($_POST["enterNumber"]) )
    {
        $number = $_POST['enterNumber'];
        $factorial = 1;
        if ($number == 0) {
            echo "factorial of $number is $factorial";
            die();
         }
    else if ($number < 0)
    {
        die("alert( \"don't have a factorial <hr> enter valid number\")");
    }    
    else
    {
    for ($i=1; $i <= $number ; $i++) 
    {
         $factorial *= $i;
    }
    echo "factorial of $number is $factorial";
    }    
}



?>
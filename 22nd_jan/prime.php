<!-- prime number -->
<h1>--- Program to find enter number is prime or not ---</h1>
<?php
    require("takeinput.php");
    if(isset($_POST['enterNumber']))
    {
        $number = $_POST['enterNumber'];
        $flag = 0;
        for ($i = 2; $i <= $number / 2; $i++) {
                // condition for non-prime
                if ($number % $i == 0) {
                    $flag = 1;
                    break;
                }
        }
         echo ( $number == 1 ) ? "$number is constant number" : (($flag == 0) ? "$number is prime number" : "$number is not a prime number") ;       
    }
?>
<!-- table of number -->
<h3>Program to print table of enter number</h3>
<?php
    require("takeinput.php");
    if (isset($_POST["enterNumber"]))
    {
        $number = $_POST["enterNumber"];
        for ($i=1; $i <= 10 ; $i++) { 
            $temp = $i * $number;
            echo ("$number * $i = $temp<br> ");
        }
    }
?>
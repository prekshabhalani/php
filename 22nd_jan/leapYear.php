<!--  program for leap year -->
<h3>program to check enter year is leap year or not</h3>
<?php
    require("takeinput.php");
    if( isset($_POST['enterNumber']) )
    {
        $number = $_POST['enterNumber'];
        echo ( ($number % 100) != 0 && ($number % 4) == 0 ) ? "$number year is leap year" :
        ($number % 400 != 0 ) ? "$number year is not leap year" : "$number year is leap year";
    }
?>
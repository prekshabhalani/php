<!-- reverse of any no. -->
<h3>----program to find reverse number of enter number ---- </h3>
<?php
    require('takeinput.php');
    if (isset($_POST['enterNumber'])) {
        $number = $_POST['enterNumber'];
        $reverseNumber = (int)strrev($number);
        echo "$number's  reverse no is $reverseNumber";
    }

?>
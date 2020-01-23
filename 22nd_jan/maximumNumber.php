<!-- find biggest no. among given no. -->

<h3>program to find biggest number </h1>
(note:enter numbers saprate by the  , )<hr>
Enter Number:
<form method="POST">
<input type="text" name="enterNumber">
<input type="submit">
</form>
<?php
    if(isset($_POST["enterNumber"]))
    {
        $length = $_POST["enterNumber"];
        $number = explode("," , $length);
        $maximumNumber = $number[0];
        for ($i=0; $i < count($number); $i++) { 
                ($maximumNumber < $number[$i]) ? $maximumNumber=$number[$i] : "";
                echo $number[$i] . "  " ;
        }
        echo "<br>maximum number among enter number is $maximumNumber .";
    }
?>
<!-- check whether the no. is armstrong or not -->
<h3>program to check whether enter no. is arm strong or not ?</h3>
<?php
    require('takeinput.php');
    if(isset($_POST["enterNumber"]))
    {
        $number = $_POST["enterNumber"];
        $count = strlen($number);
        $armstrong = 0;
        //find armstrong
        for($i = 0; $i < $count; $i++)
        {
           $digitPosition =(int)substr($number,$i,1);
           $armstrong +=pow($digitPosition,$count);
        }    
        echo ($number == $armstrong)? " $number is armstrong":" $number is not armstrong";
        
    }
?>
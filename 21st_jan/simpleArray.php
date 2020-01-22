<!-- simple array -->
<?php
    echo '{addition of the 10,20,30,40,50,60,70,80,90} which is store in the array';
    $numbers = [10,20,30,40,50,60,70,80,90];
    $add = 0;
    for ($i=0; $i < count($numbers) ; $i++) { 
        $add += $numbers[$i];
    }
    echo "<hr>Addtion is $add ";
?>
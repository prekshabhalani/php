<h3>code to print timestamp functions</h3>
<?php
    echo "Current time: ".time();
    echo "<br>Actual time: ". date('H:m:s',time());
    echo "<br>current date and day is(date('DAY',time())):". date('DAY',time());
    echo "<br>current date and day is(date('D M Y',time())):". date('D M Y',time());
    echo "<br>current date and day is(date('DATE',time())):". date('DATE',time());
    echo "<br>current date and day is(date('MONTH',time())):". date('MONTH',time());
    
?>

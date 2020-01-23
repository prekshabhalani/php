<?php
$a = '1';
echo $b = &$a."<br>";
echo $c = "$b<br>";
echo $a=10 ."<br>".$b."<br>".$c;

?>
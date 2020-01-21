<!-- while inside while -->
<?php
$a=1;
$b='a';
while ($a <= 10) {
        $b='a';
    while ($b <= 'c')
     {
            echo $a.$b.'<br>';
        $b++;
     }
        $a++;
}

?>
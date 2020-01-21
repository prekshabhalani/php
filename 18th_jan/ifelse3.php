<?php
//3rd example
$boolNumber=1;
if(true):
    echo 'colon if';
if($boolNumber == true)
{
    echo '<br>third example tradition if inside colon if<br>';
    echo true;
}
else
{
    echo '<br>third example<br>';
    echo false;
}
else:
endif;
?>
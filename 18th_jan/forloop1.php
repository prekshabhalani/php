<?php
//without any value for loop
$i=0;
for (; ;) { 
    # code...
$i++;
if ($i>=5) {
break;
} else {
echo nl2br( "\n".$i.'<5');    
}

}

?>
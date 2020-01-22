
<?php
//preg_match example
$text = "hello it's me preksha";
$email = "preksha@gmail.com";
$dummyEmail = "@gmail.com";

if(preg_match('/@gmail/' , $email ))//display the pattern among the whole string line
{
    echo "it's about preksha";
}
else 
{
    echo "it is a diffrent user";
}
if(preg_match('/preksha/' , $text ))//display the pattern among the whole string line
{
    echo "it's about preksha";
}
else 
{
    echo "it is a diffrent user";
}

?>

<form method="post">
<input type="text" placeholder="enter exit or die" name="inputString" require>
<input type="submit" name="submit" >
</form>

<?php 
if(isset($_POST["inputString"]))
{
$inputString = $_POST["inputString"];
switch ($inputString) {
    case 'die':
        /*****************just die function demo ****************/
        $filename = '/data-file';
        echo "<strong>example of die function</strong> :<br>";
        $file = @fopen($filename, 'r') or die("unable to open file ($filename)");
        echo "if error it must not be print";
    break;
    case 'exit':
        /*****************just exit function demo ****************/
        $name = "Preksha Bhalani";
        $age = 20;
        echo "<strong>example of exit function</strong> :<br>";
        echo $name ;
        exit("<br>it skip age becoz of exit function ");
        echo $age;

    default:
        echo "must have to enter die or exit";
        break;
}
}
else
{

}
?>
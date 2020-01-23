<h1>Swap number</h1>
<form method="POST">
    <p>Enter number:</p>
    <input type="number" name="enterNumber1">
    <p>Enter number:</p>
    <input type="number" name="enterNumber2">
    <input type="submit" >
    
</form>
<?php

    if (isset($_POST['enterNumber1']) && isset($_POST['enterNumber2'])) {
        $number1 = $_POST['enterNumber1'];
        $number2 = $_POST['enterNumber2'];
        $swap = $number1;
        $number1 = $number2;
        $number2 =$swap;
        echo "after swaping<br> Number:1 =$number1 <br> Number:2 =$number2";
    }
?>
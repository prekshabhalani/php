<!-- practical to perform function -->
<form method='POST' >
<input type ='text' name ='firstName' placeholder='Enter fullName'> 
<input type ='date' name='birthDate' placeholder='enter full birth year'>
<input type ='email' name='email' placeholder='enter Email'>
<input type ='submit' name ='submit' value ='submit'>
</form>
<?php
if(isset($_POST['email']) && isset($_POST['firstName']) && isset($_POST['birthDate']))
{
    $firstName = $_POST['firstName'];
    $birthDate = $_POST['birthDate'];
    $email = $_POST['email'];
//  ********************function without return type and whithout any argument*********************
    function checkValidation()
    {
        global $firstName,$birthDate,$email;
        if($firstName == "" || $birthDate == "" || $email == "" )
        {
            echo "<script> alert('no empty string allowed');</script>";
        }
    }
    checkValidation();
//  ********************function with return type and whithout arguments*********************
function findAge($birthDate)
{
    $age = date('Y') - (substr($birthDate,0,4));
    return $age;
}    
    $age = " ";
    $age = findAge($birthDate);
//  ********************function with no return type and one arguments*********************
function howOlder($age)
{
    global $firstName;
    if($age >= 40)
    {
        echo "$firstName is a mature in age";
    }
    elseif ($age <= 12) {
        echo "$firstName is a child";
    }
    else
    {
        echo "$firstName is a teenager";
    }
}
//  ********************function no return type and with multiple arguments *********************
//  ********************function inside function ************************************************
function display($firstName,$age,$email){
    echo "<table border='1'><tr><td><p>Name: $firstName </p></td></tr>";
    echo "<tr><td><p>Email: $email </p></td></tr>";
    echo "<tr><td><p>Age: $age </p></td></tr>";
    echo "<tr><td><p>".howOlder($age);
    echo "</p></td></tr></table>";
}    display($firstName,$age,$email);
}

else
{
    echo "Enter valid input";
}
?>
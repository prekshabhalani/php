<?php
    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password']) ) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password']; 
     
    }
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $login_name = $_POST['name'];
        $login_email = $_POST['email'];
        $login_password = $_POST['password']; 
        if ($login_name == $name && $login_email == $email && $login_password == $password) {
            echo "<script>alert('Login Successful');</script>";
        } else {
            echo "<script>alert('Invalid detail !!!');</script>";
        }
    } 
    else {
       }
    
?>
<form method="POST" >

<p>Name: </p> <input type = "input"  name="name"><hr>
<p>Email: </p><input type = "input"  name="email"><hr>
<p>Password: </p><input type = "password" name="password"><hr>
<input type = "submit" value="Sign in" >
</form>